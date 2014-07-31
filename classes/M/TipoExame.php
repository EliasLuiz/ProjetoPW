<?php

/**
 * Description of Exame
 *
 * @author Daniel
 */

include_once 'MySQL.php';

class TipoExame {
    
    use MySQL;
    
    protected $nome;
    protected $coletadomicilio;
    protected $requisitos;
    protected $info;
    protected $preco;
    
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
    public function setColetaDomicilio($c){
        $this->coletadomicilio = $c;
    }
    public function getColetaDomicilio(){
        return $this->coletadomicilio;
    }
    public function setrequisitos($r){
        $this->requisitos = $r;
    }
    public function getRequisitos(){
        return $this->requisitos;
    }
    public function setInfo($i){
        $this->info = $i;
    }
    public function getInfo(){
        return $this->info;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getPreco(){
        return $this->preco;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdExame){
        
        //Gera SQL e busca Exame no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_TipoExame t WHERE t.cdTipoExame = '" . $cdExame . "'";
        $result = $this->query($sql) or die('Não foi possível carregar TipoExame'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
            
        $this->nome = $result['nmTipoExame'];
        $this->coletadomicilio = $result['coletaDomicilio'];
        $this->requisitos = $result['requisitos'];
        $this->info = $result['informacoes'];
        $this->preco = $result['preco'];
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar Exame no banco
        $sql = "SELECT * FROM TB_TipoExame t WHERE t.nmTipoExame = '" . $this->nome . "'";
        $result = $this->query($sql) or die('Não foi possível buscar TipoExame'
                . ' no banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        
        if($result["nmTipoExame"]==$this->nome){
            $sql = "UPDATE TB_TipoExame t SET t.coletaDomicilio = '" . $this->coletadomicilio
                    . "', t.requisitos = '" . $this->requisitos .
                    "', t.informacoes = '" . $this->info . "', t.preco = " . $this->preco 
                    . " WHERE cdTipoExame = " . $result["cdTipoExame"];
        }
        else{
            $sql = "INSERT INTO TB_TipoExame(cdTipoExame,nmTipoExame,coletaDomicilio,"
                    . "requisitos,informacoes,preco)" 
                    . " VALUES ('','" . $this->nome . "','" . $this->coletadomicilio 
                    . "','" . $this->requisitos . "','" 
                    . $this->info . "','" . $this->preco . "')";
        }
        
        //Executa SQL e testa sucesso
        $this->query($sql) or die('Não foi possível salvar TipoExame'
                . ' no banco de dados: '. $this->dberror());
    }
    public function remove() {
        $sql = "UPDATE TB_TipoExame SET status = 0 WHERE nmTipoExame = " . $this->nome;
        $this->query($sql) or die('Não foi possível remover TipoExame'
                . ' do banco de dados: '. $this->dberror());
    }
    public function getCdTipoExame(){
        $sql = "SELECT cdTipoExame FROM TB_TipoExame WHERE nmTipoExame = '" . $this->nome . "'";
        $result = $this->query($sql) or die('Não foi possível buscar TipoExame'
                . ' no banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        return $result['cdTipoExame'];
    }
}

?>