<?php
    require_once __DIR__ . '/classes/V/ILogin.php';
    
    if(isset($_POST)){
        
        $interf = new ILogin($_POST["login"], $_POST["senha"]);
        
        if($_POST["lembrar"] == "TRUE"){
            //$_COOKIE["login"] = $_POST["login"];
            //$_COOKIE["senha"] = $_POST["senha"];
            $expire = time() + 60 * 60 * 24 * 30;
            setcookie("login", $_POST["login"], $expire);
            setcookie("senha", $_POST["senha"], $expire);
        }
        else{
            $expire = time() - 1;
            setcookie("login", $_POST["login"], $expire);
            setcookie("senha", $_POST["senha"], $expire);
        }
    }

?>
