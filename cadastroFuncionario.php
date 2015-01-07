<?php

require_once __DIR__ . '/classes/V/ICadastroFuncionario.php';

if(isset($_POST)){
    $interf = new ICadastroFuncionario();
    $interf->carregaPost();
    if(!$interf->salva()){ 
        header("Location: AreaAdministrador.php");
    }
}

?>