<?php

namespace App\Http\Controllers;
USE App\Models\Candidat;
USE App\Models\Formation;
USE App\Models\candidat_formation;
use Illuminate\Http\Request;
use DB;
class CandidatController extends Controller
{

        public function vucandidat(){

            return view('candidat');
        }
        public function enregistrer(Request $request){
         $candidat= new Candidat();
            $candidat->nom=$request->nom;
            $candidat->prenom=$request->prenom;
            $candidat->email=$request->email;
            $candidat->age=$request->age;
            $candidat->sexe=$request->sexe;
            $candidat->niveauEtude=$request->niveauEtude;
            $candidat->save();
            return redirect('candidat')
                    ->with('message', 'enregistrement avec Succee!');
        }
        public function liste(){
          $formation= Formation::all();
        //   $candidat= Candidat::all();
          $candidats = Candidat::with('formations')->get();
        //   $candidatformation=candidat_formation::all();

          return view('listecandidat',compact('formation','candidats'));
    }
    public function listechoix(){
        $formation= Formation::all();
        $candidats = Candidat::with('formations')->get();

        return view('choixformation',compact('formation','candidats'));
  }
  public function choixcandidat(Request $request){

    $candidat = Candidat::find($request->input('Candidat_id'));
    $formation = Formation::find($request->input('Formation_id'));

    $candidat->formations()->attach($formation->id);
   
    return redirect('listecandidat');

  }


public function destroy(Request $request)
{
  $candidat = Candidat::findOrFail($request->idcan);

  $candidat->delete();

  return redirect('listecandidat');
}
}
