<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * Test de la route Home de l'application.
     *
     * @return void
     */
    public function test_Home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
