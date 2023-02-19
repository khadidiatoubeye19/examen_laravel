<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class TypeController extends Controller
{
    public function vutype(){

        return view('type');
    }
    public function enregistrer(Request $request){
        $type= new Type();

        $type->libelle=$request->libelle;
        $type->save();
           return redirect('listetype')
                   ->with('message', 'enregistrement avec Succee!');
       }

       public function liste(){
           $type=type::all();
           return view('listetype',compact('type'));
       }


       public function destroy(Request $request)
       {
         $type = Type::findOrFail($request->idtype);

         $type->delete();

         return redirect('listetype');
       }
}


