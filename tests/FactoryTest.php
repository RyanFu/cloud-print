<?php
/*
 * Desc:
 * User: zhiqiang
 * Date: 2021-09-28 16:28
 */

namespace whereof\cloudPrint\Tests;

/**
 * Class FactoryTest.
 *
 * @author zhiqiang
 */
class FactoryTest extends BaseTest
{
    public function testFeieyun()
    {
        $app = $this->Feieyun();
        $this->assertInstanceOf(\whereof\cloudPrint\Feieyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Feieyun\Printer::class, $printer);
    }

    public function testJolimark()
    {
        $app = $this->Jolimark();
        $this->assertInstanceOf(\whereof\cloudPrint\Jolimark\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Jolimark\Printer::class, $printer);
    }

    public function testKuaidi100()
    {
        $app = $this->Kuaidi100();
        $this->assertInstanceOf(\whereof\cloudPrint\Kuaidi100\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Kuaidi100\Printer::class, $printer);
    }

    public function testPoscom()
    {
        $app = $this->Poscom();
        $this->assertInstanceOf(\whereof\cloudPrint\Poscom\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Poscom\Printer::class, $printer);
    }

    public function testPrintcenter()
    {
        $app = $this->Printcenter();
        $this->assertInstanceOf(\whereof\cloudPrint\Printcenter\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Printcenter\Printer::class, $printer);
    }

    public function testUshengyun()
    {
        $app = $this->Ushengyun();
        $this->assertInstanceOf(\whereof\cloudPrint\Ushengyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Ushengyun\Printer::class, $printer);
    }

    public function testXpyun()
    {
        $app = $this->Xpyun();
        $this->assertInstanceOf(\whereof\cloudPrint\Xpyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Xpyun\Printer::class, $printer);
    }

    public function testYilianyun()
    {
        $app = $this->Yilianyun();
        $this->assertInstanceOf(\whereof\cloudPrint\Yilianyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Yilianyun\Printer::class, $printer);
    }

    public function testZhongwuyun()
    {
        $app = $this->Zhongwuyun();
        $this->assertInstanceOf(\whereof\cloudPrint\Zhongwuyun\AppContainer::class, $app);
        $printer = $app->printer;
        $this->assertInstanceOf(\whereof\cloudPrint\Zhongwuyun\Printer::class, $printer);
    }
}
