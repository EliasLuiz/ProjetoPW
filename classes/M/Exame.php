<?php

/**
 * Description of Exame
 *
 * @author Elias
 */

require_once 'MySQL.php';
require_once 'Cliente.php';
require_once 'Medico.php';
require_once 'Convenio.php';

class Exame {
    use MySQL;
    
    protected $cliente;
    protected $medico;
    protected $consulta;
    protected $dataExame;
    protected $dataColeta;
    protected $url;

    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
        $this->cliente = new Cliente();
        $this->medico = new Medico();
        $this->consulta = new Consulta();
    }
    function __destruct() {
        $this->fechaConexao();
    }

    //Set's e Get's
    public function getCliente() {
        return $this->cliente;
    }
    public function getMedico() {
        return $this->medico;
    }
    public function getConsulta() {
        return $this->consulta;
    }
    public function getDataExame() {
        return $this->dataExame;
    }
    public function getDataColeta() {
        return $this->dataColeta;
    }
    public function getUrl() {
        return $this->url;
    }
    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }
    public function setMedico($medico) {
        $this->medico = $medico;
    }
    public function setConsulta($consulta) {
        $this->consulta = $consulta;
    }
    public function setDataExame($dataExame) {
        $this->dataExame = $dataExame;
    }
    public function setDataColeta($dataColeta) {
        $this->dataColeta = $dataColeta;
    }
    public function setUrl($url) {
        $this->url = $url;
    }

    
    //Métodos de Banco de Dados
    public function carrega($cdExame) {
        
        //Gera SQL e busca Pessoa no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Exame WHERE cdExame = " . $cdExame;

        $result = $this->query($sql) or die('Não foi possível carregar' .
                        ' Exame do banco de dados: ' . $this->dberror());
        $result = $this->fetch_array($result);

        $this->nome = $result['nmPessoa'];
        $this->cpf = $result['cpf'];
        $this->rg = $result['rg'];
        $this->login = $result['login'];
        $this->senha = $result['senha'];
        $this->sexo = $result['sexo'];
        $this->telefone = $result['telefone'];
        $this->email = $result['email'];
    }

}
