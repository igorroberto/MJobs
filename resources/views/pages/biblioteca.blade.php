@extends('layout.default')
@section('content')
	 <section class="container">
        <div class="sobre">
            <header class="row">
                <h1 class="col-md-12 text-center">Biblioteca</h1>
            </header>
            <div class="row sobre_conteudo">
                <div class="col-md-12">
               <h2> Biblioteca</h2>
A biblioteca  da Fatec de Bebedouro está a serviço dos estudantes e dos docentes da faculdade. Na sua coleção estão refletidas as matérias lecionadas no curso de Logística. A documentação é de caráter científico e técnico e é permanentemente atualizada através das frequentes aquisições.<br>

A biblioteca da Fatec de Bebedouro tem por objetivos principais: apoiar o ensino e a investigação e promover o hábito de leitura de seus alunos.<br>
                </div>
                <div class="col-md-12 sobre_contTexto">
                    <h3>Informações úteis</h3>
                    <ul>
                         <li>Para consulta online ao acervo, acesse biblioceeteps.com.br;</li>
                        <li>Computadores para realização de consultas ao acervo estão disponíveis na biblioteca;</li>
                        <li>A sala para leitura e estudos conta com mesas para estudo e um ambiente tranquilo e agradável;</li>
                        <li>Durante o uso da sala de estudos, permaneça em silêncio, para não perturbar os demais usuários;</li>
                        <li>Não é permitido o consumo de alimentos ou líquidos no interior da biblioteca, tanto na sala de arquivo quanto da sala de estudo;</li>
                        <li>Não é permita a entrada com bolsas e mochilas no interior da biblioteca, devendo o usuário deixar estes materiais no armário disponibilizado para esta função;</li>
                        <li>A biblioteca não é responsável por valores ou pertences deixados em suas dependências;</li>
                    </ul>
                </div>
                <div class="row">
                <div class="col-md-6 sobre_contImg text-center">
                    <img src="{!! asset("assets/img/biblioteca-1.jpg") !!}" style="max-height: 294px;"class="img-responsive" alt="Foto do Campus da Fatec Bebedouro">
                </div>
                     <div class="col-md-6 sobre_contImg">
                    <img src="{!! asset("assets/img/biblioteca-2.jpg") !!}" class="img-responsive" alt="Foto do Campus da Fatec Bebedouro">
                </div>
                </div>
                 
                <div class="col-md-12 sobre_contTexto ">
                    <h3>Regras para empréstimos</h3>
                    <ul>
                        <li>Empréstimos de no máximo 3 exemplares por usuário;</li>
                        <li>Prazo máximo para devolução ou renovação é de 7 dias úteis;</li>
                        <li>Renovação impreterivelmente com a apresentação dos exemplares e confirmação mediante a senha do usuário;</li>
                        <li>Devolução efetuada em atraso acarretará na suspensão do direito de empréstimo em 2 dias úteis para cada dia de atraso registrado;</li>
                        <li>Não serão aceitas solicitações de reservas, empréstimos ou renovações via ligação telefônica;</li>
                        <li>Não serão renovados exemplares que constarem solicitação de reserva por outros usuários;</li>
                        <li>Não são passíveis de empréstimo as seguintes categorias de materiais bibliográficos: JORNAIS, REVISTAS, DICIONÁRIOS e material não tombado;</li>
                        <li>Exemplares que possuírem uma etiqueta branca em seu dorso são de uso para consulta interna e não podem ser retirados da biblioteca;</li>
                        <li>Em caso de PERDA, EXTRAVIO ou DANO de itens sob guarda do usuário, este deverá repor os itens integralmente.</li>
                        <li>Os empréstimos são de total responsabilidade do usuário registrado, pois somente são autorizados mediante a digitação de senha pessoal intransferível;</li>
                        <li>A senha do usuário é pessoal e intransferível, não devendo ser emprestada para outras pessoas em nenhuma hipótese.</li>
                        
                      
                    </ul>
                </div>
                
               
            </div>
        </div>
    </section>
@stop