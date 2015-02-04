<?php

require_once __DIR__ . '/../C/CtrlExame.php';
require_once __DIR__ . '/../M/TipoExame.php';
require_once __DIR__ . '/../M/Cliente.php';
require_once __DIR__ . '/../M/Medico.php';
require_once __DIR__ . '/../M/Convenio.php';
require_once __DIR__ . '/../M/Outros.php';
require_once __DIR__ . '/../V/Regexp.php';

/**
 * Description of IMarcacaoExame
 *
 * @author Elias
 */
class IMarcacaoExame {

    use Regexp;

    public function listaTipoExame() {
        $texame = new TipoExame();
        $texames = $texame->listaTipoExame();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdExame</td><td>Nome do Exame</td> </tr>';
        foreach ($texames as $exame) {
            echo '<tr> <td>' . $exame['cdTipoExame'] . '</td><td>' . $exame['nome'] . '</td> </tr>';
        }
        echo '    </table>
              </div>';
    }

    public function comboboxTipoExame() {
        $tipoExame = new TipoExame();
        $tipos = $tipoExame->listaTipoExame();
        foreach ($tipos as $exames) {
            echo '<option value=' . $exames['codigo'] . '>' . $exames['nome'] . '</option>';
        }
    }

    public function listaMedicoCliente($cdCliente) {
        $medico = new Medico();
        $cliente = new Cliente();
        $cliente->carrega($cdCliente);
        $medicos = $cliente->listaMedicos();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdMedico</td><td>Nome do M&eacute;dico</td> </tr>';
        foreach ($medicos as $m) {
            $medico->carrega($m);
            echo '<tr> <td>' . $m . '</td><td>' . $medico->getNome() . '</td> </tr>';
        }
        echo '    </table>
              </div>';
    }

    public function listaConvenioCliente($cdCliente) {
        $cliente = new Cliente();
        $cliente->carrega($cdCliente);
        $convenios = $cliente->listaConvenios();
        echo '<div>
                  <table>';
        echo '<tr> <td>cdMedico</td><td>Nome do M&eacute;dico</td> </tr>';
        foreach ($convenios as $c) {
            echo '<tr> <td>' . $c . '</td><td>' . $c['nome'] . '</td> </tr>';
        }
        echo '    </table>
              </div>';
    }

    public function comboboxConvenio() {
        $convenio = new Convenio();
        $convenios = $convenio->listaConvenio();
        foreach ($convenios as $c) {
            echo '<option value=' . $c['codigo'] .'>' . $c['nome'] . '</option>';
        }
    }

    public function listaHorarios() {
        
    }

    public function comboboxHorariosDisponiveis($data) {
        $ex = new CtrlExame();
        $data = $this->validaData($data);
        $listaEx = $ex->listaDataExame($data);
        $horOcupados = [];
        foreach ($listaEx as $e) {
            $horOcupados[] = $e->getHoraExame();
        }
        $out = new Outros();
        $listaHor = $out->listaHorarios();

        foreach ($horOcupados as $h) {
            $key = array_search($h, $listaHor);
            if ($key !== NULL) {
                unset($listaHor[$key]);
            }
        }
        echo'<select name="horario" id="horario"><option>Selecione</option>';
        foreach ($listaHor as $h) {
            echo '<option>' . $this->retiraSegundo($h) . '</option>';
        }
        echo '</select>';
    }

    public function listaConsultaCliente($cdCliente) {
        $consulta = new Consulta();
        $cliente = new Cliente();
        $medico = new Medico();
        $cliente->carrega($cdCliente);
        $medicos = $cliente->listaMedicos();
        foreach ($medicos as $m) {
            $consultas = $cliente->listaConsultas($m);
            $medico->carrega($m);
            echo '<div>
                      <table>';
            echo '<tr colspan="2"> Medico: ' . $medico->getNome();
            echo '<tr> <td>cdConsulta</td><td>Data da Consulta</td> </tr>';
            foreach ($consultas as $c) {
                $consulta->carrega($c);
                echo '<tr> <td>' . $c . '</td><td>' . $consulta->getData() . '</td> </tr>';
            }
            echo '    </table>
                  </div>';
        }
    }

    public function marcaExame($cdCliente, $cdMedico, $cdTipoExame, $cdConvenio, $hrExame, $dtColeta, $dtExame) {

        echo 'chegou em interf<br>';
        
        if (!$this->valida($cdCliente, $cdMedico, $cdTipoExame, $cdConvenio, $dtExame, $hrExame, $dtColeta)) {
            die("Dados invalidos");
        }

        $ctrl = new CtrlExame();

        $ctrl->marcaExame($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, $cdConvenio, $dtExame, $hrExame, $dtColeta);
    }

    public function valida($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, $cdConvenio, &$dtExame, &$hrExame, &$dtColeta) {

        echo 'entrou em valida<br>';
        $valido = TRUE;
        $valido = $valido && $this->validaNumerico($cdCliente);
        echo 'valida: '.$valido.' <br>';
        echo 'texame: '.$cdTipoExame.' <br>';
        //$valido = $valido && ($this->validaNumerico($cdMedico) || empty($cdMedico));
        //$valido = $valido && ($this->validaNumerico($cdConsulta) || empty($cdConsulta));
        $valido = $valido && $this->validaNumerico($cdTipoExame);
        echo 'valida: '.$valido.' <br>';
        echo 'texame: '.$cdTipoExame.' <br>';
        $valido = $valido && ($this->validaNumerico($cdConvenio) || $cdConvenio == '');
        //$valido = $valido && ($this->validaData($dtColeta) || empty($dtColeta));
        if($dtColeta != '')
            $dtColeta = $this->validaData($dtColeta);
        if($dtExame != '')
            $dtExame = $this->validaData($dtExame);
        if($hrExame != '')
            $hrExame = $this->validaHora($hrExame);
        echo 'saindo de valida: '+$valido+' <br>';
        return $valido;
    }

}

?>
