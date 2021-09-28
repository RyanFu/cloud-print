<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-29 00:17
 */

namespace whereof\cloudPrint\Test;

use whereof\cloudPrint\Ushengyun\Printer;

/**
 * Class FeieyunTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class UshengyunTest extends BaseTest
{


    public function testStatus()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
        ];
        $this->methodPrivateParams('status', $private_params);
    }

    public function testprint()
    {
        $printdata = '优声云拥有自主研发的云打印机，提供稳定高效，高可用的云打印方案';

        $printdata = ' <MC>5,2</MC><S1><C>#6美团外卖</C></S1><C>*阿娜云南过桥米线*</C>********************************<C>--在线支付--</C><S1>备注：中辣，速度快一点啊，
 </S1><RN>下单时间:11-06 12:29<RN>订单编号:10839453020390021<RN>********************************<C>-----------1号口袋-----------</C><S1><TR><TD>豪华套餐</TD><TD>×1</TD><TD>39</TD></TR></S1>--------------其他--------------餐盒费:                 ￥1<RN>配送费:                 ￥2.5<RN>折扣:                   ￥20.5<RN>********************************            原价:42.5<RN>            总价:<S2>22</S2><RN><S1>光明国际家具城C区 (光明家具城C区13栋5楼灵子舞蹈)</S1><RN>4696<RN>刘慧珍(女士)(门店新客户)<RN>虚拟号码 13647977539_4696，手机号 159****8272 <RN>';

        $printdata = '<MC>5,2</MC><S1><C>#15美团外卖</C></S1><C>*阿娜云南过桥米线*</C>********************************<C>--在线支付--</C><S1>备注：</S1><RN>下单时间:11-06 18:00<RN>订单编号:10839450300181537<RN>********************************<C>-----------1号口袋-----------</C><S1><TR><TD>豪华精品套餐</TD><TD>×1</TD><TD>26</TD></TR><TR><TD>豪华套餐</TD><TD>×1</TD><TD>39</TD></TR></S1>--------------其他--------------餐盒费:                 ￥2<RN>配送费:                 ￥2<RN>折扣:                   ￥27<RN>********************************            原价:69<RN>            总价:<S2>42</S2><RN><S1>万众公寓 (东原路万众公寓708)</S1><RN>5194<RN>傻狗(女士)(门店新客户)<RN>虚拟号码 13647975167_5194，手机号 177****3962 <RN>';


        $private_params = [
            'deviceid'     => '',
            'devicesecret' => '',
            'printdata'    => $printdata,
        ];
        $this->methodPrivateParams('print', $private_params);
    }

    public function testclean()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
        ];
        $this->methodPrivateParams('clean', $private_params);
    }

    public function testcancelOne()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
            'dataid'       => '',
        ];
        $this->methodPrivateParams('cancelOne', $private_params);
    }

    public function testsetSound()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
            'sound'        => ''
        ];
        $this->methodPrivateParams('cancelOne', $private_params);
    }

    public function testsetLogo()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
            'logodata'     => base64_encode(file_get_contents('./logo.png')),
        ];
        $this->methodPrivateParams('cancelOne', $private_params);
    }


    public function testorderState()
    {
        $private_params = [
            'deviceid'     => '10000778',
            'devicesecret' => '54t6ehtc',
            'dataid'       => '',
        ];
        $this->methodPrivateParams('orderState', $private_params);
    }

    public function methodPrivateParams($method, $private_params)
    {
        $app    = $this->Ushengyun();
        $client = $this->mockApiClient(Printer::class, $app);
        $data   = json_decode($client->$method($private_params), true);
        $this->assertIsArray($data);
    }
}