<?php 
include './parts/head.php';
include './parts/blog-header.php'
?>
<main class="blog-posts">
  <section class="posts py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="titulo-grande">Categoria</h1>
          <div class="container-posts">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="post">
              <div class="thumb"> 
                <img src="./img/crianca-com-tinta-nas-maos.png" alt="">
              </div>
              <div class="informacao-post">
                <h3 class="titulo-post">15 DE MARÇO: DIA DA ESCOLA</h3>
                <p class="resumo-post">
                Escola, espaço de aprendizado Você
                sabia que 15 de março é o Dia da
                Escola? Pois é! No nosso calendário há
                um dia reservado para</p>
                <a href="./blog-post.php" class="bt-mais">Mais</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="paginacao">
            <div class="paginas">
              <a href="#" class="pagina">1</a>
              <a href="#" class="pagina">2</a>
              <a href="#" class="pagina">3</a>
            </div>
            <div class="detalhe">
              ...
            </div>
            <div class="ultima-pagina">
              <a href="#" class="pagina">9</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter-v2 ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="titulo-grande">Quer receber
          mais conteúdos
          GRATUITAMENTE?</h2>
          <h3 class="subtitulo">Receba em primeira mão conteúdos relevantes do mundo
          educacional, basta preencher o formulário abaixo!</h3>
        </div>
        <div class="col-md-6">
          <form action="#" class="form-newsletter form-cinza">
            <div class="row">
              <div class="col-lg-9">
                <label for="nome" class="form-label">Nome</label>
                <input id="nome" type="text" class="form-control" placeholder="Digite aqui seu nome">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <label for="email" class="form-label">E-mail</label>
                <input id="email" type="text" class="form-control" placeholder="Digite seu e-mail aqui">
              </div>
            </div>
            <button type="submit" class="bt-laranja-redondo">EU QUERO</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>