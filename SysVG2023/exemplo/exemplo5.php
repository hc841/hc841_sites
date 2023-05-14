<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo5</h1>
    <form action="respexemplo5.php" method="GET">
        <div class="form-group">
            <label for="txtnome" class="form-label">nome</label>
            <input id="txtnome" name="txtnome" class="form-control" type="text" required />
        </div>
        <div class="form-group">
            <label for="selcurso" class="form-label"></label>
            <select id="selcurso" name="selcurso" class="form-control">
                <option>informatica</option>
                <option>automação</option>
                <option>segurança</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-imput" type="checkbox" id="cbxativo" name="cbxativo">
                <label class="form-check-label">ativo</label>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">botão</button>

    </form>
</div>