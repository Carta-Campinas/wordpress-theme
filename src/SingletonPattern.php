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
namespace HackeamosOrg;

/**
 * The Singleton class defines the `GetInstance` method that serves as an
 * alternative to constructor and lets clients access the same instance of this
 * class over and over.
 * 
 * @package HackeamosOrg/SingletonPattern
 * @author  Lucilio Correia <lucilio@lucilio.net>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://hackeamos.org/projetos/HackeamosWP
 * @see     https://refactoring.guru/pt-br/design-patterns/singleton/php/example
 */
class SingletonPattern
{
    /**
     * The Singleton's instance is stored in a static field. This field is an
     * array, because we'll allow our Singleton to have subclasses. Each item in
     * this array will be an instance of a specific Singleton's subclass. You'll
     * see how this works in a moment.
     */
    private static $_instances = [];

    /**
     * The Singleton's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    protected function __construct()
    {
        // nothing here
    }

    /**
     * Singletons should not be cloneable.
     * 
     * @return none
     */
    protected function __clone()
    {
        //nothing here
    }

    /**
     * Singletons should not be restorable from strings.
     * 
     * @return none
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * This is the static method that controls the access to the singleton
     * instance. On the first run, it creates a singleton object and places it
     * into the static field. On subsequent runs, it returns the client existing
     * object stored in the static field.
     *
     * This implementation lets you subclass the Singleton class while keeping
     * just one instance of each subclass around.
     * 
     * @return SingletonPattern Unique instance of the (sub)class
     */
    public static function getInstance(): SingletonPattern
    {
        // use class name as identifier
        $cls = static::class;
        // register a single instance for each extended class
        if (!isset(self::$_instances[$cls])) {
            self::$_instances[$cls]=[];
        }
        if (!isset(self::$_instances[$cls]['instance'])) {
            self::$_instances[$cls]['instance'] = new static();
        }
        // return the single instance for this extended class
        return self::$_instances[$cls]['instance'];
    }

    /**
     * Convert the current class name to kebab case
     * 
     * @return string The class name converted to kebab case.
     */
    public function getClassSlug() : string
    {
        // use class name as identifier
        $cls = get_class($this);
        // register a single instance for each extended class
        if (!isset(self::$_instances[$cls])) {
            self::$_instances[$cls]=[];
        }
        // register a slugish version of 
        if (!isset(self::$_instances[$cls]['slug'])) {
            self::$_instances[$cls]['slug'] = _wp_to_kebab_case(
                preg_replace('/.*\\\/', '', static::class)
            );
        }
        // return class slug
        return self::$_instances[$cls]['slug'];
    }

    /**
     * Get the build path.
     * 
     * @param string[] ...$path Will be appended to resulting path
     * 
     * @return string
     */
    public function getBuildPath(...$path)
    {
        $buildPath=str_replace(
            $this->getSourceDir() . DIRECTORY_SEPARATOR,
            $this->getBuildDir() . DIRECTORY_SEPARATOR,
            $this->getSourcePath()
        );
        array_unshift($path, $buildPath);
        return implode(
            DIRECTORY_SEPARATOR,
            $path
        );
    }
}