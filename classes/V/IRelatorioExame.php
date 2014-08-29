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
        $ctrl->listaExameData($date);
//        foreach ($lista as $e){
//            echo $e->getCliente()->getNome();
//        }
        //imprime a data
        
        /*echo '<table border="1px" bordercolor="#3333FF"> <tr> <td><b><font size="3"> Nome do Cliente </font></b></td> <td><b><font size="3"> Exame </font></b></td>'
        . ' <td><b><font size="3"> Hor&aacute;rio </font></b></td> <td><b><font size="3"> Conv&ecirc;nio </font></b></td><td><b><font size="3"> Rua </font></b></td><td><b><font size="3"> Numero </font></b></td></tr>';
        foreach ($lista as $e){
            echo '<tr> <td>'. $e->getCliente()->getNome() .'</td>'
                    .'<td>'. $e->getTipoExame()->getNome()  . ' </td>'
                    .'<td>'. $e->getHoraExame() .'</td> '
                    .'<td>'. $e->getConvenio()->getNome() .'</td> '
                    .'<td>'. $e->getCliente()->getRua() .'</td>'
                    .'<td>'. $e->getCliente()->getNumeroEnd() .'</td></tr>';
        }
        echo '</table>';*/
    }
    public function listaExameCliente($cliente){
        
    }
    public function listaExameMedico($medico){
        
    }
    public function listaExameDataColeta($data){
        $date = $this->validaData($data);
        $ctrl = new CtrlExame();
        $ctrl->listaExameDataColeta($date);
        
    }
}
