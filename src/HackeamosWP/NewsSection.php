<?php
/**
 * Use News Section Resources
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
 * Load news section resources
 * 
 * @package HackeamosOrg/HackeamosWP/NewsSection
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 */
class NewsSection extends SingletonPattern
{

    /**
     * Resources to load
     */
    static private $_resources=[];

    /**
     * Get taxonomy term class name
     * 
     * Build a class CSS selector for a texonomy term
     * 
     * @param [string]|null $resources List of resources to activate.
     *                                 Default is activate everything
     * 
     * @return none
     */
    static public function activate(array|null $resources)
    {
        if (is_null($resources)) {
            readdir(
                $resources=implode(
                    DIRECTORY_SEPARATOR,
                    [
                        '.',
                        __CLASS__
                    ]
                )
            );
        }
        die(var_export(compact('resources')));
    }

}