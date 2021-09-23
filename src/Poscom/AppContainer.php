<?php


namespace whereof\cloudPrint\Poscom;


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