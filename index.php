<?php 
include './parts/head.php';
$pagina = "principal";
$estiloHeader = "degrade";
include './parts/header.php'
?>
  <main class="institucional-principal">
    <section class="topo py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pe-3 pe-md-5">
            <h1 class="titulo-grande">Cursos online para Educadores</h1>
            <h2>
              Líder em custo benefício, certificados válidos em todo o território nacional e uma
              plataforma disponível para você 24 horas por dia.
            </h2>
            <?php include './parts/form-pesquisar.php'?>
            <a href="#" class="bt-laranja-redondo">VER TODOS OS CURSOS </a>
          </div>
          <div class="col-6 d-none d-md-block">
            <img src="./img/ilustracao-pessoas-computador.svg" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <?php include ('./parts/destaques.php')?>
    <section class="lista-cursos py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="titulo">Encontre seu curso por área</h2>
            <h3 class="subtitulo">
              Clique em uma das áreas listadas abaixo para ver os cursos disponíveis. <br />
              Temos várias opções que você vai amar!
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex flex-wrap gap-3 justify-content-center mb-5">
            <a href="#" class="tag-curso"> PEDAGOGIA </a>
            <a href="#" class="tag-curso"> ENSINO BÁSICO </a>
            <a href="#" class="tag-curso"> GESTÃO ESCOLAR </a>
            <a href="#" class="tag-curso"> BRAILLE E LIBRAS </a>
            <a href="#" class="tag-curso"> PSICOPEDAGOGIA </a>
            <a href="#" class="tag-curso"> PSICOLOGIA EDUCACIONAL </a>
            <a href="#" class="tag-curso"> EDUCAÇÃO ESPECIAL </a>
            <a href="#" class="tag-curso"> EDUCAÇÃO INFANTIL </a>
            <a href="#" class="tag-curso"> SECRETARIADO ESCOLAR </a>
            <a href="#" class="tag-curso"> MÚSICA </a>
            <a href="#" class="tag-curso"> NUTRIÇÃO ESCOLAR </a>
            <a href="#" class="tag-curso"> INFORMÁTICA </a>
            <a href="#" class="tag-curso"> TECNOLOGIAS NA EDUCAÇÃO </a>
            <a href="#" class="tag-curso"> CIÊNCIAS AMBIENTAIS </a>
            <a href="#" class="tag-curso"> BNCC </a>
            <a href="#" class="tag-curso"> EDUCAÇÃO NO TRÂNSITO </a>
            <a href="#" class="tag-curso">METODOLOGIA CIENTÍFICA </a>
          </div>
          <div class="col-12 d-flex justify-content-center py-3">
            <a href="#" class="bt-borda-laranja">Ver todos os cursos</a>
          </div>
        </div>
      </div>
    </section>
    <section class="certificados py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2 order-md-1 px-5">
            <img src="./img/certificados.png" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 order-1 order-md-2 mb-5 mb-md-0">
            <h2 class="titulo">Certificado válido e com a segurança do respaldo legal</h2>
            <ul class="lista-checks">
              <li>Lei nº 9.394 - Diretrizes e Bases da Educação Nacional</li>
              <li>Artigo 205 e 206 - Contituição Federal</li>
              <li>Decredo Presidencial nº 5.154/2004</li>
              <li>Normas da Resolução CNE n° 04/99 - MEC (art. 7º, 3º)</li>
            </ul>
            <a href="#" class="bt-laranja-redondo bt-saiba-mais">saiba mais</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mais-procurados py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="titulo">Cursos mais Procurados</h2>
            <h3 class="subtitulo">
              Confira abaixo a lista dos cursos mais buscados por educadores
              espalhados por todo país
            </h3>
            <div class="swiper-mais-vendidos">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <?php for($i=1;$i<=5;$i++){?>
                  <div class="swiper-slide">
                    <div class="cartao-curso">
                      <div class="foto-curso">
                        <img
                          src="./img/crianca-com-tinta-nas-maos.png"
                          alt=""
                        />
                      </div>
                      <div class="informacoes">
                        <h1 class="nome-curso">
                          EDUCAÇÃO INFANTIL E INCLUSIVA
                        </h1>
                        <div class="nota">
                          <?php for($j=1;$j<=5;$j++){?> 
                            <img src="./img/icone-estrela.svg" alt="" class="icone"/>
                          <?php }; ?>
                        </div>
                        <p class="carga-curso">
                          CERTIFICADO DE <br />
                          20 a 40 horas
                        </p>
                        <a href="#" class="bt-laranja-redondo bt-mais-informacao"
                          >mais informações</a
                        >
                      </div>
                    </div>
                  </div>
                  <?php } ;?>
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center py-5">
            <a href="#" class="bt-borda-laranja">Ver todos os cursos</a>
          </div>
        </div>
      </div>
    </section>
    <section class="recomendacoes py-5">
      <div class="container">
        <div class="row conteudo p-5">
          <div class="col-12">
            <h2 class="titulo">Quem usa recomenda!</h2>
            <h3 class="subtitulo">
              99% dos nossos alunos amaram nos conhecer e estudar conosco
            </h3>
            <div class="detalhe-nota">
              <?php for($i=1;$i<=5;$i++){?>
              <img src="./img/icone-estrela.svg" alt="" class="icone" />
              <?php }; ?>
            </div>
            <div class="swiper-prints-comentarios swiper-bullets-amarelos">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <?php for($i=1;$i<=5;$i++){?>
                  <div class="swiper-slide">
                    <div class="container-comentario">
                      <img
                        src="./img/comentario.png"
                        alt=""
                        class="img-fluid"
                        class="print-comentario"
                      />
                    </div>
                  </div>
                  <?php }; ?>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-center py-3">
            <a href="#" class="bt-borda-branca">CONFIRA NOSSOS CURSOS</a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
include './parts/footer.php';
include './parts/foot.php';
?>