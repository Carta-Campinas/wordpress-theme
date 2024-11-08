<?php
/**
 * Set media sizes in Wordpress
 * 
 * PHP VERSION 8
 * 
 * @package HackeamosOrg/HackeamosWP/CustomBlockStyles
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
namespace HackeamosOrg\HackeamosWP;
use \HackeamosOrg\SingletonPattern;

/**
 * Set reasonable media sizes
 * 
 * @package HackeamosOrg/HackeamosWP/CustomBlockStyles
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class CustomBlockStyles extends SingletonPattern {
    /**
     * The path for the custom stylesheets
     */
    static $stylesheetDirectory=null;

    /**
     * Set the custom stylesheet directory path
     * 
     * @param string The new path
     * 
     * @return none
     */
    static function setStylesheetDir(string $path)
    {
        if (! is_dir($path)) {
            throw new Exception(
                sptintf(
                    'direcotry not found: %',
                    $path
                ),
                1
            );
        }
        self::$stylesheetDirectory=$path;
    }

    /**
     * Get the custom stylesheet directory path
     * 
     * @return none
     */
    static function getStylesheetDir()
    {
        $path=self::$stylesheetDirectory;
        if (empty($path)) {
            return implode(
                DIRECTORY_SEPARATOR,
                [
                    get_stylesheet_directory(),
                    'assets',
                    'styles',
                    'blocks'
                ]
            );
        }
        return $path;
    }

    /**
     * Enqueue custom styles for blocks
     * 
     * Enqueue a list of stylesheets conditionally when respective blocks
     * are in use. 
     * 
     * @return bool Whether the enqueue was or not successful
     */
    static function enqueueStyles()
    {
        add_action(
            'after_setup_theme',
            [
                get_class(),
                'enqueueFoundStylesheets'
            ]
        );
    }
    /**
     * Enqueue a list of custom styles for blocks
     * 
     * This method is meant to be hooked on 'after_theme_setup'
     * 
     * @return bool Whether the enqueue was or not successful
     */
    static function enqueueFoundStylesheets()
    {
        $stylesheetDir=self::getStylesheetDir();
        $stylesheetList=array_map(
            function ($relPath) use ($stylesheetDir) {
                return implode(
                    DIRECTORY_SEPARATOR,
                    [
                        $stylesheetDir,
                        $relPath
                    ]
                );
            },
            array_filter(
                scandir($stylesheetDir),
                function ($dirEntry) use ($stylesheetDir) {
                    return substr($dirEntry, 0, 1) != '.';
                }
            )
        );
        foreach ($stylesheetList as $stylesheet) {
            $block_name=str_replace(
                '--',
                '/',
                explode(
                    '.',
                    basename($stylesheet)
                )[0]
            );
            $args=[
                'handle' => 'custom-style--' . str_replace(
                    '/',
                    '--',
                    $block_name
                ),
                'src' => str_replace(
                    get_stylesheet_directory(),
                    get_stylesheet_directory_uri(),
                    $stylesheet
                )
            ];
            wp_enqueue_block_style(
                "$block_name",
                $args
            );
        }
    }
}