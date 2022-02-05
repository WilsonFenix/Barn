<?php
namespace App\Http\Controllers;

use App\Estado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function getTable(Request $request){
        $listaEstado = Estado::all();
        $mensagem = $request->session()->get("mensagem");
        return view("pages.TableEstado", compact("listaEstado", "mensagem", "Estado"));
    }

    public function getForm(){
        return view("form.FormEstado");
    }

    public function add(Request $request){
        $estado = Estado::create($request->all());
        $request->session()->flash('mensagem', 'o estado foi adicionado com sucesso');
        return redirect("/TableEstado");
    }

    public function remove(Request $request){
        Estado::where("estado_id",$request->id)->delete();
        return redirect("/TableEstado");
    }

    public function edit(Request $request){
        $estado = Estado::where("estado_id",$request->id)->update($request->all());
    }
}