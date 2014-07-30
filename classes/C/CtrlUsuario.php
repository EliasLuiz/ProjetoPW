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
    
    protected $usuario;
    
    public function login($login, $senha){
        //echo '<hr>controle.login';
        $usuarios = new Pessoa();
        $usuarios = $usuarios->listaLogin();
        if($usuarios[$login]['tipo'] == 'C'){
            $usuario = new Cliente();
        }
        else if($usuarios[$login]['tipo'] == 'M'){
            $usuario = new Medico();
        }
        else if($usuarios[$login]['tipo'] == 'F'){
            $usuario = new Funcionario();
        }
        else{
            die("Login nao existente");
        }
        $cd = $usuarios[$login]['cdPessoa'];
        $usuario->carrega($cd);
        if($usuario->getSenha() == $senha){
            session_start();
            //$_COOKIE['cd'] = $cd;
            $_SESSION['cd'] = $cd;
        }
        else{
            die("Senha incorreta");
        }
    }
    
    public function logout(){
        //unset($_COOKIE['cd']);
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
}

?>
