<?php

/**
 * Description of InterfaceConvenio
 *
 * @author Elias
 */
require_once __DIR__ . '/../C/CtrlConvenio.php';
require_once __DIR__ . '/Regexp.php';

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

    public function salva() {

        if(!$this->valida()){
            return FALSE;
        }
        
        $ctrl = new CtrlConvenio();
        $ctrl->cadastra($this->nome, $this->responsavel);
        
        return TRUE;
    }

}
