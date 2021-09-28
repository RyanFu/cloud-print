<?php


namespace whereof\cloudPrint\Ushengyun;


use whereof\cloudPrint\Kernel\ServiceContainer;

/**
 * Class AppContainer
 * @package whereof\cloudPrint\Poscom
 * @property Printer printer
 */
class AppContainer extends ServiceContainer
{
    protected $providers = [
        ServiceProvider::class
    ];
}