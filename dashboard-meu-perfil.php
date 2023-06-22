<?php 
include './parts/head.php';
include './parts/dashboard-header.php';
$pagina = "perfil"
?>
<main class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include './parts/dashboard-menu.php';?>
      </div>
      <div class="col-md-9 dashboard-meu-pefil py-5">
        <h2 class="titulo">
          Meu Perfil
        </h2>
        <form action="#" class="form-meus-dados form-branco">
          <div class="row">
            <div class="col-sm-8">
              <label for="nome" class="form-label">NOME COMPLETO</label>
              <input type="text" class="form-control" id="nome">
            </div>
            <div class="col-sm-4">
              <label for="sexo" class="form-label">SEXO</label>
              <select id="sexo" class="form-select">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
              </select>
            </div>
            <div class="col-lg-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="text" class="form-control" id="email" value="email@email.com.br" readonly>
            </div>
            <div class="col-md-6 col-lg-3">
              <label for="nascimento" class="form-label">DATA DE NASCIMENTO</label>
              <input type="text" class="form-control" id="nascimento" value="22/11/2023" >
            </div>
            <div class="col-md-6 col-lg-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf" value="333.222.444-55" readonly>
            </div>
            <div class="col-sm-4">
              <label for="celular" class="form-label">CELULAR (WHATSAPP)</label>
              <input type="text" class="form-control" id="celular" value="(99) 95555-5555">
            </div>
            <div class="col-sm-4">
              <label for="telefone" class="form-label">TELEFONE FIXO</label>
              <input type="text" class="form-control" id="telefone">
            </div>
          </div>
          <button type="submit" class="bt-laranja-redondo bt-salvar-dados">
            SALVAR
          </button>
        </form>
        <h2 class="titulo mt-5">
          Meu endereço
        </h2>
        <form action="#" class="form-meu-endereco form-branco">
          <div class="row">
            <div class="col-sm-4">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" id="cep">
            </div>
            <div class="col-sm-6">
              <label for="endereco" class="form-label">ENDEREÇO</label>
              <input type="text" class="form-control" id="endereco">
            </div>
            <div class="col-sm-2">
              <label for="numero" class="form-label">Número</label>
              <input type="text" class="form-control" id="numero">
            </div>
            <div class="col-sm-4">
              <label for="bairro" class="form-label">BAIRRO</label>
              <input type="text" class="form-control" id="bairro" >
            </div>
            <div class="col-sm-3">
              <label for="complemento" class="form-label">COMPLEMENTO</label>
              <input type="text" class="form-control" id="complemento">
            </div>
            <div class="col-sm-4">
              <label for="referencia" class="form-label">PONTO DE REFERÊNCIA</label>
              <input type="text" class="form-control" id="referencia">
            </div>
            <div class="col-sm-5">
              <label for="estado" class="form-label">ESTADO</label>
              <select id="estado" class="form-select">
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
              </select>
            </div>
            <div class="col-sm-5">
              <label for="cidade" class="form-label">CIDADE</label>
              <select id="cidade" class="form-select">
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
              </select>
            </div>
          </div>
          <button type="submit" class="bt-laranja-redondo bt-salvar-endereco">
            SALVAR
          </button>
        </form>
        <h3 class="titulo mt-5">
        Cartões Salvos
        </h3>
        <p>No carrinho de compras selecione o seu cartão salvo para evitar preencher
        novamente os seus dados. É rápido, fácil e totalmente seguro.</p>
      </div>
    </div>
  </div>
</main>
<?php 
include './parts/footer.php';
include './parts/foot.php'
?>