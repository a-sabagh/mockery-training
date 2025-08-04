<?php

namespace Tests;

use Mockery;
use MockeryTraining\Sun;
use MockeryTraining\Weather;
use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function test_stub_calling(): void
    {
        $sun = Mockery::mock(Sun::class);

        $sun->shouldReceive('shine')->andReturn('shining');

        $weather = new Weather($sun);

        $this->addToAssertionCount(1);
    }

    public function tearDown(): void
    {
        Mockery::close();
    }
}
