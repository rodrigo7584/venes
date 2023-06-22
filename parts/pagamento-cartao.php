<div class="tipo-pagamento pagamento-cartao"  data-metodo-pagamento="cartao">
  <div class="row">
    <div class="col-lg-4 d-none d-lg-block">
      <img src="./img/ilustracao-cartao-credito.svg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-8">
      <div class="form-dados-cartao form-branco">
        <div class="row">
          <div class="col-12">
            <label class="form-label" for="numero">NÚMERO DO CARTÃO</label>
            <input type="text" id="numero" class="form-control">
          </div>
          <div class="col-sm-8">
            <label class="form-label" for="nome">NOME DO PROPRIETÁRIO</label>
            <input type="text" id="nome" class="form-control">
          </div>
          <div class="col-6 col-sm-2">
            <label class="form-label" for="mes">Mês</label>
            <input type="text" id="mes" class="form-control">
          </div>
          <div class="col-6 col-sm-2">
            <label class="form-label" for="ano">Ano</label>
            <input type="text" id="ano" class="form-control">
          </div>
          <div class="col-sm-5">
            <label class="form-label" for="cvv">CÓDIGO DE SEGURANÇA</label>
            <input type="text" id="cvv" class="form-control" placeholder="CVV">
          </div>
          <div class="col-sm-7">
            <label class="form-label" for="parcelas">Parcelas</label>
            <select name="parcelas" id="parcelas" class="form-select">
              <option value="1">1 x de R$ 28,70</option>
            </select>
          </div>
          <div class="col-12 d-flex justify-content-end mb-3">
            <button type="submit" class="bt-laranja-redondo">PROCESSAR PAGAMENTO</button>
          </div>
        </div>
      </div>
      <a href="checkout-resumo" class="bt-cinza bt-voltar-resumo">
        <img src="./img/icone-circulo-seta.svg" alt="" class="icone">
        Voltar para o Resumo
      </a>
    </div>
  </div>
</div>