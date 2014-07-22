<?php

/**
 * Description of Convenio
 *
 * @author Daniel
 */

include_once 'MySQL.php';

class Convenio {
    
    use MySQL;
    
    protected $nome;
    protected $responsavel;
    
    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
    }
    function __destruct() {
        $this->fechaConexao();
    }
    
    //Set's e Get's
    public function setNome($n){
        $this->nome = $n;    
    }
    public function getNome(){
        return $this->nome;
    }
    public function setResponsavel($r){
        $this->responsavel = $r;
    }
    public function getResponsavel(){
        return $this->responsavel;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdConvenio){
        
        //Gera SQL e busca Convenio no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Convenio c WHERE c.cdConvenio = '" . $cdConvenio . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Convenio'
                . ' do banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
        $this->nome = $result['nmConvenio'];
        $this->responsavel = $result['responsavel'];
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar Pessoa no banco
        $sql = "SELECT * FROM TB_Convenio c WHERE c.nmConvenio = '" . $this->nome . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Convenio'
                . ' do banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
        if($result["nmConvenio"]==$this->nome){
            $sql = "UPDATE TB_Convenio  SET responsavel = '" . $this->responsavel .
                    "' WHERE cdConvenio = " . $result["cdConvenio"];
        }
        else{
            $sql = "INSERT INTO TB_Convenio(cdConvenio,nmConvenio,responsavel)" . 
                   " VALUES ('','" . $this->nome . "','" . $this->responsavel . "')";
        }
        
        //Executa SQL e testa sucesso
        $this->query($sql,  $this->con) or die('Não foi possível salvar Convenio'
                . ' no banco de dados: '. $this->dberror());
    }
    public function remove() {
            $sql = "UPDATE TB_Convenio SET status = 0 WHERE nmConvenio = '" . $this->nome .
                   "', responsavel = '" . $this->responsavel . "'";
            $this->query($sql) or die('Não foi possível remover Convenio'
                . ' no banco de dados: '.$this->dberror());
    }
}

?>