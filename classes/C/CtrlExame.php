<?php

/**
 * Description of CtrlExame
 *
 * @author Elias
 */
require_once $GLOBALS["HOME"] . '/classes/M/Exame.php';

class CtrlExame {
    public function marcaExame($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, 
            $cdConvenio, $dtExame, $dtColeta){
        $cliente=new Cliente();
        $cliente->carrega($cdCliente);
        $medico=new Medico();
        $medico->carrega($cdMedico);
        $consulta=new Consulta();
        $consulta->carrega($cdConsulta);
        $tipoExame=new TipoExame();
        $tipoExame->carrega($cdTipoExame);
        $convenio=new Convenio();
        $convenio->carrega($cdConvenio);
        
        $exame = new Exame();
        $exame->setCliente($cliente);
        $exame->setMedico($medico);
        $exame->setConsulta($consulta);
        $exame->setTipoExame($tipoExame);
        $exame->setConvenio($convenio);
        $exame->setDataExame($dtExame);
        if(isset($dtColeta)){
            $exame->setColeta(TRUE);
            $exame->setDataColeta($dtColeta);
        }
        else{
            $exame->setColeta(FALSE);
        }
        $exame->salva();
    }
    public function listaExameData($data){
        $exame = new Exame();
        $exame->setDataExame($data);
        $lista = $exame->listaDataExame();
        foreach ($lista as $ex){
            $exame->carrega($ex);
            $exames[] = $exame;
        }
        return $exames;
    }
}

?>
