<?php 
include './parts/head.php';
$estiloHeader = "degrade";
include './parts/header.php'; 
?>
<main class="validacao-matricula">
  <section class="topo">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <h1 class="titulo-grande">Validação de Declaração de Matrícula</h1>
          <h2 class="subtitulo">
          Para verificar a autenticidade de uma declaração basta informar o código impresso na parte inferior da folha.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="conteudo py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5 container-formulario">
          <h3 class="titulo-pequeno">CÓDIGO DA DECLARAÇÃO</h3>
          <form action="#" class="form-cinza form-validacao-matricula">
            <div class="row">
              <div class="col-12">
                <label for="#codigo" class="form-label">
                Informe o código de autenticidade no campo abaixo:
                </label>
                <input type="text" class="form-control mb-5" />
              </div>
              <div class="col-12">
                <button type="submit" class="bt-laranja mb-5">verificar autenticidade</button>
              </div>
              <a href="#" class="link-verde-pequeno bt-problemas">Enfrentando problemas? <br> Fale com nosso suporte</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>  
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php';
?>
