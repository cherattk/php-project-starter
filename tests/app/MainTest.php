<?php
use PHPUnit\Framework\TestCase;

use App\Main;
use Prose\Test\DummyClass;

final class MainTest extends TestCase{

    public function testGetConfiguration()
    {
        $main = new Main();

        $actual = $main->getConfiguration();

        $this->assertEquals([] , $actual , 'Something goes wrong');
    }

    public function testGetService()
    {
        $service = ['myService' => 'serviceInstance'];

        $main = new Main([] , $service);

        $actual = $main->getService('myService');

        $this->assertEquals('serviceInstance' , $actual , 'Something goes wrong');
    }

    public function testMyMethod()
    {
        $param = [];

        $main = new Main();
        
        $actual = $main->myMethod($param);

        $this->assertEquals('Hello World!' , $actual , 'Something goes wrong');
    }

    public function testDummyClass()
    {
        $dummy = new DummyClass();
        
        $actual = $dummy->getName();

        $this->assertEquals(DummyClass::class , $actual , 'Something goes wrong');
    }
}