<?php

        if (isset($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if (!empty($email) && !empty($senha)) {
                    $u->conectar("sistema_login", "localhost", "root", "");
                    if ($u->msgError == "") {
                        if ($u->logar($email, $senha)) {
                            header("location: areaPrivada.php");
                        }
                         else {
                            ?>
                                <p class="msgAtencao">Email ou senha incorretos!</p>
                            <?php
                    }
                } else {
                    ?>
                    <p class="msgAtencao">
                        <?php echo "Erro: ".$u->msgError; ?>
                    </p>
                    <?php
                }
            } else {
                ?>
                 <p class="msgAtencao">Preencha todos os campos!</p>
                <?php
            }
        }
    ?>