<?php


namespace whereof\cloudPrint\Kernel;


use whereof\HttpClient;


/**
 * Class BaseClient
 * @package whereof\cloudPrint\Kernel
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
     * @param ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app    = $app;
        $this->config = $app->getConfig();
    }
}