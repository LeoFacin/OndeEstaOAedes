<?php
    session_start();

    $inputEmailt = $_POST['inputEmail'];
    $inputPasswordt = $_POST['inputPassword'];
    
    
    include_once ("conexao.php"); /*conexão com banco*/
    
    /* teste para saber se o usuario existe n obanco */
    $result = mysql_query("SELECT * FROM usuarios WHERE email='$inputEmailt' AND senha='$inputPasswordt' LIMIT 1");
    $resultado = mysql_fetch_assoc($result);
    echo $resultado['nome'];
    
    if(empty($resultado)){
        //Mensagem erro
        $_SESSION['loginERRO'] = "Usuário ou senha inválido";
        
        //Manda pra tela de login
        header("Location: login.php");
    }  else {
        // Define os atributos na sessao usuario
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        
      
        
        if($_SESSION['usuarioNivelAcesso'] == 1){
            header("Location: administrativo.php");
        }   
        
    }
?>