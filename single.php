<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    get_header() ;

    global $post;
    
    echo "<div class='titulo_subtitulo'>"; 
    echo "<h1>".$post->post_title."</h1>";
    echo "<h2>".$post->post_excerpt."</h2>";
    echo "</div>";

    $data = $post->post_date;
    $data_mod = substr($data, 0, 9);
    echo $data_mod."<br>";
    
    echo "<div class='conteudo'>";
    echo "<p>".$post->post_content."</p>";
    echo "</div>";

    echo "<div class='voltar'>";
    /* Perguntar: maneira correta de trazer botão de Início*/
    echo "<a href='\wordpress'>Início</a>";
    // Criar botão de voltar
    echo "</div>";

    get_footer();
    ?>
</body>
</html>
