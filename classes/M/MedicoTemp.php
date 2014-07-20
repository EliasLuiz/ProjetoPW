<?php

/**
 * Description of MedicoTemp
 *
 * @author Daniel
 */

include_once 'MySQL.php';

class MedicoTemp {
    
    use MySQL;
    
    protected $nome;
    protected $crm;
    
    //Set's e Get's
    public function setNome($n){
        $this->nome = $n;    
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCRM($c){
        $this->crm = $c;
    }
    public function getCRM(){
        return $this->crm;
    }
    
    //Métodos de Banco de Dados
    public function carregaMySQL($crm){
        
        //Gera SQL e busca MedicoTemp no banco, carregando se não houver erro
        $sql = "SELECT nmMedico FROM TB_Medico_temp m WHERE m.crm = '" . $crm . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Medico'
                . ' do banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
            
        $this->nome = $result['nmMedico'];
        $this->crm = $crm;
        
    }
    public function salvaMySQL(){
        //Estabelece conexão
        $con = mysql_connect("localhost","root","") or die('Não foi possível estabelecer conexão com o banco de dados: '.mysql_error());
        mysql_select_db('mydb') or die('Não foi possível selecionar o banco' . mysql_error());
        
        //Gera SQL para salvar/atualizar MedicoTemp no banco
        $sql = "SELECT * FROM TB_Medico_temp m WHERE m.crm = '" . $crm . "'";
        $result = mysql_query($sql) or die('Não foi possível buscar Pessoa no banco de dados: '.  mysql_error());
        $result = mysql_fetch_array($result);
        if($result["nmMedico"]==$this->nome){
            $sql = "UPDATE TB_Medico_temp m SET m.nmMedico = '" . $this->nome .
                   "', m.crm = '" . $this->crm . "'";
        }
        else{
            $sql = "INSERT INTO TB_Medico_temp(cdMedico_temp,nmMedico,crm)" . 
                   " VALUES ('','" . $this->nome . "','" . $this->crm . "')";
        }
        
        //Executa SQL e testa sucesso
        $result = mysql_query($sql,$con) or die('Não foi possível salvar Funcionario no banco de dados: '.mysql_error());
        mysql_close($con);
    }
}

?>
