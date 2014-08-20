<?php

    include_once 'classes/V/IAlteraMedicamentos.php';

    require_once 'html/alteraMedicamentos.html';
    
    if(isset($_POST["medicamentos"])){
        $interf = new IAlteraEndereco($_POST['medicamentos']);
        $interf->alteraMedicamentos();
    }

?>