<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-11-10 22:58
 */

namespace whereof\cloudPrint\Kernel\Clients;

use whereof\cloudPrint\Kernel\BaseClient;
use whereof\Logger\AdapterAbstract;
use whereof\Logger\Logger;
use whereof\Logger\LoggerManager;

class LoggerClient extends BaseClient
{
    use Logger;

    /**
     * @return AdapterAbstract
     */
    private function adapter()
    {
        return LoggerManager::File($this->config['logger'] ?? [
                'logfile' => './.runtime/logger/' . date('Y-m-d') . '.log',
            ]);
    }
}