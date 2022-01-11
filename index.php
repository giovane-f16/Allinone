<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/wordpress/wp-content/themes/allinone/style.css">
    <title>Allinone</title>
</head>
<body>
    <div class="topo">
        <nav>
            <ul>
                <?php 
                Exibir_categorias()
                
                ?>
            </ul>
        </nav>
    </div>

    <hr>

    <div class="principal">
        <img src="https://image.freepik.com/vetores-gratis/texto-dourado-2022-estilo-3d-realista-sobre-fundo-branco-bokeh_1017-35372.jpg">
    </div>

    <hr>
    
    <div class="meio">
        <nav>
            <ul>
                <li><a href="http://www.dbins.com.br/dica/cotacao-do-dolar-com-php">Dólar:

                <?php 
                Pegar_valor_dolar()
                ?> 
                </a></li>

                <li><a href="#">IPCA</a></li>
                <li><a href="#">Combustível</a></li>
                <li><a href="#">Salário Mínimo</a></li>
                <li><a href="#">Euro</a></li>
            </ul>
        </nav>
    </div>


    <div class="inferior">
        <nav> 
            <ul>
                <li><a href="#">Política</a></li>
                <li><a href="#">Esporte</a></li>
                <li><a href="#">Ofertas</a></li>
            </ul>
        </nav>
    </div>

</body>
</html>