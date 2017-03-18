@extends('layout.default')
@section('content')
	<section class="container" role="main">

    	<div class="sobre">
            <header class="row">
                <h1 class="col-md-12 text-center">Diretoria Acadêmica</h1>
            </header>
            <div class="row sobre_conteudo">

                <div class="col-md-6 sobre_contTexto ">
                   <ul>
                        <li>Aproveitamento de estudos (Dispensas)</li>
                        <li>Cancelamento de Matrícula</li>
                        <li>Desistência de Disciplina</li>
                        <li>Inscrição para vagas Remanescentes</li>
                        <li>Trancamento total de Matrícula</li>
                        <li>Transferências</li>
                        <li>Segunda Chamada de Provas</li>
                        <li>Solicitação de declarações</li>
                        <li>Entre outros...</li>
                    </ul>
                </div>
                <div class="col-md-6 sobre_contImg">
                    <img src="{!! asset("assets/img/diracad.jpg") !!}" class="img-responsive" alt="Foto do Campus da Fatec Bebedouro">
                </div>
            </div>
        </div>
    </section>
@stop
