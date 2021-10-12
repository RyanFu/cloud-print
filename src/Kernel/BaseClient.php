<?php


namespace whereof\cloudPrint\Kernel;


use whereof\cloudPrint\Kernel\Interfaces\CacheInterface;
use whereof\Helper\ArrayHelper;
use whereof\Logger\Logger;


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

    /**
     * @return FileCache
     * @throws \Exception
     */
    public function cache()
    {
        $cache = ArrayHelper::getValue($this->config, 'cache');
        if ($cache instanceof CacheInterface) {
            return $cache;
        }
        return new FileCache();
    }

    /**
     * @param $message
     * @param $request
     * @param $response
     * @throws \Exception
     */
    public function debug($message, $request, $response)
    {
        if (ArrayHelper::getValue($this->config, 'http_log.enable', false)) {
            Logger::File([
                'logfile' => './.runtime/cloud-print.log',
            ])->debug($message, ['request' => $request, 'response' => $response]);
        }
    }
}