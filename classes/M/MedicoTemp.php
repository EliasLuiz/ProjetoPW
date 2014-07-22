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
    public function carrega($crm){
        
        //Gera SQL e busca MedicoTemp no banco, carregando se não houver erro
        $sql = "SELECT nmMedico FROM TB_Medico_temp WHERE crm = '" . $crm . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Medico'
                . ' do banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
            
        $this->nome = $result['nmMedico'];
        $this->crm = $crm;
        
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar MedicoTemp no banco
        $sql = "SELECT * FROM TB_Medico_temp WHERE crm = '" . $this->crm . "'";
        $result = $this->query($sql) or die('Não foi possível buscar Medico'
                . ' no banco de dados: '. $this->dberror());
        $result = $this->fetch_array($result);
        if($result["crm"]==$this->crm){
            $sql = "UPDATE TB_Medico_temp SET nmMedico = '" . $this->nome . "'"
                    . "WHERE crm = '" . $this->crm . "'";
        }
        else{
            $sql = "INSERT INTO TB_Medico_temp(cdMedico_temp,nmMedico,crm)" . 
                   " VALUES ('','" . $this->nome . "','" . $this->crm . "')";
        }
        
        //Executa SQL e testa sucesso
        $result = $this->query($sql) or die('Não foi possível salvar Medico'
                . ' no banco de dados: '.  $this->dberror());
    }
    public function remove() {
        $sql = "UPDATE TB_Medico_temp SET status = 0 WHERE crm = '" . $this->crm . "'";
        $this->query($sql) or die('Não foi possível remover Medico'
                . ' do banco de dados: '.  $this->dberror());;
    }
}

?>
