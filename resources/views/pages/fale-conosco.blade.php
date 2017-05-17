@extends('layout.default')
@section('content')

<section class="container" role="main">

		<div class="sobre">
					<header class="row">
							<h1 class="col-md-12 text-center">FALE CONOSCO</h1>
					</header>
					<div class="row sobre_conteudo">
		@if(Session::has('message'))
	<div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
	</div>
@endif

						 {!! Form::open(['url' => 'enviarEmail', 'action' => 'EmailController@enviar']) !!}
							<div class="col-md-6 sobre_contTexto">
									<p>Seu nome:  {!! Form::text('nome', null,  array('required', 'class'=>'form-control',  'placeholder'=>'Digite seu nome'))!!}</p>
									<p>Seu e-mail: {!! Form::text('email', null,
			array('required',
						'class'=>'form-control',
						'placeholder'=>'Digite seu e-mail')) !!}</p>
									<p>Assunto: {!! Form::text('assunto', null,
			array('required',
						'class'=>'form-control',
						'placeholder'=>'Digite um assunto para sua mensagem')) !!}</p>
									<p>Mensagem:  {!! Form::textarea('mensagem', null,
			array('required',
						'class'=>'form-control',
						'placeholder'=>'Digite sua mensagem')) !!}</p>
						<div class="text-left">

								{!! Form::submit('ENVIAR',
	array('class'=>'btn btn-default sobre_btn_enviar')) !!}
	<h3>Créditos</h3>
	<p><a href="http://bulldoor.esy.es/" target="_blank" >Bulldoor.esy.es/</a></p>
	<p><a href="http://guiataquaritinga.com.br" target="_blank">GuiaTaquaritinga.com.br/</a></p>
						</div>
							</div>
							<div class="col-md-6 sobre_contImg">
									<img src="{!! asset("assets/img/foto_laboratorio.jpg") !!}" class="img-responsive" alt="Foto do Fale Conosco">
							</div>

							{!! Form::close() !!}
					</div>
			</div>
	</section>
@stop
