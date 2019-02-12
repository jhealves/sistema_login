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
    <title>Sistema de login</title>
</head>
<body>
    <div id="corpo-form-cad">
        <h1>Cadastro</h1>
         <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30" autofocus>
            <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
            <input type="email" name="email" placeholder="Email" maxlength="30">
            <input type="password" name="senha" placeholder="Senha" maxlength="16">
            <input type="password" name="confSenha" placeholder="Confirme Senha" maxlength="16">
            <input type="submit" value="CADASTRAR">
        </form>
        <a href="index.php">Já tem cadastro? <strong>Logar</strong></a>
    </div>

    <?php
       require_once "classes/cadastro.php";
    ?>
    

</body>
</html>