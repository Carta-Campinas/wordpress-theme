<?php
/**
 * Set media sizes in Wordpress
 * 
 * PHP VERSION 8
 * 
 * @package HackeamosOrg/HackeamosWP/MediaSizes
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
namespace HackeamosOrg\HackeamosWP;
use \HackeamosOrg\SingletonPattern;

/**
 * Set reasonable media sizes
 * 
 * @package HackeamosOrg/HackeamosWP/MediaSizes
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class MediaSizes extends SingletonPattern {

    /**
     * Set media sizes
     * 
     * @param array $mediaSizes { 
     *     @type array $name=>$mediaSize {
     *         @name string $name     The array key, internal name of 
     *                                media size only letters, numbers
     *                                - and _ are allowed.
     *         @type string $ize_w    Witdh of the media
     *         @type string $ize_h    Height of the media
     *         @type string $crop     Whether cropping or not the media
     *         @type string $caption  Optional. A human readable name
     *                                for representing the size on UI.
     *                                Defaults to the $name replacing -
     *                                and _ by spaces and capitalizing 
     *                                each resulting word
     *     }
     * }
     */
    static function setMediaSizes(array $mediaSizes)
    {
        /**
         * Builtin sizes should be:
         * - thumbnail,
         * - medium,
         * - medium_large,
         * - large
         */
        $builtinMediaSizeNames=array_merge(
            get_intermediate_image_sizes(),
            [
                'post-thumbnail'
            ]
        );
        /**
         * Loop into user media sizes and set them up
         */
        foreach ($mediaSizes as $name => $sizes) {
            if ($name == 'post-thumbnail') {
                add_action(
                    'after_setup_theme',
                    function () {
                        add_theme_support('post-thumbnails');
                    },
                    10,
                    1
                );
            }
            if (isset($sizes['caption'])) {
                $caption=$sizes['caption'];
            }
            if (in_array($name, $builtinMediaSizeNames)) {
                if (isset($sizes['size_w']) and isset($sizes['size_h'])) {
                    foreach ($sizes as $property => $value) {
                        update_option(
                            $name . '_' . $property,
                            $value
                        );
                    }
                }
            } else {
                add_action(
                    'after_setup_theme',
                    function () use ($name, $sizes) {
                        add_image_size(
                            $name,
                            $sizes['size_w'],
                            $sizes['size_h'],
                            $sizes['crop']
                        );
                    },
                    10,
                    1
                );
                if (!isset($caption)) {
                    $caption=implode(
                        ' ',
                        array_map(
                            'ucfirst',
                            preg_split('/[-_]/', $name)
                        )
                    );
                }
            }
            if (isset($caption)) {
                add_filter(
                    'image_size_names_choose',
                    function ($sizes) use ($caption, $name) {
                        $sizes[$name]=$caption;
                        return $sizes;
                    }
                );
            }
        }
    }
}