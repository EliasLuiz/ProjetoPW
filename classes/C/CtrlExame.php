<?php

/**
 * Description of CtrlExame
 *
 * @author Elias
 */
require_once __DIR__ . '/../M/Exame.php';

class CtrlExame {
    public function marcaExame($cdCliente, $cdMedico, $cdTipoExame, 
            $cdConvenio, $dtExame, $hrExame, $dtColeta){
        
        
        echo 'chegou em controle<br>';
        
        $cliente=new Cliente();
        $cliente->carrega($cdCliente);
        $tipoExame=new TipoExame();
        $tipoExame->carrega($cdTipoExame);
        //$medico = NULL;
        //$consulta = NULL;
        //$convenio = NULL;
        if($cdMedico != ''){
            $medico=new Medico();
            $medico->carrega($cdMedico);
        }/*
        if($cdConsulta != ''){
            $consulta=new Consulta();
            $consulta->carrega($cdConsulta);
        }*/
        if($cdConvenio != ''){
            $convenio=new Convenio();
            $convenio->carrega($cdConvenio);
        }
        
        $exame = new Exame();
        $exame->setCliente($cliente);
        //$exame->setMedico($medico);
        //$exame->setConsulta($consulta);
        $exame->setTipoExame($tipoExame);
        $exame->setConvenio($convenio);
        $exame->setDataExame($dtExame);
        $exame->setHoraExame($hrExame);
        if($dtColeta != ''){
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
        $cont = 0;
        $exames = [];
        $lista = $exame->listaDataExame();
        
        if(empty($lista)){
            echo 'N&atilde;o h&aacute exames agendados para esse dia';
            return NULL;
        }
        
        echo '<table border="1px" bordercolor="#3333FF"> <tr> <td><b><font size="3"> Nome do Cliente </font></b></td> <td><b><font size="3"> Exame </font></b></td>'
        . ' <td><b><font size="3"> Hor&aacute;rio </font></b></td> <td><b><font size="3"> Conv&ecirc;nio </font></b></td><td><b><font size="3"> Rua </font></b></td><td><b><font size="3"> Numero </font></b></td><td><b><font size="3"> Bairro </font></b></td><td><b><font size="3"> Cidade </font></b></td></tr>';
        
        foreach ($lista as $ex){
            $exame->carrega($ex);
            $exames[$cont] = $exame;
            
            echo '<tr> <td>'. $exames[$cont]->getCliente()->getNome() .'</td>'
                    .'<td>'. $exames[$cont]->getTipoExame()->getNome()  . ' </td>'
                    .'<td>'. $exames[$cont]->getHoraExame() .'</td> '
                    .'<td>'. $exames[$cont]->getConvenio()->getNome() .'</td> '
                    .'<td>'. $exames[$cont]->getCliente()->getRua() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getNumeroEnd() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getBairro()->getNome() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getBairro()->getCidade()->getNome() .'</td></tr>';
        
            $cont++;
        }
        
        echo '</table>';
        return $exames;
    }
    public function listaExameDataColeta($data){
        
        $exame = new Exame();
        $exame->setDataColeta($data);
        $cont = 0;
        $exames = [];
        $lista = $exame->listaDataColeta();
        
        if(empty($lista)){
            echo 'N&atilde;o h&aacute coletas agendadas para esse dia';
            return NULL;
        }
        
        echo '<table border="1px" bordercolor="#3333FF"> <tr> <td><b><font size="3"> Nome do Cliente </font></b></td> <td><b><font size="3"> Exame </font></b></td>'
        . ' <td><b><font size="3"> Hor&aacute;rio </font></b></td> <td><b><font size="3"> Conv&ecirc;nio </font></b></td><td><b><font size="3"> Rua </font></b></td><td><b><font size="3"> Numero </font></b></td><td><b><font size="3"> Bairro </font></b></td><td><b><font size="3"> Cidade </font></b></td></tr>';
        
        foreach ($lista as $ex){
            $exame->carrega($ex);
            $exames[$cont] = $exame;
            
            echo '<tr> <td>'. $exames[$cont]->getCliente()->getNome() .'</td>'
                    .'<td>'. $exames[$cont]->getTipoExame()->getNome()  . ' </td>'
                    .'<td>'. $exames[$cont]->getHoraExame() .'</td> '
                    .'<td>'. $exames[$cont]->getConvenio()->getNome() .'</td> '
                    .'<td>'. $exames[$cont]->getCliente()->getRua() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getNumeroEnd() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getBairro()->getNome() .'</td>'
                    .'<td>'. $exames[$cont]->getCliente()->getBairro()->getCidade()->getNome() .'</td></tr>';
        
            $cont++;
        }
        
        echo '</table>';
        return $exames;
    }
    public function listaDataExame($data){
        
        $exame = new Exame();
        $exame->setDataExame($data);
        $cont = 0;
        $exames = [];
        $lista = $exame->listaDataExame();
        foreach ($lista as $ex){
            $exame->carrega($ex);
            $exames[$cont] = $exame;
        
            $cont++;
        }
        return $exames;
    }
}

?>
