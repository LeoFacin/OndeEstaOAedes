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
    session_start();
    include_once("seguranca.php");
    ?>

    
    <?php
        require_once ("menuAdmin.php");
    ?>
    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Área Administrativa</h1>
                
                <ol class="breadcrumb">
                    <li>
                        <a href="http://localhost/_site/index.php">Home</a>
                    </li>
                    <li class="active">Área Administrativa</li>
                </ol>
            </div>
        </div>


        <hr>

        <!-- Footer -->
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
