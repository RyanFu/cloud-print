<?php


namespace whereof\cloudPrint\Zhongwuyun;

use whereof\cloudPrint\Kernel\Interfaces\PrinterInterface;

/**
 * Class Printer
 * @package whereof\cloudPrint\Zhongwuyun
 */
class Printer extends ZhongwuyunClient implements PrinterInterface
{

    /**
     * 添加打印机
     * @param $private_params
     * @return mixed
     */
    public function register($private_params)
    {
        // TODO: Implement register() method.
    }

    /**
     * 删除打印机
     * @param $private_params
     * @return mixed
     */
    public function delete($private_params)
    {
        // TODO: Implement delete() method.
    }

    /**
     * 获取某台打印机状态
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function status($private_params)
    {
        return $this->request('status', $private_params, true);
    }

    /**
     * 打印
     * @param $private_params
     * @param $type
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function print($private_params, $type = '')
    {
        return $this->request('', $private_params);
    }

    /**
     * 清空待打印队列
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function clean($private_params)
    {
        return $this->request('emptyprintqueue', $private_params);
    }

    /**
     * 取消单条未打印订单
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cleanOne($private_params)
    {
        return $this->request('cancelone', $private_params);
    }

    /**
     * 查询订单是否打印成功
     * @param $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderState($private_params)
    {
        return $this->request('printstatus', $private_params, true);
    }

    /**
     * 设置音量
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setSound($private_params)
    {
        return $this->request('sound', $private_params);
    }

    /**
     * 设置语音（未上线）
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setVoice($private_params)
    {
        return $this->request('voice', $private_params);
    }
}