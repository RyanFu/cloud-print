<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-11-10 22:38
 */

namespace whereof\cloudPrint\Kernel\Clients;

use whereof\Cache\CacheManager;
use whereof\Cache\DriverAbstract;
use whereof\cloudPrint\Kernel\BaseClient;

class CacheClient extends BaseClient
{
    /**
     * 设置缓存.
     * @param $key
     * @param $value
     * @param int $ttl
     * @return bool
     */
    public function setCache($key, $value, $ttl = 0)
    {
        return $this->getSystemAdapter()->set($key, $value, $ttl);
    }

    /**
     * 获取缓存.
     * @param $key
     * @return mixed
     */
    public function getCache($key)
    {
        return $this->getSystemAdapter()->get($key);
    }

    /**
     * 判断缓存是否存在.
     * @param $key
     * @return mixed
     */
    public function hasCache($key)
    {
        return $this->getSystemAdapter()->has($key);
    }

    /**
     * 删除缓存.
     * @param $key
     * @return bool
     */
    public function deleteCache($key)
    {
        return $this->getSystemAdapter()->delete($key);
    }

    /**
     * @return DriverAbstract
     */
    private function getSystemAdapter()
    {
        $config = $this->config['cache'] ?? [
                'prefix' => 'cloud_print',
                'path'   => './.runtime/cache',
            ];
        return CacheManager::File($config);
    }
}