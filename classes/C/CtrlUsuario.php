<?php

/**
 * Description of CtrlUsuario
 *
 * @author Elias Luiz
 */

include_once '/../M/Pessoa.php';
include_once '/../M/Cliente.php';
include_once '/../M/Medico.php';
include_once '/../M/Funcionario.php';
include_once '/../M/Bairro.php';

class CtrlUsuario {
    
    public function login($login, $senha){
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
            $_SESSION['tipo'] = $usuarios[$login]['tipo'];
            header("Location: user.php");
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
