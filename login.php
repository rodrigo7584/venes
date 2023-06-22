<?php 
include './parts/head.php';
?>
<main class="login-cadastro">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-md-6 col-lg-7 col-xl-8 px-0 px-md-5 container-informacoes container-informacoes-login ">
        <?php 
        $pagina = "login-cadastro";
        $estiloHeader = "branco";
        include './parts/header.php'; 
        ?>
        <h1 class="titulo-grande">Olá, seja bem-vindo(a) de volta!</h1>
        <h2 class="subtitulo">Acesse o ambiente do aluno para visualizar suas matrículas, conteúdos e certificados. Curta essa experiência, pois tudo foi feito para você.</h2>
        <?php include './parts/lista-diferenciais-login-cadastro.php';?>
      </div>
      <div class="col-md-6 col-lg-5 col-xl-4 p-1 p-md-5 container-formulario container-formulario-login">
        <div class="bts-topo d-flex justify-content-between">
          <a href="./index.php" class="bt-branco">Página Inicial</a>
          <a href="./cursos-online.php" class="bt-cinza">Cursos Online</a>
        </div>
        <div class="conteudo-formulario">
          <div class="menu-toogle menu-toggle-login-cadastro">
            <a href="./cadastro.php" class="bt-menu-toggle">
            CADASTRE-SE
            </a>
            <a href="./login.php" class="bt-menu-toggle ativo">
            JÁ POSSUO CADASTRO
            </a>
          </div>
          <form action="#" class="form-login-cadastro form-cinza">
            <div class="row">
              <div class="col-12">
                <label for="emailCPF" class="form-label">E-MAIL OU CPF</label>
                <input type="text" class="form-control" id="emailCPF">
              </div>
              <div class="col-12">
                <label for="senha" class="form-label">senha</label>
                <div class="input-senha">
                  <input type="password" class="form-control" id="senha">
                  <button type="button" class="bt-mostrar-senha">
                    <img src="./img/icone-olho.svg" alt="">
                  </button>
                </div>
              </div>
              <div class="col-12">
                <span>ESQUECEU SUA SENHA? <a href="#" class="link-verde">CLIQUE AQUI</a></span>
              </div>
              <div class="col-12">
                <button type="submit" class="bt-laranja-redondo">
                  FAZER LOGIN
                </button>
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