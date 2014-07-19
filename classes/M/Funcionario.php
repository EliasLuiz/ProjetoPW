<?php

/**
 * Description of Funcionario
 *
 * @author Elias
 */

include_once 'MySQL.php';
include_once 'Pessoa.php';

class Funcionario extends Pessoa{
    
    use MySQL;
    
    protected $registroFuncional;
    protected $cargo;
    
    //Set's e Get's
    public function setRegistroFuncional($r){
        $this->registroFuncional = $r;
    }
    public function getRegistroFuncional(){
        return $this->registroFuncional;
    }
    public function setCargo($c){
        $this->cargo = $c;
    }
    public function getCargo(){
        return $this->cargo;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdFuncionario){
        
        //Busca a parte de Funcionario que pertence a Pessoa no Banco
        parent::carrega($cdFuncionario);
        
        //Gera SQL e busca Funcionario no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Funcionario f WHERE f.cdPessoa = " . $cdFuncionario;
        $result = mysql_query($sql, $con) or die('Não foi possível carregar Pessoa' .
                ' do banco de dados: '.mysql_error());
            $result = mysql_fetch_array($result);
            $this->registroFuncional = $result['registroFuncional'];
            $this->cargo = $result['cargo'];
    }
    public function salva(){
        
        //Salva a parte de Funcionario que pertence a Pessoa no banco
        parent::salva();
        
        //Vê se Funcionario já está no banco
        $sql = "SELECT * FROM TB_Pessoa p, TB_Funcionario f WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "' and p.cdPessoa = f.cdPessoa";
        $result = mysql_query($sql) or die('Não foi possível buscar Pessoa no banco' .
                ' de dados: '.  mysql_error());
        $result = mysql_fetch_array($result);
        
        //Gera SQL para atualizar Funcionario no banco
        if($result["nmPessoa"]==$this->nome){
            $sql = "UPDATE TB_Funcionario SET registroFuncional = '" . $this->registroFuncional .
                   "', cargo = '" . $this->cargo . "' WHERE cdPessoa = " . $result['cdPessoa'];
        }
        
        //Gera SQL para inserir Funcionario
        else{
            //Busca chave de pessoa para inserir em Funcionario
            $sql = "SELECT cdPessoa FROM TB_Pessoa p WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "'";
            $result = mysql_query($sql) or die('Não foi possível buscar Pessoa no' .
                    ' banco de dados: '.  mysql_error());
            $result = mysql_fetch_array($result);
            
            $sql = "INSERT INTO TB_Funcionario(cdPessoa, registroFuncional, cargo)" .
                    " VALUES (" . $result['cdPessoa'] . ",'" . $this->registroFuncional .
                    "','" . $this->cargo . "')";
        }
        //Executa SQL e testa sucesso
        $result = mysql_query($sql) or die('<hr>Não foi possível salvar Funcionario' .
                ' no banco de dados: '.mysql_error());
    }
}

?>