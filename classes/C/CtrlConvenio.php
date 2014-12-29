<?php

require_once __DIR__ . '/../M/Convenio.php';

/**
 * Description of CtrlConvenio
 *
 * @author Elias
 */
class CtrlConvenio {
    public function cadastra($nome, $responsavel){
        $convenio = new Convenio();
        $convenio->setNome($nome);
        $convenio->setResponsavel($responsavel);
        $convenio->salva();
    }
}

?>
