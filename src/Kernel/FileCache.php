<?php


namespace whereof\cloudPrint\Kernel;

use whereof\Cache\CacheManager;
use whereof\Cache\Driver;
use whereof\cloudPrint\Kernel\Interfaces\CacheInterface;

/**
 * Class Cache
 * @package whereof\cloudPrint\Kernel
 */
class FileCache implements CacheInterface
{

    /**
     * 设置缓存
     * @param $key
     * @param $value
     * @param int $ttl
     * @return bool
     */
    public function setCache($key, $value, int $ttl = 0)
    {
        return $this->getSystemAdapter()->set($key, $value, $ttl);
    }

    /**
     * 获取缓存
     * @param $key
     * @return mixed
     */
    public function getCache($key)
    {
        return $this->getSystemAdapter()->get($key);
    }

    /**
     * 判断缓存是否存在
     * @param $key
     * @return mixed
     */
    public function hasCache($key)
    {
        return $this->getSystemAdapter()->has($key);
    }

    /**
     * 删除缓存
     * @param $key
     * @return bool
     */
    public function deleteCache($key)
    {
        return $this->getSystemAdapter()->delete($key);
    }


    /**
     * @return Driver
     */
    private function getSystemAdapter()
    {
       return (new CacheManager())->driver('file', [
            'prefix' => 'cloud_print',
            'path'   => './.cache',
        ]);
    }
}
