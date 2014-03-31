<?php require 'config.php'; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>Hangout ORMs</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <?php
       	$produtos = new \app\models\produtos();
       	$produtosEncontrados = $produtos->pegar_pelo_id('id', 186);
       	var_dump($produtosEncontrados);
        ?>
    </body>
</html>