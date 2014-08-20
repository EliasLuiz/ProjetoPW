<?php

require_once $GLOBALS["HOME"] . 'classes/V/IAlteraTelefone.php';

require_once $GLOBALS["HOME"] . 'alteraTelefone.html';

//criar classe de interface depois

if (isset($_POST["ddd"])) {
    $interf = new IAlteraTelefone($_POST['ddd'], $_POST['telefone']);
    $interf->alteraTelefone();
}
?>