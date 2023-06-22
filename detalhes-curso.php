<?php 
include './parts/head.php';
$estiloHeader = "branco";
include './parts/header.php'
?> 
  <main class="institucional-detalhes-curso">
    <section class="topo py-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12">
            <div class="conteudos-topo">
              <div class="conteudo-topo">
                <h1 class="titulo">Cursos Online de</h1>
                <h2 class="titulo-grande">Educação infantil e inclusiva</h2>
                <div class="lista-tags">
                  <div class="tag tag-laranja">Início Imediato</div>
                  <div class="tag tag-azul">Curso com Vídeoaula</div>
                </div>
                <p>
                Neste curso você estudará as definições, as causas e as características dos principais tipos
                de deficiência física, intelectual, visual e auditiva. Também entenderá as necessidades
                especificas de cada deficiência e verá algumas práticas pedagógicas para serem utilizadas em
                sala de aula que te auxiliarão a potencializar o desenvolvimento do ensino e aprendizagem
                dos alunos com necessidades especiais.
                </p>
                <br>
                <div class="informacoes">
                  <div class="informacao">
                    <img src="./img/icone-estrela-vazia.svg" alt="" class="icone">
                    <div>
                      <span>4,9 (984 alunos)</span>
                    </div>
                  </div>
                  <div class="informacao">
                    <img src="./img/icone-relogio.svg" alt="" class="icone">
                    <div>
                      <span class="titulo-informacao">Carga Horária</span>
                      <span>60 a 120 Horas</span>
                    </div>
                  </div>
                  <div class="informacao">
                    <img src="./img/icone-bandeira.svg" alt="" class="icone">
                    <div>
                      <span class="titulo-informacao">Modalidade do Curso</span>
                      <span>Curso online de Aperfeiçoamento Atualização e Capacitação.</span>                  
                    </div>
                  </div>
                </div> 
              </div>
              <div class="container-cartao">
                <div class="cartao-detalhe-curso">
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
                  <div class="informacoes-cartao">                  
                    <h3>GRATUITO!</h3>
                    <span>* INSCRIÇÃO, MATERIAL DIDÁTICO E AVALIAÇÃO</span>
                    <a href="#" class="bt-laranja bt-inscrever">inscreva-se grátis</a>
                    <ul class="lista-circulos d-none d-md-block">
                      <li>Curso 100% Online</li>
                      <li>Certificado válido em todo o Brasil</li>
                      <li>Amparado pelo Decreto Presidencial nº 5.154</li>
                      <li>Segue as normas do MEC através da Resolução CNE nº 04/99</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="conteudo py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8">
            <h4 class="titulo-pequeno">CONTEÚDO PROGRAMÁTICO</h4>
            <ul class="lista-tracos">
              <li>Letramento e seus níveis.</li>
              <li>Alfabetização.</li>
              <li>Os valores sonoros convencionais.</li>
              <li>Psicogênese da língua escrita.</li>
              <li>A importância da leitura.</li>
              <li>Alfabetizando e sua receita.</li>
            </ul>
            <a href="#" class="link-laranja bt-ver-mais">+ Ver Mais</a>
            <h4 class="titulo-pequeno">Modelo do Nosso Certificado</h4>
            <div class="certificados">
              <div class="certificado">
                <span>FRENTE</span>
                <img src="./img/certificado-frente.png" alt="" />
              </div>
              <div class="certificado">
                <span>VERSO</span>
                <img src="./img/certificado-tras.jpg" alt="" />
              </div>
            </div>
            <div class="sobre-certificado">
              <h4 class="titulo-pequeno">
                <img src="./img/icone-medalha.svg" alt="" />
                SOBRE O CERTIFICADO
              </h4>
              <p>
                Os alunos aprovados estarão aptos à emissão do Certificado Digital em seu ambiente
                virtual, após a nota mínima atingida.
              </p>
              <br />
              <p>
                A inscrição e acesso ao material deste curso serão disponibilizados de forma
                totalmente gratuita. No entanto, caso queira emitir o certificado digital de
                conclusão do curso, será necessário efetuar o pagamento da taxa de emissão no valor
                de R$ 77,40. Essa taxa está com o valor promocional de 50% de desconto, ficando por
                <strong>R$ 38,70 </strong> podendo ser pago por Boleto Bancário, Pix ou em até
                <strong>4x de R$ 9,68 no Cartão de Crédito</strong>
              </p>
              <br />
              <p>
                Utilizamos 8 horas diárias de estudos como base de cálculo para integralização da
                carga horaria deste curso. Após concluir o prazo estabelecido pelo sistema, seu
                certificado com datas será disponibilizado em sua área de aluno. Caso seu objetivo
                seja algum processo seletivo, recomendamos que analise bem o edital para verificar
                se esta modalidade de curso (Livre) atende as exigências.
              </p>
              <br />
              <p>
                <strong>CERTIFICADO VÁLIDO PARA:</strong> Prova de títulos em Concursos (Mediante
                Verificação do Edital), Atividade extracurricular, Apresentar na Faculdade,
                Progressão Funcional, Ampliar o seu currículo e muito mais.
              </p>
              <br />
              <h4 class="titulo-pequeno">
                <img src="./img/icone-pin.svg" alt="" />
                COMO FUNCIONA A PROVA?
              </h4>
              <p>
                Será disponibilizada uma prova única referente a todo o conteúdo do curso com 10
                questões objetivas. A nota final deve ser igual ou superior a 6 para estar apto a
                emissão do certificado digital de conclusão do curso. Em caso de reprovação, o aluno
                poderá realizar novamente a prova quantas vezes desejar.
              </p>
            </div>
            <h4 class="titulo-pequeno">
              <img src="./img/icone-circulo-questao.svg" alt="" />
              SOBRE O CERTIFICADO
            </h4>
            <h5 class="titulo-pequeno">O curso é autorizado pelo MEC?</h5>
            <p>
              O MEC normatiza a política nacional de educação em cursos de graduação e
              pós-graduação, cursos técnicos e na educação básica. Os cursos livres, que é a
              modalidade que oferecemos, não são normatizados pelo MEC. Apesar disso, o MEC
              reconhece e autoriza a disseminação desta modalidade, por meio da resolução CNE nº
              04/99. Os nossos certificados são válidos em todo o território nacional e estão
              embasados nas leis vigentes do nosso país. Além disso, nossa instituição é associada à
              ABED - Associação Brasileira de Educação a Distância.
            </p>
            <h5 class="titulo-pequeno">Preciso pagar algum valor?</h5>
            <p>
              Todo o curso é gratuito, apenas o certificado que é pago. Então você pode se
              inscrever, baixar o material e fazer a avaliação dos cursos sem pagar por isso. E se
              no final, você quiser receber o certificado, o valor cobrado é de:
            </p>
            <br />
            <p>R$ 28,70 para cursos de 20 até 150 horas;</p>
            <p>R$ 34,20 para cursos de 180 até 230 horas;</p>
            <p>R$ 38,70 para cursos de até 250 horas;</p>
            <p>R$ 58,70 para cursos de 360 horas.</p>
            <p>
              Você pode pagar esse valor por boleto, pix ou cartão de crédito, mas só depois de
              terminar seu curso.
            </p>
            <br />
            <h5 class="titulo-pequeno">Tem um prazo para terminar o curso?</h5>
            <p>
              Não! Como ofertamos cursos EAD você pode estudar de acordo com o seu tempo disponível
              e assim que finalizar seus estudos, pode retornar a plataforma para fazer a avaliação
              e solicitar o seu certificado.
            </p>
            <br />
            <h5 class="titulo-pequeno">Como faço a minha inscrição?</h5>
            <p>
              Para se inscrever, clique no curso que você deseja e depois procure pelo botão verde
              “INSCREVA-SE GRÁTIS”. Se você já tiver conectado(a) no site, a sua inscrição será
              confirmada apenas com um clique. Caso não esteja, insira seus dados na tela seguinte
              para confirmar sua inscrição.
            </p>
            <br />
            <p>
              ATENÇÃO: Antes de inscrever-se no seu primeiro curso, é necessário que você já tenha
              um cadastro no site. Caso ainda não tenha se cadastrado
              <a href="#" class="link-verde">Clique aqui</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="comentarios py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitulo">AVALIAÇÕES DE ALUNOS</h2>
            <h3 class="titulo">O Mais Recomendado</h3>
            <div class="swiper-detalhes-cursos-prints-comentarios swiper-bullets-amarelos">
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
        </div>
      </div>
    </section>
  </main>
<?php
include './parts/footer.php';
include './parts/foot.php';
?>