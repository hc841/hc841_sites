<?php
     include_once("header.php");
?>
<div class="container">
    <h1> Resposta Get </h1>

    <?php
    echo "<br>Nome:".$_GET["txtnome"];
    echo "<br>Curso:".$_GET["selCurso"];

    if(isset($_GET["cbxAtivo"]) &&
    $_GET["cbxAtivo"]=="on"){
        echo "<BR>Ativo";
    }else{
        echo "<BR>Inativo";
}
    ?>
    </div>
  