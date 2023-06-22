<?php 
include './parts/head.php';
include './parts/dashboard-header.php';
$pagina="certificados"
?>
<main class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include './parts/dashboard-menu.php';?>
      </div>
      <div class="col-md-9 dashboard-certificados py-5">
        <h2 class="titulo">
         Meus certificados
        </h2>
        <div class="certificados">
          <div class="certificado">
            <h3 class="titulo-certificado">EDUCAÇÃO INFANTIL E INCLUSIVA</h3>
            <span class="carga-certificado">100H</span>
            <span class="status-certificado status-aprovado">Pagamento aprovado</span>
            <button class="bt-laranja-redondo bt-emitir" data-button-modal="modal-emitir">emitir</button>
          </div>
          <div class="certificado">
            <h3 class="titulo-certificado">EDUCAÇÃO INFANTIL E INCLUSIVA</h3>
            <span class="carga-certificado">100H</span>
            <span class="status-certificado status-aguardando">Aguardando Pagamento</span>
            <button class="bt-cinza bt-emitir" disabled>emitir</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<dialog class="dialog-modal dialog-modal-emitir-certificado" data-dialog-modal="modal-emitir" >
  <div class="header-dialog-modal">
    <h1 class="modal-titulo">CERTIFICADO</h1>
    <button class="bt-fechar" data-dialog-modal="modal-close">
      <img src="./img/icone-x.svg" alt="">
    </button>
  </div>
  <div class="dialog-content">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="foto-certificados">
          <img src="./img/certificados-solo.png" alt="" class="certificados">
        </div>
        <h3 class="titulo-pequeno">
        Parabéns, você já pode
        solicitar o seu certificado!
        </h3>
        <p>Você concluiu este curso com sucesso e sua nota na avalição foi 6.</p>
        <p>Para ter acesso ao seu certificado do curso de Cuidador de pessoas
        com deficiência física faz-se necessário apenas efetuar o
        pagamento de uma taxa de emissão.</p>
        <p><strong>Este certificado é útil para:</strong></p>
        <div class="row">
          <div class="col-sm-6">
              <ul class="lista-checks-v2">
              <li>Prova de títulos;</li>
              <li>Apresentar na Faculdade;</li>
              <li>Concursos Públicos;</li>
              <li>Progressão Funcional;</li>
              <li>Ampliar o seu currículo;</li>
              <li>Apresentar na empresa ou órgão;</li>
              <li>E muito mais.</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="precos">
              <p class="preco-antigo">De: R$ 57,40</p>
              <p class="preco-novo">R$ 28,70</p>
              <p class="parcelas">ou 3x de R$ 9,57 no cartão</p>
              <p class="tag">EMITA COM 50% DE DESCONTO</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="footer-dialog-modal">
    <button class="bt-laranja-redondo bt-emitir-certificado">
    EMITIR CERTIFICADO
    </button>
  </div>
</dialog>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>