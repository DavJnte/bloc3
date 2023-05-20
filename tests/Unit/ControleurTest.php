<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function retourn()
    {
        $response = $this->get('/catgory');
        $response->assertStatus(200);
    }


    // post addcategory
    public function addCategoryPost(Request $request)
    {
        $request->validate([
            'category' => 'Nouveau',
        ]);

        $request->assertStatus(200);
    }


}
