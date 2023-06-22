<?php 
include './parts/head.php';
?>
<main class="login-cadastro">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-md-6 col-lg-7 col-xl-8 px-0 px-md-5 container-informacoes container-informacoes-cadastro">
        <?php 
        $pagina = "login-cadastro";
        $estiloHeader = "branco";
        include './parts/header.php'; 
        ?>
        <h1 class="titulo-grande">Uma plataforma pensada especialmente para você.</h1>
        <h2 class="subtitulo">Pensamos em todos os detalhes para tornar sua experiência incrível e simples com a gente.</h2>
        <?php include './parts/lista-diferenciais-login-cadastro.php';?>
      </div>
      <div class="col-md-6 col-lg-5 col-xl-4 p-1 p-md-5 container-formulario container-formulario-cadastro">
        <div class="bts-topo d-md-flex d-none justify-content-between">
          <a href="./index.php" class="bt-branco">Página Inicial</a>
          <a href="./cursos-online.php" class="bt-cinza">Cursos Online</a>
        </div>
        <div class="conteudo-formulario">
          <div class="menu-toogle menu-toggle-login-cadastro">
            <a href="./cadastro.php" class="bt-menu-toggle ativo">
            CADASTRE-SE
            </a>
            <a href="./login.php" class="bt-menu-toggle">
            JÁ POSSUO CADASTRO
            </a>
          </div>
          <form action="#" class="form-login-cadastro form-cinza">
            <div class="row">
              <div class="col-12">
                <label for="nome" class="form-label">NOME COMPLETO</label>
                <input type="text" class="form-control" id="nome">
              </div>
              <div class="col-sm-6">
                <label for="email" class="form-label">informe seu email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="col-sm-6">
                <label for="confirmar-email" class="form-label">confirme seu email</label>
                <input type="text" class="form-control" id="confirmar-email">
              </div>
              <div class="col-sm-6">
                <label for="senha" class="form-label">Crie uma senha</label>
                <div class="input-senha">
                  <input type="password" class="form-control" id="senha">
                  <button type="button" class="bt-mostrar-senha">
                    <img src="./img/icone-olho.svg" alt="">
                  </button>
                </div>
              </div>
              <div class="col-sm-6">
                <label for="confirma-senha" class="form-label">Confirme sua senha</label>
                <div class="input-senha">
                  <input type="password" class="form-control" id="confirma-senha">
                  <button type="button" class="bt-mostrar-senha">
                    <img src="./img/icone-olho.svg" alt="">
                  </button>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="bt-degrade-laranja-amarelo-redondo">
                  CONCLUIR CADASTRO
                </button>
              </div> 
              <div class="col-12">
                <span>Ao se cadastrar, você concorda com nossos
                <a href="./termos-uso.php" class="link-laranja">Termos de uso</a>  e nossa 
                <a href="./politica-privacidade.php" class="link-laranja">Política de privacidade</a> </span>
              </div>
            </div>
          </form>  
        </div>
        <?php include ('./parts/modal-atendimento-botao.php')?>
      </div>
    </div>
  </div>
</main>
<?php include ('./parts/modal-atendimento.php')?>
<?php 
include './parts/foot.php';
?>