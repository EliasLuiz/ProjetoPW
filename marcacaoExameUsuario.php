<?php
session_start();
require_once __DIR__ . '/classes/V/IMarcacaoExame.php';

$_POST['cdMedico'] = "";
$_POST['cdConsulta'] = "";
$_POST['dataColeta'] = "";

if (isset($_POST['exames1'])) {
    $interf = new IMarcacaoExame();
    echo '<br> marcaExameUsuario';
    echo '<br> cd sessao: '.$_SESSION['cd'];
    echo '<br> cd consulta: '.$_SESSION['cdConsulta'];
    echo '<br> cd medico: '.$_POST['cdMedico'];
    echo '<br> cd tipoexame: '.$_POST['exames1'];
    echo '<br> convenio: '.$_POST['convenio'];
    echo '<br> data: '.$_POST['data'];
    $interf->marcaExame($_SESSION['cd'], $_POST['cdMedico'], $_POST['cdConsulta'],
            $_POST['exames1'], $_POST['convenio'], $_POST['data'], 
            $_POST['horario'], $_POST['dataColeta']);
    header("Location: " . __DIR__ . "/../../cliente.php");
}

header("Location: " . __DIR__ . "/../../cliente.php");
?>