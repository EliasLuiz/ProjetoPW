<?php

/**
 * Description of Mensagem
 *
 * @author Daniel
 */

require_once $GLOBALS["HOME"] . 'classes/M/MySQL.php';
require_once $GLOBALS["HOME"] . 'classes/M/Cliente.php';
require_once $GLOBALS["HOME"] . 'classes/M/Medico.php';

class Mensagem {
    
    use MySQL;
    
    protected $texto;
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
    public function setTexto($t){
        $this->texto = $t;    
    }
    public function getTexto(){
        return $this->texto;
    }
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
    public function carrega($cdMensagem){
        
        //Gera SQL e busca Mensagem no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Mensagem WHERE cdMensagem = '" . $cdMensagem . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Mensagem'
                . ' do banco de dados: '.  $this->dberror());
        $result = $this->fetch_array($result);
            
        $this->texto = $result['txtMensagem'];
        $this->data = $result['dtMensagem'];
        $this->cliente->carregaMySQL($result['cdCliente']);
        $this->medico->carregaMySQL($result['cdMedico']);
    }
    public function salva(){
        
        //busca cdcliente
        $sql = "SELECT cdPessoa FROM TB_Cliente c, TB_Pessoa p WHERE p.cdPessoa = c.cdPessoa and"
               . " p.login = '" . $this->cliente->getLogin() . "'";
        $result = $this->query($sql)or die('Não foi possível carregar Cliente'
                . ' do banco de dados: '.$this->error());
        $result = $this->fetch_array($result);
        $cdCliente = $result['cdPessoa'];
        
        //busca cdmedico
        $sql = "SELECT cdPessoa FROM TB_Medico m, TB_Pessoa WHERE p.cdPessoa = m.cdPessoa and"
               . " p.login = '" . $this->medico->getLogin() . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Medico'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        $cdMedico = $result['cdPessoa'];
        
        //busca mensagens no banco
        $sql = "SELECT * FROM TB_Mensagem m WHERE m.cdCliente = " . $cdCliente . " and m.cdMedico = "
                . $cdMedico;
        $result = $this->query($sql);
        
        //Gera SQL para salvar Mensagem no banco
        $sql = "INSERT INTO TB_Mensagem(cdMensagem, cdCliente, cdMedico, txtMensagem, dtMensagem)"
                . "VALUES ('', " . $cdCliente . ", " . $cdMedico . ", '" . $this->texto . "', '" . 
                $this->data . "')";
        
        //se mensagem já existir gera sql para editar
        while($row = $this->fetch_array($result)){
            if($row["data"] == $this->data){
                $sql = "UPDATE TB_Mensagem SET txtMensagem = '" . $this->texto
                        . "', dtMensagem = '" . $this->data
                        . "', edit = 1 WHERE cdMensagem = ". $result['cdMensagem'];
            }
        }
        
        //Executa SQL e testa sucesso
        $this->query($sql) or die('Não foi possível salvar Mensagem'
                . ' no banco de dados: '.  $this->dberror());
    }
    public function remove() {
        
        //busca cdcliente
        $sql = "SELECT cdPessoa FROM TB_Cliente c, TB_Pessoa p WHERE p.cdPessoa = c.cdPessoa and"
               . " p.login = '" . $this->cliente->getLogin() . "'";
        $result = $this->query($sql)or die('Não foi possível carregar Cliente'
                . ' do banco de dados: '.$this->error());
        $result = $this->fetch_array($result);
        $cdCliente = $result['cdPessoa'];
        
        //busca cdmedico
        $sql = "SELECT cdPessoa FROM TB_Medico m, TB_Pessoa WHERE p.cdPessoa = m.cdPessoa and"
               . " p.login = '" . $this->medico->getLogin() . "'";
        $result = $this->query($sql) or die('Não foi possível carregar Medico'
                . ' do banco de dados: '.$this->dberror());
        $result = $this->fetch_array($result);
        $cdMedico = $result['cdPessoa'];
        
        //busca mensagens no banco
        $sql = "SELECT * FROM TB_Mensagem m WHERE m.cdCliente = " . $cdCliente . " and m.cdMedico = "
                . $cdMedico;
        $result = $this->query($sql);
        
        //busca cdMensagem
        while($row = $this->fetch_array($result)){
            if($row["data"] == $this->data){
                $cdMensagem = $row["cdMensagem"];
                break;
            }
        }
        
        $sql = "UPDATE TB_Mensagem SET status = 0 WHERE cdMensagem = ". $cdMensagem;
        
        //Executa SQL e testa sucesso
        $this->query($sql) or die('Não foi possível remover Mensagem'
                . ' do banco de dados: '.  $this->dberror());
    }
}

?>