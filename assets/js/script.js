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
                var celular = $(this).find('input[name=celular]').val();
                var assunto = $(this).find('input[name=assunto]').val();
                var id_imovel = $(this).find('input[name=id_imovel]').val();
                var tipoimovel=$(this).find('input[name=tipo_imovel]').val(); 
                $.ajax({
                    url: 'cadastrartenhointeresse',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, assunto: assunto, id_imovel: id_imovel,tipoimovel:tipoimovel},
                    success: function () {
                        alert('cadastrado com sucesso!');
                        $('#myModal').modal('hide');

                    }
                });



            });
            $('#myModal').modal('show');

        }
    });
}


