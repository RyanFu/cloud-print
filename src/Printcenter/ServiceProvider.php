<?php


namespace whereof\cloudPrint\Printcenter;


use Pimple\Container;
use Pimple\ServiceProviderInterface;


/**
 * Class ServiceProvider
 * @package whereof\cloudPrint\Printcenter
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['printer'] = function ($app) {
            return new Printer($app);
        };
    }
}