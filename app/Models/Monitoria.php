<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoria extends Model
{
    //
    protected $table = "monitores";
    protected $primaryKey = "id_monitor";
    public $curso;
    public $diciplina;
  
  
}
