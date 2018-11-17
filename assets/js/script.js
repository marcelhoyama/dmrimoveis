/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

function tenhointeresse(id) {
    $('#Modalvenda').modal('toggle');
    $.ajax({
        url: 'tenhointeresse',
        type: 'POST',
        data: {id: id},
        success: function (html) {
             
            $('#Modalvenda').find('.modal-body').html(html);
            $('#Modalvenda').find('.modal-body').find('form').on('submit', function (e) {
             
                e.preventDefault();
    
                var nome = $(this).find('input[name=nome]').val(); 
               
                
                var email = $(this).find('input[name=email]').val();
                var telefone = $(this).find('input[name=fonefixo]').val();
                var celular = $(this).find('input[name=fone]').val();
                var id_tipo_assunto = $(this).find('input[name=id_tipo_assunto]').val();
                 var tipo_assunto = $(this).find('input[name=tipo_assunto]').val();
                var id_imovel = $(this).find('input[name=id_imovel]').val();
                var id_tipo_imovel = $(this).find('input[name=id_tipo_imovel]').val();
                 var tipo_imovel = $(this).find('input[name=tipo_imovel]').val();
                
                    
                $.ajax({
                    url: 'cadastrartenhointeresse',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, id_tipo_assunto: id_tipo_assunto,tipo_assunto: tipo_assunto, id_imovel: id_imovel, id_tipo_imovel: id_tipo_imovel, tipo_imovel:tipo_imovel},
                    success: function () {
                        
                       alert('Cadastrado com Sucesso!');
                     $('#Modalvenda').modal('hide');

                    }
                });



            });
           

        }
    });
}

function tenhointeresseeditar(id_interessado) {
    $('#Modalvenda').modal('toggle');
    $.ajax({
        url: 'tenhointeressado',
        type: 'POST',
        data: {id_interessado: id_interessado},
        success: function (html) {
            $('#Modalvenda').find('.modal-body').html(html);
            $('#Modalvenda').find('.modal-body').find('form').on('submit', function (e) {
                e.preventDefault();

                var nome = $(this).find('input[name=nome]').val();

                var email = $(this).find('input[name=email]').val();

                var telefone = $(this).find('input[name=telefone]').val();

                var celular = $(this).find('input[name=celular]').val();

                var id_tipo_assunto = $(this).find('select[name=id_tipo_assunto]').val();

                var id_imovel = $(this).find('input[name=id_imovel]').val();

                var id_tipo_imovel = $(this).find('input[name=id_tipo_imovel]').val();

                var status = $(this).find('input[name=status]').val();
                
                var id_tipo_negociacao = $(this).find('select[name=id_tipo_negociacao]').val();

                var id_interessado = $(this).find('input[name=id_interessado]').val();

                $.ajax({
                    url: 'editartenhointeressado',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, id_tipo_assunto: id_tipo_assunto, id_imovel: id_imovel, id_tipo_imovel: id_tipo_imovel, status: status, id_tipo_negociacao:id_tipo_negociacao, id_interessado: id_interessado},
                    success: function () {
                        alert('Alterado com sucesso!');
                     window.location.href=window.location.href;

                    }
                });



            });
            

        }
    });
}

function excluir(id){
     $('#Modalvenda').find('.modal-body').html('Tem certeza que deseja excluir?</br> <button onclick="excluir_interessado('+id+')">Sim </button> <button onclick="fechar()"> Não</button>');
     $('#Modalvenda').modal('toggle');
}

function fechar(){
      $('#Modalvenda').modal('hide');
}

function excluir_interessado(id_interessado){
       $.ajax({
                    url: 'deletartenhointeressado',
                    type: 'POST',
                    data: { id_interessado: id_interessado},
                    success: function () {
                        alert('Excluido com sucesso!');
                     window.location.href=window.location.href;

                    }
                });
}

function excluiranuncio(id,url_foto_principal,codigo){
     $('#Modalexcluir').find('.modal-body').html('<div class="row h4" id="button_excluir">Codigo:'+codigo+'</div><div class="row" id="button_excluir"><img src="upload/fotos_principais/'+url_foto_principal+'" height="100" width="100" class="img-rounded "></div><div class="row" id="button_excluir"><button type="button" class="btn btn-primary" onclick="excluir_anuncio('+id+')">Sim </button> <button type="button" class="btn btn-primary" onclick="fecharanuncio()"> Não</button> </div>');
    
    $('#Modalexcluir').modal('toggle');
}

function excluir_anuncio(id){
    
    $.ajax({
                    url: 'deletarimovel',
                    type: 'GET',
                    data: { id: id},
                    success: function () {
                    
                     window.location.href=window.location.href;
    alert('Excluido com sucesso!');
                    }
                });
}
function fecharanuncio(){
      $('#Modalexcluir').modal('hide');
}


function tenhointeresse(id) {
    $('#Modalvenda').modal('toggle');
    $.ajax({
        url: 'tenhointeresse',
        type: 'POST',
        data: {id: id},
        success: function (html) {
             
            $('#Modalvenda').find('.modal-body').html(html);
            $('#Modalvenda').find('.modal-body').find('form').on('submit', function (e) {
             
                e.preventDefault();
    
                var nome = $(this).find('input[name=nome]').val(); 
                alert('variavel');
                
                var email = $(this).find('input[name=email]').val();
                var telefone = $(this).find('input[name=fonefixo]').val();
                var celular = $(this).find('input[name=fone]').val();
                var id_tipo_assunto = $(this).find('input[name=id_tipo_assunto]').val();
                 var tipo_assunto = $(this).find('input[name=tipo_assunto]').val();
                var id_imovel = $(this).find('input[name=id_imovel]').val();
                var id_tipo_imovel = $(this).find('input[name=id_tipo_imovel]').val();
                 var tipo_imovel = $(this).find('input[name=tipo_imovel]').val();
                
                    
                $.ajax({
                    url: 'cadastrartenhointeresse',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, id_tipo_assunto: id_tipo_assunto,tipo_assunto: tipo_assunto, id_imovel: id_imovel, id_tipo_imovel: id_tipo_imovel, tipo_imovel:tipo_imovel},
                    success: function () {
                        
                       alert('Cadastrado com Sucesso!');
                     $('#Modalvenda').modal('hide');

                    }
                });



            });
           

        }
    });
}

function tenhointeresseeditar(id_interessado) {
    $('#Modalvenda').modal('toggle');
    $.ajax({
        url: 'tenhointeressado',
        type: 'POST',
        data: {id_interessado: id_interessado},
        success: function (html) {
            $('#Modalvenda').find('.modal-body').html(html);
            $('#Modalvenda').find('.modal-body').find('form').on('submit', function (e) {
                e.preventDefault();

                var nome = $(this).find('input[name=nome]').val();

                var email = $(this).find('input[name=email]').val();

                var telefone = $(this).find('input[name=telefone]').val();

                var celular = $(this).find('input[name=celular]').val();

                var id_tipo_assunto = $(this).find('select[name=id_tipo_assunto]').val();

                var id_imovel = $(this).find('input[name=id_imovel]').val();

                var id_tipo_imovel = $(this).find('input[name=id_tipo_imovel]').val();

                var status = $(this).find('input[name=status]').val();
                
                var id_tipo_negociacao = $(this).find('select[name=id_tipo_negociacao]').val();

                var id_interessado = $(this).find('input[name=id_interessado]').val();

                $.ajax({
                    url: 'editartenhointeressado',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, id_tipo_assunto: id_tipo_assunto, id_imovel: id_imovel, id_tipo_imovel: id_tipo_imovel, status: status, id_tipo_negociacao:id_tipo_negociacao, id_interessado: id_interessado},
                    success: function () {
                        alert('Alterado com sucesso!');
                     window.location.href=window.location.href;

                    }
                });



            });
            

        }
    });
}

function excluir(id){
     $('#Modalvenda').find('.modal-body').html('Tem certeza que deseja excluir?</br> <button onclick="excluir_interessado('+id+')">Sim </button> <button onclick="fechar()"> Não</button>');
     $('#Modalvenda').modal('toggle');
}

function fechar(){
      $('#Modalvenda').modal('hide');
}

function excluir_interessado(id_interessado){
       $.ajax({
                    url: 'deletartenhointeressado',
                    type: 'POST',
                    data: { id_interessado: id_interessado},
                    success: function () {
                        alert('Excluido com sucesso!');
                     window.location.href=window.location.href;

                    }
                });
}
