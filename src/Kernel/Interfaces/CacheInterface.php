<?php


namespace whereof\cloudPrint\Kernel\Interfaces;


/**
 * Interface CacheInterface
 * @package whereof\cloudPrint\Kernel\Interfaces
 */
interface CacheInterface
{
    /**
     * 设置缓存
     * @param $key
     * @param $value
     * @param int $ttl
     * @return mixed
     */
    public function setCache($key, $value, $ttl = 0);

    /**
     * 获取缓存
     * @param $key
     * @return mixed
     */
    public function getCache($key);

    /**
     * 判断缓存是否存在
     * @param $key
     * @return mixed
     */
    public function hasCache($key);

    /**
     * 删除缓存
     * @param $key
     * @return mixed
     */
    public function deleteCache($key);
}