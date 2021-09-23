<?php


namespace whereof\cloudPrint;


/**
 * Class Factory
 * @package whereof\cloudPrint
 * @method static Feieyun\AppContainer Feieyun($config)
 * @method static Xpyun\AppContainer Xpyun($config)
 * @method static Kuaidi100\AppContainer Kuaidi100($config)
 * @method static Yilianyun\AppContainer Yilianyun($config)
 * @method static Jolimark\AppContainer Jolimark($config)
 * @method static Poscom\AppContainer Poscom($config)
 * @method static Printcenter\AppContainer Printcenter($config)
 * @method static Zhongwuyun\AppContainer Zhongwuyun($config)
 */
class Factory
{
    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    protected static function make($name, array $config)
    {
        $app = __NAMESPACE__ . '\\' . $name . '\\AppContainer';
        return new $app($config);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}