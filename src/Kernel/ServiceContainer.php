<?php

namespace whereof\cloudPrint\Kernel;

use Pimple\Container;


/**
 * Class ServiceContainer
 * @author zhiqiang
 * @package whereof\cloudPrint\Kernel
 *
 * @property Clients\CacheClient cache
 * @property Clients\LoggerClient logger
 */
class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];
    /**
     * @var array
     */
    protected $userConfig = [];
    /**
     * @var array
     */
    protected $defaultConfig = [];

    /**
     * ServiceContainer constructor.
     *
     * @param array $userConfig
     * @param array $values
     */
    public function __construct($userConfig = [], array $values = [])
    {
        parent::__construct($values);
        $this->userConfig = $userConfig;
        $this->registerProviders($this->getProviders());
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        $base = [
            // http://docs.guzzlephp.org/en/stable/request-options.html
            'http' => [
                'timeout' => 30.0,
            ],
//            'cache'    => [
//                'prefix' => 'cloud_print',
//                'path'   => './.runtime/cache',
//            ],
//            'logger'   => [
//                'logfile' => './.runtime/logger/' . date('Y-m-d') . '.log',
//            ]
        ];

        return array_replace_recursive($base, $this->defaultConfig, $this->userConfig);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * @param $id
     * @param $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }

    /**
     * @return array
     */
    public function getProviders()
    {
        return array_merge($this->providers, [
            ServiceProvider::class,
        ]);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
