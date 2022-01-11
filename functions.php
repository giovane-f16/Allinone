<?php

function Pegar_valor_dolar() {
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
}

function Exibir_categorias(){
    $array = ["hide_empty"=>false];
    
    $categorias = get_terms($array);

    foreach($categorias as $categoria){
        $link = get_term_link($categoria);
        echo "<li> <a href='{$link}'>{$categoria->name}</a></li>";
        
    }


    
}

function Somar($n1, $n2){
    $soma = $n1 + $n2;
    return $soma;
}

?>

