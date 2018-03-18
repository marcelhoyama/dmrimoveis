function validarcpf(e){
   // if(document.form.nome.value==""){
     //   alert("");
   //     document.form.nome.focus();
  //      return false;
  //  }
    //jquery
    //# = id
    //. =class
    //"tag" = "tag"
    jQuery(function(){
     if( jQuery("#cpf").val().length >11){
         jQuery('#cpf').html(' No máximo são 11 Numeros! ');
     };
        
        
    });
    /*  if(document.form.cpf.value.length >11){
        alert("Caracteres de Numeros passou do permitido!");
        document.form.cpf.focus();
        return false;
}

 if(document.form.cpf.value.length <11){
        alert("Esta faltando Numeros!");
        document.form.cpf.focus();
        return false;
}/*/
}


