<?php

    require_once 'classes/V/ICadastroUsuario.php';
    
    if(isset($_POST["usuario"])){
        $interf = new ICadastroUsuario();
        $interf->carregaPost();
        $interf->salva();
    }

?>