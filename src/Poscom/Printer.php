<?php


namespace whereof\cloudPrint\Poscom;


use whereof\cloudPrint\Kernel\Interfaces\PrinterInterface;

/**
 * Class Printer
 * @package whereof\cloudPrint\Poscom
 */
class Printer extends PoscomClient implements PrinterInterface
{


    /**
     * 查询（打印机）分组列表
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function group($private_params)
    {
        return $this->request('GET', 'apisc/group', $private_params);
    }

    /**
     * 添加（打印机）分组
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function addGroup($private_params)
    {
        return $this->request('POST', 'apisc/addgroup', $private_params);
    }

    /**
     * 更新（打印机）分组
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function updateGroup($private_params)
    {
        return $this->request('POST', 'apisc/editgroup', $private_params);
    }

    /**
     * 删除（打印机）分组
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function delGroup($private_params)
    {
        return $this->request('POST', 'apisc/delgroup', $private_params);
    }


    /**
     * 添加打印机
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function register($private_params)
    {
        return $this->request('POST', 'apisc/adddev', $private_params);
    }

    /**
     * 修改设备信息
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function update($private_params)
    {
        return $this->request('POST', 'apisc/editdev', $private_params);
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
        return $this->request('POST', 'apisc/deldev', $private_params);
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
        return $this->request('POST', 'apisc/getStatus', $private_params);
    }

    /**
     * 模板列表
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function listTemplate($private_params)
    {
        return $this->request('POST', 'apisc/listTemplate', $private_params);
    }

    /**
     * 指定模板打印
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function setTempletPrint($private_params)
    {
        return $this->request('POST', 'apisc/templetPrint', $private_params);
    }

    /**
     * 打印
     * @param $private_params
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function print($private_params, $type = '')
    {
        return $this->request('POST', 'apisc/sendMsg', $private_params);
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
        return $this->request('POST', 'apisc/cancelPrint', $private_params);
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
        return $this->request('GET', 'apisc/queryState', $private_params);
    }

    /**
     * 接口列表-打印机音量设置
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function setVoice($private_params)
    {
        return $this->request('POST', 'apisc/sendVolume', $private_params);
    }

    /**
     * 打印机切换播报类型
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Cache\Exception\CacheException
     */
    public function setVoiceType($private_params)
    {
        return $this->request('POST', 'apisc/setVoiceType', $private_params);
    }

}