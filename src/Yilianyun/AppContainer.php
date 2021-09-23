<?php


namespace whereof\cloudPrint\Yilianyun;


use whereof\cloudPrint\Kernel\ServiceContainer;

/**
 * Class AppContainer
 * @package whereof\cloudPrint\Yilianyun
 * @property Printer printer
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        ServiceProvider::class
    ];
}