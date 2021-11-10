<?php
/*
 * Desc:
 * User: zhiqiang
 * Date: 2021-09-28 21:17
 */

namespace whereof\cloudPrint\Tests;

use Mockery;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use whereof\cloudPrint\Factory;
use whereof\cloudPrint\Zhongwuyun\AppContainer;

/**
 * Class BaseTest.
 *
 * @author zhiqiang
 */
class BaseTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @param $name
     * @param $app
     *
     * @return Mock
     */
    public function mockApiClient($name, $app)
    {
        $client = Mockery::mock($name, [$app])->makePartial();

        return $client;
    }

    /**
     * @return \whereof\cloudPrint\Feieyun\AppContainer
     */
    public function Feieyun()
    {
        return Factory::Feieyun([
            'user' => 'dasdl',
            'ukey' => 'daskdlask',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Jolimark\AppContainer
     */
    public function Jolimark()
    {
        return Factory::Jolimark([
            'app_id'  => 'dasdas',
            'app_key' => 'fsjkdfklsadsadsa',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Kuaidi100\AppContainer
     */
    public function Kuaidi100()
    {
        return Factory::Kuaidi100([
            'key'    => 'daskdlaskd',
            'secret' => 'fdsjfjdsklfjks',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Poscom\AppContainer
     */
    public function Poscom()
    {
        return Factory::Poscom([
            'memberCode' => 'fsklfkasld',
            'apiKey'     => 'fjaksljfkalsjkjk',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Printcenter\AppContainer
     */
    public function Printcenter()
    {
        return Factory::Printcenter([
            'key' => 'fasjkldjaskl',
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
            'user'    => 'fsjklfjklsdaf',
            'userKey' => 'fksdfklsdkflskdlf;',
        ]);
    }

    /**
     * @return \whereof\cloudPrint\Yilianyun\AppContainer
     */
    public function Yilianyun()
    {
        return Factory::Yilianyun([
            'client_id'     => 'fsdkalfjklsajdfk',
            'client_secret' => 'sdaksldjaskldjaskljkl',
        ]);
    }

    /**
     * @return AppContainer
     */
    public function Zhongwuyun()
    {
        return Factory::Zhongwuyun([
            'appid'     => '******',
            'appsecret' => '******',
        ]);
    }
}
