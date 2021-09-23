<?php


namespace whereof\cloudPrint\Kernel\Interfaces;


/**
 * Interface PrinterInterface
 * @package whereof\cloudPrint\Kernel\Interfaces
 */
interface PrinterInterface
{
    /**
     * 添加打印机
     * @param $private_params
     * @return mixed
     */
    public function register($private_params);

    /**
     * 删除打印机
     * @param $private_params
     * @return mixed
     */
    public function delete($private_params);


    /**
     * 获取某台打印机状态
     * @param $private_params
     * @return mixed
     */
    public function status($private_params);

    /**
     * 打印
     * @param $private_params
     * @param $type
     * @return mixed
     */
    public function print($private_params, $type);


    /**
     * 清空待打印队列
     * @param $private_params
     * @return mixed
     */
    public function clean($private_params);

    /**
     * 查询订单是否打印成功
     * @param $private_params
     * @return mixed
     */
    public function orderState($private_params);

}