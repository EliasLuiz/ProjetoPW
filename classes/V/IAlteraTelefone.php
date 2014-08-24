<?php

require_once $GLOBALS["HOME"] . 'classes/C/CtrlUsuario.php';
require_once $GLOBALS["HOME"] . 'classes/V/Regexp.php';

class IAlteraEndereco {
    
    use Regexp;

    protected $ddd;
    protected $telefone;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaTelefone($this->ddd, $this->telefone);
        return $valido;
    }
    
    function __construct($ddd, $telefone) {
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->valida();
    }

    public function alteraEndereco() {
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlUsuario();
        $ctrl->alteraTelefone($this->ddd.$this->telefone);
    }

}
