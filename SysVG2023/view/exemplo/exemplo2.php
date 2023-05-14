<?php
include_once("header.php");
?>
<div class="container">
    <h1> Exemplo 2 </h1>
    <?php
    $i = 0;
    while ($i < 5) {
        echo "$i";
        $i++;
    }
    $b = true;
    $i = 0;
    while ($b) {
        echo "$i";
        $i++;
        if ($i == 5) {
            $b = false;
        };
    }
    do {
        echo "$i";
        $i++;
    } while ($i < 5);

    for ($i = 0; $i < 5; $i++) {
    ?>
        <br>
        <div style="width: 50px;
        height:50px;
        background:#000000;
        border-radius:50%"></div>
    <?php
    }
    ?>
</div>