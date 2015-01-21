<?php

require_once __DIR__ . '/classes/V/ICadastroUsuario.php';

if(isset($_POST)){
    $interf = new ICadastroUsuario();
    $interf->carregaPost();
    if(!$interf->salva()){ 
        header("Location: Cadastro.html");
    }
    else{
        header("Location: index.php");
    }
}

?>