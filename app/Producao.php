<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Producao extends Model
{
    protected $primaryKey = 'producao_id';
    protected $table = "producao";
    public $timestamps = false;
}