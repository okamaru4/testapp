<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function indexTest()
    {
        $response = $this->get('/todo');
        $response->assertStatus(200);
    }

    /** @test */
    public function createTest()
    {
        $response = $this->get('/todo/create');
        $response->assertStatus(200);
    }
}
