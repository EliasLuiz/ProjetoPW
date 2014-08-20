<?php

/**
 * Description of InterfaceConvenio
 *
 * @author Elias
 */
require_once $GLOBALS["HOME"] . 'classes/C/CtrlConvenio.php';
require_once $GLOBALS["HOME"] . 'classes/V/Regexp.php';

class ICadastroConvenio {

    use Regexp;

    protected $nome;
    protected $responsavel;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfabeticoEspaco($this->nome);
        $valido = $valido && $this->validaAlfabeticoEspaco($this->responsavel);
        return $valido;
    }
    
    function carregaPost() {
        $this->nome = $_POST["nomeconvenio"];
        $this->responsavel = $_POST["responsavel"];
    }

    //Funções para validação aqui

    public function cadastra($nome, $responsavel) {

        //if(!$this->valida){ ERRO }
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlConvenio();
        $ctrl->cadastra($nome, $responsavel);
    }

    public function cadastraPost() {
        $this->carregaPost();
        $this->cadastra($this->nome, $this->responsavel);
    }

}
