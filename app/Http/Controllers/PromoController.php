<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class PromoController extends Controller
{
    // ajouterpromo
    public function ajouterpromo()
    {
        return view('admin.ajouterpromo');
    }
    // addpromo
    public function addpromo(Request $request)
    {
        $promo = new \App\Models\Promo();
        $promo->reduction = $request->input('promo');
        $promo->date_debut = $request->input('date_debut');
        $promo->date_fin = $request->input('date_fin');
        $promo->code = rand(1000, 9999);
        if( $promo->date_fin < $promo->date_debut ){
            return redirect()->back()->with('warning', 'Les dates de promotion ne sont pas correct');
        }else{
            $promo->save();
            return redirect()->back()->with('success', 'Promo ajoutée avec succès');
        }

    }
    // deletepromo
    public function deletepromo($id)
    {
        $promo = \App\Models\Promo::find($id);
        $promo->delete();
        return redirect()->back()->with('success', 'Promo supprimée avec succès');
    }

    // applypromo
    public function applypromo(Request $request)
    {
        if(empty($promo)){
            return redirect()->back()->with('warning', 'Veuillez sélectionner une promotion');
        }else{
        $reduction = $request->input('promo');
        $promo_ = \App\Models\Promo::where('reduction', $request->input('promo'))->first();
        $date_de_debut = $promo_->date_debut;
        $date_de_fin = $promo_->date_fin;

        $promo = Product::where('code', $request->input('code_product'))->first();
        $promo->prix_promo = $promo->prix - ($promo->prix * $reduction / 100);
        $promo->date_debut = $date_de_debut;
        $promo->date_fin = $date_de_fin;


    $promo->update();

    return redirect()->back()->with('success', 'Promo appliquée avec succès');
}

    }
}
