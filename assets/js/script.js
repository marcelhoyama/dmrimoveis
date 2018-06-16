/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function tenhointeresse(id) {
    $('#Modalvenda').modal('show');
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
                var telefone = $(this).find('input[name=telefone]').val();
                var celular = $(this).find('input[name=fone]').val();
                var assunto = $(this).find('input[name=assunto]').val();
                var id_imovel = $(this).find('input[name=id_imovel]').val();
                var tipoimovel = $(this).find('input[name=tipo_imovel]').val();
                    
                $.ajax({
                    url: 'cadastrartenhointeresse',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, assunto: assunto, id_imovel: id_imovel, tipoimovel: tipoimovel},
                    success: function () {
                       alert('Cadastrado com Sucesso!');
                        $('#Modalvenda').modal('hide');

                    }
                });



            });
            $('#Modalvenda').modal('show');

        }
    });
}

function tenhointeresseeditar(id) {
    $('#Modalvenda').modal('show');
    $.ajax({
        url: 'tenhointeressado',
        type: 'POST',
        data: {id: id},
        success: function (html) {
            $('#Modalvenda').find('.modal-body').html(html);
            $('#Modalvenda').find('.modal-body').find('form').on('submit', function (e) {
                e.preventDefault();

                var nome = $(this).find('input[name=nome]').val();

                var email = $(this).find('input[name=email]').val();

                var telefone = $(this).find('input[name=telefone]').val();

                var celular = $(this).find('input[name=celular]').val();

                var id_assunto = $(this).find('select[name=id_assunto]').val();

                var codigo_imovel = $(this).find('input[name=codigo_imovel]').val();

                var tipoimovel = $(this).find('input[name=tipoimovel]').val();

                var id_status = $(this).find('select[name=status]').val();

                var id = $(this).find('input[name=id]').val();

                $.ajax({
                    url: 'editartenhointeressado',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, id_assunto: id_assunto, codigo_imovel: codigo_imovel, tipoimovel: tipoimovel, id_status: id_status, id: id},
                    success: function () {
                        alert('Alterado com sucesso!');
                        $('#Modalvenda').modal('hide');

                    }
                });



            });
            $('#Modalvenda').modal('show');

        }
    });
}

