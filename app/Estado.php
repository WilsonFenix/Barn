<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    protected $primaryKey = 'estado_id';
    protected $table = "estado";
    public $timestamps = false;
    protected $fillable = ['mensagem', 'estado_nome', 'estado_descricao'];
}