<?php

require_once 'classes/V/ICadastroFuncionario.php';

if (isset($_POST["nome"])) {
    $interf = new ICadastroFuncionario();
    $interf->carregaPost();
    $interf->salva();
}
?>