<?php

    include_once 'classes/V/IAlteraTelefone.php';

    require_once 'html/alteraTelefone.html';
    
    //criar classe de interface depois
    
    if(isset($_POST["ddd"])){
        $interf = new IAlteraTelefone($_POST['ddd'], $_POST['telefone']);
        $interf->alteraTelefone();
    }

?>