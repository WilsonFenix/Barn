<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    protected $primaryKey = 'usuario_id';
    protected $table = "usuario";
    public $timestamps = false;
}