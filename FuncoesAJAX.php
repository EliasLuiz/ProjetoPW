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
        
        $myDateTime = DateTime::createFromFormat('d/m/Y', $_POST["cod"]);
        $newDateString = $myDateTime->format('Y-m-d');
        require_once './classes/V/IMarcacaoExame.php';
        
        $data = new IMarcacaoExame();
        $data->comboboxHorariosDisponiveis($newDateString);

        
        break;
    
    case 'gerarelatorio':
        break;
    default:
        break;
}


?>
