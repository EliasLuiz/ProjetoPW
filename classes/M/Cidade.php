<?php

/**
 * Classe para manipulação de TB_Cidade
 *
 * @author Elias
 */

class Cidade {
    
    use MySQL;
    
    protected $nome;
    
    //Set's e Get's
    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }
    
    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
    }
    function __destruct() {
        $this->fechaConexao();
    }


    //Metodos de Banco de Dados
    public function carrega($cdCidade){
        
        //Gera SQL e busca Cidade no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Cidade c WHERE c.cdCidade = '" . $cdCidade . "'";
        $result = mysql_query($sql, $this->con) or die('Não foi possível carregar '
                . 'cidade do banco de dados: '.mysql_error());
        $result = mysql_fetch_array($result);
        
        $this->nome = $result['nmCidade'];
    }
    public function salva(){
        
        //Gera SQL para salvar/atualizar Cidade no banco
        $sql = "SELECT cdCidade FROM TB_Cidade c WHERE c.nmCidade = '" . $this->nome . "'";
        $result = mysql_query($sql, $this->con);
        $result = mysql_fetch_array($result);
        
        if(!isset($result["cdCidade"])){
            $sql = "INSERT INTO TB_Cidade(cdCidade,nmCidade)" . " VALUES ('','" .
                    $this->nome . "')";
            
            $result = mysql_query($sql, $this->con) or die('Não foi possível salvar cidade'
                    . ' no banco de dados: '.mysql_error());
        }
    }
    public function remove() {
        $sql = "UPDATE TB_Cidade SET status = 0 WHERE nmCidade = " . $this->nome;
        mysql_query($sql, $this->con) or die('Não foi possível remover' .
                ' cidade do banco de dados: '.mysql_error());
    }
}
