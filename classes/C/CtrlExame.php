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
        echo '<br> iniciou CtrlExame.marcaExame';
        $cliente=new Cliente();
        $cliente->carrega($cdCliente);
        echo '<br>cdcliente'.$cdCliente;
        echo '<br> carregou cliente: '. var_dump($cliente->getNome());
        $tipoExame=new TipoExame();
        $tipoExame->carrega($cdTipoExame);
        echo '<br> carregou texame: '. var_dump($tipoExame->getNome());
        $medico = NULL;
        $consulta = NULL;
        $convenio = NULL;/*
        if(isset($cdMedico)){
            $medico=new Medico();
            $medico->carrega($cdMedico);
        }
        if(isset($cdConsulta)){
            $consulta=new Consulta();
            $consulta->carrega($cdConsulta);
        }*/
        if(isset($cdConvenio)){
            $convenio=new Convenio();
            $convenio->carrega($cdConvenio);
        }
        
        $exame = new Exame();
        $exame->setCliente($cliente);
        //$exame->setMedico($medico);
        //$exame->setConsulta($consulta);
        $exame->setTipoExame($tipoExame);
        $exame->setConvenio($convenio);
        echo '<br> data: '. var_dump($dtExame);
        $exame->setDataExame($dtExame);
        echo '<br> data: '. var_dump($hrExame);
        $exame->setHoraExame($hrExame);
        /*if(isset($dtColeta)){
            $exame->setColeta(TRUE);
            $exame->setDataColeta($dtColeta);
        }
        else{*/
            $exame->setColeta(FALSE);
        //}
        $exame->salva();
    }
    public function listaExameData($data){
        
        $exame = new Exame();
        $exame->setDataExame($data);
        $cont = 0;
        $exames = [];
        $lista = $exame->listaDataExame();
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
}

?>
