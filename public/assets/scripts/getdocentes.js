var countDocentes = countMatriz =0;

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    var now_tab = e.target // activated tab

    // get the div's id
    var optab = $(now_tab).attr('href').substr(1);
  var idCurso = $("#idCurso").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('#token').val()
        }
    });

  if(optab == "tab_corpodocente"){

      if(countDocentes == 0){

          countDocentes++;


                 $.ajax({

                     url: APP_URL + "/docente/curso/" + idCurso,
                     dataType: "json",
                     type: "GET"
                 }).done(function(res){
                    $("#container-docentes").empty();
                    var container = $("#container-docentes");
                     for(var i in res){

                       var atributo = res[i];
                         var titulacao ="";
if(atributo.titulacao == "D"){
    titulacao = "Dr.(a) ";

}else if(atributo.titulacao == "M"){
     titulacao = "MSc. ";

}else if(atributo.titulacao == "E"){
     titulacao = "Esp. ";

}

                         var bloco = $('<div class="col-sm-3 col-lg-2 text-center wrap id_doc'+ atributo.id_docente+'"></div>');

                     var img = $('<img src="../../../../painel/fotos/docentes/'+atributo.foto+'" class="img-responsive" alt="Foto de um(a) professor(a) do curso de Logística da Fatec Bebedouro.">');

                         var nome = $('<p id="nomeDocente">'+ titulacao + atributo.nomecompleto+'</p>');
                          var lattes = $('<p><a href="'+atributo.docente_lattes+'" target="_blank">Acessar Lattes</a></p>');
                         bloco.append(img).append(nome).append(lattes);
                         container.append(bloco);
                     }


                 }).fail(function(res){

                     alert("erro");
                 });
          }
  }else if(optab =="tab_matrizcurricular"){
      $(".semestre-acao").click(function() {

           $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#token').val()
            }
           });
        var idSemestre = this.id;
          var obj = {
              idCurso: idCurso,
              idSemestre: idSemestre

          };

           $.ajax({

                     url: APP_URL + "/curso/disciplinas/"+idCurso+"/"+idSemestre,
                     dataType: "json",
                     type: "GET"
                 }).done(function(res){
                    $(".tab1").empty();

                    var container = $(".tab1");

                     for(var i in res){

                       var atributo = res[i];

                        var linha = $('<li id="'+ atributo.codigo +'"><span href="#Materia" class="tab1links1" >'+ atributo.nome +'</span></li>');

                         container.append(linha);
                         linha.click(function() {

                               var idDisciplina = this.id;

                $.ajax({

                     url: APP_URL + "/curso/disciplina/"+idDisciplina,
                     dataType: "json",
                     type: "GET"
                 }).done(function(res){
                    $("#ementa").empty();



                     for(var i in res){

                       var atributo = res[i];

                       $("#ementa").append("<h1 class='text-center titulo'>"+atributo.nome +"</h1>");
                         $("#ementa").append("<p class='text-center desct'>Docente responsável: "+atributo.nomecompleto +"</p>");
                         $("#ementa").append("<p class='text-center desct'>"+atributo.ementa +"</p>");
                     }


                 }).fail(function(res){

                     console.log("Erro ao buscar disciplina!");
                 });






          });
                     }


                 }).fail(function(res){

                     console.log("Erro ao buscar disciplinas!");
                 });



      });


  }

});
