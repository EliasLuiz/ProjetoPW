<?php

    include_once 'classes/V/IAlteraEndereco.php';

    require_once 'html/alteraEndereco.html';
    
    //criar classe de interface depois
    
    if(isset($_POST["rua"])){
        $interf = new IAlteraEndereco($_POST['rua'],
                $_POST['numero'], $_POST['complemento'],
                $_POST['bairro'], $_POST['cidade']);
        $interf->alteraEndereco();
    }

?>