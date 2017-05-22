<?php
    $id = $_GET['id'];
    // Executa consulta
    $result = mysql_query("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
    $resultado = mysql_fetch_assoc($result);
?>
<!-- Page Content -->
<div class="container">
    <div class="page-header">
        <h1>Visualiza Usuários</h1>
    </div>
    
    <div class="row">
        <div class="pull-right">
            <a href='administrativo.php?link=2&id=<?php 
            echo $resultado['id']; ?>'><button type='submit' class='btn btn-xs btn-primary'>Listar</button></a>

            <a href='administrativo.php?link=4&id=<?php 
            echo $resultado['id']; ?>'><button type='submit' class='btn btn-xs btn-warning'>Editar</button></a>

            <a href='administrativo.php?link=6&id=<?php 
            echo $resultado['id']; ?>'><button type='submit' class='btn btn-xs btn-danger'>Excluir</button></a>
        </div>
    </div>    
    

    <div class="row">
        <div class="col-md-12">
            <div class="col-xs-3 col-sm-1 col-md-1">
                <b>Id:</b>
            </div>
            <div class="col-xs-9 col-sm-11 col-md-11">
                <?php echo $resultado['id'] ?>
            </div>
            
            
            <div class="col-xs-3 col-sm-1 col-md-1">
                <b>Nome:</b>
            </div>
            <div class="col-xs-9 col-sm-11 col-md-11">
                <?php echo $resultado['nome'] ?>
            </div>
            
            <div class="col-xs-3 col-sm-1 col-md-1">
                <b>Email:</b>
            </div>
            <div class="col-xs-9 col-sm-11 col-md-11">
                <?php echo $resultado['email'] ?>
            </div>
            
            <div class="col-xs-3 col-sm-1 col-md-1">
                <b>Nível de Acesso:</b>
            </div>
            <div class="col-xs-9 col-sm-11 col-md-11">
                <?php echo $resultado['nivel_acesso_id'] ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
