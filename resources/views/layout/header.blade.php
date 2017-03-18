<?php //use App\Http\Controllers\CursoController;?>
    <header class="topo">
            <div class="container">
                <div class="row">
                    <ul class="list-inline visible-xs text-center">
                        <li><a href="{!! URL::to('/home'); !!}"><img src="{!! asset("assets/img/logo_fatecbb.png") !!}" class="img-responsive pull-left topo_img_wrap" alt="Logo da Fatec Bebedouro possuidor de link que redireciona para a página inicial."></a></li>
                        <li><a href="http://www.centropaulasouza.sp.gov.br/" target="_blank"><img src="{!! asset("assets/img/logo_cps.png") !!}" class="img-responsive pull-left" alt="Logo do Centro Paula Souza possuidor de link que redireciona para seu site."></a></li>
                    </ul>
                    <ul class="list-inline hidden-xs">
                        <li><a href="{!! URL::to('/home'); !!}"><img src="{!! asset("assets/img/logo_fatecbb.png") !!}" class="img-responsive pull-left topo_img_wrap" alt="Logo da Fatec Bebedouro possuidor de link que redireciona para a página inicial."></a></li>
                        <li><a href="http://www.cps.sp.gov.br/" target="_blank"><img src="{!! asset("assets/img/logo_cps.png") !!}" class="img-responsive pull-left" alt="Logo do Centro Paula Souza possuidor de link que redireciona para seu site."></a></li>
                    </ul>
                </div>
            </div>
        </header>
	  <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacao_fatecbb" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navegacao_fatecbb">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A Unidade <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        	<li><a href="{!! URL::to('/comissao-implantacao'); !!}">Comissão de Implantação</a></li>
                        	<li><a href="{!! URL::to('/noticia/categoria/concursos/3'); !!}">Concursos</a></li>
                        	<li><a href="{!! URL::to('/diretoria-academica'); !!}">Diretoria Acadêmica</a></li>
                        	<li><a href="{!! URL::to('/diretoria-servicos'); !!}">Diretoria de Serviços</a></li>
                            <li><a href="{!! URL::to('/sobre'); !!}">Sobre</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{!! URL::to('/fale-conosco'); !!}">Fale Conosco</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                      <?php //$cursos = CursoController::cursos(); ?>

                            @foreach($cursos as $curso)
                           <li><a href="{!! URL::to('/curso/e/'); !!}/{!!  $curso->linkCurso; !!}/{!!  $curso->id_curso; !!}">  {!!  $curso->nome_curso; !!}  </a></li>
                               @endforeach



                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços Acadêmicos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{!! URL::to('/biblioteca'); !!}">Biblioteca</a></li>
                            <li><a href="{!! URL::to('/calendario'); !!}">Matriz Curricular Logística</a></li>
                            <li><a href="{!! URL::to('/monitores'); !!}">Monitoria</a></li>
                            <li><a href="https://www.sigacentropaulasouza.com.br/aluno">Siga</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{!! URL::to('/noticia/noticias'); !!}">Fatec na Mídia</a></li>
                            <li><a href="{!! URL::to('/noticia/categoria/oportunidades-de-estagio/4'); !!}">Oportunidades de Estágio</a></li>
                        </ul>
                    </li>
                    <li><a href="http://vestibularfatec.com.br" target="_blank">Vestibular</a></li>
                
                </ul>
                <ul class="nav navbar-nav navbar-right visible-sm">
        			<li><a href="#"><div class="navegacao_pesquisa"></div></a></li>
        		</ul>
        		<ul class="list-inline list-unstyled navegacao_acessoFacil hidden-xs hidden-sm navbar-right">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="navegacao_siga"></div></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://www.sigacentropaulasouza.com.br/aluno" target="_blank">Acesso alunos</a></li>
                            <li><a href="https://www.sigacentropaulasouza.com.br/fatec/login.aspx" target="_blank">Acesso professor</a></li>
                        </ul>
                    </li>
                    <li alt="Biblioceteps"><a href="http://biblioceeteps.com.br" target="_blank" alt="Biblioceteps"><div class="navegacao_biblioteca"alt="Biblioceteps"></div></a></li>
                     <li><a href="//login.microsoftonline.com" target="_blank" alt="Acessar o E-mail Institucional" title="Acessar o E-mail Institucional" style="color: black;"><i class="glyphicon glyphicon-envelope"></i></a></li>
                    <!--<li><a ><div class="navegacao_pesquisa"></div></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
