<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Trabalhador;
use App\Tarefa;

class DashboardController extends Controller
{
    public function index(){
        $listaTarefas = Tarefa::all();
        $listaTopTrabalhador = Trabalhador::orderBy('trabalhador_salrio_base')
                                    ->take(10)
                                    ->get();
        return view("pages.dashboard", compact("listaTarefas", "listaTopTrabalhador"));
    }
}