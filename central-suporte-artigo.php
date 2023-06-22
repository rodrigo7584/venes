<?php 
include './parts/head.php';
$estiloHeader = "branco";
include './parts/header.php'; 
?>
<main class="central-suporte">
  <section class="topo py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 ">
          <h1 class="titulo-grande">Como é categorizado os cursos?</h1>
          <h2 class="subtitulo">
          Cursos livres, técnicos, graduação, ou pós?
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="lista-todos-assuntos py-5">
    <div class="container">
      <div class="row align-items-start">
        <div class=" col-lg-8 d-flex flex-wrap gap-3">
          <div class="artigo">
            <p>Os cursos oferecidos por este portal são categoriazados como sendo cursos LIVRES e de de
            atualização ou aperfeiçoamento. Objetivo deste portal é disseminar conhecimento e auxiliar
            profissionais que desejam ampliar seu currículo</p>
            <p>Os cursos livres fazem parte da modalidade de Educação Profissional. Apesar de não serem
            reconhecidos pelo Ministério da Educação (MEC), têm base legal no Decreto nº 5.154/04 e na
            Portaria Nº 008/02. Aliás o MEC só reconhece cursos com duração mínima de 360 horas, o
            que não desqualifica a modalidade livre.</p>
            <p> Além disso, somente o nosso certificado não é suficiente para você comprovar que está
            apto(a) a exercer uma profissão. Se você já é atuante de uma área e precisa apenas
            complementar o seu currículo, somos o que você precisa!</p>
            <p>Onde posso utilizar os certificados?:</p>
            <p>Apresentar na Faculdade <br>
            Horas complementares<br>
            Concursos Públicos<br>
            Progressão Funcional<br>
            Ampliar o seu Currículo<br>
            Prova de Título<br>
            E muito mais....</p>
            <p>Você já deve está cansado(a) de ver isso, mas como dito anteriormente, os nossos
            certificados/cursos possuem base legal constituída por meio de decreto presidencial nº 5.154,
            resolução MEC CNE nº 04/99 e Diretrizes e Bases da Educação nº 9.394, e são reconhecidos
            em todo território nacional.</p>
          </div>
          <hr>
          <div class="container-curtir">
            <h4 class="titulo-pequeno">Este artigo foi útil?</h4>
            <div class="bts">
              <button class="sim ativo">Sim</button>
              <button class="nao">Não</button>
            </div>
          </div>
        </div>
        <div class=" col-lg-4">
          <div class="container-outros-artigos d-flex flex-column gap-5 p-5">
            <a href="#" class="link-outros-artigos">
              <h3 class="titulo-pequeno">Outros Artigos</h3>
            </a>
            <a href="#" class="link-outros-artigos">
              <h3 class="titulo-pequeno">Como me inscrevo em algum curso?</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include './parts/falar-outro-assunto.php'?>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php';
?>
