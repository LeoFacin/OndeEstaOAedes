<?php
session_start();
include_once("seguranca.php");
include_once ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Facin">

        <title>Área Administrativa</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <?php
            require_once ("menuAdmin.php");

            $pag[1] = "bem_vindo.php";
            $pag[2] = "usuarios.php";
            $pag[3] = "cadastro.php";
            $pag[4] = "editar_usu.php";
            $pag[5] = "visualiza_usu.php";
            $pag[6] = "processa_apaga_usu";

            if (!empty($_GET["link"])) {
                $link = $_GET["link"];
                if (file_exists($pag[$link])) {
                    include $pag[$link];
                } else {
                    include "bem_vindo.php";
                }
            } else {
                include "bem_vindo.php";
            }
        ?>

        <div class="container">
            <hr>
        </div>

        <?php
            require_once './../footer.php';
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
