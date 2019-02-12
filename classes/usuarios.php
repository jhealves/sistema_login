<?php

Class Usuario{
    private $pdo;
    public $msgError = "";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo, $msgError;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
    }

    public function cadastrar($nome, $telefone, $email, $senha){

        global $pdo;
        // verificar se o email esta cadastrado no banco de dados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() >0) {
            return false; //usuario já cadastrado
        } else {
            // caso não estiver cadastrado
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $senha){

        global $pdo;
        // verificar se o email e a senha estao corretos
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() >0) {

            // entrar no sistema atraves da (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //  login realizado com sucesso

        } else {
            return false; //nao foi possivel logar
        }
    }
}