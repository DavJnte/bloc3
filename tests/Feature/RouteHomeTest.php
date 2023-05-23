<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteHomeTest extends TestCase
{
    /**
     * Test pour vérifier que les pages existe et qu'elle renvoir bien le texte de base.
     *
     * @return void
     */
    public function test_Route_Home_Catalogue_Utilisateur()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Mercadona');
    }

    public function test_Route_Formulaire_connexion()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Connexion');
    }

}
