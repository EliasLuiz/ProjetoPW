<?php

/**
 * Description of Funcionario
 *
 * @author Elias
 */

require_once __DIR__ . '/MySQL.php';
require_once __DIR__ . '/Pessoa.php';

class Funcionario extends Pessoa{
    
    use MySQL;
    
    protected $registroFuncional;
    protected $cargo;
    
    //Set's e Get's
    public function setRegistroFuncional($r){
        $this->registroFuncional = utf8_encode($r);
    }
    public function getRegistroFuncional(){
        return $this->registroFuncional;
    }
    public function setCargo($c){
        $this->cargo = utf8_encode($c);
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
        $result = $this->query($sql) or die('Não foi possível carregar Pessoa' .
                ' do banco de dados: '.$this->dberror());
            $result = $this->fetch_array($result);
            $this->registroFuncional = utf8_encode($result['registroFuncional']);
            $this->cargo = $result['cargo'];
    }
    public function salva(){
        
        //Salva a parte de Funcionario que pertence a Pessoa no banco
        parent::salva();
        
        //Vê se Funcionario já está no banco
        $sql = "SELECT * FROM TB_Pessoa p, TB_Funcionario f WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "' and p.cdPessoa = f.cdPessoa";
        $result = $this->query($sql) or die('Não foi possível buscar Pessoa no banco' .
                ' de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
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
            $result = $this->query($sql) or die('Não foi possível buscar Pessoa no' .
                    ' banco de dados: '.  $this->dberror());
            $result = $this->fetch_array($result);
            
            $sql = "INSERT INTO TB_Funcionario(cdPessoa, registroFuncional, cargo)" .
                    " VALUES (" . $result['cdPessoa'] . ",'" . $this->registroFuncional .
                    "','" . $this->cargo . "')";
        }
        //Executa SQL e testa sucesso
        $result = $this->query($sql) or die('<hr>Não foi possível salvar Funcionario' .
                ' no banco de dados: '.$this->dberror());
    }
    public function lista(){
        $sql = "SELECT cdPessoa, nmPessoa FROM TB_Funcionario f, TB_Pessoa p "
            . "WHERE f.cdPessoa = p.cdPessoa and p.status=1 ORDER BY nmPessoa ASC";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $funcionarios[$row['nmPessoa']] = $row['cdPessoa'];
        }
        return $funcionarios;
    }
}

?>