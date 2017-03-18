<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tcc extends Model
{
    //
    protected $table = "tcc";
    protected $primaryKey = "id_tcc";
   protected $dates = ['dob'];
}
