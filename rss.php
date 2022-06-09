<?php
include_once('verifica_login.php');
include 'menu.php';
include './app/Feed/TecMundo.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/menu.css" />

    <title>Feed Rss - TecMundo</title>
</head>

<body>
    <div class="container-rss">
    <?=include 'rss/index.php' ?>    
</div>

    <script src="./js/menu.js">
    </script>

</body>

</html>