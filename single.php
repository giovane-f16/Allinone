<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allinone</title>
</head>
<body>
    <?php
    get_header();

    global $post;
    
    echo "<div class='titulo_subtitulo'>";
    echo "<div>";
    echo "<h1>".$post->post_title."</h1>";
    echo "<h2>".$post->post_excerpt."</h2>";
    echo "</div>";
    echo $thumb = get_the_post_thumbnail($post);
    echo "</div>";

    echo "<br>";
    $data = $post->post_date;
    $data_mod = substr($data, 0, 9);
    echo $data_mod;
    echo "<p>".$post->post_content."</p>";
    
    /* Perguntar: maneira correta de trazer botão de Início */
    echo "<div class='voltar'>";
    echo "<a href='\wordpress'>Início</a>";
    echo "</div>";
   
    // Criar botão de voltar
    //echo "<input type='button' value='Voltar' onClick='history.go(-1)'>";
    
    get_footer();
    ?>
</body>
</html>
