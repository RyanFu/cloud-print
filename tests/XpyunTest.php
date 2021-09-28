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

    public function testregister()
    {
        $private_params = ['items' => [['name' => '', 'sn' => '']]];
        $this->methodPrivateParams('register', $private_params);
    }


    public function testmsg()
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


    public function testlabelMsg()
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


    public function testdelete()
    {
        $private_params = [
            'snlist' => '',
        ];
        $this->methodPrivateParams('delete', $private_params);
    }


    public function testupdate()
    {
        $private_params = [
            'sn'     => '',
            'name'   => '',
            'cardno' => '',
        ];
        $this->methodPrivateParams('update', $private_params);
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


    public function teststatus()
    {
        $private_params = [
            'sn' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testallStatus()
    {
        $private_params = [
            'snlist' => '',
        ];
        $this->methodPrivateParams('allStatus', $private_params);
    }

    public function testsetVoice()
    {
        $private_params = [
            'sn'        => '',
            'voiceType' => '',
        ];
        $this->methodPrivateParams('setVoice', $private_params);
    }

    public function testplayVoice()
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