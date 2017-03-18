<?php use App\Http\Controllers\CursoController;?>
 <?php //$cursos = CursoController::cursos(); ?>
<footer class="container-fluid">
    	<section class="container">
	        <section class="row footer_mapa">
	            <section class="col-md-3 col-sm-4 col-xs-12 footer_mapa_cont">
	                <h2>A Unidade</h2>
	                <a href="{!! URL::to('/comissao-implantacao'); !!}">Comissão de Implantação</a><br/>
	                <a href="{!! URL::to('/noticia/categoria/concursos/3'); !!}">Concursos</a><br/>
	                <a href="{!! URL::to('/diretoria-academica'); !!}">Diretoria Acadêmica</a><br/>
	                <a href="{!! URL::to('/diretoria-servicos'); !!}">Diretoria de Serviços</a><br/>
	                <a href="{!! URL::to('/fale-conosco'); !!}">Fale conosco</a>
	            </section>
	            <section class="col-md-3 hidden-sm col-xs-12 footer_mapa_cont">
	                <h2>Cursos</h2>
	                @foreach($cursos as $curso)
                      <a href="{!! URL::to('/curso/e/'); !!}/{!!  $curso->linkCurso; !!}/{!!  $curso->id_curso; !!}">  {!!  $curso->nome_curso; !!}  </a><br>
                    @endforeach
	            </section>
	            <section class="col-md-3 col-sm-4 col-xs-12 footer_mapa_cont">
	                <h2>Servicos Acadêmicos</h2>
	                <a href="{!! URL::to('/biblioteca'); !!}">Biblioteca</a><br/>
	                <a href="{!! URL::to('/calendario'); !!}">Matriz Curricular</a><br/>
	                <a href="//login.microsoftonline.com" target="_blank">E-mail Institucional</a><br/>
	                <a href="{!! URL::to('/monitores'); !!}">Monitoria</a><br/>
	                <a href="https://www.sigacentropaulasouza.com.br/aluno/login.aspx" target="_blank">Siga - Alunos</a><br/>
	            </section>
	            <section class="col-sm-4 visible-sm footer_mapa_cont">
	                <h2>Cursos</h2>
                    
                           
                @foreach($cursos as $curso)
                    <a href="{!! URL::to('/curso/e/'); !!}/{!!  $curso->linkCurso; !!}/{!!  $curso->id_curso; !!}">  {!!  $curso->nome_curso; !!}  </a><br>
                @endforeach
	              
	                <h2>Notícias</h2>
	                <a href="{!! URL::to('/noticia/noticias'); !!}">Fatec na Mídia</a><br/>
	                <a href="{!! URL::to('/noticia/categoria/oportunidades-de-estagio/4'); !!}">Oportunidades de Estágio</a>
	                <h2><a href="https://www.vestibularfatec.com.br/home/">Vestibular</a></h2>
	            </section>
	            <section class="col-md-3 hidden-sm col-xs-12 footer_mapa_cont wrap_mobile">
	                <h2>Notícias</h2>
	                <a href="{!! URL::to('/noticia/noticias'); !!}">Fatec na Mídia</a><br/>
	                <a href="{!! URL::to('/noticia/categoria/oportunidades-de-estagio/4'); !!}">Oportunidades de Estágio</a>
	            </section>
	            <section class="col-md-3 hidden-sm col-xs-12 footer_mapa_cont">
	            	<h2><a href="http://vestibularfatec.com.br" target="_blank">Vestibular</a></h2>
	            </section>
	        </section>
			<!--
	        <section class="row">
	        	<div class="cod-md-12 footer_newsletter">
	        		<h1 class="text-center">RECEBA NOVIDADES</h1>
	        		<div class="input-group col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-lg-offset-4 col-lg-4 text-center">
	  					<input type="text" class="form-control" placeholder="Digite aqui o seu e-mail." aria-describedby="#noticias_newsletter">
	  					<span class="input-group-addon" id="noticias_newsletter"><a href="#"><img src="{!! asset("assets/img/icon_sendmail.png") !!}" alt="Botão para confirmar o cadastro do e-mail para receber novidades da FATEC BB."></span></a>
					</div>
	        	</div>
	        </section> -->
	        <section class="row">
                <div class="footer_social">
                    <ul class="list-inline list-unstyled text-center">
                        <li><a href="https://pt-br.facebook.com/Fatec-Bebedouro-776448995805903/?ref=page_internal" target="_blank"><img src="{!! asset("assets/img/icon_fb.png") !!}" class="img-responsive" alt="Ícone que redireciona para a página do Facebook"></a></li>
                       
                    </ul>               
                </div>
	        </section>
        </section>
        <section class="row">
        	<div class="container-fluid footer_info">
        		<div class="container">
        			<div class="col-sm-7 col-md-7 col-lg-8">
	        			<p>Copyright <?php echo date("Y");?> <br/> Desenvolvido pelo Grupo de Pesquisa em Engenharia de Software (GPES) da Fatec Taquaritinga <br> <a href="{!! URL::to('/creditos'); !!}" class="btn btn-default">Créditos</a></p>
						 
	        		</div>
	        		<div class="col-sm-5 col-md-5 col-lg-4">
	        			<address>
							Fatec Bebedouro<br>
					  		Rua Dr. Oscar Weneck, 1286 - Centro<br>
					  		Bebedouro - SP | CEP: 14.701-120<br>
					  		Fone: (17) 3343-5395 / 3343-5397
						</address>
	        		</div>
        		</div>
        	</div>
	    </section>
    </footer>
   