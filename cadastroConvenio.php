<?php

require_once 'classes/V/ICadastroConvenio.php';

if(isset($_POST)){
    $interf = new ICadastroConvenio();
    $interf->carregaPost();
    if(!$interf->salva()){
        header("location: AreaAdministrador.php");
    }
}

?>