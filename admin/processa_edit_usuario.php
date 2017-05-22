<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nivel_de_acesso = $_POST["nivel_de_acesso"];
    
    $query = mysql_query("UPDATE usuarios set nome='$nome', email='$email', senha='$senha', nivel_acesso_id='$nivel_de_acesso', modificada = NOW() WHERE id='$id'");
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
                    alert(\"Usuário alterado com sucesso.\");
                </script>
            ";
        }else {
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
                http://localhost/_site/admin/administrativo.php?link=2'>
                <script type=\"text/javascript\">
                    alert(\"Usuário não foi alterado.\");
                </script>
            ";
        }
        ?>
    </body>
</html>