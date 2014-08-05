<?php

    require_once 'classes/M/Cliente.php';
    require_once 'classes/M/Medico.php';   
    require_once 'classes/M/Bairro.php';  
    require_once 'classes/V/ICadastroUsuario.php';
    require_once 'html/cadastros/cliente/cadastrocliente.html';
    
    if(isset($_POST["usuario"])){
        $interf = new ICadastroUsuario();
        $interf->carregaPost();
        $interf->salva();
    }

?>