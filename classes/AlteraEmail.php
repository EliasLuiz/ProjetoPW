<?php

/**
 * DELETAR
 *
 * @author Daniel gatim
 */

class AlteraEmail {
    
    protected $email;
    
    //Set's e Get's
    public function setEmail($e){
        $this->email = $e;    
    }
    public function getEmail(){
        return $this->email;
    }
    
    //Métodos de Banco de Dados
    public function salvaMySQL($login, $senha){
        //Estabelece conexão
        $con = mysql_connect("localhost","root","") or die('Não foi possível estabelecer conexão com o banco de dados: '.mysql_error());
        mysql_select_db('mydb') or die('falha ao selecionar o banco');
        
        //Gera SQL para atualizar Email da Pessoa no banco
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" . $login .
               "' and p.senha = '" . $senha . "'";
        $result = mysql_query($sql) or die('Não foi possível buscar Pessoa no banco de dados: '.  mysql_error());
        $result = mysql_fetch_array($result);
        if($result["email"]==$this->email){
            $sql = "UPDATE TB_Pessoa p SET p.email = '" . $this->email . "'";
        }
        else{
            die('Não foi possível carregar Pessoa do banco de dados: '.mysql_error());
        }
        
        //Executa SQL e testa sucesso
        $result = mysql_query($sql,$con) or die('Não foi possível salvar Funcionario no banco de dados: '.mysql_error());
         mysql_close($con);
    }
}

?>
