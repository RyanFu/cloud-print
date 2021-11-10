<?php

namespace whereof\cloudPrint\Kernel;

use whereof\cloudPrint\Kernel\Interfaces\CacheInterface;
use whereof\Helper\ArrayHelper;
use whereof\Logger\Logger;

/**
 * Class BaseClient.
 */
class BaseClient
{
    use HttpClient;
    /**
     * @var ServiceContainer
     */
    protected $app;

    /**
     * @var array
     */
    protected $config = [];

    /**
     * BaseClient constructor.
     *
     * @param ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app->getConfig();
    }
}
