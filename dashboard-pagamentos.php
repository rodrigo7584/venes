<?php 
include './parts/head.php';
include './parts/dashboard-header.php';
$pagina="pagamentos"
?>
<main class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include './parts/dashboard-menu.php';?>
      </div>
      <div class="col-md-9 dashboard-pagamentos py-5">
        <h2 class="titulo">
         Pagamentos
        </h2>
        <div class="pagamentos">
          <div class="pagamento">
            <div class="header-pagamento">
              <button class="bt-abrir">
                +
              </button>
              <h3 class="descricao">Cuidador de pessoas com deficiência física</h3>
            </div>
            <div class="conteudo-pagamento">
              <table class="tabela-pagamento">
                <thead>
                  <tr>
                    <th>Cod</th>
                    <th>Data</th>
                    <th>Forma de Pagamento</th>
                    <th>Situação</th>
                    <th>Valor</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cod">404409</td>
                    <td class="data">16/05/2023 21:48:36</td>
                    <td class="forma-pagamento">cartão</td>
                    <td class="situacao">Aguardando Pagamento</td>
                    <td class="valor">R$ 28,70</td>
                    <td class="botao">
                      <button class="bt-detalhes-pagamento" data-button-modal="modal-mais-detalhes-pagamento">
                        Mais detalhes
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="pagamento">
            <div class="header-pagamento">
              <button class="bt-abrir">
                +
              </button>
              <h3 class="descricao">Cuidador de pessoas com deficiência física</h3>
            </div>
            <div class="conteudo-pagamento">
              <table class="tabela-pagamento">
                <thead>
                  <tr>
                    <th class="cod">Cod</th>
                    <th class="data">Data</th>
                    <th class="forma-pagamento">Forma de Pagamento</th>
                    <th class="situacao">Situação</th>
                    <th class="valor">Valor</th>
                    <th class="botao"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>404409</td>
                    <td>16/05/2023 21:48:36</td>
                    <td>cartão</td>
                    <td>Aguardando Pagamento.</td>
                    <td>R$ 28,70</td>
                    <td>
                      <button class="bt-detalhes-pagamento" data-button-modal="modal-mais-detalhes-pagamento">
                        Mais detalhes
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<dialog class="dialog-modal dialog-modal-mais-detalhes-pagamento" data-dialog-modal="modal-mais-detalhes-pagamento">
  <div class="header-dialog-modal">
    <h1 class="modal-titulo">DETALHES DA COMPRA</h1>
    <button class="bt-fechar" data-dialog-modal="modal-close">
      <img src="./img/icone-x.svg" alt="">
    </button>
  </div>
  <hr>
  <div class="dialog-content">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="titulo">INFORMAÇÕES DO PRODUTO</h4>
        <h5 class="titulo-pequeno">Produto:</h5>
        <p>Cuidador de pessoas com deficiência física</p>
        <h5 class="titulo-pequeno">Carga horária:</h5>
        <p>80 horas</p>
        <h5 class="titulo-pequeno">Modalidade aquisição</h5>
        <p>Taxa para emissão de certificado digital</p>
      </div>
      <div class="col-sm-6">
        <h4 class="titulo">INFORMAÇÕES DO PAGAMENTO</h4>
        <h5 class="titulo-pequeno">Valor:</h5>
        <p>R$ 28,70</p>
        <h5 class="titulo-pequeno">Transação:</h5>
        <p>Lorem ipsum</p>
        <h5 class="titulo-pequeno">Status do pagamento:</h5>
        <p>Aguardando Pagamento</p>
        <h5 class="titulo-pequeno">Forma de pagamento:</h5>
        <p>Cartão</p>
        <h5 class="titulo-pequeno">Parcelas:</h5>
        <p>3x</p>
      </div>
    </div>
  </div>
  <div class="footer-dialog-modal" data-dialog-modal="modal-close">
    <button class="bt-cinza bt-fechar">
    fechar
    </button>
  </div>
</dialog>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>