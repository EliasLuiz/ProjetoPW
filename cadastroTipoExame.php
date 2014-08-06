<?php

    require_once '/classes/M/TipoExame.php';
    require_once '/classes/V/ICadastroTipoExame.php';
    require_once '/html/cadastros/administrador/cadastroexame.html';

    if(isset($_POST["nomeexame"])){
        $interf = new ICadastroTipoExame();
        $interf->carregaPost();
        $interf->salva();
    }
    
?>