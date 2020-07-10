<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupInfo extends Model
{
    protected $table = "grup_info";
    protected $fillable = ['grup_id', 'info_id'];
}