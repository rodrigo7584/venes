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
      <div class="col-md-9 dashboard-meus-cursos py-5">
        <h3 class="titulo">
          Bem-vindo(a) Isaac!
        </h3>
        <p>Este é o seu ambiente de estudos. Aqui você poderá acessar a sala de aula
        dos seus cursos e emitir os seus certificados.</p>
        <h2 class="titulo-grande ">MEUS CURSOS</h2>
        <div class="cursos">
          <?php for($i=1;$i<=4;$i++){?>
            <div class="curso">
              <div class="thumb">
                <img src="./img/crianca-com-tinta-nas-maos.png" alt="">
              </div>
              <div class="informacao">
                <h3 class="nome-curso">
                EDUCAÇÃO INFANTIL E INCLUSIVA
                </h3>
                <p class="carga">CARGA HORÁRIA: <span>100H</span></p>
                <p class="sobre">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur quae dicta incidunt, sit illum. At mollitia laboriosam, fugiat minus possimus eos non nihil, repellat, iusto praesentium beatae quaerat repellendus?
                </p>
                <a href="./curso.php" class="bt-laranja-redondo bt-entrar">Entrar</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>