<?php

/**
 * Description of Exame
 *
 * @author Elias
 */

require_once $GLOBALS["HOME"] . 'classes/M/MySQL.php';
require_once $GLOBALS["HOME"] . 'classes/M/Cliente.php';
require_once $GLOBALS["HOME"] . 'classes/M/Medico.php';
require_once $GLOBALS["HOME"] . 'classes/M/Consulta.php';
require_once $GLOBALS["HOME"] . 'classes/M/Convenio.php';
require_once $GLOBALS["HOME"] . 'classes/M/TipoExame.php';

class Exame {

    use MySQL;

    protected $cliente;
    protected $medico;
    protected $consulta;
    protected $tipoExame;
    protected $convenio;
    protected $dataExame;
    protected $coleta;
    protected $dataColeta;
    protected $url;

    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
        $this->cliente = new Cliente();
        $this->medico = new Medico();
        $this->consulta = new Consulta();
        $this->tipoExame = new TipoExame();
        $this->convenio = new Convenio();
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

    public function getTipoExame() {
        return $this->tipoExame;
    }

    public function getConvenio() {
        return $this->convenio;
    }

    public function getDataExame() {
        return $this->dataExame;
    }

    public function getColeta() {
        return $this->coleta;
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

    public function setTipoExame($tipoExame) {
        $this->tipoExame = $tipoExame;
    }

    public function setConvenio($convenio) {
        $this->convenio = $convenio;
    }

    public function setDataExame($dataExame) {
        $this->dataExame = $dataExame;
    }

    public function setColeta($coleta) {
        $this->coleta = $coleta;
    }

    public function setDataColeta($dataColeta) {
        $this->dataColeta = $dataColeta;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    //Métodos de Banco de Dados
    public function carrega($cdExame) {
        //Gera SQL e busca Exame no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Exame WHERE cdExame = " . $cdExame;
        $result = $this->query($sql) or die('Não foi possível carregar' .
                        ' Exame do banco de dados: ' . $this->dberror());
        $result = $this->fetch_array($result);

        $this->cliente->carrega($result['cdCliente']);
        $this->medico->carrega($result['cdMedico']);
        $this->consulta->carrega($result['cdConsulta']);
        $this->tipoExame->carrega($result['cdTipoExame']);
        $this->convenio->carrega($result['cdConvenio']);
        $this->dataExame = $result['dtExame'];
        $this->coleta = $result['coleta'];
        $this->dataColeta = $result['dtColetaDom'];
        $this->url = $result['URLExame'];
    }

    public function salva() {
        //Insere Exame no banco. Não tem opção de atualizar porque não tem nada que vale ser alterado
        //Se achar ruim depois muda
        $sql = "INSERT INTO TB_Exame(cdExame, cdCliente, cdMedico, cdConsulta, cdTipoExame, cdConvenio,"
                . " dtExame, coletaDom, dtColetaDom, URLExame) VALUES "
                . "('', " . $this->cliente->getCdPessoa() . "," . $this->medico->getCdPessoa() . ","
                . $this->consulta->getCdConsulta() . "," . $this->tipoExame->getCdTipoExame() . ","
                . $this->convenio->getCdConvenio() . ",'" . $this->dataExame . "'," . $this->coleta . ","
                . ",'" . $this->dataColeta . "','." . $this->url . "')";
        $this->query($sql) or die('Não foi possível salvar' .
                        ' Exame do banco de dados: ' . $this->dberror());
    }

    public function remove() {
        
    }

    //Versão util das funcoes abaixo

    public function listaTudo() {
        $sql = "SELECT cdExame FROM TB_Exame";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdTipoExame'];
        }
        return $exames;
    }

    public function listaCliente() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE cdCliente = " . $this->cliente->getCdPessoa();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaMedico() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE cdMedico = " . $this->medico->getCdPessoa();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaConsulta() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE cdConsulta = " . $this->consulta->getCdConsulta();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaTipoExame() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE cdTipoExame = " . $this->tipoExame->getCdTipoExame();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaConvenio() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE cdConvenio = " . $this->convenio->getCdConvenio();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaDataExame() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE dtExame = '" . $this->dataExame . "'";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

    public function listaDataColeta() {
        $sql = "SELECT cdExame FROM TB_Exame WHERE dtExame = '" . $this->dataColeta . "'";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[] = $row['cdExame'];
        }
        return $exames;
    }

}

    /*
     * 
     * Porrada de listagem por tudo quanto é tipo de condição
     * Aparentemente não tem tanta utilidade, poderia retornar apenas os cdexame
     * 
     * 
    public function listaTudo(){
        $sql = "SELECT * FROM TB_Exame";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaCliente(){
        $sql = "SELECT * FROM TB_Exame WHERE cdCliente = ".$this->cliente->getCdPessoa();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaMedico(){
        $sql = "SELECT * FROM TB_Exame WHERE cdMedico = ".$this->medico->getCdPessoa();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaConsulta(){
        $sql = "SELECT * FROM TB_Exame WHERE cdConsulta = ".$this->consulta->getCdConsulta();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaTipoExame(){
        $sql = "SELECT * FROM TB_Exame WHERE cdTipoExame = ".$this->tipoExame->getCdTipoExame();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaConvenio(){
        $sql = "SELECT * FROM TB_Exame WHERE cdConvenio = ".$this->convenio->getCdConvenio();
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaDataExame(){
        $sql = "SELECT * FROM TB_Exame WHERE dtExame = '".$this->dataExame."'";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    public function listaDataColeta(){
        $sql = "SELECT * FROM TB_Exame WHERE dtExame = '".$this->dataColeta."'";
        $result = $this->query($sql);
        while ($row = $this->fetch_array($result)) {
            $exames[$row['cdTipoExame']] = array('cdCliente' => 'cdCliente',
                'cdMedico' => $row['cdMedico'],
                'cdConsulta' => $row['cdConsulta'],
                'cdTipoExame' => $row['cdTipoExame'],
                'cdConvenio' => $row['cdConvenio'],
                'dataExame' => $row['dtExame'],
                'dataColeta' => $row['dtColetaDom'],
                'url' => $row['URLExame']);
        }
        return $exames;
    }
    */
    
 