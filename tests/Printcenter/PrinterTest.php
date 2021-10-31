<?php
/*
 * Desc:
 * User: zhiqiang
 * Date: 2021-10-06 17:27
 */

namespace whereof\cloudPrint\Tests\Printcenter;

use whereof\cloudPrint\Printcenter\Printer;
use whereof\cloudPrint\Tests\BaseTest;

/**
 * Class PrinterTest.
 *
 * @author zhiqiang
 */
class PrinterTest extends BaseTest
{
    public function methodPrivateParams($method, $private_params)
    {
        $app = $this->Printcenter();
        $client = $this->mockApiClient(Printer::class, $app);
        $data = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }

    public function testStatus()
    {
        $private_params = [
            'deviceNo' => '',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testPrint()
    {
        $private_params = [
            'deviceNo'     => '',
            'printContent' => '',
        ];
        $this->methodPrivateParams('print', $private_params);
    }

    public function testOrderState()
    {
        $private_params = [
            'deviceNo'   => '',
            'orderindex' => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }
}
