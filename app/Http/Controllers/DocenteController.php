<?php

namespace App\Http\Controllers;


use App\Models\Curso;
use App\Models\Docente;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use DB;

class DocenteController extends Controller
{
    //
   
    public function getCurso($id){
        
        if(isset($id)){
            
          
       
        $docentes = DB::select( DB::raw("SELECT DISTINCT doc.nomecompleto, doc.id_docente, doc.foto, doc.docente_lattes, doc.titulacao 
                    FROM  docente AS doc
                    INNER JOIN disciplina_docente AS cd 
                    ON  doc.id_docente = cd.id_docente
					INNER JOIN disciplina AS d ON d.cod_curso = $id
					WHERE situacao = 1

                    "));
           
             return  Response::json($docentes);
            
         }else{
            
           return redirect('home');
        }
     
    }
    
    public static function cursos(){
        $cursos =   Curso::all();
        foreach($cursos as $curso){
            
            $curso->linkCurso = str_slug($curso->nome_curso, '-');
        }
        
            return $cursos;
    }
    
    
    
    public function missingMethod($params = array()){
        
        return "Erro 404 nao achei a docentegge";
    }
}
