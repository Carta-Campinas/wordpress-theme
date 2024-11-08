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
 * Set a default logo if none is uploaded
 * 
 * @package HackeamosOrg/HackeamosWP/DefaultSiteLogo
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class DefaultSiteLogo extends SingletonPattern
{
    /**
     * Store default custom logo URL
     * 
     * @todo check if it's safe for multisite network
     */
    protected static $defaultLogoUrl;

    /**
     * Store default custom logo Attributes
     * 
     * @todo check if it's safe for multisite network
     */
    protected static $defaultLogoAttrs;

    /**
     * Replace logo url when it is wmpty
     * 
     * @param string $defaultLogoUrl The URL desired for the default logo.
     * 
     * @return none
     * 
     * @todo Check if it is network (wpmu) safe
     */
    static function setDefaultLogoUrl(
        string $defaultLogoUrl
    ) {
        // do nothing if custom logo is set
        $customLogoId=get_theme_mod('custom_logo');
        if ($customLogoId) {
            return true;
        }
        
        // throw error if no URL was set on class calling
        if (empty($defaultLogoUrl)) {
            throw new Exception("Missing default logo URL", 1);
        }
        
        // keep the custom logo url
        self::$defaultLogoUrl=$defaultLogoUrl;

        // set a filter to replace logo HTML
        add_filter(
            'get_custom_logo',
            [
                get_class(),
                'getCustomLogoHtml'
            ],
            10,
            1
        );
    }

    /**
     * Debug
     * 
     * @param string $logoHtml Value for output.
     * 
     * @return none
     */
    static function getCustomLogoHtml(string $logoHtml)
    {
        // 
        $unlink_homepage_logo = (bool) get_theme_support(
            'custom-logo',
            'unlink-homepage-logo'
        );
        // html to filter should be empty
        if (empty($logoHtml)) {
            $logoHtml=sprintf(
                '<img src="%s" alt="%s"',
                self::$defaultLogoUrl,
                get_bloginfo('name', 'display')
            );
            if (! $unlink_homepage_logo) {
                $logoHtml=sprintf(
                    '<a href="%s">%s</a>',
                    get_home_url(),
                    $logoHtml
                );
            }
        }
        return $logoHtml;
    }
}
