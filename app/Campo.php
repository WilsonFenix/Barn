<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Campo extends Model
{
    protected $primaryKey = 'campo_id';
    protected $table = "campo";
    public $timestamps = false;
}
