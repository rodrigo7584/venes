<?php 
include './parts/head.php';
include './parts/checkout-header.php';
?>
<main class="checkout checkout-confirmar">
  <?php 
    $estagioPagamento = "confirmar";
    include './parts/checkout-timeline.php'
  ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">
        <h1 class="titulo">Complete seu cadastro</h1>
        <h2 class="subtitulo">Antes de prosseguir com o pagamento, precisamos saber de algumas informações:</h2>
        <div class="checkout-conteudo">
          <form action="#" class="form-confirmar-cadastro form-branco">
            <div class="row">
              <div class="col-12">
                <label for="nome" class="form-label">
                  NOME COMPLETO
                  <span>ESSE NOME SERÁ EXIBIDO EM SEU CERTIFICADO</span>
                </label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="telefone" class="form-label">TELEFONE CELULAR</label>
                <input type="text" class="form-control" id="telefone">
              </div>
              <div class="col-md-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="bts d-flex justify-content-between">
                  <a href="checkout-resumo.php" class="bt-cinza">voltar</a>
                  <a href="checkout-resumo.php" class="bt-laranja-redondo">PROSSEGUIR</a>
                </div>
              </div>
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/foot.php';
?>