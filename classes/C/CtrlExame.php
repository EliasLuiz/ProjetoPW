<?php

/**
 * Description of CtrlExame
 *
 * @author Elias
 */
require_once __DIR__ . '/../M/Exame.php';

class CtrlExame {
    public function marcaExame($cdCliente, $cdMedico, $cdConsulta, $cdTipoExame, 
            $cdConvenio, $dtExame, $hrExame, $dtColeta){
        $cliente=new Cliente();
        $cliente->carrega($cdCliente);
        $tipoExame=new TipoExame();
        $tipoExame->carrega($cdTipoExame);
        $medico = NULL;
        $consulta = NULL;
        $convenio = NULL;
        if(isset($cdMedico)){
            $medico=new Medico();
            $medico->carrega($cdMedico);
        }
        if(isset($cdConsulta)){
            $consulta=new Consulta();
            $consulta->carrega($cdConsulta);
        }
        if(isset($cdConvenio)){
            $convenio=new Convenio();
            $convenio->carrega($cdConvenio);
        }
        
        $exame = new Exame();
        $exame->setCliente($cliente);
        $exame->setMedico($medico);
        $exame->setConsulta($consulta);
        $exame->setTipoExame($tipoExame);
        $exame->setConvenio($convenio);
        $exame->setDataExame($dtExame);
        $exame->setHoraExame($hrExame);
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
        $exames = [];
        $lista = $exame->listaDataExame();
        foreach ($lista as $ex){
            $exame->carrega($ex);
            $exames[] = $exame;
        }
        return $exames;
    }
}

?>
