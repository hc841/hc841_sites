<?php
include_once("header.php");
?>
<div class="container">
    <?php

    //cookies
    setcookie("NOME_ALUNO", "Henrique", time() + 3600);
    setcookie("NOME_CURSO", "informática");

    echo "<br>" . $_COOKIE["NOME_ALUNO"];
    print_r($_COOKIE);

    //SESSÕES
    session_start();
    $_SESSION["usuario"] = "Henrique.Chaves";
    echo "<br>Sessão" . $_SESSION["usuario"];

    //funções com sessão
    echo "<br>id sessão" . session_id();
    echo "<br>nome sessão" . session_name();

    //encodar
    session_encode();
    //desencodar
    echo "<br>nome:" . session_decode($_SESSION["usuario"]);

    //apagar itens da sessão
    unset($_SESSION["usuario"]);

    //apagar tudo na sessão
    session_unset();

    //destruir a sessão
    session_destroy();
    ?>
</div>