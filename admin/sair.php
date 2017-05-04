<?php
    session_start();
    session_destroy();
    
    //remove todas as infos nas variaveis globais
    unset($_SESSION['usuarioId'],
          $_SESSION['usuarioNome'],
          $_SESSION['usuarioNivelAcesso'],
          $_SESSION['usuarioEmail'],
          $_SESSION['usuarioSenha']); 
    
    //redirecionar para página de login
    header("Location: login.php");
?>