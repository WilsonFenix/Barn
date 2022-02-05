<?php
namespace App\Http\Controllers;

use App\Trabalhador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrabalhadorController extends Controller
{
    public function getTable(Request $request){
        $listaTrabalhador = Trabalhador::all();
        return view("pages.TableTrabalhador", compact("listaTrabalhador", "Trabalhador"));
    }

    public function getForm(){
        return view("form.FormTrabalhador");
    }

    public function add(Request $request){
        $trabalhador = Trabalhador::create($request->all());
        return redirect("/TableTrabalhador");
    }

    public function remove(Request $request){
        Trabalhador::where("trabalhador_id",$request->id)->delete();
        return redirect("/TableTrabalhador");
    }

    public function edit(Request $request){
        $trabalhador = Trabalhador::where("trabalhador_id",$request->id)->update($request->all());
    }
}