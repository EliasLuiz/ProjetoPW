<?php

require_once __DIR__ . '/classes/V/ICadastroUsuario.php';

if(isset($_POST)){
    $interf = new ICadastroUsuario();
    if($interf->carregaPost() && $interf->valida()){
        $interf->salva();
    }
    else{
        //header("Location: Cadastro.html");
    }
}

?>