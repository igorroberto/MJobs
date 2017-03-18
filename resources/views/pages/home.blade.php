@extends('layout.default')
@section('content')
	<!-- Modal -->
	 <?php  $f = $item  =null;  $j=0; error_reporting(0); ?>
     @for ($i=0; $i < count($noticias); $i++)
 <?php

                                       if($i == 0){

                                       $item = $noticias[$i];
                                       }elseif($i > 0 && $i <=2 ){

                                        $noticiaSub[$f] = $noticias[$i];
                                       $f++;
                                       }elseif($i > 2 && $i <= 5){

                                        $noticiaModal[$j] = $noticias[$i];
                                      $j++;
                                       }
                                       ?>
@endfor

    <section class="container" role="main">
        <div class="noticias">
            <header class="row">
                <h1 class="col-md-12 text-center">NOTÍCIAS</h1>
            </header>
            <div class="row">
                <div class="col-md-6 col-sm-6 noticias_principal" style="background-image: url(../painel/fotos/noticias/{!! $item->foto !!});">
                    	<a href="{!! URL::to('/noticia/categoria/'); !!}/{!! $item->categoria->linkCategoria !!}/{!! $item->categoria->codigo !!}"><button class="btn btn-default" type="submit">{!! $item->categoria->descricao !!}</button></a>
                    <div class="noticias_data hidden-xs hidden-sm hidden-md hidden-lg">
                        <span class="dia">21</span>
                        <span class="mes_ano"><p>NOV<br/>2015</p></span>
                    </div>
                    <div class="noticias_link noticia-principal">
                       <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><h1>{!! $item->titulo !!}</h1></a>
                        <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><p>{!! $item->previa !!}...</p></a>

            		</div>
                </div>
                <div class="modal fade" id="MaisNoticias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">NOTÍCIAS</h1>
				</div>
				<div class="modal-body">

                     @foreach ($noticiaModal as $item)



                      <div class="noticias_modal">
	                <a href="{!! URL::to('/noticia/categoria/'); !!}/{!! $item->categoria->linkCategoria !!}/{!! $item->categoria->codigo !!}"><button class="btn btn-default" type="submit">{!! $item->categoria->descricao !!}</button></a>
	                    <div class="noticias_link">
	                     <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><h1>{!! $item->titulo !!}</h1></a>
	                       <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu dictum nisl. Sed gravida est euismod dui faucibus, eu aliquam tellus tincidunt. Nullam id egestas massa, a ultrices risus...</p></a>
	                    </div>
                	</div>

                     @endforeach
				</div>



				<div class="modal-footer">
					<ul class="pager">
						<li class="previous"><a href="{!! URL::to('/noticia/noticias/'); !!}"><span aria-hidden="true">&larr;</span> MAIS ANTIGAS</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
                 @foreach ($noticiaSub as $item)


                       <div class="col-md-6 col-sm-6 noticias_secundaria noticias_secundariaUm">
                           <a href="{!! URL::to('/noticia/categoria/'); !!}/{!! $item->categoria->linkCategoria !!}/{!! $item->categoria->codigo !!}"><button class="btn btn-default" type="submit">{!! $item->categoria->descricao !!}</button></a>
                            <div class="noticias_data hidden-xs hidden-sm hidden-md hidden-lg">
                                <span class="dia">21</span>
                                <span class="mes_ano"><p>NOV<br/>2015</p></span>
                            </div>
                            <div class="noticias_link">
                                <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><h1>{!! $item->titulo !!}</h1></a>

                            </div>
                        </div>
                @endforeach


                <div class="text-right">
                    <button type="button" class="btn btn-default noticias_btn_saibamais notop" data-toggle="modal" data-target="#MaisNoticias">MAIS NOTÍCIAS</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="sobre">
            <header class="row">
                <h1 class="col-md-12 text-center">SOBRE</h1>
            </header>
            <div class="row sobre_conteudo">
                <div class="col-md-6 sobre_contTexto hidden-lg">
                    <p>.</p>
                </div>
                <div class="col-md-6 sobre_contTexto visible-lg">
                   <p>A <b>Faculdade de Tecnologia de Bebedouro</b> é uma das 65 Unidades que oferecem Cursos Superiores de Graduação Tecnológica do Centro Estadual de Educação Tecnológica Paula Souza. Criada em 2014, oferece atualmente o Curso Superior de Tecnologia em Logística de forma gratuita. Neste semestre ingressaram 40 alunos da terceira turma. Situada na cidade de Bebedouro, no interior do Estado de São Paulo, que é considerada a Capital Nacional da Laranja, atualmente busca ser também a Capital Nacional da Logística pela instalação de diversas empresas deste setor na cidade. Este foi um dos motivos determinantes para que a FATEC trouxesse para Bebedouro o Curso Superior de Tecnologia em Logística.</p>
                    <p>A partir de 22 de abril de 2015 através da Lei 15.816/15, a Faculdade de Tecnologia de Bebedouro passa a denominar-se “Jorge Caram Sabbag”, proposta sob o projeto de Lei 569/2014 de autoria do Deputado Estadual Roberto Engler. A homenagem ao comerciante falecido em 2010, uma das figuras mais tradicionais da sociedade bebedourense dos últimos anos, foi motivada especialmente pelo seu trabalho como fundador e grande incentivador da Patrulha Ecológica.</p>
                </div>
                <div class="col-md-6 sobre_contImg">
                    <img src="{!! asset("assets/img/fatec_frente.jpg") !!}" class="img-responsive" alt="Foto do Campus da Fatec Bebedouro">
                </div>

            </div>
        </div>
    </section>
@stop
