<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        $categories=Categorie::all();

        return view('admin.blog', compact('annonces','categories'));
    }
    public function index2()
    {
        $annonces = Annonce::paginate(5);
        $categories=Categorie::all();

        return view('annonceindex', compact('annonces','categories'));
    }


    public function findByCategoty($id)
    {
        $categories=Categorie::all();
        $annonces=Categorie::find($id)->annonces;

        return view('admin.blog', compact('annonces','categories'));
    }


    public function indexannonces()
    {
        $annonces = Annonce::all();

        return view('admin.indexannonces', compact('annonces'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('admin.createannonce', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'prix' => 'nullable|numeric|min:10',
            'categorie_id'=>'required',
        ]);


        $annonce = new Annonce();

        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        if ($request->file('fichier')) {
            $file = $request->file('fichier');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('imgannonce'), $filename);
            $annonce->fichier = $filename;
        }
        $annonce->prix = $request->input('prix');
        $annonce->date_annonce = now();
        $annonce->user_id = auth()->user()->id;
        $annonce->categorie_id = $request->input('categorie_id');

        $annonce->save();

        return redirect()->route('admin.indexannonces')->with('success', 'L\'annonce a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::find($id);

        return view('annonceshow', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::find($id);
        $categories = Categorie::all();

        return view('admin.editannonce', compact('annonce', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'titre' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'prix' => 'nullable|numeric|min:0',
        ]);

        $annonce = Annonce::find($id);

        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        $annonce->prix = $request->input('prix');
        $annonce->user_id = auth()->user()->id;
        $annonce->categorie_id = $request->input('categorie_id');
        if ($request->hasFile('fichier')) {
            // supprimer l'ancienne image si elle existe
            if ($annonce->fichier) {
                File::delete(public_path('imgannonce/' . $annonce->fichier));
            }
            // enregistrer la nouvelle image
            $file = $request->file('fichier');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('imgannonce'), $filename);
            $annonce->fichier = $filename;
        }
        $annonce->save();

        return redirect()->route('admin.indexannonces')->with('success', 'L\'annonce a été modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
*/
public function destroy($id)
{
    $annonce = Annonce::find($id);
    if ($annonce->fichier) {
        File::delete(public_path('imgannonce/' . $annonce->fichier));
    }
    $annonce->delete();

    return redirect()->route('admin.indexannonces')->with('success', 'L\'annonce a été supprimée avec succès.');
}
}
