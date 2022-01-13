<?php

// Criando a função para dinamizar as categorias
function Exibir_categorias(){

    $array = ["hide_empty"=>false];
    
    $categorias = get_terms($array);

    foreach ($categorias as $categoria) {
        $link = get_term_link($categoria);
        echo "<li> <a href='{$link}'>{$categoria->name}</a></li>";
    }
}

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

function Pegar_ipca(){
    // Iniciando a conexão
    $conec = curl_init();
    $endpoint = 'https://api.bcb.gov.br/dados/serie/bcdata.sgs.10844/dados/ultimos/10';
    $params = array('formato' => 'json');
    $url = $endpoint . '?' . http_build_query($params);
    curl_setopt($conec, CURLOPT_URL, $url);

    /*
    curl_setopt($conec, CURLOPT_HEADER, 0); 
    curl_setopt($conec, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt($conec, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($conec, CURLOPT_RETURNTRANSFER, true); 
    */

    curl_setopt($conec, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conec, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($conec, CURLOPT_CUSTOMREQUEST, "GET");
    

    $exec_curl = curl_exec($conec);

    /*
    if(curl_error($conec)) {
        echo "<br>";
        echo curl_error($conec);
    } else {
        print_r($exec_curl);
    } */

    $resultado = json_decode($exec_curl, true);

    var_dump($resultado);

    //$valores = var_dump($resultado["valor"]);

    //echo $valores;

    curl_close($conec);
}



?>

