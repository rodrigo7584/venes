<header class="curso-header">
  <section class="topo">
    <div class="container">
      <div class="row">
        <div class="col-12 container-menu">
          <a href="#"><img class="logo" src="./img/logo-v1.svg" alt=""></a>
          <ul class="lista-menu">
            <li class="item-menu">
              <a href="#">CATEGORIAS</a>
            </li>
            <li class="item-menu">
              <a href="#">CURSOS</a>
            </li>
          </ul>
          <?php include ('form-pesquisar.php');?>
          <button class="bt-carrinho">
            <img src="./img/icone-carrinho.svg" alt="" class="icone" />
            <span>1</span>
          </button>
          <button class="bt-usuario">
            IV 
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="submenu">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="lista-submenu">
            <li class="submenu-item ativo">
              <a href="#">
                <img src="./img/icone-livro.svg" alt="" class="icone">
                Meus cursos
              </a>
            </li>
            <li class="submenu-item">
              <a href="./curso-emitir-certificado.php">
                <img src="./img/icone-medalha.svg" alt="" class="icone">
                Certificados
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="voltar">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <a href="dashboard-meus-cursos.php" class="bt-voltar">
            VOLTAR PARA MEUS CURSOS
          </a>
        </div>
      </div>
    </div>
  </section>
</header>