@extends('layout.default')
@section('content')
	<section class="container" role="main">

    	<div class="sobre">
            <header class="row">
                <h1 class="col-md-12 text-center">Diretoria de Serviços</h1>
            </header>
            <div class="row sobre_conteudo">

               <div class="col-md-6 sobre_contTexto">
                    <p align="justify">Setor responsável por todo processo administrativo através de atividades relativas à admissão, contratação de pessoal, concessão de benefícios, rescisão de contrato, manutenção, zeladoria, conservação de patrimônio, compras e vigilância.</p>
                    <p><b>Diretora de Serviços Administrativos:</b> Valéria Bernuzzi<br>
                    <b>E-mail:</b> f280adm@cps.sp.gov.br</p>
                    <p><b>Almoxarife:</b> Aline Beatriz Ramos Luz<br>
                    <b>E-mail:</b> aline.luz@fatecbb.edu.br</p>                    
                    <p><b>Assistente Administrativa:</b> Luiza Facco Silva<br>
                    <b>E-mail:</b> luiza.facco@fatecbb.edu.br</p>
                </div>
                <div class="col-md-6 sobre_contImg">
                    <img src="{!! asset("assets/img/dirservicos.jpg") !!}" class="img-responsive" alt="Foto do Campus da Fatec Bebedouro">
                </div>
            </div>
        </div>
    </section>
@stop
