<?php
    $resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
    $linhas = mysql_num_rows($resultado);
?>
    
    <!-- Page Content -->
<div class="container">
    <div class="page-header">
        <h1>Usuários</h1>
    </div>

    
    <div class="row">
        <div class="pull-right">
            <a href="http://localhost/_site/admin/administrativo.php?link=3"><button type='submit' class='btn btn-xs btn-success'>Cadastrar</button></a>
        </div>
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
                            
                ?>             
                            <td>
                            <a href='administrativo.php?link=5&id=<?php 
                            echo $linhas['id']; ?>'><button type='submit' class='btn btn-xs btn-primary'>Visualizar</button></a>

                            <a href='administrativo.php?link=4&id=<?php 
                            echo $linhas['id']; ?>'><button type='submit' class='btn btn-xs btn-warning'>Editar</button></a>

                            <a href='processa_apaga_usuario.php?id=<?php 
                            echo $linhas['id']; ?>'><button type='submit' class='btn btn-xs btn-danger'>Excluir</button></a>
                            </td>   
                        
                        <?php
                            echo "</tr>";
                        }
                        ?>    
            </tbody>
        </table>
    </div>
    </div>
</div>