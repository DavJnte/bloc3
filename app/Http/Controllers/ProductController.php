<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.add-product');
    }

    public function addCategory()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }
    // deletecategory
    public function deletecategory($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->back()->with('success', 'Categorie supprimée avec succès');
    }
    // editproduct
    public function editproduct($id)
    {
        $product_ = Product::where('code', $id)->first();
        return view('admin.editproduct', compact('product_'));
    }
    // editproductpost
    public function editproductpost(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'prix' => 'required',
            'category' => 'required',
            //'image' => 'required',
            //'description' => 'required',
        ]);

        $product = Product::where('code', $request->code)->first();
        $product->libelle = $request->libelle;
        $product->prix = $request->prix;
        $product->category = $request->category;

        if($request->hasFile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->description = $request->description;
        $product->update();

        return redirect()->back()->with('success', 'Produit modifié avec succès !');
    }

    // deleteproduct
    public function deleteproduct($id)
    {
        $product = Product::where('code', $id)->first();
        $product->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès !');
    }

    // post addcategory
    public function addCategoryPost(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->category = $request->category;
        $category->save();

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès !');
    }

    // addProductPost
    public function addProductPost(Request $request)
    {
        $request->validate([
            //'libelle' => 'required|unique:products|max:255',
            'libelle' => 'required|max:255',
            'prix' => 'required',
            'category' => 'required',
            'image' => 'required',
            //'description' => 'required',
        ]);

        $product = new Product();
        // generate random code four digit
        $product->libelle = $request->libelle;
        // generate random code four digit
        $product->code = rand(1000, 9999);
        $product->author = Auth::user()->name;
        $product->prix = $request->prix;
        $product->category = $request->category;

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $product->image = $imageName;

        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('success', 'Produit ajouté avec succès !');
    }
}
