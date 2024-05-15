<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mirror Fashion</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <?php include("cabecalho.php");?>


        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>por apenas R$ 129,00</p>

            <form>
                <fieldset class="cores">
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto2-verde.png" alt="verde>">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa" checked>
                    <label for="rosa">
                        <img src="img/produtos/foto2-rosa.png" alt="rosa>">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul" checked>
                    <label for="azul">
                        <img src="img/produtos/foto2-azul.png" alt="azul>">
                    </label>
                </fieldset>
            </form>
        </div>



        <?php include("rodape.php");?>
    </body>
</html>