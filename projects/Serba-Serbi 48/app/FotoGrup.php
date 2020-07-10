<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoGrup extends Model
{
    protected $table = "foto_grup";
    protected $fillable = ['foto_id', 'grup_id'];
}