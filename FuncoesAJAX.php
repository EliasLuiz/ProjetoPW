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
        
        break;
    default:
        break;
}


?>
