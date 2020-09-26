<?php namespace CameronSmith\PhalconPHPMicro\Helpers;

/**
 * Class Path
 *
 * @package CameronSmith\LearningPhalconPHP\Helpers
 */
class Path
{
    /**
     * @var string
     */
    protected static $path;

    /**
     * Set global application root path.
     *
     * @param string $path
     */
    public static function setRootPath(string $path)
    {
        static::$path = $path . DIRECTORY_SEPARATOR;
    }

    /**
     * Get global application root path.
     *
     * @return string
     */
    public static function getRootPath(): string
    {
        return static::$path;
    }

    /**
     * Get global application root path.
     *
     * @return string
     */
    public static function getModulesPath(): string
    {
        return static::$path . 'modules';
    }

    /**
     * Get global application front path.
     *
     * @return string
     */
    public static function getFrontPath(): string
    {
        return static::$path . 'apps/Front';
    }

    /**
     * Get global application back path.
     *
     * @return string
     */
    public static function getBackPath(): string
    {
        return static::$path . 'apps/Back';
    }
}
