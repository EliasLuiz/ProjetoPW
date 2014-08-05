<?php

    require_once '/classes/M/TipoExame.php';
    require_once '/classes/V/ITipoExame.php';
    require_once '/html/cadastros/administrador/cadastroexame.html';

    if(isset($_POST["nomeexame"])){
        echo $_POST["nomeexame"];
        $interf = new ITipoExame();
        $texame = $interf->gera();
        echo $texame->getPreco();
        $texame->salva();
    }
    
?>