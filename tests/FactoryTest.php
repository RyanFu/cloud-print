<?php
/*
 * Desc: 
 * User: zhiqiang
 * Date: 2021-09-28 16:28
 */

namespace whereof\cloudPrint\Test;

use PHPUnit\Framework\TestCase;
use whereof\cloudPrint\Factory;

/**
 * Class FactoryTest
 * @author zhiqiang
 * @package whereof\cloudPrint\Test
 */
class FactoryTest extends TestCase
{

    public function testFeieyun()
    {
        $app = Factory::Feieyun([
            'user' => '',
            'ukey' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Feieyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Feieyun\Printer::class, $printer);
    }

    public function testJolimark()
    {
        $app = Factory::Jolimark([
            'app_id'  => '',
            'app_key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Jolimark\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Jolimark\Printer::class, $printer);
    }

    public function testKuaidi100()
    {
        $app = Factory::Kuaidi100([
            'key'    => '',
            'secret' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Kuaidi100\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Kuaidi100\Printer::class, $printer);
    }

    public function testPoscom()
    {
        $app = Factory::Poscom([
            'memberCode' => '',
            'apiKey'     => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Poscom\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Poscom\Printer::class, $printer);
    }

    public function testPrintcenter()
    {
        $app = Factory::Printcenter([
            'key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Printcenter\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Printcenter\Printer::class, $printer);
    }

    public function testUshengyun()
    {
        $app = Factory::Ushengyun([
            'key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Ushengyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Ushengyun\Printer::class, $printer);
    }

    public function testXpyun()
    {
        $app = Factory::Xpyun([
            'key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Xpyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Xpyun\Printer::class, $printer);
    }

    public function testYilianyun()
    {
        $app = Factory::Yilianyun([
            'key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Yilianyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Yilianyun\Printer::class, $printer);
    }

    public function testZhongwuyun()
    {
        $app = Factory::Zhongwuyun([
            'key' => '',
        ]);
        $this->assertInstanceOf(\whereof\cloudPrint\Zhongwuyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Zhongwuyun\Printer::class, $printer);
    }
}