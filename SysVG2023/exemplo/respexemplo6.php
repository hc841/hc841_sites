<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo6</h1>
    <?php
    echo "<br>nome:".$_POST["txtnome"];
    echo "<br>curso:".$_POST["selcurso"];

    if(isset($_POST["cbxativo"]) &&
    $_POST["cbxativo"]=="on"){
        echo "<br>ativo";
    }else{
        echo "<br>inativo";
    }
    ?>
</div>