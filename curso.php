<?php include "./parts/head.php";
 include "./parts/curso-header.php";
?>
<main class="curso">
  <section class="topo py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-2 order-lg-1">
          <h2 class="titulo">CURSO ONLINE DE</h2>
          <h1 class="titulo-grande">Educação Híbrida</h1>
          <h3 class="subtitulo">Sinta-se em casa, essa é a sala de aula do seu curso. É aqui que você terá
            acesso a todos os recursos disponíveis do seu curso e muito mais.</h3>
          <button class="bt-progresso">Acompanhe o seu progresso</button>
          <div class="container-progresso">
            <div class="passo concluido">
              <div class="barra-progresso">
                <div class="barra"></div>
                <div class="circulo"></div>
              </div>
              <div class="informacao">
                <h4 class="titulo-progresso">
                1° Passo - Como começar?
                </h4>
                <p>Comece o seu curso efetuando o download do material de estudos e assistindo as
                video-aulas(se disponível).</p>
              </div>
            </div>
            <div class="passo ">
              <div class="barra-progresso">
                <div class="barra"></div>
                <div class="circulo"></div>
              </div>
              <div class="informacao">
                <h4 class="titulo-progresso">
                2° Passo - Avaliação Diagnóstica
                </h4>
                <p>Para concluir o seu curso você precisará resolver uma avaliação diagnóstica
                obrigatória.</p>
              </div>
            </div>
            <div class="passo ">
              <div class="barra-progresso">
                <div class="barra"></div>
                <div class="circulo"></div>
              </div>
              <div class="informacao">
                <h4 class="titulo-progresso">
                3° Passo - Certificado de Conclusão
                </h4>
                <p>Chegou a hora! Emita o certificado de conclusão do seu curso.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 mb-5">
          <vm-player>
            <vm-video cross-origin="true" poster="./img/poster.png">
              <source data-src="./video/video.mp4" type="video/mp4" />
            </vm-video>
            <vm-ui>
              <vm-click-to-play></vm-click-to-play>
              <vm-spinner></vm-spinner>
              <vm-poster></vm-poster>
            </vm-ui>
          </vm-player>
        </div>
      </div>
    </div>
  </section>
  <section class="container-menu-curso">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="menu-curso">
            <li>
              <button class="item-menu-curso ativo" data-botao-menu-curso="informacoes">
                <img src="./img/icone-informacao.svg" alt="" class="icone">
                <span>Informações</span>
                <p>Saiba todas as informações sobre que está 
                 cursando aqui.  </p>
              </button>
            </li>
            <li>
              <button class="item-menu-curso" data-botao-menu-curso="materiais">
                <img src="./img/icone-livro-aberto.svg" alt="" class="icone">
                <span>Materiais de Estudo</span>
                <p>Apostilas, livros digitais, podcasts e
                slides disponíveis no seu curso.</p>
              </button>
            </li>
            <li>
              <button class="item-menu-curso" data-botao-menu-curso="video-aulas">
                <img src="./img/icone-camera.svg" alt="" class="icone">
                <span>Vídeo-aulas</span> 
                <p>As vídeo-aulas chegaram para
                completar os seus estudos. aproveite!</p>
              </button>
            </li>
            <li>
              <button class="item-menu-curso" data-button-modal="modal-avaliacao">
                <img src="./img/icone-checked.svg" alt="" class="icone">
                <span>Avaliação Diagnóstica</span> 
                <p>Teste o conhecimento obtido durante o
                seu curso com uma avaliação final.</p>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
 
  <?php include "./parts/curso-informacoes.php";
  include "./parts/curso-materiais.php";
  include "./parts/curso-videoaulas.php";?>
</main> 

  <dialog class="dialog-modal dialog-modal-avaliacao" data-dialog-modal="modal-avaliacao">
    <div class="header-dialog-modal">
      <h1 class="modal-titulo">AVALIAÇÃO</h1>
      <button class="bt-fechar" data-dialog-modal="modal-close">
        <img src="../img/icone-x.svg" alt="">
      </button>
    </div>
    <hr>
    <div class="dialog-content">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="pergunta">
            <p>As instituições mais inovadoras procuram integrar algumas dimensões
            importantes no seu projeto político-pedagógico:</p>
            <p>l. Ênfase no projeto de vida de cada aluno, com orientação de um mentor;
            <br>
            ll. Ênfase em valores e competências amplas: de conhecimento e
            socioemocionais;
            <br>
            lll. Equilíbrio entre as aprendizagens pessoal e grupal. Respeito ao ritmo e
            estilo de aprendizagem de cada aluno combinado com metodologias
            ativas grupais (desafios, projetos, jogos significativos), sem disciplinas,
            com integração de tempos, espaços e tecnologias digitais;</p>
            <p>Assinale a alternativa correta:</p>
            <div class="respostas">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" id="resposta1">
                <label class="form-check-label" for="resposta1">
                (a) l e ll estão corretas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" id="resposta2" >
                <label class="form-check-label" for="resposta2">
                (b) ll e lll estão corretas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" id="resposta3" >
                <label class="form-check-label" for="resposta3">
                (c) l e lll estão corretas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" id="resposta4" >
                <label class="form-check-label" for="resposta4">
                (d) Todas estão corretas
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="footer-dialog-modal">
      <button class="bt-laranja-redondo bt-enviar-resposta">
        ENVIAR RESPOSTAS
      </button>
      <button  data-button-modal="modal-resultado-avaliacao-aprovado">aprovado</button>
      <button  data-button-modal="modal-resultado-avaliacao-reprovado">reprovado</button>
    </div>
  </dialog>
  
  <dialog class="dialog-modal dialog-modal-resultado-avaliacao dialog-modal-resultado-avaliacao-aprovado" data-dialog-modal="modal-resultado-avaliacao-aprovado">
    <div class="header-dialog-modal">
      <h1 class="modal-titulo">AVALIAÇÃO</h1>
      <button class="bt-fechar" data-dialog-modal="modal-close">
        <img src="./img/icone-x.svg" alt="">
      </button>
    </div>
    <hr>
    <div class="dialog-content">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <img src="./img/ilustracao-coroa.svg" alt="" class="icone">
          <h4 class="titulo">Parabéns, você está aprovado!</h4>
          <p>Você foi aprovado na avaliação com nota 10 e isso significa que você está apto a prosseguir para o próximo passo, que é a emissão do seu certificado.</p>
          <p>Para dar continuidade na emissão do seu certificado, clique no botão logo abaixo:</p>
          <div class="bts">
            <a href="./curso-emitir-certificado.php" class="bt-laranja-redondo bt-emitir">Emitir meu certificado</a>
            <button class="bt-cinza bt-agora-nao" data-dialog-modal="modal-close">agora não</button>
          </div>
        </div>
      </div>
    </div>
  </dialog>

  <dialog class="dialog-modal dialog-modal-resultado-avaliacao dialog-modal-resultado-avaliacao-reprovado" data-dialog-modal="modal-resultado-avaliacao-reprovado">
    <div class="header-dialog-modal">
      <h1 class="modal-titulo">AVALIAÇÃO</h1>
      <button class="bt-fechar" data-dialog-modal="modal-close">
        <img src="./img/icone-x.svg" alt="">
      </button>
    </div>
    <hr>
    <div class="dialog-content">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <img src="./img/ilustracao-refazer.svg" alt="" class="icone">
          <h4 class="titulo">Nota mínima não atingida!</h4>
          <p>Infelizmente você não conseguiu atingir a nota mínima para ser aprovado neste curso. Sua última avaliação foi realizada dia 1905/2023 ás 11:54:55 e sua nota foi 2.</p>
          <p>Para ser aprovado faz-se necessário atingir a nota mínima que é 6.</p>
          <p><b>Questões com erro para revisão: <br>
            1, 4, 6, 7, 8, 9, 10</b> </p>
          <div class="bts">
            <a href="./curso.php" class="bt-laranja-redondo bt-tentar-novamente">Tentar novamente</a>
            <button class="bt-cinza bt-agora-nao" data-dialog-modal="modal-close">agora não</button>
          </div>
        </div>
      </div>
    </div>
  </dialog>
<?php include "./parts/footer.php";
 include "./parts/foot.php";
?>
