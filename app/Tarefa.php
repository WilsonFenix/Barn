<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Tarefa extends Model
{
    protected $primaryKey = 'tarefa_id';
    protected $table = "tarefa";
    public $timestamps = false;
}