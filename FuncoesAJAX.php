<?php

$acao = $_POST["acao"];
switch ($acao) {
    case 'dadosTipoExame':
        require_once './classes/M/TipoExame.php';
        
        $exame = new TipoExame();
        $exame->carrega($_POST["cod"]);
        echo "<tr><td>Requisitos:</td><td>".$exame->getRequisitos()." </td></tr>"
                . "<tr><td>Informações:</td><td> ".$exame->getInfo()."</td></tr>"
                . "<tr><td>Preço: </td><td>R$ ".$exame->getPreco()."</td></tr>";
        
        break;
    case 'gerahorarios':
        require_once './classes/V/IMarcacaoExame.php';
        
        $data = new IMarcacaoExame();
        $data->comboboxHorariosDisponiveis($_POST["cod"]);

        
        break;
    
    case 'gerarelatorio':
        require_once './classes/V/IRelatorioExame.php';
        $exames = new IRelatorioExame();
        $exames->listaExameData($_POST["cod"]);
        break;
    
    case 'gerarelatorio2':
        require_once './classes/V/IRelatorioExame.php';
        $exames = new IRelatorioExame();
        $exames->listaExameDataColeta($_POST["cod"]);
        break;
    
    case 'gerarelatorio':
        require_once './classes/V/IRelatorioExame.php';
        $exames = new IRelatorioExame();
        $exames->listaExameNome($_POST["cod"]);
        echo 'oiiiiiiiiiiiiiiiiiiiiiiiiiii';
        break;
    
    default:
        break;
}


?>
