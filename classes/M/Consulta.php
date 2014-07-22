<?php

/**
 * Description of Consulta
 *
 * @author Daniel
 */

include_once 'MySQL.php';
include_once 'Cliente.php';
include_once 'Medico.php';

class Consulta {
    
    use MySQL;
    
    protected $data;
    protected $cliente;
    protected $medico;

    //Construtor e Destrutor
    function __construct() {
        $this->cliente = new Cliente();
        $this->medico = new Medico();
        $this->abreConexao();
    }
    function __destruct() {
        $this->fechaConexao();
    }

    //Set's e Get's
    public function setData($d){
        $this->data = $d;    
    }
    public function getData(){
        return $this->data;
    }
    public function setCliente($c){
        $this->cliente = $c;    
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function setMedico($m){
        $this->medico = $m;    
    }
    public function getMedico(){
        return $this->medico;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdConsulta){
        
        //Gera SQL e busca Consulta no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Consulta c WHERE c.cdConsulta = '" . $cdConsulta . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Consulta'
                . ' do banco de dados: '.$this->dberror());;
        $result = $this->fetch_array($result);
            
        $this->data = $result['dtConsulta'];
        $this->cliente->carrega($result['cdCliente']);
        $this->medico->carrega($result['cdMedico']);
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar Consulta no banco
        
        //Busca cdCliente
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" . 
                $this->cliente->getLogin() . "'";
        $result = $this->query($sql) or die('Não foi possível carregar'
                . ' pessoa do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        $cdCliente = $result['cdPessoa'];
        
        //Busca cdMedico
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" .
                $this->medico->getLogin() . "'";
        $result = $this->query($sql) or die('Não foi possível carregar pessoa'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        $cdMedico = $result['cdPessoa'];
        
        //Vê se Consulta já está armazenada no BD
        $sql = "SELECT cdConsulta FROM TB_Consulta WHERE cdCliente = " .
                $cdCliente . " and cdMedico = " . $cdMedico . " and dtConsulta = '" .
                $this->data . "'";
        $result = $this->query($sql);
        $result = $this->fetch_array($result);
        
        //Se não estiver insere
        if(!isset($result["cdConsulta"])){
            $sql = "INSERT INTO TB_Consulta(cdConsulta, cdCliente, cdMedico, dtConsulta)"
                    . " VALUES(''," . $cdCliente . ", " . $cdMedico . ", '" . $this->data . "'";
            $this->query($sql) or die('Não foi possível salvar Consulta'
                    . ' no banco de dados: '.$this->dberror());
        }
    }
    public function remove() {
        $sql = "UPDATE TB_Consulta co, TB_Cliente c, TB_Medico m, TB_Pessoa p SET status = 0 "
                . "WHERE c.cdCliente = co.cdCliente and m.cdMedico = co.cdMedico and "
                . "c.cdPessoa = p.cdPessoa and p.cpf = '" . $this->cliente->getCpf() . "' and "
                . "m.crm = '" . $this->medico->getCrm() . "'and co.data = '" . $this->data . "'";
        $this->query($sql);
    }
}

?>