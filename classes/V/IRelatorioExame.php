<?php
/**
 * Description of IRelatorioExame
 *
 * @author Elias
 */

require_once $GLOBALS["HOME"] . '/classes/V/Regexp.php';
require_once $GLOBALS["HOME"] . '/classes/C/CtrlExame.php';

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
