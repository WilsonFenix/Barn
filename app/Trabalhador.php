<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Trabalhador extends Model
{
    protected $primaryKey = 'trabalhador_id';
    protected $table = "trabalhador";
    public $timestamps = false;
}