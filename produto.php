<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mirror Fashion</title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/produto.css">
    </head>
    <body>
        <?php include("cabecalho.php");?>
        <div class="poduto-back">
            <div class="container">
                <div class="produto">
                    <h1>Cardigan Thelure Basic</h1>
                    <p>por apenas R$ 296,00</p>

                    <form>
                        <fieldset class="cores">
                            <legend>Escolha o tamanho:</legend>
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                            <label for="verde">
                                <img src="img/produtos/foto3-verde.png" alt="verde>">
                            </label>

                            <input type="radio" name="cor" value="rosa" id="rosa" checked>
                            <label for="rosa">
                                <img src="img/produtos/foto3-rosa.png" alt="rosa>">
                            </label>

                            <input type="radio" name="cor" value="azul" id="azul" checked>
                            <label for="azul">
                                <img src="img/produtos/foto3-azul.png" alt="azul>">
                            </label>
                        </fieldset>

                        <fieldset class="tamanho">
                            <legend>Escolha o tamanho:</legend>
                            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                        </fieldset>

                        <input type="submit" class="comprar" value="Comprar">
                    </form>
                </div>
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>

                    <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
                    <table>
                        <thead>
                            <th>Característica</th>
                            <th>Detalhe</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardigã 7845</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algodão e poliéster</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Azul, Rosa e Verde</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Lavar a mão</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include("rodape.php");?>
    </body>
</html>