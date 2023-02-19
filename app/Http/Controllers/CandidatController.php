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
          $candidat= Candidat::all();
        //   $candida= Candidat::all();
          $candidatformation=candidat_formation::all();

          return view('listecandidat',compact('candidat','formation','candidatformation'));
    }
    public function listechoix(){
        $formation= Formation::all();
        return view('choixformation',compact('formation'));
  }
  public function choixcandidat(Request $request){


    $choixform= new candidat_formation;
    $choixform->Formation_id=$request->Formation_id;
    $choixform->Candidat_id=$request->Candidat_id;
    $choixform->save();
    return redirect('listecandidat');

  }


public function destroy(Request $request)
{
  $candidat = Candidat::findOrFail($request->idcan);

  $candidat->delete();

  return redirect('listecandidat');
}
}
