<?php


namespace whereof\cloudPrint\Kernel;


use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Exception\CacheException;
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
        $item = $this->getSystemAdapter()->getItem($key);
        $item->set($value);
        if ($ttl)
            $item->expiresAfter($ttl);
        return $this->getSystemAdapter()->save($item);
    }

    /**
     * 获取缓存
     * @param $key
     * @return mixed
     * @throws CacheException
     */
    public function getCache($key)
    {
        $item = $this->getSystemAdapter()->getItem($key);
        return $item->get();
    }

    /**
     * 判断缓存是否存在
     * @param $key
     * @return mixed
     * @throws CacheException
     */
    public function hasCache($key)
    {
        $item = $this->getSystemAdapter()->getItem($key);
        return $item->isHit();
    }

    /**
     * 删除缓存
     * @param $key
     * @return bool
     * @throws CacheException
     */
    public function deleteCache($key)
    {
        return $this->getSystemAdapter()->deleteItem($key);
    }


    /**
     * new \Symfony\Component\Cache\Adapter\MemcachedAdapter((new \memcached())->addServer("127.0.0.1",11211));
     * new \Symfony\Component\Cache\Adapter\RedisAdapter((new \Redis())->connect("127.0.0.1",6379));
     * @return FilesystemAdapter
     */
    private function getSystemAdapter()
    {
        return new FilesystemAdapter();
    }
}