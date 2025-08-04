<?php

namespace Tests;

use Mockery;
use MockeryTraining\Weather;
use PHPUnit\Framework\TestCase;

class OverloadTest extends TestCase
{
    public function test_sun_is_mocked_using_overload()
    {
        $sunMock = Mockery::mock('overload:MockeryTraining\Sun');

        $sunMock->shouldReceive('shine')->once()->andReturn('mocked shine');

        $weather = new Weather();

        $this->assertEquals('mocked shine', $weather->sun->shine());
        $this->assertEquals('fairy good', $weather->status());
    }

    public function tearDown(): void
    {
        Mockery::close();
    }
}
