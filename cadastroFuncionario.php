<?php

    require_once 'classes/M/Funcionario.php';
    require_once 'classes/V/ICadastroFuncionario.php';
    require_once 'html/cadastros/administrador/cadastrofuncionario.html';

    if(isset($_POST["nome"])){
        $interf = new ICadastroFuncionario();
        $interf->carregaPost();
        $interf->salva();
    }
    
?>