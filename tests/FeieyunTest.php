<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 00:17
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Feieyun\Printer;

/**
 * Class FeieyunTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class FeieyunTest extends BaseTest
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

    public function testlabelMsg()
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

    public function testclean()
    {
        $private_params = [
            'sn' => '',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }

    public function testorderState()
    {
        $private_params = [
            'orderid' => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }

    public function testorderInfoByDate()
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