<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 01:17
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Poscom\Printer;

class PoscomTest extends BaseTest
{

    public function testgroup()
    {
        $private_params = [
        ];
        $this->methodPrivateParams('group', $private_params);
    }

    public function testaddGroup()
    {
        $private_params = [
            'grpName' => '',
        ];
        $this->methodPrivateParams('addGroup', $private_params);
    }


    public function testupdateGroup()
    {
        $private_params = [
            'grpID'   => '',
            'grpName' => '',
        ];
        $this->methodPrivateParams('updateGroup', $private_params);
    }

    public function testdelGroup()
    {
        $private_params = [
            'grpID'   => '',
            'grpName' => '',
        ];
        $this->methodPrivateParams('delGroup', $private_params);
    }


    public function testregister()
    {
        $private_params = [
            'deviceID' => '',
            'devName'  => '',
            'grpID'    => '',
            'mPhone'   => '',
            'nPhone'   => '',
            'cutting'  => '',
        ];
        $this->methodPrivateParams('register', $private_params);
    }

    public function testupdate()
    {
        $private_params = [
            'deviceID' => '',
            'devName'  => '',
            'grpID'    => '',
            'mPhone'   => '',
            'nPhone'   => '',
            'cutting'  => '',
        ];
        $this->methodPrivateParams('update', $private_params);
    }

    public function testdelete()
    {
        $private_params = [
            'deviceID' => '',
        ];
        $this->methodPrivateParams('delete', $private_params);
    }

    public function teststatus()
    {
        $private_params = [
            'deviceID' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testclean()
    {
        $private_params = [
            'deviceID' => '',
            'all'      => '',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }

    public function testprint()
    {
        $private_params = [
            'charset'   => '',
            'deviceID'  => '',
            'msgDetail' => '',
            'msgNo'     => '',
            'reprint'   => '',
            'multi'     => '',
            'mode'      => '',
            'times'     => '',
            'voice'     => '',
        ];
        $this->methodPrivateParams('print', $private_params);
    }

    public function testorderState()
    {
        $private_params = [
            'msgNo' => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }



    public function testsetVoice()
    {
        $private_params = [
            'deviceID' => '',
            'volume'   => '',
        ];
        $this->methodPrivateParams('setVoice', $private_params);
    }

    public function testsetVoiceType()
    {
        $private_params = [
            'deviceID'  => '',
            'voiceType' => '',
        ];
        $this->methodPrivateParams('setVoiceType', $private_params);
    }

    public function testlistTemplate()
    {
        $private_params = [

        ];
        $this->methodPrivateParams('listTemplate', $private_params);
    }
    public function testsetTempletPrint()
    {
        $private_params = [
            'deviceID'  => '',
            'templetID' => '',
            'tData'     => '',
            'charset'   => '',
            'msgNo'     => '',
            'reprint'   => '',
            'multi'     => '',
        ];
        $this->methodPrivateParams('setTempletPrint', $private_params);
    }


    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Poscom();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}