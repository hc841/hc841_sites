<?php
     include_once("header.php");
?>
<div class="container">
    <?php
    //Cookies
setcookie("NOME_ALUNO","Davi",time()+3600);
setcookie("NOME_CURSO","Informática");

echo "<br>".$_COOKIE["NOME_ALUNO"];
echo "<br>";
print_r($_COOKIE);

//SESSÔES
//abrir uma sessão
session_start();

$_SESSION["usuario"] = "davi.lopes";

echo"<br>Usuário sessão:".$_SESSION["usuario"];

//funções com sessão
echo "<br>Id sessão:".session_id();
echo "<br>Nome sessão:".session_id();

//encodar um sessão
session_encode();
//des encodar uma variável //decifrar
echo "<br>Nome:"
.session_decode($_SESSION["usuario"]);

//apagar itens da sessão
unset($_SESSION["usuario"]);

//apagar tudo que está na sessão
session_unset();
//destruir a sessão //encerrar
session_destroy();


    ?>
</div>