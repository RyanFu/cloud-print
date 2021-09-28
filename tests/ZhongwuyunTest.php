<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 01:52
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Zhongwuyun\Printer;

class ZhongwuyunTest extends BaseTest
{

    public function teststatus()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testorderState()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
            'dataid'       => '123',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }

    public function testclean()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }

    public function testcleanOne()
    {
        $private_params = [
            'dataid' => '123',
        ];
        $this->methodPrivateParams('cleanOne', $private_params);
    }

    public function testsetSound()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
            'sound'        => 3
        ];
        $this->methodPrivateParams('setSound', $private_params);
    }

    public function testsetVoice()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
            'voice'        => base64_encode('.mp3')
        ];
        $this->methodPrivateParams('setVoice', $private_params);
    }

    public function testprint()
    {
        $private_params = [
            'deviceid'     => '1111111',
            'devicesecret' => '11111111',
            'printdata'    => ''
        ];
        $this->methodPrivateParams('print', $private_params);
    }


    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Zhongwuyun();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}