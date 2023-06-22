<?php 
include './parts/head.php';
$estiloHeader = "degrade";
include './parts/header.php'; 
?>
<main class="verificar-certificado">
  <section class="topo">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="titulo-grande">Verificar Certificado</h1>
          <h2 class="subtitulo">
            Para verificar a autenticidade de um certificado basta informar o código impresso no verso
            da folha.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="conteudo py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 container-conteudo">
          <div class="row justify-content-between align-items-center p-5">
            <div class="col-md-6 container-formulario">
              <h3 class="titulo-pequeno">CÓDIGO DO CERTIFICADO</h3>
              <form action="#" class="form-cinza form-verificar-certificado">
                <div class="row">
                  <div class="col-12">
                    <label for="#codigo" class="form-label">
                      Informe o código de autenticidade no campo abaixo
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
            <div class="col-md-6 col-lg-5">
              <img src="./img/certificados-solo.png" alt="" class="img-fluid py-3" />
              <span class="legenda">(*) Imagem apresentada acima refere-se ao modelo do certificado disponibilizado pelaplataforma</span>
            </div>
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
