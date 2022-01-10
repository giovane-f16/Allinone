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
                <li><a href="#">Esporte</a></li>
                <li><a href="#">Música</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Séries</a></li>
                <li><a href="#">E-sports</a></li>
                <li><a href="#">Promoções do dia</a></li>
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
                    // Conexão API: http://www.dbins.com.br/dica/cotacao-do-dolar-com-php

                    // Iniciando conexão com o link que queremos acessar, enviando os parâmetros (get ?)
                    $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='01-07-2022'&format=json");
                    
                    // Definindo configurações para a nossa conexão (Parâmetros: conexão, comando, valor)
                    curl_setopt($ch, CURLOPT_HEADER, 0); // Desativa retorno das informações do cabeçalho do server
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Desativa verificação SSL
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Desativa verificação SSL
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Ativamos para permitir receber os dados enviados pelo server
                    
                    $res_curl = curl_exec($ch); // Executamos a nossa conexão

                    $resultado = json_decode($res_curl, true); // Convertendo a string JSON para Array
                    
                    $valores = $resultado["value"][0]; // Dentro do campo Value, existe um array de objetos com as informações que queremos
                    
                    echo $valores["cotacaoCompra"]; // Recuperando somente o valor do dólar 
                    echo "<br>";

                    //echo $valores["dataHoraCotacao"]; // Recuperando a data e hora da cotação.

                    curl_close($ch); // Fechando a conexão

                ?> </a></li>

                <li><a href="#">IPCA</a></li>
                <li><a href="#">Combustível</a></li>
                <li><a href="#">Salário Mínimo</a></li>
                <li><a href="#">Euro</a></li>
            </ul>
        </nav>
    </div>

    <br><br><br><br><br>

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