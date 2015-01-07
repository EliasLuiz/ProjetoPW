<?php

/**
 * Description of InterfaceFuncionario
 *
 * @author Elias
 */

require_once __DIR__ . '/../C/CtrlFuncionario.php';
require_once __DIR__ . '/Regexp.php';

class ICadastroFuncionario {
    
    use Regexp;

    protected $nome;
    protected $sexo;
    protected $ddd;
    protected $telefone;
    protected $cpf;
    protected $rg;
    protected $email;
    protected $login;
    protected $senha;
    protected $senha2;
    //protected $usuario;
    protected $cargo;
    protected $registro;
    
    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfabeticoEspaco($this->nome);
        $valido = $valido && $this->validaSexo($this->sexo);
        $valido = $valido && $this->validaTelefone($this->ddd, $this->telefone);
        $valido = $valido && $this->validaCpf($this->cpf);
        $valido = $valido && $this->validaRg($this->rg);
        $valido = $valido && $this->validaEmail($this->email);
        $valido = $valido && $this->validaAlfabeticoSimbolo($this->login);
        if($this->senha == $this->senha2){
            $valido = $valido && $this->validaAlfabeticoSimbolo($this->senha);
        }
        else{
            return FALSE;
        }
        $valido = $valido && $this->validaAlfabetico($this->cargo);
        $valido = $valido && $this->validaAlfanumerico($this->registro);
        
        return $valido;
    }

    function carregaPost() {
        $this->nome = $_POST["nome"];
        $this->sexo = $_POST["sexo"];
        $this->ddd = $_POST["ddd"];
        $this->telefone = $_POST["telefone"];
        $this->cpf = $_POST["CPF"];
        $this->rg = $_POST["RG"];
        $this->email = $_POST["email"];
        $this->login = $_POST["login"];
        $this->senha = $_POST["senha"];
        $this->senha2 = $_POST["senha2"];
        //$this->usuario = $_POST["usuario"];
        $this->cargo = $_POST["cargo"];
        $this->registro = $_POST["registro"];
    }

    //Funções para validação aqui

    //Retorna FALSE caso não seja possivel salver (dados invalidos)
    //        TRUE caso tudo ocorra bem
    public function salva() {

        //if(!$this->valida){ ERRO }
        if(!$this->valida()){
            return FALSE;
        }
        
        $func = new Funcionario();
        $func->setNome($this->nome);
        $func->setSexo($this->sexo);
        $func->setTelefone($this->ddd.$this->telefone);
        $func->setCpf($this->cpf);
        $func->setRg($this->rg);
        $func->setEmail($this->email);
        $func->setLogin($this->login);
        $func->setSenha($this->senha);
        $func->setCargo($this->cargo);
        $func->setRegistroFuncional($this->registro);

        $ctrl = new CtrlFuncionario();
        $ctrl->cadastra($func);
        
        return TRUE;
    }

}
