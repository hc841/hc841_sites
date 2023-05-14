<?php
     include_once("header.php");
?>
<div class="container">
    <h1> Resposta POST </h1>

    <?php
    echo "<br>Nome:".$_POST["txtnome"];
    echo "<br>Curso:".$_POST["selCurso"];

    if(isset($_POST["cbxAtivo"]) &&
    $_POST["cbxAtivo"]=="on"){
        echo "<BR>Ativo";
    }else{
        echo "<BR>Inativo";
}
    ?>
    </div>
  