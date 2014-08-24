<?php

require_once $GLOBALS["HOME"] . 'classes/V/ICadastroFuncionario.php';

if (isset($_POST["nome"])) {
    $interf = new ICadastroFuncionario();
    $interf->carregaPost();
    $interf->salva();
}
?>