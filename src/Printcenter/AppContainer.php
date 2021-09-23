<?php


namespace whereof\cloudPrint\Printcenter;


use whereof\cloudPrint\Kernel\ServiceContainer;

/**
 * Class AppContainer
 * @package whereof\cloudPrint\Printcenter
 * @property Printer printer
 */
class AppContainer extends ServiceContainer
{
    protected $providers = [
        ServiceProvider::class
    ];
}