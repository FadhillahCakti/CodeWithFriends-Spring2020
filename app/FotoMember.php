<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoMember extends Model
{
    protected $table = "foto_member";
    protected $fillable = ['foto_id', 'member_id'];
}