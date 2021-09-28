<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 00:17
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Xpyun\Printer;

/**
 * Class FeieyunTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class XpyunTest extends BaseTest
{

    public function testRegister()
    {
        $private_params = ['items' => [['name' => '', 'sn' => '']]];
        $this->methodPrivateParams('register', $private_params);
    }


    public function testMsg()
    {
        $private_params = [
            'sn'        => '',
            'content'   => '',
            'copies'    => 1,
            'voice'     => '',
            'mode'      => '',
            'expiresIn' => '',
            'payType'   => '',
            'payMode'   => '',
            'money'     => '',
        ];
        $this->methodPrivateParams('msg', $private_params);
    }


    public function testLabelMsg()
    {
        $private_params = [
            'sn'        => '',
            'content'   => '',
            'copies'    => 1,
            'voice'     => '',
            'mode'      => '',
            'expiresIn' => '',
            'payType'   => '',
            'payMode'   => '',
            'money'     => '',
        ];
        $this->methodPrivateParams('labelMsg', $private_params);
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
            'sn'     => '',
            'name'   => '',
            'cardno' => '',
        ];
        $this->methodPrivateParams('update', $private_params);
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


    public function testStatus()
    {
        $private_params = [
            'sn' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testAllStatus()
    {
        $private_params = [
            'snlist' => '',
        ];
        $this->methodPrivateParams('allStatus', $private_params);
    }

    public function testSetVoice()
    {
        $private_params = [
            'sn'        => '',
            'voiceType' => '',
        ];
        $this->methodPrivateParams('setVoice', $private_params);
    }

    public function testPlayVoice()
    {
        $private_params = [
            'sn'      => '',
            'payType' => '',
            'payMode' => '',
            'money'   => '',
        ];
        $this->methodPrivateParams('playVoice', $private_params);
    }

    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Xpyun();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}