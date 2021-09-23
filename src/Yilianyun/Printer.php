<?php


namespace whereof\cloudPrint\Yilianyun;

use whereof\cloudPrint\Kernel\Interfaces\PrinterInterface;

/**
 * Class Printer
 * @package whereof\cloudPrint\Yilianyun
 */
class Printer extends YilianyunClient implements PrinterInterface
{

    /**
     * 添加打印机
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function register($private_params)
    {
        return $this->request('printer/addprinter', $private_params);
    }


    /**
     * 删除打印机
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function delete($private_params)
    {
        return $this->request('printer/deleteprinter', $private_params);
    }


    /**
     * 获取某台打印机状态
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function status($private_params)
    {
        return $this->request('printer/getprintstatus', $private_params);
    }

    /**
     * 关机重启接口
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function restart($private_params)
    {
        return $this->request('printer/shutdownrestart', $private_params);
    }

    /**
     * 声音调节接口
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function setSound($private_params)
    {
        return $this->request('printer/setsound', $private_params);
    }

    /**
     * 设置内置语音接口
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function setVoice($private_params)
    {
        return $this->request('printer/setvoice', $private_params);
    }

    /**
     * 删除内置语音接口
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function deleteVoice($private_params)
    {
        return $this->request('printer/deletevoice', $private_params);
    }

    /**
     * 打印
     * @param $private_params
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function print($private_params, $type)
    {
        if ($type == 'pic') {
            return $this->picPrint($private_params);
        }
        if ($type == 'express') {
            return $this->expressPrint($private_params);
        }
        return $this->textPrint($private_params);
    }

    /**
     * 文本打印
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function textPrint($private_params)
    {
        return $this->request('print/index', $private_params);
    }

    /**
     * 图形打印
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function picPrint($private_params)
    {
        return $this->request('pictureprint/index', $private_params);
    }

    /**
     * 面单打印
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function expressPrint($private_params)
    {
        return $this->request('expressprint/index', $private_params);
    }

    /**
     * 清空待打印队列
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function clean($private_params)
    {
        return $this->request('printer/cancelone', $private_params);
    }

    /**
     * 取消所有未打印订单
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function cleanAll($private_params)
    {
        return $this->request('printer/cancelall', $private_params);
    }

    /**
     * 查询订单是否打印成功
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function orderState($private_params)
    {
        return $this->request('printer/getorderstatus', $private_params);
    }


    /**
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function orderList($private_params)
    {
        return $this->request('printer/getorderpaginglist', $private_params);
    }
}