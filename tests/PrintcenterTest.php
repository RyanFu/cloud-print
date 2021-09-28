<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 00:17
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Printcenter\Printer;

/**
 * Class FeieyunTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class FeieyunTest extends BaseTest
{


    public function testStatus()
    {
        $private_params = [
            'deviceNo' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testprint()
    {
        $private_params = [
            'deviceNo'     => '',
            'printContent' => '',
        ];
        $this->methodPrivateParams('print', $private_params);
    }

    public function testorderState()
    {
        $private_params = [
            'deviceNo'   => '',
            'orderindex' => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }

    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Printcenter();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}