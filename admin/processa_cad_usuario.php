<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
    
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nivel_de_acesso = $_POST["nivel_de_acesso"];
    
    $query = mysql_query("INSERT INTO usuarios (nome, email, senha, nivel_acesso_id, criada) VALUES ('$nome', '$email', '$senha', '$nivel_de_acesso', NOW())");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
        if(mysql_affected_rows() != 0){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
                http://localhost/_site/admin/administrativo.php?link=2'>
                <script type=\"text/javascript\">
                    alert(\"Usuário cadastrado com sucesso.\");
                </script>
            ";
        }else {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
                http://localhost/_site/admin/administrativo.php?link=2'>
                <script type=\"text/javascript\">
                    alert(\"Usuário não foi cadastrado.\");
                </script>
            ";
        }
        ?>
    </body>
</html>