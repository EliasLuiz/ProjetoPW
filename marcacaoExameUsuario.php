<?php

require_once __DIR__ . '/classes/V/IMarcacaoExame.php';

if (isset($_POST['exames1'])) {
    $interf = new IMarcacaoExame();
    $interf->marcaExame($_SESSION['cd'], $_POST['cdMedico'], $_POST['cdConsulta'],
            $_POST['exames1'], $_POST['convenio'], $_POST['data'], 
            $_POST['horario'], $_POST['dataColeta']);
}
?>