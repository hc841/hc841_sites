<?php
     include_once("header.php");
?>
<div class="container">
    <h1> Formulário GET </h1>
    <form action="respExemplo5.php" method="GET">
        <div class="form-group">
            <label for="txtnome" class="form-label">Nome:</label>
            <input id="txtnome" name="txtnome" class="form-control" type="text" required />
</div>
<div class="form-group">
    <label for="selCurso" class="form-label"></label>
    <select id="selCurso" name="selCurso" class="form-control">
    <option>Escolha um Curso</option>
    <option>Informática</option>
    <option>Automação</option>
    <option>Segurança</option>
    </select>
    <br>
    <div class="form-group">
        <div class="for-check">
            <input type="checkbox"
            class="form-check-input"
            id="cbxaAtivo"
            name="cbxAtivo" />
            <label class="form-check-label">
        </div>

    </div>
    <br>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </form>

</div>