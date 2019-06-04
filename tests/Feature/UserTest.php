<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFalse()
    {
        $response = $this->get('/');

        $response->assertStatus(404);

    }
    public function testTrue()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }
}
