<?php

/**
 * Description of Pessoa
 *
 * @author Elias
 */

include_once 'MySQL.php';

class Pessoa {
    
    use MySQL;
    
    protected $nome;
    protected $cpf;
    protected $rg;
    protected $login;
    protected $senha;
    protected $sexo;
    protected $telefone;
    protected $email;
    
    //Construtor e Destrutor
    function __construct() {
        $this->con = $this->abreConexao();
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
    public function setCpf($c){
        $this->cpf = $c;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setRg($r){
        $this->rg = $r;
    }
    public function getRg(){
        return $this->rg;
    }
    public function setLogin($l){
        $this->login = $l;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setSenha($s){
        $this->senha = $s;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSexo($se){
        $this->sexo = $se;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function getEmail(){
        return $this->email;
    }
    
    //Métodos de Banco de Dados
    public function carrega($cdPessoa){
        
        //Gera SQL e busca Pessoa no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.cdPessoa = " . $cdPessoa;
        $result = mysql_query($sql, $this->con) or die('Não foi possível carregar' .
                ' Pessoa do banco de dados: '.mysql_error());
            $result = mysql_fetch_array($result);
            
            $this->nome = $result['nmPessoa'];
            $this->cpf = $result['cpf'];
            $this->rg = $result['rg'];
            $this->login = $result['login'];
            $this->senha = $result['senha'];
            $this->sexo = $result['sexo'];
            $this->telefone = $result['telefone'];
            $this->email = $result['email'];
    }
    public function salva(){
        
        //Vê se Pessoa já está no banco
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" . $this->login . "'";
        $result = mysql_query($sql) or die('Não foi possível buscar Pessoa '
                . 'no banco de dados: '.  mysql_error());
        $result = mysql_fetch_array($result);
        
        //Gera SQL para atualizar Pessoa no banco
        if($result["senha"]==$this->senha){
            $sql = "UPDATE TB_Pessoa p SET p.nmPessoa = '" . $this->nome .
                   "', p.cpf = '" . $this->cpf . "', p.rg = '" . $this->rg .
                   "', p.sexo = '" . $this->sexo . "', p.telefone = '" . $this->telefone .
                   "', p.email = '" . $this->email . "' WHERE p.login = '" . $this->login .
                   "'and p.senha = '" . $this->senha . "'";
        }
        
        //Gera SQL para inserir Pessoa
        else if(!isset($result["cdPessoa"])){
            $sql = "INSERT INTO TB_Pessoa(cdPessoa,nmPessoa,cpf,rg,login,senha,sexo,telefone,email)" . 
                   " VALUES ('','" . $this->nome . "','" . $this->cpf . "','" . $this->rg . "','" . 
                   $this->login . "','" . $this->senha . "','" . $this->sexo . "','" . 
                   $this->telefone . "','" . $this->email . "')";
        }
        
        else{
            die("Login j&aacute; existente");
        }
        
        //Executa SQL e testa sucesso
       $result = mysql_query($sql) or die($sql.'<hr>Não foi possível salvar' .
               ' Pessoa no banco de dados: '.mysql_error());
    }
    public function remove() {
        $sql = "UPDATE TB_Pessoa SET status = 0 WHERE login = " . $this->login;
        mysql_query($sql, $this->con);
    }
}

?>