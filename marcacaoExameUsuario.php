<?php

require_once $GLOBALS["HOME"] . 'classes/V/IMarcacaoExame.php';

if (isset($_POST['cd'])) {
    $interf = new IMarcacaoExame();
    $interf->marcaExame($_SESSION['cd'], $_POST['cdMedico'], $_POST['cdConsulta'],
            $_POST['cdTipoExame'], $_POST['cdConvenio'], $_POST['dataExame'], 
            $_POST['dataColeta']);
}
?>