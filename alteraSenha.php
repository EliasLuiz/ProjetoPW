<?php

    include_once 'classes/V/IAlteraSenha.php';

    require_once 'html/alteraSenha.html';
    
    //criar classe de interface depois
    
    if(isset($_POST["senha"])){
        $interf = new IAlteraSenha($_POST['senha'], $_POST['senha2']);
        $interf->alteraSenha();
    }

?>