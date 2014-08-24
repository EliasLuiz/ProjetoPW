<?php

/**
 * Description of Medico
 *
 * @author Elias
 */

require_once $GLOBALS["HOME"] . 'classes/M/MySQL.php';
require_once $GLOBALS["HOME"] . 'classes/M/Pessoa.php';

class Medico extends Pessoa{
    
    use MySQL;
    
    protected $crm;
    
    //Set's e Get's
    public function setCrm($c){
        $this->crm = $c;
    }
    public function getCrm(){
        return $this->crm;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdPessoa){
        
        //Busca a parte de Medico que pertence a Pessoa no Banco
        parent::carrega($cdPessoa);
        
        //Gera SQL e busca Medico no banco, carregando se não houver erro
        $sql = "SELECT * TB_Medico WHERE cdPessoa = " . $cdMedico;
        $result = $this->query($sql) or die('Não foi possível carregar Pessoa' .
                ' do banco de dados: '.$this->dberror());
            $result = $this->fetch_array($result);
            $result = $this->fetch_array($result);
            $this->crm = $result['crm'];
    }
    public function salva(){
        
        //Salva a parte de Medico que pertence a Pessoa no banco
        parent::salva();
        
        //Vê se Medico já está no banco
        $sql = "SELECT * FROM TB_Pessoa p, TB_Medico m WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "' and p.cdPessoa = m.cdPessoa";
        $result = $this->query($sql) or die('Não foi possível buscar Pessoa no' .
                ' banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
        //Gera SQL para atualizar Medico no banco
        if($result["nmPessoa"]==$this->nome){
            $sql = "UPDATE TB_Medico SET crm = '" . $this->crm .
                   "' WHERE cdPessoa = " . $result['cdPessoa'];
        }
        
        //Gera SQL para inserir Medico
        else{
            //Busca chave de pessoa e para inserir em Medico
            $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "'";
            $result = $this->query($sql) or die('Não foi possível buscar Medico no' .
                    ' banco de dados: '.  $this->dberror());
            $result = $this->fetch_array($result);
            
            $sql = "INSERT INTO TB_Medico(cdPessoa, crm) VALUES (" .
                   $result['cdPessoa'] . ",'" . $this->crm . "')";
        }
        
        //Executa SQL e testa sucesso
       $result = $this->query($sql,$con) or die('Não foi possível salvar Medico' .
                ' no banco de dados: '.$this->dberror());
    }
    public function lista(){
        $sql = "SELECT cdPessoa, nmPessoa FROM TB_Medico m, TB_Pessoa p "
            . "WHERE m.cdPessoa = p.cdPessoa";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $medicos[$row['nmPessoa']] = $row['cdPessoa'];
        }
        return $medicos;
    }
}

?>