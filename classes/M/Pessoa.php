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
        $this->abreConexao();
    }
    function __destruct() {
        $this->fechaConexao();
    }

    //Set's e Get's
    public function getNome() {
        return $this->nome;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getRg() {
        return $this->rg;
    }
    public function getLogin() {
        return $this->login;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function setRg($rg) {
        $this->rg = $rg;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    
    //Métodos de Banco de Dados
    public function carrega($cdPessoa) {

        //Gera SQL e busca Pessoa no banco, carregando se não houver erro
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.cdPessoa = " . $cdPessoa;

        $result = $this->query($sql) or die('Não foi possível carregar' .
                        ' Pessoa do banco de dados: ' . $this->dberror());
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
    public function salva() {

        //Vê se Pessoa já está no banco
        $sql = "SELECT * FROM TB_Pessoa p WHERE p.login = '" . $this->login . "'";
        $result = $this->query($sql) or die('Não foi possível buscar Pessoa '
                        . 'no banco de dados: ' . $this->dberror());
        $result = $this->fetch_array($result);

        //Gera SQL para atualizar Pessoa no banco
        if ($result["senha"] == $this->senha) {
            $sql = "UPDATE TB_Pessoa p SET p.nmPessoa = '" . $this->nome .
                    "', p.cpf = '" . $this->cpf . "', p.rg = '" . $this->rg .
                    "', p.sexo = '" . $this->sexo . "', p.telefone = '" . $this->telefone .
                    "', p.email = '" . $this->email . "' WHERE p.login = '" . $this->login .
                    "'and p.senha = '" . $this->senha . "'";
        }

        //Gera SQL para inserir Pessoa
        else if (empty($result["cdPessoa"])) {
            $sql = "INSERT INTO TB_Pessoa(cdPessoa,nmPessoa,cpf,rg,login,senha,sexo,telefone,email)" .
                    " VALUES ('','" . $this->nome . "','" . $this->cpf . "','" . $this->rg . "','" .
                    $this->login . "','" . $this->senha . "','" . $this->sexo . "','" .
                    $this->telefone . "','" . $this->email . "')";
        } 
        
        else{
            die('Login j&aacute; existente');
        }

        //Executa SQL e testa sucesso
            $this->query($sql) or die('Não foi possível salvar' .
                            ' Pessoa no banco de dados: ' . $this->dberror());
    }
    public function remove() {
        $sql = "UPDATE TB_Pessoa SET status = 0 WHERE login = " . $this->login;
        $this->query($sql, $this->con) or die('Não foi possível remover' .
                        ' Pessoa no banco de dados: ' . $this->dberror());
    }
    public function alteraSenha() {
        $sql = "UPDATE TB_Pessoa SET senha = '" . $this->senha . "' 
                WHERE login = '" . $this->login . "'";
        $this->query($sql) or die('Não foi possível salvar' .
                        ' Pessoa no banco de dados: ' . $this->dberror());
    }
    public function lista() {
        $sql = "SELECT p.cdPessoa, nmPessoa FROM TB_Cliente c, TB_Pessoa p "
                . "WHERE c.cdPessoa = p.cdPessoa";
        $resultc = $this->query($sql);
        $sql = "SELECT p.cdPessoa, nmPessoa FROM TB_Medico m, TB_Pessoa p "
                . "WHERE m.cdPessoa = p.cdPessoa";
        $resultm = $this->query($sql);
        $sql = "SELECT p.cdPessoa, nmPessoa FROM TB_Medico m, TB_Pessoa p "
                . "WHERE m.cdPessoa = p.cdPessoa";
        $resultf = $this->query($sql);
        while ($row = $this->fetch_array($resultc)) {
            $pessoas[$row['nmPessoa']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'C');
        }
        while ($row = $this->fetch_array($resultm)) {
            $pessoas[$row['nmPessoa']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'M');
        }
        while ($row = $this->fetch_array($resultf)) {
            $pessoas[$row['nmPessoa']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'F');
        }
        return $pessoas;
    }
    public function listaLogin() {
        $sql = "SELECT p.cdPessoa, login FROM TB_Cliente c, TB_Pessoa p "
                . "WHERE c.cdPessoa = p.cdPessoa";
        $resultc = $this->query($sql);
        $sql = "SELECT p.cdPessoa, login FROM TB_Medico m, TB_Pessoa p "
                . "WHERE m.cdPessoa = p.cdPessoa";
        $resultm = $this->query($sql);
        $sql = "SELECT p.cdPessoa, login FROM TB_Funcionario f, TB_Pessoa p "
                . "WHERE f.cdPessoa = p.cdPessoa";
        $resultf = $this->query($sql);
        while ($row = $this->fetch_array($resultc)) {
            $pessoas[$row['login']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'C');
        }
        while ($row = $this->fetch_array($resultm)) {
            $pessoas[$row['login']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'M');
        }
        while ($row = $this->fetch_array($resultf)) {
            $pessoas[$row['login']] = array('cdPessoa' => $row['cdPessoa'],
                'tipo' => 'F');
        }
        return $pessoas;
    }
}

?>
