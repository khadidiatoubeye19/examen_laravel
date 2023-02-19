<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\Referenciel;
use App\Models\Type;
use Illuminate\Http\Request;

class ReferencielController extends Controller

{


        public function vureferenciel(){
            $type=Type::all();

            return view('referenciel',compact('type'));

        }
        public function enregistrer(Request $request){
            $referenciel= new Referenciel();
               $referenciel->libelle=$request->libelle;
               $referenciel->horaire=$request->horaire;
               $referenciel->valider=$request->valider;
               $referenciel->type_id=$request->type_id;

               $referenciel->save();
               return redirect('listereferenciel')
                       ->with('message', 'enregistrement avec Succee!');
           }

           public function liste(){
               $referenciel=Referenciel::all();
               $type=Type::all();
               return view('listereferenciel',compact('referenciel','type'));
           }


           public function destroy(Request $request)
           {
             $referenciel= Referenciel::findOrFail($request->idreferenciel);

             $referenciel->delete();

             return redirect('listereferenciel');
           }
}
