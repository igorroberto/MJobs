@extends('layout.default')
@section('content')
	<section class="container" role="main">
    	<div class="noticia_conteudo col-lg-12 col-md-12">
    		<h1>{!! $noticia->titulo !!}</h1>
    		<a href="{!! URL::to('/noticia/categoria/'); !!}/{!! $noticia->categoria->linkCategoria !!}/{!! $noticia->categoria->codigo !!}"><button class="btn btn-default" type="submit">{!! $noticia->categoria->descricao !!}</button></a>
    		<h2>Publicado em <?php echo date('d/m/Y', strtotime($noticia->data_pub)); ?></h2>
				<span style="max-width: 500px; float: left;     margin: 10px;">      	<img src="../../../../painel/fotos/noticias/{!! $noticia->foto !!}" class="img-responsive center-block" alt="Foto da notícia {!! $noticia->titulo !!}"></span>
	        <p> {!! $noticia->descricao !!}</p>


    	</div>
    	<div class="outras_noticias col-md-12">

            @foreach($noticiasRelacionadas as $item)
    		<div class="noticia col-md-4">

            		  <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><h1>{!! $item->titulo !!}</h1></a>
            		  <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><p>{!! $item->previa !!}...</p></a>
    		</div>

    		   @endforeach
    	</div>

    </section>
@stop
