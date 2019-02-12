<?php

    session_start();
    if (!isset($_SESSION['id_usuario'])) {
        header("location: index.php");
        exit;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>SEJA BEM VIDO VOCÊ ESTA LOGODO!</h1>
<a href="sair.php">SAIR</a>
</body>
</html>
