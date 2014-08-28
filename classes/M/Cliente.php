<?php

/**
 * Description of Cliente
 *
 * @author Elias
 */

require_once $GLOBALS["HOME"] . 'classes/M/MySQL.php';
require_once $GLOBALS["HOME"] . 'classes/M/Pessoa.php';
require_once $GLOBALS["HOME"] . 'classes/M/Bairro.php';

class Cliente extends Pessoa {
    
    use MySQL;
    
    protected $rua;
    protected $numeroEnd;
    protected $complementoEnd;
    protected $medicamentos;
    protected $bairro;
    
    //Construtor e Destrutor
    function __construct() {
        parent::__construct();
        $this->bairro = new Bairro();
    }

    //Set's e Get's
    public function setRua($r){
        $this->rua = $r;
    }
    public function getRua(){
        return $this->rua;
    }
    public function setNumeroEnd($n){
        $this->numeroEnd = $n;
    }
    public function getNumeroEnd(){
        return $this->numeroEnd;
    }
    public function setComplementoEnd($c){
        $this->complementoEnd = $c;
    }
    public function getComplementoEnd(){
        return $this->complementoEnd;
    }
    public function setMedicamentos($m){
        $this->medicamentos = $m;
    }
    public function getMedicamentos(){
        return $this->medicamentos;
    }
    public function setBairro($b){
        $this->bairro = $b;
    }
    public function getBairro(){
        return $this->bairro;
    }

    //Métodos de Banco de Dados
    public function carrega($cdCliente){
        
        //Busca a parte de Cliente que pertence a Pessoa no Banco
        parent::carrega($cdCliente);
        
        //Gera SQL e busca Cliente no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Cliente WHERE cdPessoa = " . $cdCliente;
        $result = $this->query($sql) or die('Não foi possível carregar Pessoa'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
            
        $this->rua = $result['rua'];
        $this->numeroEnd = $result['numeroEnd'];
        $this->complementoEnd = $result['complementoEnd'];
        $this->medicamentos = $result['medicamentos'];
        $this->bairro->carregaMySQL($result['cdBairro']);
    }
    public function salva(){
        
        //Salva a parte de Cliente que pertence a Pessoa no banco
        parent::salva();
        
        //Vê se Cliente já está no banco
        $sql = "SELECT * FROM TB_Pessoa p, TB_Cliente c WHERE p.login = '" . 
                $this->login . "' and p.senha = '" . $this->senha . 
                "' and p.cdPessoa = c.cdPessoa";
        $result = $this->query($sql) or die('Não foi possível buscar Pessoa' .
                ' no banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
        
        //Gera SQL para atualizar Cliente no banco
        if($result["nmPessoa"]==$this->nome){
            $sql = "UPDATE TB_Cliente SET rua = '" . $this->rua .
                    "', numeroEnd = " . $this->numeroEnd . ", complementoEnd = '".
                    $this->complementoEnd . "', medicamentos = '" . $this->medicamentos .
                    "' WHERE cdPessoa = " . $result['cdPessoa'];
        }
        
        //Gera SQL para inserir Cliente
        else{
            //Busca chave de pessoa e de bairro para inserir em Cliente
            $sql = "SELECT cdPessoa, cdBairro FROM TB_Pessoa p, TB_Bairro b "
                    . "WHERE p.login = '" . $this->login . "' and p.senha = '" . $this->senha .
                    "' and b.cdBairro = " . $this->bairro->getCdBairro();
            $result = $this->query($sql) or die('Não foi possível buscar Pessoa' .
                    ' no banco de dados: '.  $this->error());
            $result = $this->fetch_array($result);
            
            $sql = "INSERT INTO TB_Cliente(cdPessoa, cdBairro, rua, numeroEnd," .
                    " complementoEnd, medicamentos) VALUES (" . $result['cdPessoa'] .
                    ",". $result['cdBairro'] . ",'" . $this->rua . "','" . $this->numeroEnd .
                    "','" . $this->complementoEnd . "','" . $this->medicamentos . "')";
        }
        
        //Executa SQL e testa sucesso
        $this->query($sql) or die('Não foi possível salvar Funcionario no' .
                ' banco de dados: '.$this->error());
    }
    public function lista(){
        $sql = "SELECT cdPessoa, nmPessoa FROM TB_Cliente c, TB_Pessoa p "
            . "WHERE c.cdPessoa = p.cdPessoa";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $clientes[$row['nmPessoa']] = $row['cdPessoa'];
        }
        return $clientes;
    }
    public function listaMedicos(){
        $sql = "SELECT p.cdMedico FROM TB_Pessoa p, TB_Cliente_has_TB_Medico "
                . "cm WHERE cm.cdCliente = " . $this->getCdPessoa() . " and p.cdPessoa = cm.cdMedico";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $medicos[] = $row['cdPessoa'];
        }
        return $medicos;
    }
    public function listaConsultas($cdMedico){
        $sql = "SELECT cdConsulta FROM TB_Consulta WHERE cdCliente = " . $this->getCdPessoa()
                . " and cdMedico = " . $cdMedico;
        while($row = $this->fetch_array($result)){
            $consultas[] = $row['cdConsulta'];
        }
        return $consultas;
    }
    public function listaConvenios(){
        $sql = "SELECT * FROM TB_Convenio c, TB_Cliente_has_TB_Convenio "
                . "cc WHERE cc.cdCliente = " . $this->getCdPessoa() . " and c.cdConvenio = cd.cdConvenio";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $convenios['cdConvenio'] = array(
                'codigo' => $row["cdConvenio"],
                'nome' => $row['nmConvenio'],
                'responsavel' => $row['responsavel']);
        }
        return $convenios;
    }
    public function listaCdConvenios(){
        $sql = "SELECT c.cdConvenio FROM TB_Convenio c, TB_Cliente_has_TB_Convenio "
                . "cc WHERE cc.cdCliente = " . $this->getCdPessoa() . " and c.cdConvenio = cd.cdConvenio";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $convenios[] = $row['cdConvenio'];
        }
        return $convenios;
    }
}

?>