<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsuggestionController extends Controller
{
    //
    public function editpromo($id)
    {
        // do the request in order to avoid  Property [id] does not exist on this collection instance. error
        $promo_edit = Promo::where('code', $id)->first();
        return view('admin.editpromo', compact('promo_edit'));
    }

    // editpromopost
    public function editpromopost(Request $request, $id)
    {
        $promo = Promo::where('code', $id)->first();
        $promo->reduction = $request->input('promo');
        $promo->date_debut = $request->input('date_debut');
        $promo->date_fin = $request->input('date_fin');
        $promo->update();

        // select product where date_debut = date_debut and date_fin = date_fin
        $products = \App\Models\Product::where('date_debut', $promo->date_debut)
            ->where('date_fin', $promo->date_fin)
            ->get();
            // update product prix_promo with the new promo reduction value and date_debut and date_fin
        foreach ($products as $product) {
            $product->prix_promo = $product->prix - ($product->prix * $request->input('promo') / 100);
            $product->date_debut = $request->input('date_debut');
            $product->date_fin = $request->input('date_fin');
            $product->update();
        }
        return redirect()->back()->with('success', 'Promo modifiée avec succès');
    }

    // editcategory
    public function editcategory($id)
    {
        $category_edit = Category::where('id', $id)->first();

        return view('admin.editcategory', compact('category_edit'));
    }

    // editcategorypost
    public function editcategorypost(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $cat_name = $category->category;
        $category->category = $request->input('category');

        // select product where category = category->category and update the category with the new category value
        $products = \App\Models\Product::where('category', $cat_name)
            ->get();

        foreach ($products as $product) {
            $product->category = $request->input('category');
            $product->update();
        }

        $category->update();



        return redirect()->back()->with('success', 'Categorie modifiée avec succès');
    }
}
