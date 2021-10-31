<?php

namespace whereof\cloudPrint\Ushengyun;

use whereof\cloudPrint\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 *
 * @property Printer printer
 */
class AppContainer extends ServiceContainer
{
    protected $providers = [
        ServiceProvider::class,
    ];
}
