<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ . '/classes/V/IMarcacaoExame.php';
require_once __DIR__ . '/classes/M/Medico.php';
require_once __DIR__ . '/classes/M/TipoExame.php';
require_once __DIR__ . '/classes/M/Convenio.php';

if(isset($_POST)){
    $iex = new IMarcacaoExame();
    
    if($_POST['medico'] != 'Nenhum'){
        $med = new Medico();
        $med->setNome($_POST['medico']);
        $medi = $med->getCdPessoaNome();
    }
    else{
        $medi = '';
    }
    
    $tex = new TipoExame();
    $tex->setNome($_POST['exames1']);
    $cdex = $tex->getCdTipoExame();
    
    if($_POST['pagamento']=='convenio'){
        $conv = new Convenio();
        $conv->setNome($_POST['convenio']);
        $con = $conv->getCdConvenio();
    }
    else{
        $con = '';
    }
    
    if($_POST['coleta'] == 'sim'){
        $data = $_POST['data'];
        $hor = $_POST['horario'];
    }
    else{
        $data = '';
        $hor = '';
    }
    session_start();
    
    echo 'vai pra interf<br>';
    echo 'cdex: ' . $cdex . '<br>';
    
    $iex->marcaExame($_SESSION['cd'], $medi, $cdex,
            $con, $data, $hor, '');
}