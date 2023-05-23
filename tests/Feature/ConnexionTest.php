<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConnexionTest extends TestCase
{
    /**
     * Test pour savoir si dans la base de données il exsite dans la table user un admin
     *
     * @return void
     */
    public function testDatabase()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'admin@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'password' => '$2y$10$6GBaOyxZ4opx8HVWiTdN.utkrnJuMyaPATYbJv8ieXDM3ZVFGSWmi'
        ]);
    }
}
