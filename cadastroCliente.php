<?php

    require_once 'classes/V/ICadastroUsuario.php';
    require_once 'html/cadastros/cliente/cadastrocliente.html';
    
    if(isset($_POST["usuario"])){
        $interf = new ICadastroUsuario();
        $interf->carregaPost();
        $interf->salva();
    }

?>