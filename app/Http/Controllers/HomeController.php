<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class HomeController extends Controller
{
    //
    public function getIndex(){
       // $noticias =  NoticiaController::getNoticiasSlide("Home");
      
        //  dd($noticia);
      //  dd($carros);["name" => "josé"]
        return  view("pages.home", compact("noticias"));
    
    }
    
   
    
    public function missingMethod($params = array()){
        
        return "Erro 404 nao achei a pGEaa";
    }
}
