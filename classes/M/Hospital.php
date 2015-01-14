<?php

/**
 * Description of Hospital
 *
 * @author Daniel
 */

require_once __DIR__ . '/MySQL.php';

class Hospital {
    
    use MySQL;
    
    protected $nome;
    protected $telefone;
    
    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
    }
    function __destruct() {
        $this->fechaConexao();
    }
    
    //Set's e Get's
    public function setNmHospital($n){
        $this->nome = $n;    
    }
    public function getNmHospital(){
        return $this->nome;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdHospital){
        
        //Gera SQL e busca Hospital no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_ClinicaHospital c "."WHERE c.cdClinicaHospital = '".$cdHospital."'";
        $result = $this->query($sql) or die('Não foi possível carregar Hospital'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        
        $this->nome = $result['nmClinicaHospital'];
        $this->telefone = $result['telefone'];
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar Hospital no banco
        $sql = "SELECT * FROM TB_ClinicaHospital WHERE nmClinicaHospital = '".$this->nome."'";
        $result = $this->query($sql) or die('Não foi possível buscar Hospital'
                . ' no banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
        if($result["nmClinicaHospital"]==$this->nome){
            $sql = "UPDATE TB_ClinicaHospital SET telefone = '" . $this->telefone . 
                    "' WHERE c.cdClinicaHospital = " . $result['cdClinicaHospital'];
        }
        else{
            $sql = "INSERT INTO TB_ClinicaHospital(cdClinicaHospital,nmClinicaHospital,telefone)" . 
                   " VALUES ('','" . $this->nome . "','" . $this->telefone . "')";
        }
        
        //Executa SQL e testa sucesso
        $result = $this->query($sql) or die('Não foi possível salvar TipoExame'
                . ' no banco de dados: '.  $this->dberror());
    }
    public function remove() {
        $sql = "UPDATE TB_ClinicaHospital SET status = 0 WHERE nmClinicaHospital = '" . 
                $this->nome . "' and telefone = '" . $this->telefone . "'";
        $this->query($sql) or die('Não foi possível remover Hospital'
                . ' no banco de dados: '.  $this->dberror());
    }
}

?>