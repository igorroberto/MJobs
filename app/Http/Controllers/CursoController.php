<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Semestre;
use App\Models\Tcc;
use App\Models\Docente;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use DB;

class CursoController extends Controller
{
    //
    public function getIndex($nome){


        return  "tessss nome $nome id $id";// view("pages.home", compact("carros"));

    }
    public function getE($nome, $id = null){

        if(isset($id)){

          $estagioManuais = DB::select( DB::raw("SELECT estagio.*
              FROM  manuais_estagios AS estagio"));

              $estagioData = DB::select( DB::raw("SELECT estagios.*
                  FROM  data_estagio AS estagios "));

          $tccDatas = DB::select( DB::raw("SELECT tcc.*
              FROM  tcc AS tcc WHERE cod_curso =  $id "));
              $tccManuais = DB::select( DB::raw("SELECT tcc.* FROM  manuais_tcc AS tcc "));

          $semestre = Semestre::all();

             $faq  = DB::table('faq')->where('cod_referencia', '=', $id)->get();

         $curso = Curso::find($id);
           $cordenador = Docente::find($curso->cod_docente);

             return  view("pages.curso", ['curso' => $curso, 'cordenador' => $cordenador, 'semestre' => $semestre, 'faq' => $faq, 'tccDatas' => $tccDatas, 'tccManuais' => $tccManuais, 'estagioData' => $estagioData, 'estagioManuais' => $estagioManuais]);

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

     public function getDisciplinas($idCurso, $idSemestre){

        if(isset($idCurso) && isset($idSemestre)){

       $disciplinas = DB::table('disciplina')
                    ->where('cod_semestre', '=', $idSemestre)
                    ->where('cod_curso', '=', $idCurso)
                    ->get();
//dd($disciplinas);
           return  Response::json($disciplinas);

         }else{

           return redirect('home');
        }

    }
    public function getDisciplina($idDisciplina){

        if(isset($idDisciplina)){



                $disciplina = DB::select( DB::raw("SELECT doc.nomecompleto,  disc.*
                    FROM  docente AS doc
                    INNER JOIN disciplina_docente AS dd
                    ON  doc.id_docente = dd.id_docente and dd.id_disciplina = $idDisciplina
                    INNER JOIN disciplina disc ON disc.codigo = $idDisciplina

                    "));


           return  Response::json($disciplina);

         }else{

           return redirect('home');
        }

    }



    public function missingMethod($params = array()){

        return "Erro 404 nao achei a pGE";
    }
}
