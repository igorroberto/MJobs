@extends('layout.default')
@section('content')
	<section class="container" role="main">
    	
    	<div class="outras_noticias col-md-12">
            @foreach($noticias as $item)
    		<div class="noticia col-md-4">
    			 <a href="{!! URL::to('/noticia/categoria/'); !!}/{!! $item->categoria->linkCategoria !!}/{!! $item->categoria->codigo !!}"><button class="btn btn-default" type="submit">{!! $item->categoria->descricao !!}</button></a>
            	  <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><h1>{!! $item->titulo !!}</h1></a>
            	  <a href="{!! URL::to('/noticia/e/'); !!}/{!!  $item->linkNoticia; !!}/{!!  $item->id_noticia; !!}"><p>{!! $item->previa !!}...</p></a>
    		</div>
    		@endforeach
    	</div>
        {!! $noticias->render() !!}
    </section>
@stop