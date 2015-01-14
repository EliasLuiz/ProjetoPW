<?php

require_once 'classes/V/ICadastroTipoExame.php';

if(isset($_POST)){
    $interf = new ICadastroTipoExame();
    $interf->carregaPost();
    if(!$interf->salva()){
        header("location: AreaAdministrador.php");
    }
}


?>
