
<?php

 // verificar se cliclou no botao 
        if(isset($_POST['nome'])){

            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confSenha = addslashes($_POST['confSenha']);

            // verificar se os campos estao preechidos
            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confSenha)) {
                
                    $u->conectar("sistema_login", "localhost", "root", "");
                    if ($u->msgError == "") {
                        if ($senha == $confSenha) {
                        
                            if($u->cadastrar($nome, $telefone, $email, $senha)){
                                ?>
                                <p class="msgSucesso">Cadastro realizado com sucesso! Para acessar clique em logar!</p>
                                <?php
                            } else {
                                ?>
                                <p class="msgAtencao">Este email já esta sendo usado!</p>
                                <?php
                            }
                        }
                    else {

                        ?>
                         <p class="msgAtencao">Senha e confirmar senha não são iguais!</p>
                        <?php
                    }
                    
                } else {
                    ?>
                    <p class="msgAtencao">
                        <?php echo "Erro: ".$u->msgError; ?>
                    </p>
                    <?php
                }
            }
            else {
                ?>
                <p class="msgAtencao">Preencha todos os campos!</p>
                <?php
            }
        
        }
?>