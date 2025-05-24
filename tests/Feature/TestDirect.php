<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestDirect extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->get("/youtube")
        ->assertStatus(302);
    }
}
