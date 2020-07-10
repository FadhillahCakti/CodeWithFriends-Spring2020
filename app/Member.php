<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";
    protected $fillable = ['nama'];
    public function info () 
    {
        return $this->belongsToMany ('App\Info');
    }

    public function foto () 
    {
        return $this->belongsToMany ('App\Foto');
    }
}