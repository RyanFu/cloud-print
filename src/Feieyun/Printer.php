<?php


namespace whereof\cloudPrint\Feieyun;


use whereof\cloudPrint\Kernel\Interfaces\PrinterInterface;

/**
 * Class Printer
 * @package whereof\cloudPrint\Feieyun
 * https://www.feieyun.cn/document.php
 */
class Printer extends FeieyunClient implements PrinterInterface
{

    /**
     * 批量添加打印机 Open_printerAddlist
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function register($private_params)
    {
        return $this->request('Open_printerAddlist', $private_params);
    }

    /**
     * 删除批量打印机，Open_printerDelList
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($private_params)
    {
        return $this->request('Open_printerDelList', $private_params);
    }

    /**
     * 修改打印机信息，Open_printerEdit
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($private_params)
    {
        return $this->request('Open_printerEdit', $private_params);
    }

    /**
     * 获取某台打印机状态，Open_queryPrinterStatus
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function status($private_params)
    {
        return $this->request('Open_queryPrinterStatus', $private_params);
    }

    /**
     * @param $private_params
     * @param $type
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function print($private_params, $type)
    {
        if ($type == 'label') {
            return $this->labelMsg($private_params);
        }
        return $this->msg($private_params);
    }

    /**
     * 打印订单，Open_printMsg
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function msg($private_params)
    {
        return $this->request('Open_printMsg', $private_params);
    }

    /**
     * 标签机打印订单，Open_printLabelMsg
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function labelMsg($private_params)
    {
        return $this->request('Open_printLabelMsg', $private_params);
    }

    /**
     * 清空待打印队列，Open_delPrinterSqs
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function clean($private_params)
    {
        return $this->request('Open_delPrinterSqs', $private_params);
    }

    /**
     * 查询订单是否打印成功，Open_queryOrderState
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderState($private_params)
    {
        return $this->request('Open_queryOrderState', $private_params);
    }

    /**
     * 查询指定打印机某天的订单统计数，Open_queryOrderInfoByDate
     * @param $private_params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderInfoByDate($private_params)
    {
        return $this->request('Open_queryOrderInfoByDate', $private_params);
    }
}