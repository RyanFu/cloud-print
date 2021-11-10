<?php

namespace whereof\cloudPrint\Feieyun;

use whereof\cloudPrint\Kernel\ServiceContainer;


/**
 * Class AppContainer
 * @author zhiqiang
 * @package whereof\cloudPrint\Feieyun
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        ServiceProvider::class,
    ];
}
