<?php

include_once './../C/CtrlUsuario.php';

class ILogin {

    use Regexp;

    protected $login;
    protected $senha;

    function __construct($login, $senha) {

        //tirar daqui e fazer um get separado pra cada um
        //echo '<hr>Construtor de ILogin';
        $this->login = $_POST["login"];
        $this->senha = $_POST["senha"];
        $controle = new CtrlUsuario();
        $controle->login($this->login, $this->senha);
    }

    //Funções para validação aqui
}
