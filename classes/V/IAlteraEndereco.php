<?php

require_once $GLOBALS["HOME"] . 'classes/C/CtrlUsuario.php';
require_once $GLOBALS["HOME"] . 'classes/V/Regexp.php';

class IAlteraEndereco {

    use Regexp;

    protected $rua;
    protected $numeroEnd;
    protected $complementoEnd;
    protected $bairro;
    protected $cidade;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfanumerico($this->rua);
        $valido = $valido && $this->validaNumerico($this->numeroEnd);
        $valido = $valido && $this->validaAlfanumerico($this->complementoEnd);
        $valido = $valido && $this->validaAlfanumerico($this->bairro);
        $valido = $valido && $this->validaAlfanumerico($this->cidade);
        return $valido;
    }

    function __construct($rua, $numeroEnd, $complementoEnd, $bairro, $cidade) {
        $this->rua = $rua;
        $this->numeroEnd = $numeroEnd;
        $this->complementoEnd = $complementoEnd;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }

    public function alteraEndereco() {
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        $ctrl = new CtrlUsuario();
        $ctrl->alteraEndereco($this->rua, $this->numeroEnd, $this->complementoEnd, $this->bairro, $this->cidade);
    }

}
