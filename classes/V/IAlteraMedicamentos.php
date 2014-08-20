<?php

include_once '/../C/CtrlUsuario.php';
include_once 'Regexp.php';

class IAlteraEndereco {

    use Regexp;

    protected $medicamentos;

    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfanumerico($this->medicamentos);
        return $valido;
    }
    
    function __construct($medicamentos) {
        $this->medicamentos = $medicamentos;
    }

    public function alteraMedicamentos() {
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlUsuario();
        $ctrl->alteraMedicamentos($this->medicamentos);
    }

}
