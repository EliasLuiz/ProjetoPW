<?php

/**
 * Description of InterfaceHospital
 *
 * @author Elias
 */
require_once $GLOBALS["HOME"] . 'classes/C/CtrlHospital.php';
require_once $GLOBALS["HOME"] . 'classes/V/Regexp.php';

class CtrlHospital {

    use Regexp;

    protected $nmhospital;
    protected $telefone;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfanumerico($this->nmhospital);
        $valido = $valido && $this->validaAlfanumerico($this->telefone);
        return $valido;
    }

    function carregaPost() {
        $this->nmhospital = $_POST["nomehosp"];
        $this->telefone = $_POST["ddd"] . $_POST["telefone"];
    }

    //Funções para validação aqui

    public function cadastra($nome, $telefone) {
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlHospital();
        $ctrl->cadastra($nome, $telefone);
    }

    public function salva() {

        //if(!$this->valida){ ERRO }

        $hosp = new Hospital();

        $hosp->setNmHospital($this->nmhospital);
        $hosp->setTelefone($this->telefone);

        return $hosp;
    }

}
