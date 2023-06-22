<?php 
include './parts/head.php';
include './parts/checkout-header.php';
?>
<main class="checkout checkout-pagamento">
  <?php 
    $estagioPagamento = "pagamento";
    include './parts/checkout-timeline.php'
  ?>
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h1 class="titulo">Meios de Pagamentos:</h1>
        <h2 class="subtitulo">Escolha uma das opções abaixo para finalizar</h2>
        <div class="checkout-conteudo">
          <div class="menu-pagamento">
            <button class="item-menu-pagamento" data-botao-pagamento="pix">
              <img src="./img/icone-pix.svg" alt="" class="icone"> 
              Pix
            </button>
            <button class="item-menu-pagamento" data-botao-pagamento="cartao">
              <img src="./img/icone-cartao-credito.svg" alt="" class="icone">
              CARTÃO DE CRÉDITO
            </button>
            <button class="item-menu-pagamento" data-botao-pagamento="boleto">
              <img src="./img/icone-codigo-barras.svg" alt="" class="icone">
              BOLETO BANCÁRIO
            </button>
          </div>
          <?php 
          include './parts/pagamento-pix.php'; 
          include './parts/pagamento-cartao.php';
          include './parts/pagamento-boleto.php';
          ?>
        </div>
        <p class="texto-rodape">Você está em um ambiente 100% seguro e criptografado.</p>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/foot.php';
?>