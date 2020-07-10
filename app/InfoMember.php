<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMember extends Model
{
    protected $table = "info_member";
    protected $fillable = ['info_id', 'member_id'];
}