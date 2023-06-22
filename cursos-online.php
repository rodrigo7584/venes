<?php 
include './parts/head.php';
$estiloHeader = "degrade";
include './parts/header.php'
?>
  <main class="institucional-cursos-online">
    <section class="topo py-2 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mt-0 mt-md-5">
            <h1 class="titulo-grande">Cursos online</h1>
            <h2 class="subtitulo">
              Nossos cursos são focados em você Educador. Sinta-se em casa e inscreva-se em quantos
              desejar, tudo foi feito pensando em você.
            </h2>
          </div>
        </div>
      </div>
    </section>
    <section class="filtros-mobile py-3">
      <div class="container">
        <div class="col-12 d-block d-md-none">
          <div class="titulo-pequeno">
            Filtrar cursos por
          </div>
          <div class="row">
            <div class="col-6">
              <label for="select-categoria">Categoria</label>
              <select class="form-select" id="select-categoria">
                <option selected>Todas</option>
                <option value="#">Pedagogia</option>
                <option value="#">Ensino Básico </option>
                <option value="#">Gestão Escolar </option>
                <option value="#">Gestão Escolar </option>
                <option value="#">Psicopedagogia</option>
                <option value="#">Psicologia Educacional </option>
                <option value="#">Educação Especial </option>
                <option value="#">Educação Infantil </option>
                <option value="#">Secretariado Escolar </option>
                <option value="#">Música</option>
                <option value="#">Nutrição Escolar </option>
                <option value="#">Informática</option>
                <option value="#">Tecnologias na Educação </option>
                <option value="#">Ciências Ambientais </option>
                <option value="#">BNCC</option>
                <option value="#">Educação no Trânsito </option>
                <option value="#">Metodologia Científica </option>
              </select>
            </div>
            <div class="col-6">
              <label for="select-carga" >Carga Horária</label>
              <select class="form-select" for="select-carga">
                <option selected>Todas</option>
                <option value="#">360 horas</option>
                <option value="#">250 horas</option>
                <option value="#">230 horas</option>
                <option value="#">200 horas</option>
                <option value="#">180 horas</option>
                <option value="#">150 horas</option>
                <option value="#">130 hora</option>
                <option value="#">120 horas</option>
                <option value="#">100 horas</option>
                <option value="#">80 horas</option>
                <option value="#">60 horas</option>
                <option value="#">40 horas</option>
                <option value="#">20 horas</option>
                <option value="#">12 horas</option>
                <option value="#">4 horas</option>
              </select>
            </div>
          </div>
          <button class="bt-borda-branca bt-filtrar">Filtrar</button>
        </div>
      </div>
    </section>
    <section class="lista-cursos py-5">
      <div class="container">
        <div class="row">
          <div class="col-3 d-none d-md-block">
            <h3 class="titulo-menu">CATEGORIAS</h3>
            <ul class="menu-categorias">
              <li><a href="#">Pedagogia</a></li>
              <li><a href="#">Ensino Básico </a></li>
              <li><a href="#">Gestão Escolar </a></li>
              <li><a href="#">Gestão Escolar </a></li>
              <li><a href="#">Psicopedagogia</a></li>
              <li><a href="#">Psicologia Educacional </a></li>
              <li><a href="#">Educação Especial </a></li>
              <li><a href="#">Educação Infantil </a></li>
              <li><a href="#">Secretariado Escolar </a></li>
              <li><a href="#">Música</a></li>
              <li><a href="#">Nutrição Escolar </a></li>
              <li><a href="#">Informática</a></li>
              <li><a href="#">Tecnologias na Educação </a></li>
              <li><a href="#">Ciências Ambientais </a></li>
              <li><a href="#">BNCC</a></li>
              <li><a href="#">Educação no Trânsito </a></li>
              <li><a href="#">Metodologia Científica </a></li>
              <li><a href="#">TODOS OS CURSOS </a></li>
            </ul>
            <h3 class="titulo-menu">CARGA HORÁRIA</h3>
            <ul class="nuvem-cargas">
              <li><a href="#">360 horas</a></li>
              <li><a href="#">250 horas</a></li>
              <li><a href="#">230 horas</a></li>
              <li><a href="#">200 horas</a></li>
              <li><a href="#">180 horas</a></li>
              <li><a href="#">150 horas</a></li>
              <li><a href="#">130 hora</a></li>
              <li><a href="#">120 horas</a></li>
              <li><a href="#">100 horas</a></li>
              <li><a href="#">80 horas</a></li>
              <li><a href="#">60 horas</a></li>
              <li><a href="#">40 horas</a></li>
              <li><a href="#">20 horas</a></li>
              <li><a href="#">12 horas</a></li>
              <li><a href="#">4 horas</a></li>
            </ul>
          </div>
          <div class="col-md-9">
            <div class="lista-cartoes">
              <?php for($i=1;$i<=12;$i++){?>
              <div class="cartao-curso">
                <div class="foto-curso">
                  <img src="./img/crianca-com-tinta-nas-maos.png" alt="" />
                </div>
                <div class="informacoes">
                  <h1 class="nome-curso">EDUCAÇÃO INFANTIL E INCLUSIVA</h1>
                  <div class="nota">
                    <?php for($j=1;$j<=5;$j++){?>
                    <img src="./img/icone-estrela.svg" alt="" class="icone" />
                    <?php }; ?>
                  </div>
                  <p class="carga-curso">20 a 40 horas</p>
                  <a href="./detalhes-curso.php" class="bt-laranja-redondo bt-mais-informacao">mais informações</a>
                </div>
              </div>
              <?php } ;?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
include './parts/footer.php';
include './parts/foot.php';
?>