<?php

require_once 'classes/V/ICadastroConvenio.php';

if (isset($_POST["nomeconvenio"])) {
    $interf = new ICadastroConvenio();
    $interf->cadastra($_POST['nomeconvenio'], $_POST['responsavel']);
}
?>