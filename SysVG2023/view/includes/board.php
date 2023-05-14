<?php
include_once './model/Conexao.class.php';
include_once './model/Entity.class.php';

$vagaEntity = new Entity;

/*foreach($vagaEntity->list("vaga") as $vaga){
  echo "<br>" .$vaga('titulo');
}*/
?>
<div class="container mt-5">
  <!-- vagas -->
  <div class="row">
    <?php foreach ($vagaEntity->list("vaga") as $vaga) { ?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-header <?php if ($vaga['ativo'] == 's') {
                                      echo 'cardBack1';
                                    } else {
                                      echo 'cardBack2';
                                    } ?>"> 
            <h5 class="card-title"></h5>
            <?php echo $vaga['titulo']; ?>
          </div>
          <div class="card-body">
            <p class="card-text">
              <?php echo $vaga['descricao']; ?>
            </p>
          </div>
          <div class="card-footer direita">
            <a href="#" class="btn btn-outline-danger">
              Candidatar
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <br>
  <!-- container -->
</div>