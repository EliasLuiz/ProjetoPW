<?php

/**
 * Description of CtrlUsuario
 *
 * @author Elias Luiz
 */
require_once __DIR__ . '/../M/Pessoa.php';
require_once __DIR__ . '/../M/Cliente.php';
require_once __DIR__ . '/../M/Medico.php';
require_once __DIR__ . '/../M/Funcionario.php';
require_once __DIR__ . '/../M/Bairro.php';

class CtrlUsuario {

    public function login($login, $senha) {
        $usuario = new Pessoa();
        $_SESSION['tipo'] = $usuario->testaLogin($login, $senha);
        if($_SESSION['tipo'] == 'A'){
            $dest = "Location: AreaAdministrador.php";
        }
        else if ($_SESSION['tipo'] == 'C') {
            $dest = "Location: AreaCliente.php";
        }
        else if ($_SESSION['tipo'] == 'F') {
            $dest = "Location: AreaFuncionario.php";
        }
        else if ($_SESSION['tipo'] == 'M') {
            $dest = "Location: AreaMedica.php";
        }
        else{
            $dest = "Location: index.html";
        }
        
        if($_SESSION['tipo'] != 'A' && $_SESSION['tipo'] != 'N'){
            $usuario->setLogin($login);
            $_SESSION['cd'] = $usuario->getCdPessoa();
            $usuario->carrega($_SESSION['cd']);
            $_SESSION['nome'] = $usuario->getNome();
        }
        
        header($dest);
    }

    public function logout() {
        //unset($_COOKIE['cd']);
        //unset($_COOKIE['tipo']);
        session_destroy();
        echo 'vai redirect';
        header("Location: index.php");
    }

    public function cadastraCliente($cliente) {
        $user = new Cliente();
        $user = $cliente;
        $user->salva();
    }

    public function cadastraMedico($medico) {
        $user = new Medico();
        $user = $medico;
        $user->salva();
    }

    public function alteraEndereco($rua, $numeroEnd, $complementoEnd, $bairro, $cidade) {
        $usuario = new Cliente();
        $usuario->carrega($_SESSION['cd']);
        $bairro_ = new Bairro();
        $bairro_->setCidade($cidade);
        $bairro_->setNome($bairro);
        $usuario->setBairro($bairro_);
        $usuario->setComplementoEnd($complementoEnd);
        $usuario->setRua($rua);
        $usuario->setNumeroEnd($numeroEnd);
        $usuario->salva();
    }

    public function alteraEmail($email) {
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setEmail($email);
        $usuario->salva();
    }

    public function alteraMedicamentos($medicamentos) {
        $usuario = new Cliente();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setMedicamentos($medicamentos);
        $usuario->salva();
    }

    public function alteraTelefone($telefone) {
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setTelefone($telefone);
        $usuario->salva();
    }

    public function alteraSenha($senha) {
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setSenha($senha);
        $usuario->alteraSenha($senha);
    }

}

?>
