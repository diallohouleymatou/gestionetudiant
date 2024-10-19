<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function Acceuil(){
        $etudiants=Etudiant::all();
        return view('Acceuil',['etudiants'=>$etudiants]);
    }
public function Ajouter(Request $request){
    if ($request->isMethod('post')){
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();
        
    return  redirect()->route('Acceuil');
    
    }
    return view('Ajouter');
}



public function Modifier(Request $request, $id)
{
   
    $etudiant = Etudiant::findOrFail($id);

   
    if ($request->isMethod('post')) {
        
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->classe = $request->classe;
        
      
        $etudiant->save();
        
        return redirect('/');
    }

   
    return view('Modifier', compact('etudiant'));
}

public function Supprimer ($id){
   $etudiant=Etudiant::find($id);
   Etudiant::destroy($etudiant->id);
    return redirect('/');

}

}
