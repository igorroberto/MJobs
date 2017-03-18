<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Http\Requests;
use DB;

class NoticiaController extends Controller
{
    //
    public function getIndex($nome){


        return  "tessss nome $nome id $id";// view("pages.home", compact("carros"));

    }
    public function getE($nome, $id = null){

        if(isset($id)){

         $noticia = Noticia::find($id);

          $noticia->categoria = Categoria::where('codigo', '=', $noticia->cod_categoria)->first();

            $noticiasRelacionadas = Noticia::where('cod_categoria', '=',  $noticia->categoria->codigo)->orderBy('id_noticia', 'desc')->take(3)->get();
               $noticia->categoria->linkCategoria = str_slug($noticia->categoria->descricao, '-');
             foreach($noticiasRelacionadas as $noticias){
                  $noticias->linkNoticia = str_slug($noticias->titulo, '-');
				    $noticias->previa =  substr($noticias->descricao, 0, 100);
             }





             return  view("pages.noticia", compact("noticia"), compact("noticiasRelacionadas"));

         }else{

           return redirect('home');
        }

    }

    public static function getNoticias($chamada = null){

         $noticias =   Noticia::where('situacao', '=', '1')->paginate(3);
        foreach($noticias as $noticia){

            $noticia->linkNoticia = str_slug($noticia->titulo, '-');
             $noticia->categoria = Categoria::where('codigo', '=', $noticia->cod_categoria)->first();
             $noticia->categoria->linkCategoria = str_slug($noticia->categoria->descricao, '-');
			  $noticia->previa =  substr($noticia->descricao, 0, 100);
        }

        if($chamada != null){

            return $noticias;

        }else{
             return  view("pages.noticias", compact("noticias"));

        }



    }

    public static function getNoticiasSlide($chamada = null){

         $noticias =   Noticia::where('situacao', '=', '1')->orderBy('id_noticia', 'desc')->get();
        foreach($noticias as $noticia){

            $noticia->linkNoticia = str_slug($noticia->titulo, '-');
             $noticia->categoria = Categoria::where('codigo', '=', $noticia->cod_categoria)->first();
             $noticia->categoria->linkCategoria = str_slug($noticia->categoria->descricao, '-');
             $noticia->previa =  substr($noticia->descricao, 0, 100);
        }

        if($chamada != null){

            return $noticias;

        }else{
             return  view("pages.noticias", compact("noticias"));

        }



    }

      public function getCategoria($nome, $id = null){

          if(isset($id)){
                $noticias =   Noticia::where('cod_categoria', '=', $id)->where('situacao', '=', '1')->paginate(6);
                foreach($noticias as $noticia){
$noticia->linkNoticia = str_slug($noticia->titulo, '-');
                
				    $noticia->previa =  substr($noticia->descricao, 0, 100);
                }
                return  view("pages.categoria", compact("noticias"));
          }else{

           return redirect('home');
        }


    }



    public function missingMethod($params = array()){

        return "Erro 404 nao achei a pGE";
    }
}
