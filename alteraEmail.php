<?php

    include_once 'classes/V/IAlteraEmail.php';

    require_once 'html/alteraEmail.html';
    
    //criar classe de interface depois
    
    if(isset($_POST["email"])){
        $interf = new IAlteraEmail($_POST['email']);
        $interf->alteraEmail();
    }

?>