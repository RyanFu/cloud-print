<?php


namespace whereof\cloudPrint\Xpyun;


use whereof\cloudPrint\Kernel\ServiceContainer;

/**
 * Class AppContainer
 * @package whereof\cloudPrint\Xpyun
 * @property Printer printer
 */
class AppContainer extends ServiceContainer
{
    protected $providers = [
        ServiceProvider::class
    ];
}