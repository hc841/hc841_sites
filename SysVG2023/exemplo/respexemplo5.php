<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo6</h1>
    <?php
    echo "<br>nome:".$_GET["txtnome"];
    echo "<br>curso:".$_GET["selcurso"];

    if(isset($_GET["cbxativo"]) &&
    $_GET["cbxativo"]=="on"){
        echo "<br>ativo";
    }else{
        echo "<br>inativo";
    }
    ?>
</div>