<?php

/**
 * Description of CtrlHospital
 *
 * @author Elias
 */

require_once __DIR__ . '/../M/Hospital.php';

class CtrlHospital {
    public function cadastra($nome, $telefone){
        $hosp = new Hospital();
        $hosp->setNmHospital($nome);
        $hosp->setTelefone($telefone);
        $hosp->salva();
    }
}
