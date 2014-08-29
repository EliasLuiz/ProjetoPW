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
        echo '<table> <tr> <td> Nome do Cliente </td> <td> Exame </td>'
        . ' <td> Horário </td> </tr>';
        foreach ($lista as $e){
            echo '<tr> <td>'. $e->getCliente()->getNome() .'</td>'
                    .'<td>'. $e->getTipoExame()->getNome()  . ' </td>'
                    .'<td>'. $e->getHoraExame() .'</td> </tr>';
        }
        echo '</table>';
    }
    public function listaExameCliente($cliente){
        
    }
    public function listaExameMedico($medico){
        
    }
    public function listaExameDataColeta($data){
        
    }
}
