<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Monitoria;
use App\Models\Curso;
use App\Models\Disciplina;
require('simple_html_dom.php');
class EmpregoController extends Controller
{
    //
    public function getIndex(){
/*
          $monitores = Monitoria::where('situacao', '=', '1')->paginate(6);
       foreach($monitores as $monitor){
             $monitor->curso = Curso::where('id_curso', '=', $monitor->id_curso)->first();
          $monitor->disciplina = Disciplina::where('codigo', '=', $monitor->id_disciplina)->first();

       }*/
        //  dd($noticia);
      //  dd($carros);["name" => "josé"]



// Create DOM from URL or file
$html = file_get_html('https://www.vagas.com.br/vagas-de-sao-paulo?a%5B%5D=24');

// creating an array of elements
$vagas = [];

// Find top ten videos
$i = 1;
foreach ($html->find('section#vagasAbertasHoje div#vagasDeHoje article.vaga') as $vaga) {
       if ($i > 10) {
               break;
       }

       // Find item link element
       $vagaTitulo = $vaga->find('h2.cargo a', 0);

       // get title attribute
       $vagaDesc = $vaga->find('div.detalhes p',0);

      $vagaCargo = $vaga->find('span.emprVaga span[itemprop="occupationalCategory"]',0);

       // get href attribute
      // $videoUrl = 'https://youtube.com' . $videoDetails->href;

       // push to a list of videos
       $vagas[] = [
               'titulo' => $vagaTitulo->title,
               'url' => $vagaTitulo->href,
               'desc' => substr($vagaDesc, 0, 100),
               'cargo' => $vagaCargo
       ];

       $i++;
}

        return  view("pages.empregos", compact("vagas"));

    }



    public function missingMethod($params = array()){

        return "Erro 404, não econtrado página de monitoria!";
    }
}
