<?php

/**
 * Description of InterfaceConvenio
 *
 * @author Elias
 */
require_once '/../C/CtrlConvenio.php';

class ICadastroConvenio {

    use Regexp;

    protected $nome;
    protected $responsavel;

    function carregaPost() {
        $this->nome = $_POST["nomeconvenio"];
        $this->responsavel = $_POST["responsavel"];
    }

    //Funções para validação aqui

    public function cadastra($nome, $responsavel) {

        //if(!$this->valida){ ERRO }
        $ctrl = new CtrlConvenio();
        $ctrl->cadastra($nome, $responsavel);
    }

    public function cadastraPost() {
        $this->carregaPost();
        $this->cadastra($this->nome, $this->responsavel);
    }

}
