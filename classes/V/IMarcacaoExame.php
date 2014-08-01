<?php

require_once '/../C/CtrlExame.php';
require_once '/../M/TipoExame.php';
require_once '/../M/Cliente.php';
require_once '/../M/Medico.php';
require_once '/../M/Convenio.php';

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
    public function listaMedicoCliente($cdCliente){
        $medico = new Medico();
        $cliente = new Cliente();
        $cliente->carrega($cdCliente);
        $medicos = $cliente->listaMedicos();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdMedico</td><td>Nome do M&eacute;dico</td> </tr>';
        foreach ($medicos as $m){
            $medico->carrega($m);
            echo '<tr> <td>'.$m.'</td><td>'.$medico->getNome().'</td> </tr>';
        }
        echo '    </table>
              </div>';
    }
    public function listaConvenioCliente($cdCliente){
        $convenio = new Convenio();
        $cliente = new Cliente();
        $cliente->carrega($cdCliente);
        $convenios = $cliente->listaConvenios();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdMedico</td><td>Nome do M&eacute;dico</td> </tr>';
        foreach ($convenios as $c){
            $convenio->carrega($c);
            echo '<tr> <td>'.$c.'</td><td>'.$convenio->getNome().'</td> </tr>';
        }
        echo '    </table>
              </div>';
    }
    public function listaConsultaCliente($cdCliente){
        $consulta = new Consulta();
        $cliente = new Cliente();
        $medico = new Medico();
        $cliente->carrega($cdCliente);
        $medicos = $cliente->listaMedicos();
        foreach ($medicos as $m){
            $consultas = $cliente->listaConsultas($m);
            $medico->carrega($m);
            echo '<div>
                      <table>';
            echo '<tr colspan="2"> Medico: ' . $medico->getNome();
            echo '<tr> <td>cdConsulta</td><td>Data da Consulta</td> </tr>';
            foreach ($consultas as $c){
                $consulta->carrega($c);
                echo '<tr> <td>'.$c.'</td><td>'.$consulta->getData().'</td> </tr>';
            }
            echo '    </table>
                  </div>';
        }
    }
    /*public function marcaExame($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, 
            $cdConvenio, $dtExame, $dtColeta){
        return;
    }*/
}

?>
