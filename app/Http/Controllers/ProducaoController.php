<?php
namespace App\Http\Controllers;

use App\Producao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducaoController extends Controller
{
    public function getTable(Request $request){
        $listaProducao = Producao::all();
        return view("pages.TableProducao", compact("listaProducao", "Producao"));
    }

    public function getForm(){
        return view("form.FormProducao");
    }

    public function add(Request $request){
        $producao = Producao::create($request->all());
        return redirect("/TableProducao");
    }

    public function remove(Request $request){
        Producao::where("producao_id",$request->id)->delete();
        return redirect("/TableProducao");
    }

    public function edit(Request $request){
        $producao = Producao::where("producao_id",$request->id)->update($request->all());
    }
}