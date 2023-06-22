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
  <section class="lista-todos-assuntos py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-md-6 col-lg-8 d-flex flex-wrap gap-5">
          <div class="assunto">
            <h3 class="titulo-pequeno">Matrícula/Inscrição</h3>
            <h4 class="subtitulo">Todas as respostas para ajudar o aluno no processo de inscrição</h4>
            <ul class="lista-documentos lista-assuntos">
              <li><a href="./central-suporte-artigo.php">Como é categorizado os cursos?</a></li>
              <li><a href="#">Como me inscrevo em algum curso?</a></li>
            </ul>
            <a href="./central-suporte-assunto-especifico.php" class="link-verde-pequeno bt-ver-todos">Ver todos</a>
          </div>
          <div class="assunto">
            <h3 class="titulo-pequeno">Certificados</h3>
            <ul class="lista-documentos lista-assuntos">
              <li><a href="#">Como saber o valor da taxa de emissão do certificado?</a></li>
              <li><a href="#">Vou receber meu certificado em minha residência?</a></li>
            </ul>
            <a href="#" class="link-verde-pequeno bt-ver-todos">Ver todos</a>
          </div>
          <div class="assunto">
            <h3 class="titulo-pequeno">Preços</h3>
            <h4 class="subtitulo">Saiba como funciona as precificações</h4>
            <ul class="lista-documentos lista-assuntos">
              <li><a href="#">Como saber o valor da taxa de emissão do certificado?</a></li>
              <li><a href="#">Os cursos são realmente gratuitos?</a></li>
            </ul>
            <a href="#" class="link-verde-pequeno bt-ver-todos">Ver todos</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="container-outros-assuntos d-flex flex-column gap-5 p-3">
            <h3 class="titulo-pequeno">Saiba mais</h3>
            <a href="#" class="link-outros-assuntos">
              <h3 class="titulo-pequeno">Ambiente de Estudos</h3>
              <p>Tem alguma dúvida e/ou
              dificuldade em nosso
              ambiente do aluno, confira
              aqui o que temos para te
              ajudar.</p>
            </a>
            <a href="#" class="link-outros-assuntos">
              <h3 class="titulo-pequeno">Pagamentos</h3>
              <p>Tem alguma dúvidas e/ou
              dificuldade sobre
              pagamento? Temos aqui
              algumas respostas que
              podem lhe ajudar</p>
            </a>
            <a href="#" class="link-outros-assuntos">
              <h3 class="titulo-pequeno">Legalidade</h3>
              <p>Gostaria de saber mais
              sobre a legalidade dos
              nossos cursos e nossa
              plataforma? Veja só o que
              temos disponível aqui.</p>
            </a>
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
