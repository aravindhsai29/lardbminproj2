<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testloginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
