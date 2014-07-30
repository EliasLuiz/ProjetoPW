<?php

include_once '/../C/CtrlUsuario.php';

class IAlteraEndereco {

    protected $ddd;
    protected $telefone;

    function __construct($ddd, $telefone) {
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->valida();
    }

    public function valida() {
        if(empty($this->ddd) || empty($this->telefone)){
            die("Campo obrigat&oacute;rio vazio");
        }
    }

    public function alteraEndereco() {
        $ctrl = new CtrlUsuario();
        $ctrl->alteraTelefone($this->ddd.$this->telefone);
    }

}
