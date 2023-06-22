<ul class="menu-dashboard">
  <li>
    <a href="../dashboard-meu-perfil.php" class="item-menu-dashboard <?php echo ($pagina === 'perfil') ? " ativo" : "";?>">
      <img src="./img/icone-usuario.svg" alt="" class="icone">
      <span>Meus Dados</span>
    </a>
  </li>
  <li>
    <a href="../dashboard-meus-cursos.php" class="item-menu-dashboard  <?php echo ($pagina === 'cursos') ? " ativo" : "";?>">
      <img src="./img/icone-livro.svg" alt="" class="icone">
      <span>Matrículas</span>
    </a>
  </li>
  <li>
    <a href="../dashboard-certificados.php" class="item-menu-dashboard <?php echo ($pagina === 'certificados') ? " ativo" : "";?>">
      <img src="./img/icone-medalha.svg" alt="" class="icone">
      <span>Certificados</span>
    </a>
  </li>
  <li>
    <a href="../dashboard-pagamentos.php" class="item-menu-dashboard <?php echo ($pagina === 'pagamentos') ? " ativo" : "";?>">
      <img src="./img/icone-cifrao.svg" alt="" class="icone">
      <span>Pagamentos</span>
    </a>
  </li>
  <li>
    <a href="../dashboard-alterar-senha.php" class="item-menu-dashboard <?php echo ($pagina === 'senha') ? " ativo" : "";?>">
      <img src="./img/icone-chave.svg" alt="" class="icone">
      <span>Alterar Senha</span>
    </a>
  </li>
  <hr>
  <li>
    <a href="../index.php" class="item-menu-dashboard">
      <img src="./img/icone-desligar.svg" alt="" class="icone">
      <span>Sair</span>
    </a>
  </li>
</ul>