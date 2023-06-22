<?php 
include './parts/head.php';
include './parts/dashboard-header.php';
$pagina = "cursos"
?>
<main class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include './parts/dashboard-menu.php';?>
      </div>
      <div class="col-md-9 dashboard-cursos-online py-5">
        <h2 class="titulo">
          CURSOS ONLINE
        </h2>
        <h3 class="subtitulo">
          Escolha sua área de interesse logo abaixo
        </h3>
        <div class="nuvem-cursos">
          <a href="#" class="tag-curso"> PEDAGOGIA </a>
          <a href="#" class="tag-curso"> ENSINO BÁSICO </a>
          <a href="#" class="tag-curso"> GESTÃO ESCOLAR </a>
          <a href="#" class="tag-curso"> BRAILLE E LIBRAS </a>
          <a href="#" class="tag-curso"> PSICOPEDAGOGIA </a>
          <a href="#" class="tag-curso"> PSICOLOGIA EDUCACIONAL </a>
          <a href="#" class="tag-curso"> EDUCAÇÃO ESPECIAL </a>
          <a href="#" class="tag-curso"> EDUCAÇÃO INFANTIL </a>
          <a href="#" class="tag-curso"> SECRETARIADO ESCOLAR </a>
          <a href="#" class="tag-curso"> MÚSICA </a>
          <a href="#" class="tag-curso"> NUTRIÇÃO ESCOLAR </a>
          <a href="#" class="tag-curso"> INFORMÁTICA </a>
          <a href="#" class="tag-curso"> TECNOLOGIAS NA EDUCAÇÃO </a>
          <a href="#" class="tag-curso"> CIÊNCIAS AMBIENTAIS </a>
          <a href="#" class="tag-curso"> BNCC </a>
          <a href="#" class="tag-curso"> EDUCAÇÃO NO TRÂNSITO </a>
          <a href="#" class="tag-curso">METODOLOGIA CIENTÍFICA </a>
        </div>
        <div class="col-12 d-flex justify-content-center py-3">
          <a href="#" class="link-verde bt-ver-todos">Ver todos os cursos</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>