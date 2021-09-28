<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-28 21:17
 */

namespace whereof\cloudPrint\Test;

use PHPUnit\Framework\TestCase;
use whereof\cloudPrint\Factory;


/**
 * Class BaseTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class BaseTest extends TestCase
{

    public function testFactory()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @return \whereof\cloudPrint\Feieyun\AppContainer
     */
    public function Feieyun()
    {
        return Factory::Feieyun([
            'user' => '',
            'ukey' => '',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Jolimark\AppContainer
     */
    public function Jolimark()
    {
        return Factory::Jolimark([
            'app_id'  => '',
            'app_key' => '',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Kuaidi100\AppContainer
     */
    public function Kuaidi100()
    {
        return Factory::Kuaidi100([
            'key'    => '',
            'secret' => '',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Poscom\AppContainer
     */
    public function Poscom()
    {
        return Factory::Poscom([
            'memberCode' => '',
            'apiKey'     => '',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Printcenter\AppContainer
     */
    public function Printcenter()
    {
        return Factory::Printcenter([
            'key' => '',
        ]);

    }

    /**
     * @return \whereof\cloudPrint\Ushengyun\AppContainer
     */
    public function Ushengyun()
    {
        return Factory::Ushengyun([
            'appId'     => '10001',
            'appSecret' => '**********',
        ]);

    }

    /**
     * @return \whereof\cloudPrint\Xpyun\AppContainer
     */
    public function Xpyun()
    {
        return Factory::Xpyun([
            'user'    => '',
            'userKey' => '',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Yilianyun\AppContainer
     */
    public function Yilianyun()
    {
        return Factory::Yilianyun([
            'client_id'     => '',
            'client_secret' => '',
        ]);

    }

    /**
     * @return \whereof\cloudPrint\Zhongwuyun\AppContainer
     */
    public function Zhongwuyun()
    {
        return Factory::Zhongwuyun([
            'appid'     => '******',
            'appsecret' => '******',
        ]);
    }
}