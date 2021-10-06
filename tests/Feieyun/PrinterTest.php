<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-10-06 17:24
 */

namespace whereof\cloudPrint\Tests\Feieyun;

use whereof\cloudPrint\Feieyun\Printer;
use whereof\cloudPrint\Tests\BaseTest;

/**
 * Class PrinterTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Tests\Feieyun
 */
class PrinterTest extends BaseTest
{
    public function testRegister()
    {
        $private_params = ['printerContent' => '316500010 # abcdefgh # 快餐前台 # 13688889999'];
        $this->methodPrivateParams('register', $private_params);
    }


    public function testDelete()
    {
        $private_params = [
            'snlist' => '',
        ];
        $this->methodPrivateParams('delete', $private_params);
    }

    public function testUpdate()
    {
        $private_params = [
            'sn'       => '',
            'name'     => '',
            'phonenum' => '',
        ];
        $this->methodPrivateParams('update', $private_params);
    }

    public function testStatus()
    {
        $private_params = [
            'sn' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testLabelMsg()
    {
        $private_params = [
            'sn'      => '',
            'content' => '',
            'times'   => 1,
            'img'     => '',
        ];
        $this->methodPrivateParams('labelMsg', $private_params);
    }

    public function testMsg()
    {
        $private_params = [
            'sn'      => '',
            'content' => '',
            'times'   => 1
        ];
        $this->methodPrivateParams('msg', $private_params);
    }

    public function testClean()
    {
        $private_params = [
            'sn' => '',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }

    public function testOrderState()
    {
        $private_params = [
            'orderid' => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }

    public function testOrderInfoByDate()
    {
        $private_params = [
            'sn'   => '',
            'date' => '',
        ];
        $this->methodPrivateParams('orderInfoByDate', $private_params);
    }


    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Feieyun();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}