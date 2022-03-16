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
                <?php Exibir_categorias()?>
            </ul>
        </nav>
    </div>
    <div id="menu">
        <input type="image" src="wp-content/themes/allinone/menuicon.png" id="menuicon">
        <script src="wp-content/themes/allinone/scripts.js"> </script>
        <a href="#" ><img src="wp-content/themes/allinone/g_logo.png" id="g_logo"></a>
    </div>
    <div id="categorias">
        <ul>
        <?php Exibir_categorias()?>
        </ul>
        <ul>
        <input type="image" src="wp-content/themes/allinone/closeicon.png" id="closeicon">
        </ul>
    </div>