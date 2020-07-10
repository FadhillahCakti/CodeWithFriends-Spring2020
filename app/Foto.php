<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = "foto";
    protected $fillable = ['gambar', 'judul', 'jenis','selengkapnya'];
    public function grup () 
    {
        return $this->belongsToMany ('App\Grup');
    }

    public function member () 
    {
        return $this->belongsToMany ('App\Member');
    }
}