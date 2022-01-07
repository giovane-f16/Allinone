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
    <div>
        reportagem principal
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <div class="meio">
        <nav>
            <ul>
                <li><a href="#">Dólar:
                <?php 
                    //http://www.dbins.com.br/dica/cotacao-do-dolar-com-php
                    
                    $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='01-07-2022'&format=json");
                    
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
                    $res_curl = curl_exec($ch);

                    /*
                    if (curl_error($ch)) {
                            echo curl_error($ch);
                    } else {
                             print_r($res_curl);
                    }
                    */

                    $resultado = json_decode($res_curl, true);
                    
                    $valores = $resultado["value"][0];
                    
                    echo $valores["cotacaoCompra"];
                    echo "<br>";
                    /* echo $valores["dataHoraCotacao"]; */

                    curl_close($ch);
                ?> </a></li>
                <li><a href="#">IPCA</a></li>
                <li><a href="#">Combustível</a></li>
                <li><a href="#">Salário Mínimo</a></li>
                <li><a href="#">Euro</a></li>
            </ul>
        </nav>
    </div>
    <div>

    </div>

</body>
</html>