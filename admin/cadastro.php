<!-- Page Content -->
<div class="container">
    <div class="page-header">
        <h1>Cadastrar Usuários</h1>
    
    </div>
        <div class="row">
        <div class="pull-right">
            <a href='administrativo.php?link=2&id=<?php 
            echo $resultado['id']; ?>'><button type='submit' class='btn btn-xs btn-primary'>Listar</button></a>
        </div>
    </div>    
    
    <div class="row">
    <div class="col-md-8">
        <form class="form-horizontal" method="POST" action="processa_cad_usuario.php">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
              </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
              </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Nível de Acesso</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nivel_de_acesso">
                        <option value="1">Administrativo</option>
                        <option value="2">Agente</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>
            </div>
        </form>
    </div>
    </div>

</div>
<!-- /.container -->
