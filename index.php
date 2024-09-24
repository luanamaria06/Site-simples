<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo de Lilo & Stitch</title>
    <link rel="shortcut icon" href="imagens/stitch_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="visual_do_site.css">
</head>
<body>

<?php

    include_once("topo.php");
    include_once("menu.php");

    if (empty($_SERVER["QUERY_STRING"])) {
        $pg = "principal.php";
        include_once($pg);

    }else {
        $pg = $_GET["pg"];
        include_once("$pg.php");

    }

    include_once("rodape.php");
?>

</body>
</html>