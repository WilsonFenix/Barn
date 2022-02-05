<?php
namespace App\Http\Controllers;

use App\Tarefa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function getTable(Request $request){
        $listaTarefa = Tarefa::all();
        return view("pages.TableTarefa", compact("listaTarefa", "Tarefa"));
    }

    public function getForm(){
        return view("form.FormTarefa");
    }

    public function add(Request $request){
        $tarefa = Tarefa::create($request->all());
        return redirect("/TableTarefa");
    }

    public function remove(Request $request){
        Tarefa::where("tarefa_id",$request->id)->delete();
        return redirect("/TableTarefa");
    }

    public function edit(Request $request){
        $tarefa = Tarefa::where("tarefa_id",$request->id)->update($request->all());
    }
}