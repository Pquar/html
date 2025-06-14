<?php $cabecalho_title = "Mirror Fashion | Check";
$clear_css = '<link rel="stylesheet" href="./css/clear.css">';
$check_css = '<link rel="stylesheet" href="./css/check.css">';
$bootstrap_css = '<link rel="stylesheet" href="./css/bootstrap.css">';
include("./php/head.php");
?>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h2>Sua compra</h2>
                </div>
                <div class="card-body">
                    <img src="mirrorfashion/img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
                        class="img-thumbnail mb-3">
                    <dl>
                        <dt>Produto</dt>
                        <dd>Fuzzy Cardigan</dd>
                        <dt>Cor</dt>
                        <dd>Verde</dd>
                        <dt>Tamanho</dt>
                        <dd>40</dd>
                        <dt>Preço</dt>
                        <dd id="preco">R$ 129,90</dd>
                    </dl>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="qtd">Quantidade:</label>
                        <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total">Total:</label>
                        <output id="total" class="form-control">R$ 129,90 </output>
                    </div>
                </div>
            </div>
        </div>
        <form action="col-md-8 col-xl-9">
            <fieldset class="col-lg-6">
                <legend>Dados Pessoais</legend>
                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" autofocus required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="email@exemplo.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required
                        data-mask="999.999.999-99">
                </div>
                <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                    <label for="newsletter" class="custom-control-label">
                        Quero receber Newsletter da Mirror Fashion
                    </label>
                </div>
            </fieldset class="col-lg-6">
            <fieldset>
                <legend>Cartão de Crédito</legend>
                <div class="form-group">
                    <label for="numero-cartao">Número - CCV</label>
                    <input type="text" class="form-control" name="numero-cartao" id="numero-cartao"
                        data-mask="9999 9999 9999 9999 - 999">
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="bandeira-cartao">Bandeira</label>
                        </div>
                        <select class="custom-select" id="bandeira-cartao">
                            <option disabled selected>Selecione uma opção...</option>
                            <option value="master">MasterCard</option>
                            <option value="visa">VISA</option>
                            <option value="amex">American Express</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="validade-cartao">Validade</label>
                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                </div>
            </fieldset>
            <button type="submit" class="btn-primary btn-lg">
                Confirmar Pedido
            </button>
            <a href="produto.php">
                <button type="button" class="btn-lg btn">
                    Cancelar Pedido
                </button>
            </a>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/check.js"></script>
<script src="js/inputmask-plugin.js"></script>
</body>

</html>