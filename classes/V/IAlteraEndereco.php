<?php

include_once '/../C/CtrlUsuario.php';
class IAlteraEndereco {
    
    protected $rua;
    protected $numeroEnd;
    protected $complementoEnd;
    protected $bairro;
    protected $cidade;
    
    function __construct($rua, $numeroEnd, $complementoEnd, $bairro, $cidade) {
        $this->rua = $rua;
        $this->numeroEnd = $numeroEnd;
        $this->complementoEnd = $complementoEnd;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }
    
    public function alteraEndereco(){
        $ctrl = new CtrlUsuario();
        $ctrl->alteraEndereco($rua, $numeroEnd, $complementoEnd, $bairro, $cidade);
    }

}
