<?php
    require_once 'classes/V/ILogin.php';
    require_once 'html/Login.html';
    
    if(isset($_POST)){
        $interf = new ILogin($_POST["login"], $_POST["senha"]);
    }

?>
