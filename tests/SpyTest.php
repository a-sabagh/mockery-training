<?php

namespace Tests;

use Mockery;
use MockeryTraining\Spies\Dependency;
use MockeryTraining\Spies\Service;
use PHPUnit\Framework\TestCase;

class SpyTest extends TestCase
{
    public function test_spy_dependency(): void
    {
        $dependency = Mockery::spy(Dependency::class);

        $service = new Service($dependency);

        $boolean = $service->dependency->boolReturn();

        $this->assertIsBool($boolean);
        $this->assertFalse($boolean);
    }

    public function test_spy_return_type(): void
    {
        $dependency = Mockery::spy(Dependency::class);

        $service = new Service($dependency);

        $result = $service->dependencyResult();

        $this->assertSame([
            "booleanValue" => false,
            "stringValue" => "",
            "arrayValue" => [],
            "voidValue" => null,
            "noReturnType" => null
        ], $result);

        $this->addToAssertionCount(1);
    }

    public function tearDown(): void
    {
        Mockery::close();
    }
}
