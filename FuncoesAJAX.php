<?php

$acao = $_POST["acao"];
switch ($acao) {
    case 'dadosTipoExame':
        require_once './classes/M/TipoExame.php';

        $exame = new TipoExame();
        $exame->carrega(1);
        echo "<div class = 'col-md-2 col-md-offset-2'><label>Requisitos:</label></div>
            <div class='col-md-4' style='margin-top:10px;'><input class='form-control' type='text' id='data' name='data' value='".$exame->getRequisitos()."'></div>";

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
