<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = "info";
    protected $fillable = ['gambar', 'judul', 'keterangan','selengkapnya'];
   
 public function grup () 
    {
        return $this->belongsToMany ('App\Grup');
    }

    public function member () 
    {
        return $this->belongsToMany ('App\Member');
    }

}