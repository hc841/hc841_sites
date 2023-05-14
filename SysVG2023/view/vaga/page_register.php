<?php
include_once 'header.php';
?>
<h2 class="text-center">Cadastro de Oportunidades</h2>
<form>
    <div class="container">
        <div class="form">
            <div class="form-group">
                Titulo:
                <input type="text" class="form-control" name="titulo" placeholder="Título" required autofocus>
            </div>
            <div class="form-group">
                Descrição:
                <input type="text" class="form-control" name="descricao" placeholder="Descrição" required>
            </div>
            <div class="form-group">
                Ativo:
                <div class="radio-item">
                    <input type="radio" id="AtivoA" name="ativo" value="s" checked>
                    <label for="AtivoA">Ativo</label>
                </div>
                <div class="radio-item">
                    <input type="radio" id="AtivoB" name="ativo" value="n">
                    <label for="AtivoB">Inativo</label>
                </div>               
            </div>
            <div class="form-group">
                Data:
                <input type="date" class="form-control" name="data" placeholder="Data" style="width: 40%" required>
            </div>
            <button class="btn btn-outline-danger btn-lg">
                Inserir
            </button>
            <a href="boardAdm.php" class="btn btn-outline-danger btn-lg">Voltar</a>
        </div>
    </div>
</form>