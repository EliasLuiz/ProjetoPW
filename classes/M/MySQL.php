<?php

/**
 * Description of MySQL
 *
 * @author Elias
 */

trait MySQL {
    
    protected $con; // Usado para controlar a conexão com o BD
    
    protected function abreConexao(){
        $this->con = mysql_connect("localhost","root","",true) or die('Não foi possível '
                . 'estabelecer conexão com o banco de dados: '.mysql_error());
        mysql_select_db('mydb') or die('Não foi possível selecionar o banco' . mysql_error());
    }
    protected function fechaConexao(){
        mysql_close($this->con);
    }
    protected function query($sql){
        return mysql_query($sql, $this->con);
    }
    protected function fetch_array($result){
        return mysql_fetch_array($result);
    }
    protected function dberror(){
        return mysql_error();
    }
    protected function escape_string($string){
        return mysql_real_escape_string($string);
    }

    abstract public function salva();
    abstract public function carrega($cdPrimario);
    abstract public function remove();
    //abstract public function lista();
}
