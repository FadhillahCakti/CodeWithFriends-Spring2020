<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
    protected $table = "grup";
    protected $fillable = ['nama'];
    public function foto () 
    {
        return $this->belongsToMany ('App\Foto');
    }

    public function info () 
    {
        return $this->belongsToMany ('App\Info');
    }
}