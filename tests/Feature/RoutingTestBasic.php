<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTestBasic extends TestCase
{
    public function testBasicRouting()
    {
        $this->get ("/pzn")
            ->assertStatus(200)
            ->assertSee("HALLOOO");
    }
}