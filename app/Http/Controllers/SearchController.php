<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        $search = $request->input('search2');
        // make the reuqtes based on libelle, or description, or prix, or prix_promo
        $products = Product::where('libelle', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orWhere('prix', 'like', "%$search%")
            ->orWhere('prix_promo', 'like', "%$search%")
            ->get();
        $cat = 'search';
        // then get the  name of seleted search category found distinclty
        $key = $request->input('search2');
        $count = count($products);
    
        return view('shop', compact('products', 'cat', 'key', 'count'));
    }
}
