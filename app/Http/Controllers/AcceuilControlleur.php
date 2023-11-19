<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AcceuilControlleur extends Controller
{
    //
    public function index()
    {
        $annonces = Annonce::all()->take(4);
        $categories=Categorie::all()->take(4);

        return view('index', compact('annonces','categories'));
    }
    public function findByCategoty($id)
    {
        $annonces = Annonce::Where('categorie_id',$id)->paginate(6);
        $categories=Categorie::all()->take(4);

        return view('annoncecat', compact('annonces','categories'));
    }


}
