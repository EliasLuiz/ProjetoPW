<?php

require_once __DIR__ . '/../C/CtrlUsuario.php';
require_once __DIR__ . '/Regexp.php';

class IAlteraEndereco {

    use Regexp;

    protected $email;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaEmail($this->email);
        return $valido;
    }
    
    function __construct($email) {
        $this->email = $email;
    }

    public function alteraEmail() {
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlUsuario();
        $ctrl->alteraEmail($this->email);
    }

}
