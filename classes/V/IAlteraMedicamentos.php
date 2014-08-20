<?php

include_once '/../C/CtrlUsuario.php';

class IAlteraEndereco {

    use Regexp;

    protected $medicamentos;

    function __construct($medicamentos) {
        $this->medicamentos = $medicamentos;
    }

    public function alteraMedicamentos() {
        $ctrl = new CtrlUsuario();
        $ctrl->alteraMedicamentos($this->medicamentos);
    }

}
