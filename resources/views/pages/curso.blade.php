@extends('layout.default')
@section('content')
@section('scripts')
<script type="text/javascript">
var APP_URL = {!! json_encode(url('/')) !!}

</script>
        <script src="{!! asset("assets/scripts/getdocentes.js") !!}"></script>

    @endsection
	<!-- Modal Matriz Curricular -->
	<div class="modal fade" id="MatrizCurricular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
                <div class="partes">
                    <div class="parte1">
                        <section id="materias">
                             <a class="titulomodal">Matérias</a>
                            <ul class="tab1">

                                <li><a href="#Materia1" class="tab1links">Materia 1</a></li>

                            </ul>
                        </section>
                    </div>
                    <div class="parte2">
                        <section id="semestres">
                            <ul class="tab">
                                 @foreach($semestre as $item)
                                <li><a href="#Semestre"  class="semestre-acao tablinks" id="{!! $item->id_semestre !!}">{!! $item->indice !!}º Semestre</a></li>
                                @endforeach
                            </ul>
                        </section>
                        <section id="ementa">
                           <h1 class="text-center titulo">Fatec Bebedouro</h1>
            	           <p class="text-center desct">Clique no menu lateral para navegar entre as disciplinas e no menu horizontal á cima para navegar entre os semestres.</p>
                        </section>
                    </div>
                </div>
			  </div>
		  </div>
	   </div>
    </div>

<!-- Modal Covalidacao -->
	<div class="modal fade" id="Covalidacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">Convalidação de estágio</h1>
				</div>
				<div class="modal-body">
				<hr>
                    <p>A <b>CONVALIDAÇÃO DE ESTÁGIO</b>, também chamada de <b>APROVEITAMENTO DE ESTÁGIO</b> ou <b>EQUIVALÊNCIA DE ESTÁGIO</b> refere-se aos casos em que o aluno exerce emprego com registro em Carteira Profissional ou casos de trabalho autônomo ou de prestação de serviços devidamente regularizado junto aos órgãos competentes, <b>desenvolvendo atividades compatíveis com o curso</b>.</p>
                    <p>Se você se enquadra nessa situação, para convalidar seu estágio, você precisará providenciar:</p>
                    <ul>
                       <li><b>Cópias autenticadas da sua Carteira de Trabalho:</b></li>
                          <ul>
                             <li>a) Página onde consta a identificação - foto do empregado (frente e verso);</li>
                             <li>b) Página onde consta o contrato de trabalho (função, remuneração, etc);</li>
                             <li>c) Todas as eventuais alterações no registro funcional (promoções, mudança de função, etc);</li>
                          </ul>
                       <li><b>Cópia da Ficha de Registro do Empregado</b> (localizada no Livro de Registro de Empregados). Essa é uma cópia simples, não há necessidade de ser autenticada.</li>
                       <li><b>Declaração da empresa especificando as Atividades Desenvolvidas pelo Aluno</b>, constando a data em que o aluno foi admitido pela empresa e as atividades que ele efetivamente desenvolve durante o trabalho. Este documento deve ser em papel timbrado da empresa, com firma reconhecida do funcionário que firmou a declaração (reconhecimento de firma obrigatório) e carimbo da empresa (onde consta o CNPJ e a razão social da mesma). <a href="../../../../estagio/anexo9.doc">(Anexo 9)</a></li>
                       <li><b>Solicitação de Processo de Equivalência a Estágio Supervisionado</b> <a href="../../../../estagio/anexo8.doc">(Anexo 8)</a>, em 1 via.</li>
                       <li><b>Relatório Final de Estágio</b>, descrição pormenorizada de todas as atividades realizadas no período computado para estágio (240 horas), descrevendo ações, atividades desenvolvidas (bem como sua importância e pertinência), metodologias, procedimentos e outras informações relevantes. <a href="../../../../estagio/anexo6.doc">(Anexo 6)</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
<!-- Modal Estágio -->
	<div class="modal fade" id="Estagio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">Informações sobre o estágio</h1>
				</div>
				    <div class="modal-body">
					    <h2>Estágio</h2>
                    <hr>
                    <p>A regulamentação do estágio curricular supervisionado tem por finalidade estabelecer os critérios de realização e validação do estágio dos alunos do curso, bem como suas rotinas, seu processo de acompanhamento e avaliação. De acordo com a Lei nº 11.788, de 25 de setembro de 2008, estágio é o ato educativo curricular supervisionado, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo do estudante, desenvolvida sob supervisão de responsáveis, tanto por parte da empresa concedente quanto por parte da Fatec.

Além de ser um requisito obrigatório para a conclusão do curso de graduação, o estágio se constitui em instrumento de integração, treinamento prático, aperfeiçoamento técnico, cultural, científico e de relacionamento humano. Também é peça importante para a qualificação profissional do aluno, pois durante sua realização ele aplicará seus conhecimentos e, consequentemente adquirirá experiências práticas, o que certamente irá enriquecer e sedimentar o aproveitamento do conteúdo teórico lhe foi oferecido durante o curso.

O programa de estágio é, neste sentido, uma busca pela complementação do ensino e da aprendizagem em conformidade com o conteúdo das disciplinas. Também procura capacitar o aluno na identificação de problemas e na proposição fundamentada de soluções dentro do contexto organizacional empresarial, a partir de uma perspectiva teórico/metodológica/científica.</p><br>
                    <hr>
                    <h1>Documentação para Estágio</h1>
                    <p>Visando facilitar e agilizar a operacionalização dos trâmites legais relativos ao estágio obrigatório e não obrigatório, apresentamos a seguir a documentação necessária para que o procedimento de estágio se inicie regularmente.</p>
		    <p>Se você for realizar o estágio curricular obrigatório (exceto os casos de convalidação de estágio), deverá providenciar a seguinte documentação, cujos modelos encontram-se sob a forma de anexos, disponíveis para consulta.</p>
                    <ol>
                       <li>Duas cópias do <b>Convênio de Concessão;</b> <a href="../../../../estagio/anexo1_convenio.doc">(Anexo 1)</a></li>
                       <li>Três cópias do <b>Termo de Compromisso de Estágio (TCE);</b> <a href="../../../../estagio/anexo2_termo_compromisso.doc">(Anexo 2)</a></li>
                       <li>Três cópias do <b>Plano de Atividades de Estágio (PAE);</b> <a href="../../../../estagio/anexo3_plano_atividades.doc">(Anexo 3)</a></li>
                       <li>Três cópias da <b>Ficha de Início de Estágio;</b> <a href="../../../../estagio/anexo4_ficha_inicio.doc">(Anexo 4)</a></li>
                       <li>Uma cópia da <b>Apólice do Seguro</b> com a devida autenticação bancária ou outro comprovante idôneo de pagamento. <b>Atenção:</b> não será aceita a proposta de seguro, mas somente a APÓLICE assinada, com a devida autenticação bancária.</li>
                    </ol>
                    <p><b>Atenção: PROPOSTA</b> é diferente de <b>APÓLICE</b>. Para a regular tramitação de seus documentos de estágio, deverá ser entregue a APÓLICE, que é obtida junto à seguradora ou prestadora de serviços onde você fez o seu seguro.</p>
                    <p>O PERÍODO DE VIGÊNCIA DA APÓLICE DE SEGURO (INÍCIO E FIM) DEVE ABRANGER <b>TODO O PERÍODO DE REALIZAÇÃO DO SEU ESTÁGIO</b> (INÍCIO E TÉRMINO DO ESTÁGIO).</p>
                    <p>Sem a apresentação dos documentos acima descritos, não há a possibilidade de se iniciar os procedimentos regulares para a realização do estágio. Caso você tenha alguma documentação pendente, providencie a entrega dos documentos faltantes junto à Secretaria, com a maior brevidade possível.</p>
                    <p><b>Atenção:</b> Em hipótese alguma os documentos serão entregues diretamente do professor, devem ser protocolados na Secretaria Acadêmica para devido registro em livro próprio e trâmite administrativo interno.</p>
                    <p>Após a entrega da documentação descrita anteriormente e realização das atividades na empresa conveniada, você deverá apresentar os seguintes documentos para análise e eventual conclusão de seu estágio:</p>
                    <ol>
                       <li><b>Ficha de Avaliação de Desempenho do Estagiário</b>, devidamente preenchida pela Empresa; (Anexo 7)</li>
                       <li><b>Declaração de Horas Estagiadas</b>, documento preenchido pela Empresa, onde deverá constar o <b>PERÍODO</b> em que foi realizado o Estágio (data inicial e data final), bem como a <b>QUANTIDADE TOTAL DAS HORAS ESTAGIADAS E UMA BREVE DESCRIÇÃO DAS ATIVIDADES DESENVOLVIDAS</b> (em 1 via). <b>Atenção:</b> Nesta declaração deverá constar obrigatoriamente o CARIMBO DA EMPRESA, onde pode-se verificar o CNPJ e a razão social da mesma. (Anexo 9). <b>Deverá ainda ser reconhecida em Cartório a assinatura do responsável pela empresa que assinar a declaração.</b></li>
                       <li><b>1º Relatório:</b> Relatório Parcial (ao final das primeiras 120 horas) - deve incluir a descrição pormenorizada das atividades realizadas nas primeiras 120 horas já realizadas. (Anexo 5)</li>
                       <li><b>2º Relatório:</b> Relatório Final (ao final das 240 horas totais). (Anexo 6). O <b>Relatório Final</b> deve incluir a descrição pormenorizada das atividades apresentadas no relatório anterior (parcial) e as atividades relativas às 120 horas (ou mais, se houver) finais, contemplando, portanto, as 240 horas mínimas obrigatórias.</li>
                    </ol>
                    @foreach($estagioManuais as $item)
                <p>   <a href="../../../../painel\paginas\cadastros\pdf/{!! $item->link !!}" target="_blank">  {!! $item->nome !!}</a></p>
                 @endforeach
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
<!-- Modal Covalidacao -->
	<div class="modal fade" id="Prazos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">Prazos de entrega da documentação</h1>
				</div>
				<div class="modal-body">
					    <h2>Estágio</h2>
                    <hr>
                    <h4>

                      @foreach($estagioData as $item)
                     <p>Data para entrega de documentação do estágio: {!! $item->data !!}</p>
                     @endforeach
                    </h4>

                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
<!-- Modal prazos -->
	<div class="modal fade" id="TrabalhoConclusaoPrazos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">Prazos para entrega do Trabalho de Conclusão de Curso</h1>
				</div>
				<div class="modal-body">
					        <h2>TCC</h2>
                    <hr>
                    <h4>

                      @foreach($tccDatas as $item)
                      <p> Data final de entrega: {!!  $item->dt_entfinal !!} </p>
                      <p> Data de entrega anteprojeto: {!!  $item->dt_fimanti !!} </p>
                      <p> Data inicial das apresentações: {!!  $item->dt_iniap !!} </p>
                      <p> Data final das apresentações: {!!  $item->dt_fimap !!} </p><br>
                     @endforeach
                    </h4>

                </div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
    </div>
   <!-- Modal modelos -->
	<div class="modal fade" id="TrabalhoConclusaoModelos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title text-center" id="myModalLabel">Modelos para confecção do Trabalho de Conclusão de Curso</h1>
				</div>
				<div class="modal-body">
					       <h2>TCC</h2>
                    <hr>
                    <h4>

                      @foreach($tccManuais as $item)
                  <a href="../../../../painel\paginas\cadastros\pdf/{!! $item->arquivo !!}" target="_blank">  <center>{!!  $item->nome !!} </center></a>
                     @endforeach

                    </h4>
                </div>
				</div>
				<div class="modal-footer">
					<ul class="pager">
						<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Próxima Informação</a></li>
					</ul>
				</div>
			</div>
    </div>

     <section class="container">
        <header class="banner_curso">
        	<div class="row">
            	<h1 class="text-center">{!! $curso->nome_curso !!}</h1>
            	<p class="text-center hidden-xs">{!! $curso->descricao_curso  !!}</p>
            	<input type="hidden" id="idCurso" value="{!! $curso->id_curso !!}" >
                 <input type="hidden" name="_token" id="token" value="{{{ Session::getToken() }}}">
                <div class="text-center">
                  <!--  <a class="btn btn-default noticias_btn_saibamais banner_curso_button" href="#" role="button">INSCREVA-SE</a> -->
                </div>
            </div>
        </header>
    </section>
    <section class="container" role="main">
        <div class="curso_info">
        	<div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs text-center">
                        <li><a href="#tab_sobre" data-toggle="tab">SOBRE</a></li>
                        <li><a href="#tab_corpodocente" data-toggle="tab">CORPO DOCENTE</a></li>
                        <li><a href="#tab_matrizcurricular" data-toggle="tab">MATRIZ CURRICULAR</a></li>
                        <li><a href="#tab_estagio" data-toggle="tab">ESTÁGIO</a></li>
                        <li><a href="#tab_tcc" data-toggle="tab">TCC</a></li>
                        <li><a href="#tab_faq" data-toggle="tab">FAQ</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab_sobre">
                        	<div class="curso_info_sobre_content col-sm-12">
			                	<div class="col-sm-8">

				                	<h2>CURSO SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</h2><br>
				                	<h2>O que o aluno de Logística estuda</h2>
				                	<p>O estudante de Logística da Fatec Bebedouro aprende a determinar custos como fretes e tributos,
				                	planejar rotas de transporte e entrega de mercadorias de maneira eficiente, com qualidade, dentro do prazo estabelecido 
				                	e a preços competitivos. Por isso, são importantes as disciplinas de Cálculo, Estatística, Matemática Financeira, 
				                	economia e Finanças Empresariais.</p>
				                	<p>O aluno também estuda meios de transporte, suas características e vantagens, aprende a fazer a gestão de estoques, a 
				                	planejar embalagens de produtos que facilitem o armazenamento e a distribuição, bem como a explorar softwares de
				                	simulação de cargas e roteiros. Gestão, Comércio Exterior, Logística Internacional, Inglês e Espanhol complementam o
				                	currículo.</p><br>
				                	<h2>O que o profissional de Logística faz</h2>
				                	<p>
				                	<ul>
				                	   <li>Gerencia o fluxo de produtos ou pessoas em uma empresa.</li>
				                	   <li>Cuida da aquisição, do recebimento, da armazenagem, da distribuição e do transporte de produtos, bem como do 
				                	   controle e processamento de pedidos.</li>
				                	   <li>Define a quantidade e o tipo dos veículos necessários às entregas.</li>
				                	   <li>Planeja a organização e a ordem dos produtos em caminhões ou containers.</li>
				                	   <li>Determina o roteiro de entrega de produtos.</li>
				                	   <li>Planeja a melhor localização estratégica para estabelecer estoques.</li>
				                	   <li>Pode atuar na ordenação do fluxo de atendimento ao público em hospitais e postos
				                	   de serviço. Pode atuar também em indústrias e fábricas, determinando a disposição de equipamentos e setores de 
				                	   produção, a fim de melhorar a produtividade e evitar desperdícios e retrabalho.</li>
				                	   <li>Em geral, o profissional de Logística inicia a carreira em funções de armazenagem,
				                	   estocagem e inventário de produtos.</li>
				                	 </ul>
				                	 </p>
				                	 <h2>Onde o profissional de Logística pode trabalhar</h2>
				                	 <p>Existe um extenso campo de trabalho na área da Logística, que inclui indústrias,
				                	 supermercados, lojas, hospitais, órgãos públicos de mobilidade urbana, empresas
				                	 especializadas (operadores logísticos), empresas da área de transportes e empresas
				                	 de comércio eletrônico. Cada vez mais os serviços de Logística têm sido terceirizados,
				                	 o que abre espaço para empresas especializadas do setor.</p><br>
                                    <div class="curso_info_sobre_content_borda"></div>
				                	<p class="text-center"><strong>DURAÇÃO:</strong> {!! $curso->duracao_semestres !!} semestres</p>
				                	<p class="text-center"><strong>VAGAS:</strong> {!! $curso->vagas !!} (por semestre)</p>
				                	<p class="text-center"><strong>GRAU:</strong> Tecnológico</p>
				                	<p class="text-center wrap"><strong>MODALIDADE:</strong> {!!  $curso->modalidade = $curso->modalidade == "P" ?  "Presencial" : "EAD"  !!}</p>


			                	</div>
			                	<div class="col-sm-4 curso_info_sobre_content_coordenadora">
				                	<p class="text-center">Prof. 
									 @if ($cordenador->titulacao === "M")
                                      MSc
                                    @elseif ($cordenador->titulacao === "D")
                                       Dr(a)
                                     @elseif ($cordenador->titulacao === "E")
                                        Esp.
	
                                    @endif
									
									{!!  $cordenador->nomecompleto !!}</p>
				                	<img src="../../../../painel/fotos/docentes/{!! $cordenador->foto !!}" class="img-responsive center-block" alt="Foto do coordenador do curso de {!! $curso->nome_curso !!}">
				                	<p class="text-center">
                                  
                                    </p>
			                	</div>
			                </div>
                        </div>
                        <div class="tab-pane fade" id="tab_corpodocente">
                        	<div class="curso_info_corpodocente_content_sm col-sm-12">
			                    <div id="container-docentes">
                                </div>


			                </div>
                        </div>
                        <div class="tab-pane fade" id="tab_matrizcurricular">
                        <a href="#MatrizCurricular" rel="modal" data-toggle="modal" data-target="#MatrizCurricular" style= "Color:#333">
                             @foreach($semestre as $item)
                            <div class="col-xs-2 col-sm-2 text-center">
                                <div class="div-semestre semestre-acao" id="{!! $item->id_semestre !!}">
                                    <div class="div-semestre-nome">
                                        {!! $item->indice !!}º Semestre
                                    </div>
                                </div>
                            </div>
                       @endforeach
                        </a>
                        </div>
                     <div class="tab-pane fade" id="tab_estagio">
                            <h2>Sobre o estágio</h2>
                            <p>A regulamentação do estágio curricular supervisionado tem por finalidade estabelecer os critérios de realização e validação do estágio dos alunos do curso, bem como suas rotinas, seu processo de acompanhamento e avaliação. De acordo com a Lei nº 11.788, de 25 de setembro de 2008, estágio é o ato educativo curricular supervisionado, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo do estudante, desenvolvida sob supervisão de responsáveis, tanto por parte da empresa concedente quanto por parte da Fatec.<br>

Além de ser um requisito obrigatório para a conclusão do curso de graduação, o estágio se constitui em instrumento de integração, treinamento prático, aperfeiçoamento técnico, cultural, científico e de relacionamento humano. Também é peça importante para a qualificação profissional do aluno, pois durante sua realização ele aplicará seus conhecimentos e, consequentemente adquirirá experiências práticas, o que certamente irá enriquecer e sedimentar o aproveitamento do conteúdo teórico lhe foi oferecido durante o curso.<br>

O programa de estágio é, neste sentido, uma busca pela complementação do ensino e da aprendizagem em conformidade com o conteúdo das disciplinas. Também procura capacitar o aluno na identificação de problemas e na proposição fundamentada de soluções dentro do contexto organizacional empresarial, a partir de uma perspectiva teórico/metodológica/científica. </p>
                            <div class="curso_info_corpodocente_content_sm col-sm-12 text-center">
                            <a href="#Estagio" rel="modal" data-toggle="modal" data-target="#Estagio" style= "Color:#333">
                                <div class="col-xs-2 col-sm-2 text-center">
                                    <div class="div-tcc">
                                        <div class="div-tcc-nome">
                                            <br><br>ESTÁGIO <br>
                                        </div>
                                    </div>
                                </div>
                                 </a>
                                   <a href="#Covalidacao" rel="modal" data-toggle="modal" data-target="#Covalidacao" style= "Color:#333">
                                 <div class="col-xs-2 col-sm-2 text-center">
                                    <div class="div-tcc">
                                        <div class="div-tcc-nome">
                                            <br><br>CONVALIDAÇÃO<br>
                                        </div>
                                    </div>
                                </div>
                                  </a>
                               <a href="#Prazos" rel="modal" data-toggle="modal" data-target="#Prazos" style= "Color:#333">
                                <div class="col-xs-2 col-sm-2 text-center">
                                    <div class="div-tcc">
                                        <div class="div-tcc-nome">
                                            <br><br>PRAZOS<br>
                                        </div>
                                    </div>
                                </div>
                             </a>
                            </div>
                        </div>
                          <div class="tab-pane fade" id="tab_tcc">
                             <h2> Sobre o trabalho de graduação</h2>
Um trabalho de conclusão de curso de graduação é uma etapa obrigatória para o término do curso, muito importante no âmbito acadêmico. Ele se constitui de um trabalho único, com conteúdo aprofundado, capaz de mostrar problemas e apresentar soluções, como também o desenvolvimento de novas abordagens, a fim de contribuir para o desenvolvimento e crescimento da área estudada, da profissão escolhida e do nível de conhecimentos teóricos e práticos do aluno.<br><br>

Ao término da elaboração do trabalho de conclusão, o aluno realizará a exposição através de uma arguição a uma banca de professores, expondo as motivações para elaboração de seu trabalho, seu processo de pesquisa e seus resultados.<br><br>

O aluno deverá expor um pôster sobre seu trabalho à comunidade acadêmica (conforme Manuais e Modelos), durante o período em que sua arguição for agendada.<br><br>

Após a arguição, o professor orientador deverá entregar ao aluno as cópias dos membros da banca, para que possa realizar as correções necessárias.<br><br>

<h2>Prazos após apresentação</h2>
Depois de apresentar seu trabalho, o aluno tem 30 dias de prazo para providenciar as correções sugeridas pelos professores membros da banca. Transcorrido esse período, o aluno:<br><br>

Deverá imprimir uma cópia do trabalho de graduação em modo econômico, sem encadernação;<br>
Dirigir-se à Coordenação de Cursos para preencher o Requerimento para a última fase do processo de avaliação do trabalho.<br>
                            <a href="#TrabalhoConclusaoPrazos" rel="modal" data-toggle="modal" data-target="#TrabalhoConclusaoPrazos" style= "Color:#333">

                            <div class="col-xs-2 col-sm-2 text-center">
                                <div class="div-tcc">
                                    <div class="div-tcc-nome">
                                          <br><br>Prazos de<br> entrega
                                    </div>
                                </div>
                            </div>
                                 </a>
                               <a href="#TrabalhoConclusaoModelos" rel="modal" data-toggle="modal" data-target="#TrabalhoConclusaoModelos" style= "Color:#333">
                            <div class="col-xs-2 col-sm-2 text-center">
                                <div class="div-tcc">
                                    <div class="div-tcc-nome">
                                        <br><br>Manuais e <br>modelos
                                    </div>
                                </div>
                            </div>
                             </a>

                        </div>
                           <div class="tab-pane fade" id="tab_faq">
                             <h2> Perguntas frequentes</h2>

  <div class="list-group panel">
   @foreach($faq as $item)
    <a href="#demo{!! $item->id_faq !!}" class="list-group-item " data-toggle="collapse" data-parent="#MainMenu">{!! $item->pergunta !!}</a>
    <div class="collapse" id="demo{!! $item->id_faq !!}">
      <div class="list-group-item">{!! $item->resposta !!}</div>

    </div>
       @endforeach
  </div>


Caso tenha mais alguma dúvida, por favor entre em contato pelo e-mail: contato@fatecbb.edu.br<br>


                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </section>
@stop
