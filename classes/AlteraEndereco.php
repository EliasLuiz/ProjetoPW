<?php

/**
 * DELETAR
 *
 * @author Daniel
 */

include_once 'Pessoa.php';

class AlteraEndereco extends Pessoa {
    
    protected $rua;
    protected $numeroEnd;
    protected $complementoEnd;

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

        //Métodos de Banco de Dados
    public function salvaMySQL($login, $senha){
        
        //Estabelece conexão
        $con = mysql_connect("localhost","root","") or die('Não foi possível estabelecer conexão com o banco de dados: '.mysql_error());
        mysql_select_db('mydb') or die('falha ao selecionar o banco');
        
        //Gera SQL para atualizar endereço de Cliente no banco
        $sql = "SELECT * FROM TB_Pessoa p, TB_Cliente c WHERE p.login = '" . $this->login .
               "' and p.senha = '" . $this->senha . "' and p.cdPessoa = c.cdPessoa";
        $result = mysql_query($sql) or die('Não foi possível buscar Pessoa no banco de dados: '.  mysql_error());
        $result = mysql_fetch_array($result);
        if($result["ruaCliente"]==$this->email){
            $result = mysql_fetch_array($result);
            $sql = "UPDATE TB_Cliente SET ruaCliente = '" . $this->rua .
                   "', nEndCliente = " . $this->numeroEnd . ", complementoEndCliente = '".
                   $this->complementoEnd .
                   "' WHERE cdPessoa = " . $result['cdPessoa'];
        }
        else{
            die('Não foi possível carregar Cliente do banco de dados: '.mysql_error());
        }
        
        //Executa SQL e testa sucesso
         $result = mysql_query($sql,$con) or die('Não foi possível salvar Funcionario no banco de dados: '.mysql_error());
         mysql_close($con);
    }
}

?>