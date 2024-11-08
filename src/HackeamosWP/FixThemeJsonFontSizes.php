<?php
/**
 * Set site favicon if none is defined yet on database
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
 * Set a default favicon if none is uploaded
 * 
 * @package HackeamosOrg/HackeamosWP/DefaultSiteLogo
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class FixThemeJsonFontSizes extends SingletonPattern
{
    /**
     * Store default custom icon URL
     * 
     * @todo check if it's safe for multisite network
     */
    protected static $themeFontSizes;

    /**
     * Replace icon url when it is empty
     * 
     * @return none
     * 
     * @todo Check if it is network (wpmu) safe
     */
    static function fix()
    {
        add_filter(
            'wp_theme_json_data_theme',
            [
                get_class(),
                'saveThemeFontSizes'
            ]
        );
        add_filter(
            'wp_theme_json_data_default',
            [
                get_class(),
                'overwriteDefaultFontSizes'
            ]
        );
    }

    /**
     * Save font sizes declared on theme.json file
     * 
     * @param WP_Theme_JSON_Data $themeJsonObject Theme json object
     *                                            representation.
     * 
     * @return WP_Theme_JSON_Data Unmodified theme.json object.
     * 
     * @todo Check if it is network (wpmu) safe
     */
    static function saveThemeFontSizes($themeJsonObject)
    {
        $themeJson=$themeJsonObject->get_data();
        self::$themeFontSizes=$themeJson['settings']['typography']['fontSizes'];
        return $themeJsonObject;
    }

    /**
     * Overwrite default values with theme.json's values
     * 
     * @param WP_Theme_JSON_Data $themeJsonObject Theme json object
     *                                            representation.
     * 
     * @return none
     * 
     * @todo Check if it is network (wpmu) safe
     */
    static function overwriteDefaultFontSizes($themeJsonObject)
    {
        $themeJson=$themeJsonObject->get_data();
        $fontSizes=self::$themeFontSizes;
        $debug=self::$themeFontSizes;
        die(var_export(compact('themeJson', 'fontSizes', 'debug')));
        return $themeJsonObject;
    }

}
