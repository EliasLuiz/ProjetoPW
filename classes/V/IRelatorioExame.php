<?php
/**
 * Description of IRelatorioExame
 *
 * @author Elias
 */

require_once __DIR__ . '/Regexp.php';
require_once __DIR__ . '/../C/CtrlExame.php';

class IRelatorioExame {
    
    use Regexp;
    
    public function listaExameData($data){
        $date = $this->validaData($data);
        $ctrl = new CtrlExame();
        $lista = $ctrl->listaExameData($date);
        //imprime a data
    }
    public function listaExameCliente($cliente){
        
    }
    public function listaExameMedico($medico){
        
    }
    public function listaExameDataColeta($data){
        
    }
}
