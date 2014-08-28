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
    
    public function login($login, $senha){
        if ($login=='admin' && $senha=='admin') {
                header("Location: " . $GLOBALS["HOME"] . "administrador.php");
            }
        $usuario = new Pessoa();
        $usuarios = $usuario->listaLogin();
        if(empty($usuarios[$login])){
            die("Login nao existente");
        }
        $cd = $usuarios[$login]['cdPessoa'];
        $usuario->carrega($cd);
        if($usuario->getSenha() == $senha){
            session_start();
            //$_COOKIE['cd'] = $cd;
            //$_COOKIE['tipo'] = $usuarios[$login]['tipo'];
            $_SESSION['cd'] = $cd;
            $_SESSION['nome'] = $usuario->getNome();
            $_SESSION['tipo'] = $usuarios[$login]['tipo'];
            
            if ($_SESSION['tipo']=='C') {
                header("Location: " . $GLOBALS["HOME"] . "cliente.php");
            }
            if ($_SESSION['tipo']=='F') {
                header("Location: " . $GLOBALS["HOME"] . "funcionario.php");
            }
            if ($_SESSION['tipo']=='M') {
                header("Location: " . $GLOBALS["HOME"] . "medico.php");
            }
            
        }
        else{
            die("Senha incorreta");
        }
    }
    
    public function logout(){
        //unset($_COOKIE['cd']);
        //unset($_COOKIE['tipo']);
        session_destroy();
    }
    
    public function cadastraCliente($cliente){
        $user = new Cliente();
        $user = $cliente;
        $user->salva();
    }
    
    public function cadastraMedico($medico){
        $user = new Medico();
        $user = $medico;
        $user->salva();
    }


    public function alteraEndereco($rua,$numeroEnd,$complementoEnd,$bairro, $cidade){
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
    
    public function alteraEmail($email){
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setEmail($email);
        $usuario->salva();
    }
    
    public function alteraMedicamentos($medicamentos){
        $usuario = new Cliente();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setMedicamentos($medicamentos);
        $usuario->salva();
    }
    
    public function alteraTelefone($telefone){
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setTelefone($telefone);
        $usuario->salva();
    }
    
    public function alteraSenha($senha){
        $usuario = new Pessoa();
        $usuario->carrega($_SESSION['cd']);
        $usuario->setSenha($senha);
        $usuario->alteraSenha($senha);
    }
}

?>
