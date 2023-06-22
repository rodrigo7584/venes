<?php 
include './parts/head.php';
include './parts/checkout-header.php';
?>
<main class="checkout checkout-resumo">
  <?php 
    $estagioPagamento = "resumo";
    include './parts/checkout-timeline.php'
  ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="titulo">Estamos quase lá!</h1>
        <h2 class="subtitulo">Confira se os certificados adicionados para pagamento no seu carrinho estão corretos.</h2>
        <div class="itens-subtotal checkout-conteudo">
          <div class="itens">
            <div class="item">
              <div class="thumb">
                <img src="./img/crianca-com-tinta-nas-maos.png" alt="">
              </div>
              <div class="informacoes">
                <button class="bt-remover"><span>remover</span> <img src="./img/icone-x.svg" alt=""></button>
                <div class="container-informacoes">
                  <h3 class="nome-item">Educação infantil e inclusiva</h3>
                  <h4 class="descricao-item">Taxa para emissão de certificado digital</h4>
                  <span class="valor">R$ 28,70</span>
                </div>
              </div>
            </div>
            <a href="#" class="bt-adicionar">+ ADICIONAR MAIS CERTIFICADOS</a>
          </div>
          <div class="subtotal">
            <div class="container-subtotal">
              <span class="titulo-subtotal">Resumo do Pedido</span>
              <hr>
              <div class="linha-subtotal">
                <span>Subtotal</span>
                <span class="valor-subtotal">R$ 57,40</span>
              </div>
              <div class="linha-total">
                <span>Total</span>
                <span class="valor-total">R$ 28,70</span>
              </div>
              <hr>
              <form action="#" class="form-cupom">
                <input type="text" placeholder="Cupom de desconto">
                <button type="submit">Adicionar</button>  
              </form>
              <span class="cupom-adicionado"></span>
            </div>
           <a href="#" class="bt-laranja-redondo bt-ver-todas-formas-pagamento">VER FORMAS DE PAGAMENTO</a>
          </div>

        </div>
        <p class="texto-rodape">Você está em um ambiente 100% seguro e criptografado.</p>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/foot.php';
?>