<?php
    require_once $GLOBALS["HOME"] . 'classes/V/ILogin.php';
    
    if(isset($_POST)){
        $interf = new ILogin($_POST["login"], $_POST["senha"]);
    }

?>
