<?php 
include './parts/head.php';
include './parts/blog-header.php'
?>
<main class="blog">
  <section class="topo py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0 ">
          <h1 class="titulo-grande">
          Blog especializado <br>
          <span>para educadores</span>
          </h1>
          <h2 class="subtitulo">
          Conteúdos sempre atualizados serão
          disponibilizados gratuitamente pensados em
          você educador.
          </h2>
          <form action="#" class="form-buscar-blog">
            <input type="text">
            <button type="submit">
              <img src="./img/icone-lupa.svg" alt="" class="icone">
            </button>
          </form>
        </div>
        <div class="col-md-6">
          <img src="./img/ilustracao-mulher-digitando-pilha-livros.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="destaques py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="titulo-grande">Destaque</h2>
          <div class="cartoes">
            <?php for($i=1;$i<=3;$i++){?>
            <div class="cartao">
              <div class="thumb">
                <img src="./img/crianca-com-tinta-nas-maos.png" alt="">
              </div>
              <div class="informacao">
                <h3 class="titulo-pequeno">Dicas para educadores que
                trabalham com crianças
                autistas</h3>
                <a href="#" class="bt-mais">Mais</a>
              </div>
            </div>
            <?php } ?>
          </div>
          <a href="./blog-posts.php" class="bt-laranja-redondo bt-ver-postagens">
          VEJA MAIS POSTAGENS
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php include './parts/blog-newsletter.php'?>
  <section class="faca-curso py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-5">
          <h2 class="titulo-grande">
          Faça um curso
          gratuito conosco</h2>
          <h3 class="subtitulo">Clique em uma das áreas
          listadas abaixo para ver os cursos disponíveis.
          Temos várias opções que você vai amar!</h3>
          <div class="nuvem-cursos">
            <a href="#" class="tag-curso">Pedagogia</a>
            <a href="#" class="tag-curso">Ensino Básico</a>
            <a href="#" class="tag-curso">Gestão Escolar</a>
            <a href="#" class="tag-curso">Braille e Libras</a>
            <a href="#" class="tag-curso">Psicopedagogia</a>
            <a href="#" class="tag-curso">Informática</a>
            <a href="#" class="tag-curso">Música</a>
            <a href="#" class="tag-curso">BNCC</a>
            <a href="#" class="tag-curso">Nutrição Escolar</a>
          </div>
          <div class="bt-borda-laranja bt-ver-todos-curso">
          VER TODOS OS CURSOS
          </div>
        </div>
        <div class="col-md-5 col-lg-7 d-none d-md-block">
          <img src="./img/ilustracao-mulheres-digitando-homem-discursando-monitor.svg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="logos">
            <img src="./img/logo-abed.png" alt="" class="logo logo-abed">
            <img src="./img/logo-governo.png" alt="" class="logo logo-governo">
            <img src="./img/logo-gi.png" alt="" class="logo logo-gi">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>