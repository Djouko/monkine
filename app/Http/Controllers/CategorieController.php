<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::paginate(12);

        return view('admin.dashboard', compact('categories'));
    }

    public function index2()
    {
        $categories = Categorie::paginate(12);

        return view('categorieindex', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createcategorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,gif,png|max:200048',
        ]);

        $categorie = new Categorie();
        $categorie->nom = $request->input('nom');
        $categorie->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Ajout d'une condition pour vérifier le type MIME du fichier
            if (in_array($file->getMimeType(), ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'])) {
                // Le fichier est valide, on le déplace dans le dossier public
                $file->move(public_path('imgCat'), $filename);
                $categorie->image = $filename;
            } else {
                // Le fichier n'est pas valide, on renvoie un message d'erreur
                return redirect()->back()->with('error', 'Le format de l\'image n\'est pas supporté. Veuillez choisir une image au format jpeg, jpg, gif ou png.');
            }
        }
        $categorie->save();

        return redirect()->route('admin.dashboard')->with('success', 'La catégorie a été créée avec succès.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);

        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categorie::find($id);

        return view('admin.editcategorie', compact('category'));
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
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,gif,png|max:200048',
        ]);

        $categorie = Categorie::find($id);
        if ($request->hasFile('image')) {
            // supprimer l'ancienne image si elle existe
            if ($categorie->image) {
                File::delete(public_path('imgCat/' . $categorie->image));
            }
            // enregistrer la nouvelle image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('imgCat'), $filename);
            $categorie->image = $filename;
        }
        $categorie->nom = $request->input('nom');
        $categorie->description = $request->input('description');

        $categorie->save();

        return redirect()->route('admin.dashboard')->with('success', 'La catégorie a été mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        Annonce::where('categorie_id', $id)->delete();
        if ($categorie->image) {
            File::delete(public_path('imgCat/' . $categorie->image));
        }
        $categorie->delete();
        return redirect()->route('admin.dashboard')->with('success', 'La catégorie a été supprimée avec succès.');
    }
}
