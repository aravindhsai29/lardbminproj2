<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class registerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testregisterTest()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testcontactTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
