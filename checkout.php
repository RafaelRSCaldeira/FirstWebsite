<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="icon" href="img/logo.png">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Mirror Fashion</a>
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">menu</button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Perguntas Frequentes</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>
    </nav>


    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>
                Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Sua compra</h2>
                            </div>
                            <div class="panel-body">
                                <img src="img/produtos/foto<?= $_POST["id"]?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive hidden-xs">
                                <dl>
                                    <dt>Produto</dt>
                                    <dd><?= $_POST["nome"] ?></dd>

                                    <dt>Preço</dt>
                                    <dd><?= $_POST["preco"] ?></dd>

                                    <dt>Cor</dt>
                                    <dd><?= $_POST["cor"] ?></dd>

                                    <dt>Tamanho</dt>
                                    <dd><?= $_POST["tamanho"] ?></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <form class="col-sm-8 col-lg-9">
                        <div class="row">
                            <fieldset class="col-md-6">
                                <legend>Dados pessoais</legend>

                                <div class="input-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required autofocus>
                                </div>

                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>

                                <div class="input-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="sim" name="spam" checked>
                                        Quero receber spam da Mirror Fashion
                                    </label>
                                </div>
                            </fieldset>
                            <fieldset class="col-md-6">
                                <legend>Cartão de crédito</legend>

                                <div class="input-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                                </div>

                                <div class="input-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value="master">MasterCard</option>
                                        <option value="visa">Visa</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Confirmar pedido
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>