<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Monitoria;
use App\Models\Curso;
use App\Models\Disciplina;


class MonitoriaController extends Controller
{
    //
    public function getIndex(){
      
          $monitores = Monitoria::where('situacao', '=', '1')->paginate(6);
       foreach($monitores as $monitor){
             $monitor->curso = Curso::where('id_curso', '=', $monitor->id_curso)->first();
          $monitor->disciplina = Disciplina::where('codigo', '=', $monitor->id_disciplina)->first();
           
       }
        //  dd($noticia);
      //  dd($carros);["name" => "josé"]
        return  view("pages.monitoria", compact("monitores"));
    
    }
    
   
    
    public function missingMethod($params = array()){
        
        return "Erro 404, não econtrado página de monitoria!";
    }
}
