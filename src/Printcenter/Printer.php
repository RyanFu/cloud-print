<?php

namespace whereof\cloudPrint\Printcenter;

use whereof\cloudPrint\Kernel\Interfaces\PrinterInterface;

/**
 * http://printcenter.cn/
 * Class Printer.
 */
class Printer extends PrintcenterClient implements PrinterInterface
{
    /**
     * 添加打印机.
     *
     * @param $private_params
     *
     * @return mixed
     */
    public function register($private_params)
    {
        // TODO: Implement register() method.
    }

    /**
     * 删除打印机.
     *
     * @param $private_params
     *
     * @return mixed
     */
    public function delete($private_params)
    {
        // TODO: Implement delete() method.
    }

    /**
     * 获取某台打印机状态
     *
     * @param $private_params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed
     */
    public function status($private_params)
    {
        return $this->request('queryPrinterStatus', $private_params);
    }

    /**
     * 打印.
     *
     * @param $private_params
     * @param $type
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed
     */
    public function print($private_params, $type = '')
    {
        $private_params['times'] = 1;

        return $this->request('addOrder', $private_params);
    }

    /**
     * 清空待打印队列.
     *
     * @param $private_params
     *
     * @return mixed
     */
    public function clean($private_params)
    {
        // TODO: Implement clean() method.
    }

    /**
     * 查询订单是否打印成功
     *
     * @param $private_params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed
     */
    public function orderState($private_params)
    {
        return $this->request('queryOrder', $private_params);
    }
}
