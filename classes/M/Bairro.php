<?php

/**
 * Classe para manipulação de TB_Bairro
 *
 * @author Elias
 */

require_once 'Cidade.php';

class Bairro {
    
    use MySQL;
    
    protected $nome;
    protected $cidade;
    
    //Construtor e Destrutor
    function __construct() {
        $this->abreConexao();
        $this->cidade = new Cidade();
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
    public function setCidade($c){
        $this->cidade = $c;
    }
    public function getCidade(){
        return $this->cidade;
    }


    //Metodos de Banco de Dados
    public function carrega($cdBairro){
        
        //Gera SQL e busca Bairro no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Bairro b, TB_Cidade c WHERE b.cdBairro = '" . $cdBairro . "' and "
               . "b.cdCidade = c.cdCidade";
        
        $result = mysql_query($sql, $this->con) or die('Não foi possível carregar' .
                ' cidade do banco de dados: '.mysql_error());
        $result = mysql_fetch_array($result);
        
        $this->nome = $result['nmBairro'];
        $this->cidade->setNome($result['nmCidade']);
    }
    public function salva(){
        
        //Vê se Bairro já está no banco
        $sql = "SELECT cdBairro, cdCidade FROM TB_Bairro b, TB_Cidade c " .
                "WHERE b.nmBairro = '" . $this->nome . "' and c.cdCidade = b.cdCidade" .
                " and c.nmCidade = '" . $this->cidade->getNome() . "'";
        $result = mysql_query($sql, $this->con) or die('Não foi possível carregar' .
                ' cidade do banco de dados: '.mysql_error());
        $result = mysql_fetch_array($result);
        
        //Gera SQL para inserir Bairro
        if(!isset($result["cdBairro"])){
            
            //Busca chave de Cidade no banco
            $sql = "SELECT cdCidade FROM TB_Cidade WHERE nmCidade = '" . 
                    $this->cidade->getNome() . "'";
            
            $result = mysql_query($sql, $this->con) or die('Não foi possível carregar' .
                    ' cidade do banco de dados: '.mysql_error());
            $result = mysql_fetch_array($result);
            
            $sql = "INSERT INTO TB_Bairro(cdBairro,nmBairro,cdCidade)" . 
                   " VALUES ('','" . $this->nome . "','" . $result['cdCidade'] . "')";
            
            //Executa SQL e testa sucesso
            mysql_query($sql, $this->con) or die('Não foi possível salvar ' .
                    'bairro no banco de dados: '.mysql_error());
        }
    }
    public function remove() {
        $sql = "UPDATE TB_Bairro b, TB_Cidade c SET status = 0 WHERE nmBairro = '" . 
                $this->nome . "' and b.cdCidade = c.cdCidade and nmcidade = '" .
                $this->cidade->getNome() . "'";
        mysql_query($sql, $this->con) or die('Não foi possível remover' .
                ' bairro do banco de dados: '.mysql_error());
    }
    
    public function getCdBairro(){
        $sql = "SELECT cdBairro FROM TB_Bairro b, TB_Cidade c WHERE b.nmBairro = '" . 
                $this->nome . "' and b.cdCidade = c.cdCidade and c.nmCidade = '" . 
                $this->cidade->getNome() . "'";
        
        $result = mysql_query($sql, $this->con) or die('Não foi possível carregar' .
                ' bairro do banco de dados: '.mysql_error());
        $result = mysql_fetch_array($result);
        
        return $result['cdBairro'];
    }
}
