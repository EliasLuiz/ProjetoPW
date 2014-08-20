<?php

require_once '/../C/CtrlUsuario.php';

class IAlteraEndereco {

    use Regexp;

    protected $senha;
    protected $senha2;

    function __construct($senha, $senha2) {
        $this->senha = $senha;
        $this->senha2 = $senha2;
        $this->valida();
    }

    public function valida() {
        //adicionar conferencia de senha antiga
        if ($this->senha != $this->senha2) {
            die("Senhas n&atilde;o conferem");
        }
    }

    public function alteraSenha() {
        $ctrl = new CtrlUsuario();
        $ctrl->alteraSenha($this->senha);
    }

}
