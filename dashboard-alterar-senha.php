<?php 
include './parts/head.php';
include './parts/dashboard-header.php';
$pagina = "senha"
?>
<main class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include './parts/dashboard-menu.php';?>
      </div>
      <div class="col-md-5 dashboard-alterar-senha py-5">
        <h2 class="titulo">
         Alterar Senha
        </h2>
        <form action="#" class="form-alterar-senha form-branco">
          <div class="row">
            <div class="col-12">
              <label for="senha-atual" class="form-label">SENHA ATUAL</label>
              <input type="text" class="form-control" id="senha-atual">
            </div>
            <div class="col-12">
              <label for="nova-senha" class="form-label">NOVA SENHA</label>
              <input type="text" class="form-control" id="nova-senha">
            </div>
            <div class="col-12">
              <label for="confirmar-senha" class="form-label">CONFIRME A NOVA SENHA</label>
              <input type="text" class="form-control" id="confirmar-senha">
            </div>
          </div>
          <button type="submit" class="bt-laranja-redondo bt-salvar-senha">
            SALVAR NOVA SENHA
          </button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>