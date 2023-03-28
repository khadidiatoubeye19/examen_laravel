<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referenciel;
USE App\Models\candidat_formation;
use Illuminate\Http\Request;
use DB;
use League\CommonMark\Reference\Reference;

class FormationController extends Controller
{
    public function index(){
        $referenciel=Referenciel::all();
         $formation=Formation::all();

        // $buy->codec()->attach()
        $nbref = DB::table('Referenciels')->count();
        foreach($referenciel as $ref){
        $nbformation[] = DB::table('formations')
        ->where('Referenciel_id',$ref->id)->count();

        $libelle[]=$ref->libelle;

        $data_nb[]=array(
              'libelle'=>$ref->libelle,
 );
        }
        $nbcandidatF = DB::table('candidats')
        ->where('sexe','femelle')->count();
        $nbcandidatM = DB::table('candidats')
        ->where('sexe','male')->count();

        $encours = DB::table('formations')
        ->where('isStarted',1)->count();
        $attente = DB::table('formations')
        ->where('isStarted',0)->count();

        foreach($formation as $form){

        $nbcandidat[] = DB::table('candidat_formations')
        ->where('Formation_id',$form->id)->count();
        $nomcandidat[]=$form->nom;

        }
        // dd($nbcandidat);
       $datas=range(15,40,5);
       $tabs_x=[];$tabs_y=[];
       for($i=0;$i<count($datas)-1;$i++){
        $tabs_y[]=$datas[$i].'-'.$datas[$i+1];

        $tabs_x[] = DB::table('Candidats')
        ->whereBetween('age', [$datas[$i], $datas[$i+1]])->count();
    }
        return view('home',
                    compact('nbformation',
                            'referenciel',
                            'data_nb',
                            'nbref',
                            'libelle',
                            'nbcandidatF',
                            'nbcandidatM',
                            'nbcandidat',
                            'nomcandidat',
                            'tabs_x',
                            'tabs_y',
                            'encours',
                           'attente'));
    }

        public function vuformation(){
            $referenciel=Referenciel::all();

            return view('formation',compact('referenciel'));
        }
        public function enregistrer(Request $request){
            $this->validate($request, [
                'date_debut' => 'required|date|after:yesterday',
            ]);
         $formation= new Formation;
            $formation->nom=$request->nom;
            $formation->description=$request->description;
            $formation->duree=$request->duree;
            $formation->date_debut=$request->date_debut;
            $formation->Referenciel_id=$request->Referenciel_id;
            $formation->isStarted=$request->isStarted  == 'on' ? 1 : 0;
            $formation->save();

            return redirect('liste')
                    ->with('message', 'enregistrement avec Succee!');
        }
        public function liste(){
            // $formation=Formation::all();
            $formation=Formation::with('referenciel')->get();
            $referenciel=Referenciel::all();
            // $formation = formation::all();
            // if($formation->date_debut >date( "Y-m-d")){
            //     $formation->isStarted==0;
            // $formation->update();
            // }
            // foreach ($formation as $m){
            // dd($formation);
            return view('listeformation',compact('formation','referenciel'));
        }

public function destroy(Request $request)
{
  $formation = formation::findOrFail($request->idformation);

  $formation->delete();

  return redirect('liste');
}

public function update()
  {
    $formation = formation::all();
    $formation->isStarted==0;
    if($formation->date_debut >date( "Y-m-d")){
    $formation->update();
    }

  }
  
}
