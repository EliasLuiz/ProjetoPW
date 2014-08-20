<?php

include_once '/../C/CtrlUsuario.php';

class IAlteraEndereco {

    use Regexp;

    protected $email;

    function __construct($email) {
        $this->email = $email;
    }

    public function alteraEmail() {
        $ctrl = new CtrlUsuario();
        $ctrl->alteraEmail($this->email);
    }

}
