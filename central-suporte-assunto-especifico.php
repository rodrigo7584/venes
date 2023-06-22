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
          <h1 class="titulo-grande">Matrícula/ Inscrição</h1>
          <h2 class="subtitulo">
          Todas as respostas para ajudar o aluno no processo de inscrição
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="lista-todos-assuntos py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-7 col-lg-5 col-xl-4">
            <ul class="lista-documentos lista-assuntos">
              <li><a href="./central-suporte-artigo.php">Como é categorizado os cursos?</a></li>
              <li><a href="#">Como me inscrevo em algum curso?</a></li>
            </ul>
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
