<?php

/**
 * Interface para cadastro de usuario e alteração das paradas
 *
 * @author Elias
 */
require_once '/../C/CtrlUsuario.php';
require_once '/../M/Medico.php';
require_once '/../M/Cliente.php';

class ICadastroUsuario {

    protected $nome;
    protected $sexo;
    protected $telefone;
    protected $cpf;
    protected $rg;
    protected $email;
    protected $login;
    protected $senha;
    protected $usuario;
    protected $crm;
    protected $rua;
    protected $numero;
    protected $complemento;
    protected $bairro;
    protected $cidade;
    protected $medicamentos;

    function carregaPost() {

        //tirar daqui e fazer um get separado pra cada um
        $this->nome = $_POST["nome"];
        $this->sexo = $_POST["sexo"];
        $this->telefone = $_POST["ddd"] . $_POST["telefone"];
        $this->cpf = $_POST["CPF"];
        $this->rg = $_POST["RG"];
        $this->email = $_POST["email"];
        $this->login = $_POST["login"];
        $this->senha = $_POST["senha"];
        $this->usuario = $_POST["usuario"];
        if ($this->usuario == 'paciente') {
            $this->rua = $_POST["rua"];
            $this->numero = $_POST["numero"];
            $this->complemento = $_POST["complemento"];
            $this->bairro = $_POST["bairro"];
            $this->cidade = $_POST["cidade"];
            $this->medicamentos = $_POST["medicamentos"];
        } 
        else {
            $this->crm = $_POST["crm"];
        }
    }

    //Funções para validação aqui

    public function salva() {

        //if(!$this->valida){ ERRO }
        $ctrl = new CtrlUsuario();
        if ($this->usuario == "Paciente") {
            $user = new Cliente();
        } 
        else{
            $user = new Medico();
        }
        
        //Coisas comuns a Pessoa
        $user->setNome($this->nome);
        $user->setSexo($this->sexo);
        $user->setTelefone($this->telefone);
        $user->setCpf($this->cpf);
        $user->setRg($this->rg);
        $user->setEmail($this->email);
        $user->setLogin($this->login);
        $user->setSenha($this->senha);

        if ($this->usuario == "Paciente") {
            $user->setRua($this->rua);
            $user->setNumeroEnd($this->numero);
            $user->setComplementoEnd($this->complemento);
            $bairro = new Bairro();
            $bairro->setNome($this->bairro);
            $bairro->setCidade($this->cidade);
            $user->setBairro($bairro);
            $user->setMedicamentos($this->medicamentos);
            $ctrl->cadastraCliente($user);
        }
        else {
            $user->setCrm($this->crm);
            $ctrl->cadastraMedico($user);
        }
    }
}
