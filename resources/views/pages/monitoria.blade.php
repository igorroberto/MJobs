@extends('layout.default')
@section('content')
<?php error_reporting(0);?>
	<section class="container" role="main">
    	
    	<div class="outras_noticias col-md-12">
            @foreach($monitores as $item)
   
    		<div class="noticia col-md-4">
                <img src="../painel/fotos/monitores/{!! $item->foto !!}" class="img-responsive" style="max-width:  100%; max-height: 150px"><br>
    			 <button class="btn btn-default" type="submit" onclick="window.location.href='mailto:{!! $item->email !!}'">RA: {!! $item->ra !!}</button>
                 <button class="btn btn-default" type="submit" onclick="window.location.href='mailto:{!! $item->email !!}'">E-mail: {!! $item->email !!}</button>
            	<h1>{!! $item->nomecompleto !!}</h1>
            	<p>Horário de atendimento: {!! $item->horarios !!}</p>
                <p>Curso: {!! $item->curso->nome_curso !!}</p>
                <p>Disciplina: {!! $item->disciplina->nome !!}</p>
    		</div>
    		@endforeach
    	</div>
        {!! $monitores->render() !!}
    </section>
@stop
