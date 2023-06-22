  <body>
    <header class="principal <?php echo ($estiloHeader === 'branco') ? " branco" : "";
    if(isset($pagina)){echo ($pagina === 'login-cadastro') ? " header-login-cadastro" : "";}?>">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center gap-5 gap-md-3">
            <a href="./index.php">
              <img src="./img/logo-v1.svg" alt="" class="logo" />
            </a>
            <?php if(!isset($pagina) || $pagina != 'principal' ){
               include ('form-pesquisar.php');
            }?>
            <ul class="menu">
              <li class="item-menu d-none d-md-inline">
                <a href="./certificados.php">Certificados</a>
              </li>
              <li class="item-menu">
                <a href="./cursos-online.php">cursos online</a>
              </li>
              <li class="item-menu">
                <a href="./login.php">Área do aluno</a>
              </li>
              <li class="item-menu d-none d-md-inline">
                <a href="./cadastro.php" class="bt-laranja bt-destaque">cadastre-se</a>
              </li>
              <li class="item-menu d-none d-md-inline">
                <button class="bt-carrinho">
                  <img src="./img/icone-carrinho.svg" alt="" class="icone" />
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
