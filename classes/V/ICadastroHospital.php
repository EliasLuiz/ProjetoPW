<?php

/**
 * Description of InterfaceHospital
 *
 * @author Elias
 */
    
require_once '/../C/CtrlHospital.php';
require_once 'Regexp.php';

    class CtrlHospital{
    
    use Regexp;
    
        protected $nmhospital;
        protected $telefone;
        
        function carregaPost() {
            $this->nmhospital = $_POST["nomehosp"];
            $this->telefone = $_POST["ddd"] . $_POST["telefone"];
        }
        
        //Funções para validação aqui
        
        public function cadastra($nome, $telefone) {
            $ctrl = new CtrlHospital();
            $ctrl->cadastra($nome, $telefone);
        }
        
        public function salva(){
            
            //if(!$this->valida){ ERRO }
            
            $hosp = new Hospital();
            
            $hosp->setNmHospital($this->nmhospital);
            $hosp->setTelefone($this->telefone);
            
            return $hosp;
        }
    }
