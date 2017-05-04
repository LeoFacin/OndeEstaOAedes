<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
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
        $resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
        $linhas = mysql_num_rows($resultado);
    ?>
    
    <!-- Page Content -->
    <div class="container">
        <div class="page-header">
            <h1>Usuários</h1>
        </div>
        
        <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nível Acesso</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        while($linhas = mysql_fetch_array(
                             $resultado)){
                            echo "<tr>";
                                echo "<td>".$linhas['id']."</td>";
                                echo "<td>".$linhas['nome']."</td>";
                                echo "<td>".$linhas['email']."</td>";
                                echo "<td>".$linhas['nivel_acesso_id']."</td>";
                                echo "<td>Editar - Apagar</td>";
                            echo "</tr>";
                            }
                        
                    ?>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>     
                </tbody>
            </table>
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
