

$(function () {
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#fone').mask('(00) 00000-0000');
    $('#fonefixo').mask('(00) 0000-0000');
    $('#cep').mask('00.000-000');
    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#valor2').mask('000.000.000.000.000,00', {reverse: true});
    $('#metro').mask('000.000,00', {reverse: true});
     $('#metro2').mask('000.000,00', {reverse: true});
    
    
   
});

$(document).ready(function (){
   
    $('#cadastrarclientes').validate({
        
        rules:{
            cpf:{required:true,cpfBR:true},
            nome:{required:true,isString:true},
            telefone:"required",
            email:true
                
            
        },
        messages:{
            
            
        }
    });
    
     
    $('#cadastrarfiador').validate({
        
        rules:{
            cpf:{required:true,cpfBR:true},
            nome:{required:true,isString:true},
            telefone:"required",
            email:true
                
            
        },
        messages:{
          
                
            
        }
    });
    
     $('#cadastrarimovel').validate({
        
        rules:{
            tipovia:{required:true},
            endereco:{required:true,isString:true},
            numero:"required",
            bairro:"required",
            cidade:"required",
            estado:"required",
            tipoimovel:"required"
                
            
        },
        messages:{
          
                
            
        }
    });
    
     $('#cadastrarinquilino').validate({
        
        rules:{
             cpf:{required:true,cpfBR:true},
            nome:{required:true,isString:true},
            telefone:"required",
            email:true
                
            
        },
        messages:{
          
                
            
        }
    });
    
       $('#cadastrarcontato').validate({
        
        rules:{
             celular:{required:true},
            nome:{required:true,isString:true},
            telefone:"required",
            assunto:"required",
            tipoimovel:"required",
            
            email:{email:true,required:true}
                
            
        },
        messages:{
          
                
            
        }
    }); 
    
     $('#editarcliente').validate({
        
        rules:{
            cpf:{required:true,cpfBR:true},
            nome:{required:true,isString:true},
            celular:"required",
            email:true
                
            
        },
        messages:{
            
            
        }
    });
    
     $('#editarfiador').validate({
        
        rules:{
            cpf:{required:true,cpfBR:true},
            nome:{required:true,isString:true},
            telefone:"required",
             email:true
                
            
        },
        messages:{
          
                
            
        }
    });
    
    $('#editarimovel').validate({
        
        rules:{
            tipovia:{required:true},
            endereco:{required:true,isString:true},
            numero:"required",
            bairro:{required:true,isString:true},
            cidade:{required:true,isString:true},
            estado:{required:true,isString:true},
            tipoimovel:"required"
                
            
        },
        messages:{
          
                
            
        }
    });
});
