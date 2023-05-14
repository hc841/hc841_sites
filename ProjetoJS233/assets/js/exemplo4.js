function verificar(){
    if(form1.txtnome.value == ""){
        alert("informe um nome");
        return(false);
    }else{
        form1.txtresultado.value=form1.txtnome.value;
    
        form1.txtnome.value="";
        return(true);
    }
}
function seguir(){
    window.location.href="./exemplo1.html";
}