<?php

require_once __DIR__ . '/../C/CtrlUsuario.php';
require_once __DIR__ . '/Regexp.php';

class IAlteraSenha {

    use Regexp;

    protected $senha;
    protected $senha2;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfabeticoSimbolo($this->senha);
        $valido = $valido && $this->validaAlfabeticoSimbolo($this->senha2);
        return $valido;
    }
    
    function __construct($senha, $senha2) {
        $this->senha = $senha;
        $this->senha2 = $senha2;
        $this->valida();
    }

    public function valida() {
        //adicionar conferencia de senha antiga
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        if ($this->senha != $this->senha2) {
            die("Senhas n&atilde;o conferem");
        }
    }

    public function alteraSenha() {
        $ctrl = new CtrlUsuario();
        $ctrl->alteraSenha($this->senha);
    }

}
