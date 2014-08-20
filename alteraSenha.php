<?php

require_once $GLOBALS["HOME"] . 'classes/V/IAlteraSenha.php';

require_once $GLOBALS["HOME"] . 'alteraSenha.html';

//criar classe de interface depois

if (isset($_POST["senha"])) {
    $interf = new IAlteraSenha($_POST['senha'], $_POST['senha2']);
    $interf->alteraSenha();
}
?>