<?php

require_once $GLOBALS["HOME"] . 'classes/V/IAlteraMedicamentos.php';

require_once $GLOBALS["HOME"] . 'alteraMedicamentos.html';

if (isset($_POST["medicamentos"])) {
    $interf = new IAlteraEndereco($_POST['medicamentos']);
    $interf->alteraMedicamentos();
}
?>