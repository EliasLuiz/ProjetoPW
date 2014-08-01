<?php

require_once '/../C/CtrlExame.php';
require_once '/../M/TipoExame.php';

/**
 * Description of IMarcacaoExame
 *
 * @author Elias
 */
class IMarcacaoExame {
    //put your code here
    public function listaTipoExame(){
        $texame = new TipoExame();
        $texames = $texame->listaTipoExame();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdExame</td><td>Nome do Exame</td> </tr>';
        foreach ($texames as $exame){
            echo '<tr> <td>'.$exame['cdTipoExame'].'</td><td>'.$exame['nome'].'</td> </tr>';
        }
        echo '    </table>
              </div>';
    }
    public marcaExame($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, 
            $cdConvenio, $dtExame, $dtColeta){
        return;
    }
}

?>
