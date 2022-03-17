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
    <div id="layer"></div>
    <div class="topo" >
        <nav>
            <ul>
                <?php Exibir_categorias()?>
            </ul>
        </nav>
    </div>
    <div id="menu">
        <input type="image" src="/wordpress/wp-content/themes/allinone/menuicon.png" id="menuicon">
    </div>
    
    <div id="categorias">
        <div id="close"> 
            <input type="image" src="/wordpress/wp-content/themes/allinone/closeicon.png" id="closeicon">
        </div>
        <?php Exibir_categorias()?>
    </div>
    