<?php

require_once '/classes/V/ICadastroTipoExame.php';

if (isset($_POST["nomeexame"])) {
    $interf = new ICadastroTipoExame();
    $interf->carregaPost();
    $interf->salva();
}
?>