<?php
/**
 * Set media sizes in Wordpress
 * 
 * PHP VERSION 8
 * 
 * @package HackeamosOrg/HackeamosWP/NewsSection
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
namespace HackeamosOrg\HackeamosWP;
use \HackeamosOrg\SingletonPattern;

/**
 * Set reasonable media sizes
 * 
 * @package HackeamosOrg/HackeamosWP/NewsSection
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class NewsSection extends SingletonPattern {

    /**
     * Settings
     */
    static private $initArgs;

    /**
     * Base directory relative to theme or plugin
     */
    static private $baseDirectory;

    /**
     * Template for term HTML element class
     * 
     * Placeholders are meant to be replaced by
     * - texonomy name 
     * - term slug
     * 
     */
    static public $termClassTemplate='%s-term-%s';

    /**
     * CSS styles
     * 
     * Styles to be added inline on site loading
     */
    static protected $cssStyles;

    /**
     * Get taxonomy term class name
     * 
     * Build a class CSS selector for a texonomy term
     * 
     * @uses self::$taxonomyTermClass
     * 
     * @param string  $termSlug The taxonomy term slug.
     * @param string $taxonomy The taxonomy name. Defaults to category.
     * @param string $prefix   Default to '.'. Prepended to output.
     * @param string $suffix   Default to ''. Appended to output
     * 
     * @return string Template from self::$taxonomyTermClass filled with
     *                $taxonomy and $termSlug sorrounded by $prefix and
     *                $suffix.
     */
    static public function getTermClassname(
        string $termSlug,
        string $taxonomy = 'category',
        string $prefix = '.',
        string $suffix = ''
    ) {
        return implode(
            '',
            [
                $prefix,
                sprintf(
                    self::$termClassTemplate,
                    $taxonomy,
                    $termSlug
                ),
                $suffix
            ]
        );
    }

    /**
     * Enqueue dummy stylesheet
     *
     * @return none
     */
    static public function enqueueStyles() {
        wp_enqueue_style(
            'hackeamos-css',
            self::$baseDirectory . '/assets/styles/hackeamos.css'
        );
        wp_add_inline_style('hackeamos-css', self::$cssStyles);
    }

    /**
     * Build CSS rules to hiding taxonomy terms
     * 
     * @return none
     */
    static public function printHidingTaxonomyTermsCSS(){
        $taxonomies=get_taxonomies(['public' => true], 'names');
        $cssSelector='';
        $termFilter=self::$initArgs['terms'];
        $taxonomyFilter=self::$initArgs['taxonomies'];
        foreach ($taxonomies as $taxonomyName) {
            $taxonomyTerms=get_terms(
                [
                    'taxonomy' => $taxonomyName,
                    'hide_empty' => true
                ]
            );
            if (empty($taxonomyFilter) or in_array($taxonomyName, $taxonomyFilter)) {
                foreach ($taxonomyTerms as $term) {
                    if (empty($termFilter) or in_array($term, $termFilter)) {
                        $term_name=$term->slug;
                        $term_url=get_term_link( $term );
                        if (!empty($cssSelector)) {
                            $cssSelector .= ', ';
                        }
                        $cssSelector .= self::getTermClassname(
                            $term_name,
                            $taxonomyName,
                            '.hide-',
                            ' '
                        ) . 'a[href=\'' . $term_url . '\']';
                    }
                }
            }
        }
        self::$cssStyles=$cssSelector . ' {display: none;}';
        add_action(
            'wp_enqueue_scripts',
            [
                get_class(),
                'enqueueStyles'
            ]
        );
    }

    /**
     * Init section system
     * 
     * @param array $initArgs Settings. Default values are
     *  [
     *      'taxonomies'    => [],  Empty for all taxonomies, list of 
     *                              names for filtering.
     *      'terms'         => []   Empty for all terms, list of 
     *                              taxonomy-name/term-slug pairs for
     *                              filtering.
     *  ]
     *  
     * 
     * 
     * @return none
     * 
     */
    static function init(
        array $initArgs = [
            'taxonomies' => [],
            'terms' => []
        ]
    ) {
        // save init args
        self::$initArgs=$initArgs;
        // set base directory (TODO: plugin directory detection)
        if (empty(self::$baseDirectory)) {
            self::$baseDirectory=get_template_directory_uri();
        }
        // hook css style printing
        add_action('init', [get_class(), 'printHidingTaxonomyTermsCSS']);
    }
}