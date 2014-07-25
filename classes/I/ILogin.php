<?php

class IUsuario{
        protected $login;
        protected $senha;
        
        public function getLogin(){
        return $this->login;
        }
        
        function __construct($login, $senha) {
            
            //tirar daqui e fazer um get separado pra cada um
            $this->login = $_POST["login"];
            $this->senha = $_POST["senha"];
            $controle = new CtrlUsuario();
            $controle->login($this->login, $this->senha);
        }
        
        //Funções para validação aqui
        
}