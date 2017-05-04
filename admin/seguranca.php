<?php
    
    
    if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioSenha'] == "")){
        
        unset($_SESSION['usuarioId'],
              $_SESSION['usuarioNome'],
              $_SESSION['usuarioNivelAcesso'],
              $_SESSION['usuarioEmail'],
              $_SESSION['usuarioSenha']);

        // Mensagem ERRO
        $_SESSION['loginErro'] = "Área restrita para agentes cadastrados";
        header("Location: login.php");
    }

?>