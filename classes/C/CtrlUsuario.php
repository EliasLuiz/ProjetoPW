<?php

/**
 * Description of CtrlUsuario
 *
 * @author Elias Luiz
 */

include_once 'Pessoa.php';
include_once 'Cliente.php';
include_once 'Medico.php';
include_once 'Funcionario.php';

class CtrlUsuario {
    
    protected $usuario;
    
    function login($login, $senha){
        echo '<hr>controle.login';
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
        echo '<hr>controle.login pt2';
        $cd = $usuarios[$login]['cdPessoa'];
        $usuario->carrega($cd);
        if($usuario->getSenha() == $senha){
            session_start();
            //$_COOKIE['cd'] = $cd;
            $_SESSION['cd'] = $cd;
            echo '<hr>'.$usuario->getNome();
        }
        else{
            die("Senha incorreta");
        }
    }
    
    function logout(){
        //unset($_COOKIE['cd']);
        session_destroy();
    }
}

?>
