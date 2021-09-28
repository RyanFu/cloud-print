<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 01:01
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Jolimark\Printer;

class JolimarkTest extends BaseTest
{
    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Jolimark();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }

    public function testRegister()
    {
        $private_params = [
            'device_codes' => '',
        ];
        $this->methodPrivateParams('register', $private_params);
    }

    public function testdelete()
    {
        $private_params = [
            'device_codes' => '',
        ];
        $this->methodPrivateParams('delete', $private_params);
    }

    public function testorderNotPrint()
    {
        $private_params = [
            'device_codes' => '',
        ];
        $this->methodPrivateParams('orderNotPrint', $private_params);
    }

    public function testclean()
    {
        $private_params = [
            'device_codes' => '',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }
    public function testhtml2Print()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
            'tex'          => '',
        ];
        $this->methodPrivateParams('html2Print', $private_params);
    }
    public function testhtmlPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
            'tex'          => '',
        ];
        $this->methodPrivateParams('htmlPrint', $private_params);
    }
    public function testurlPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('urlPrint', $private_params);
    }

    public function testpicPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('picPrint', $private_params);
    }
    public function testgrayPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('grayPrint', $private_params);
    }

    public function testprintEsc()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('printEsc', $private_params);
    }

    public function testpointTextPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('pointTextPrint', $private_params);
    }

    public function testlabelPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('labelPrint', $private_params);
    }

    public function testexpressPrint()
    {
        $private_params =[
            'device_ids'  => '',
            'copies'      => '',
            'cus_orderid' => '',
            'template_id' => '',
            'jj_dwmc'     => '',
            'jj_jjr'      => '',
            'jj_lxdh'     => '',
            'jj_dz'       => '',
            'sj_dwmc'     => '',
            'sj_sjr'      => '',
            'sj_lxdh'     => '',
            'sj_dz'       => '',
            'wp_jtw'      => '',
            'wp_smjz'     => '',
            'time_out'    => '',
        ];
        $this->methodPrivateParams('expressPrint', $private_params);
    }

    public function testprintTemp()
    {
        $private_params =[
            'device_ids'   => '',
            'template_id'  => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('printTemp', $private_params);
    }

    public function testfilePrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'paper_width'  => '',
            'paper_height' => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('filePrint', $private_params);
    }

    public function testfileByUrlPrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'file_type' => '',
            'bill_content'  => '',
            'paper_width' => '',
            'paper_height'   => '',
            'paper_type'   => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('fileByUrlPrint', $private_params);
    }
    public function testinvoicePrint()
    {
        $private_params =[
            'device_ids'   => '',
            'copies'       => '',
            'cus_orderid'  => '',
            'bill_content' => '',
            'time_out'     => '',
        ];
        $this->methodPrivateParams('invoicePrint', $private_params);
    }
}