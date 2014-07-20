<?php

/**
 * Description of MySQL
 *
 * @author Elias
 */

trait MySQL {
    
    protected $con; // Usado para controlar a conexão com o BD
    
    public function abreConexao(){
        $con = mysql_connect("localhost","root","") or die('Não foi possível '
                . 'estabelecer conexão com o banco de dados: '.mysql_error());
        mysql_select_db('mydb') or die('Não foi possível selecionar o banco' . mysql_error());
        return $con;
    }
    public function fechaConexao(){
        mysql_close($this->con);
    }
    public function query($sql){
        return mysql_query($sql, $this->con);
    }
    public function fetch_array($result){
        return mysql_fetch_array($result);
    }
    public function erro(){
        return mysql_error();
    }
    abstract public function salva();
    abstract public function carrega($cdPrimario);
    abstract public function remove();
}
