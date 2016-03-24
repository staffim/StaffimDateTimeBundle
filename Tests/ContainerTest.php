<?php

namespace Staffim\DateTimeBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ODM\MongoDB\Types\Type;

class ContainerTest extends KernelTestCase
{
    public function testContainerHaveServices()
    {
        $this->assertTrue($this->getContainer()->has('staffim_datetime.timestampable_subscriber'));
        $this->assertTrue($this->getContainer()->has('staffim_datetime.date_time_handler'));
    }

    public function testMongoDBType()
    {
        if (!class_exists('Doctrine\\ODM\\MongoDB\\Types\\Type')) {
            $this->markTestIncomplete('This test required DoctrineMongoDBBundle');
        }
        $this->assertInstanceOf('Staffim\\DateTimeBundle\\MongoDB\\Type\\DateType', Type::getType('date'));
    }

    private function getContainer()
    {
        return static::$kernel->getContainer();
    }

    protected function setUp()
    {
        $this->bootKernel();
    }
}
