<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
         $this->get('/pzn')
            ->assertStatus(200)
            ->assertSeeText('Hello Programmer Zaman Now');
    }
}
