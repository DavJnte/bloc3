<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function catalogues($cat)
    {
        $products = Product::where('category', $cat)->get();
        return view('shop', compact('products', 'cat'));
    }
}
