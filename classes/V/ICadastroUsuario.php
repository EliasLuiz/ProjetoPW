<?php

/**
 * Interface para cadastro de usuario e alteração das paradas
 *
 * @author Elias
 */
require_once __DIR__ . '/../C/CtrlUsuario.php';
require_once __DIR__ . '/../M/Medico.php';
require_once __DIR__ . '/../M/Cliente.php';
require_once __DIR__ . '/Regexp.php';

class ICadastroUsuario {
    
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
        $this->ddd = $_POST["ddd"];
        $this->telefone = $_POST["telefone"]."";
        $this->cpf = $_POST["CPF"];
        $this->rg = $_POST["RG"];
        $this->email = $_POST["email"];
        $this->login = $_POST["login"];
        if($_POST["senha"] != $_POST["senha2"]){
            die("Senhas nao batem");
        }
        $this->senha = $_POST["senha"];
        $this->usuario = $_POST["usuario"];
        if ($this->usuario == 'paciente') {
            $this->rua = $_POST["rua"];
            $this->numero = $_POST["numero"];
            $this->complemento = $_POST["complemento"];
            $this->bairro = $_POST["bairro"];
            $this->cidade = $_POST["cidade"];
            if($_POST["medicamento"]){
                $this->medicamentos = $_POST["nomemedicamentos"];
            }
        } 
        else {
            $this->crm = $_POST["crm"];
        }
    }

    public function valida(){
        $valido = TRUE;
        $valido = $valido && $this->validaAlfabeticoEspaco($this->nome);
        $valido = $valido && $this->validaSexo($this->sexo);
        $valido = $valido && $this->validaTelefone($this->ddd, $this->telefone);
        $valido = $valido && $this->validaCpf($this->cpf);
        $valido = $valido && $this->validaRg($this->rg);
        $valido = $valido && $this->validaEmail($this->email);
        $valido = $valido && $this->validaAlfanumerico($this->login);
        $valido = $valido && $this->validaAlfanumerico($this->senha);
        if($this->usuario == 'paciente'){
            $valido = $valido && $this->validaAlfabeticoEspaco($this->rua);
            $valido = $valido && $this->validaNumerico($this->numero);
            $valido = $valido && ($this->validaAlfabeticoEspaco($this->complemento)
                    || empty($this->complemento) );
            $valido = $valido && $this->validaAlfabeticoEspaco($this->bairro);
            $valido = $valido && $this->validaAlfabeticoEspaco($this->cidade);
            if(isset($this->medicamentos)){
                $valido = $valido && ($this->validaAlfabeticoEspaco($this->medicamentos)
                    || empty($this->medicamentos) );
            }
        }
        else{
            //$valido = $valido && $this->validaCrm($this->crm);
        }
        return $valido;
    }

    public function salva() {

        if(!$this->valida()){
            die('Dados Inv&aacute;lidos');
        }
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
        $user->setTelefone($this->ddd.$this->telefone);
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
