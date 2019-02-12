<?php
    require_once "classes/usuarios.php";
    $u = new Usuario;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style1.css">
    <title>Sintema de login | login</title>
</head>
<body>
    <div id="corpo-form">
    <h1>Entrar</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="email" maxlength="30" autofocus>
            <input type="password" name="senha" placeholder="senha" maxlength="16">
            <input type="submit" value="ENTRAR">
            <a href="cadastrar.php">Primeiro Acesso? <strong>Cadastre-se</strong></a>
        </form>
    </div>

    <?php
    require_once "classes/login.php";
    ?>
    
</body>
</html>