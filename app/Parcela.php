<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Parcela extends Model
{
    protected $primaryKey = 'parcela_id';
    protected $table = "parcela";
    public $timestamps = false;
}