<?php 
include './parts/head.php';
$estiloHeader = "branco";
include './parts/header.php'; 
?>
<main class="central-suporte">
  <section class="topo py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 ">
          <h1 class="titulo-grande">Central de suporte</h1>
          <h2 class="subtitulo">
          Seja bem-vindo(a) a nossa central de atendimento e suporte ao aluno. Colocamos aqui alguns
          pontos que podem ajudar a você a esclarecer algumas de suas dúvidas e/ou dificuldades.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="lista-suportes py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-between align-item-center gap-3">
          <div class="suporte">
            <img src="./img/icone-pessoa-lendo.svg" alt="" class="icone">
            <h3 class="titulo-pequeno">SOBRE OS CURSOS</h3>
            <p>Para saber mais como
            funciona, inscrição,
            materiais didáticos e
            certificados confira aqui o
            que temos para te ajudar.</p>
            <a href="./central-suporte-todos-assuntos.php" class="link-laranja-pequeno bt-ver-todos">Ver respostas</a>
          </div>
          <div class="suporte">
            <img src="./img/icone-notebook-chapeu.svg" alt="" class="icone">
            <h3 class="titulo-pequeno">AMBIENTE DE ESTUDOS</h3>
            <p>Tem alguma dúvida e/ou
            dificuldade em nosso
            ambiente do aluno, confira
            aqui o que temos para te
            ajudar.</p>
            <a href="#" class="link-laranja-pequeno bt-ver-todos">Ver respostas</a>
          </div>
          <div class="suporte">
            <img src="./img/icone-mao-dinheiro.svg" alt="" class="icone">
            <h3 class="titulo-pequeno">PAGAMENTOS</h3>
            <p>Tem alguma dúvidas e/ou
            dificuldade sobre
            pagamento? Temos aqui
            algumas respostas que
            podem lhe ajudar</p>
            <a href="#" class="link-laranja-pequeno bt-ver-todos">Ver respostas</a>
          </div>
          <div class="suporte">
            <img src="./img/icone-balanca.svg" alt="" class="icone">
            <h3 class="titulo-pequeno">LEGALIDADE</h3>
            <p>Gostaria de saber mais
            sobre a legalidade dos
            nossos cursos e nossa
            plataforma? Veja só o que
            temos disponível aqui.</p>
            <a href="#" class="link-laranja-pequeno bt-ver-todos">Ver respostas</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include './parts/falar-outro-assunto.php'?>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php';
?>
