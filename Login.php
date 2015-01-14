<?php
    require_once __DIR__ . '/classes/V/ILogin.php';
    
    if(isset($_POST)){
        $interf = new ILogin($_POST["login"], $_POST["senha"]);
        
        if($_POST["lembrar"] == "TRUE"){
            $_COOKIE["login"] = $_POST["login"];
            $_COOKIE["senha"] = $_POST["senha"];
        }
    }

?>
