<?php

/**
 * Description of InterfaceExame
 *
 * @author Elias
 */

require_once __DIR__ . '/../M/TipoExame.php';
require_once __DIR__ . '/../C/CtrlTipoExame.php';
require_once __DIR__ . '/Regexp.php';

class ICadastroTipoExame {
    
    use Regexp;

    protected $nome;
    protected $coletadomicilio;
    protected $requisitos;
    protected $info;
    protected $preco;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfabeticoEspaco($this->nome);
        $valido = $valido && $this->validaAlfanumerico($this->requisitos);
        $valido = $valido && $this->validaAlfanumerico($this->info);
        $valido = $valido && $this->validaDinheiro($this->preco);
        return $valido;
    }

    function carregaPost() {
        $this->nome = $_POST["nomeexame"];
        $this->coletadomicilio = $_POST["domicilio"] == "domicilio";
        $this->requisitos = $_POST["requisitos"];
        $this->info = $_POST["informacoes"];
        $this->preco = $_POST["preco"];
    }

    //Funções para validação aqui

    public function salva() {

        //if(!$this->valida){ ERRO }
        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
        
        $texame = new TipoExame();

        $texame->setNome($this->nome);
        $texame->setColetaDomicilio($this->coletadomicilio);
        $texame->setrequisitos($this->requisitos);
        $texame->setInfo($this->info);
        $texame->setPreco($this->preco);

        $ctrl = new CtrlTipoExame();
        $ctrl->cadastra($texame);
    }
}
