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
class DefaultFavicon extends SingletonPattern
{
    /**
     * Store default custom icon URL
     * 
     * @todo check if it's safe for multisite network
     */
    protected static $defaultFaviconUrl;

    /**
     * Replace icon url when it is empty
     * 
     * @param string $defaultFaviconUrl  The URL desired for the default logo.
     * 
     * @return none
     * 
     * @todo Check if it is network (wpmu) safe
     */
    static function setDefaultFaviconUrl(string $defaultFaviconUrl)
    {
        // do nothing if favicon is set
        $faviconId=get_option('site_icon');
        if ($faviconId) {
            return true;
        }
        // throw error if no URL was set on class calling
        if (empty($defaultFaviconUrl)) {
            throw new Exception("Missing default favicon URL", 1);
        }
        
        // keep the custom logo url
        self::$defaultFaviconUrl=$defaultFaviconUrl;

        // set a filter to replace logo HTML
        add_filter(
            'get_site_icon_url',
            [
                get_class(),
                'getFaviconUrl'
            ],
            10,
            1
        );
    }

    /**
     * Debug
     * 
     * @param string $faviconUrl Value for output.
     * 
     * @return none
     */
    static function getFaviconUrl(string $faviconUrl)
    {
        $defaultFaviconUrl=self::$defaultFaviconUrl;
        return $defaultFaviconUrl;
    }
}
