<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestCase1 extends TestCase
{
    public function testEnv()
    {
        $appName = function () {
            return env('Youtube');
        };

        self::assertEquals("Programmer Zaman Now", $appName());
    }
}
