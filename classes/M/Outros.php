<?php

require_once __DIR__ . '/MySQL.php';

/**
 * Description of Outros
 *
 * @author Elias
 */
class Outros {
    
    use MySQL;
    
    public function __construct() {
        $this->abreConexao();
    }
    
    public function __destruct() {
        $this->fechaConexao();
    }
    
    public function listaHorarios(){
        $sql = "SELECT horario FROM horarios";
        $result = $this->query($sql);
        while($row = $this->fetch_array($result)){
            $lista[] = $row['horario'];
        }
        return $lista;
    }
    
    public function salva(){}
    public function carrega($cdPrimario){}
    public function remove(){}
}
