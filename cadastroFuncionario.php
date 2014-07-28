<?php

    require_once 'classes/M/Funcionario.php';
    require_once 'classes/V/IFuncionario.php';
    require_once 'html/cadastros/administrador/cadastrofuncionario.html';

    if(isset($_POST["nome"])){
        $interf = new IFuncionario();
        $func = $interf->gera();
        $func->salva();
    }
    
?>