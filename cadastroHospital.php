<?php

require_once 'classes/V/ICadastroHospital.php';

if (isset($_POST["nomehosp"])) {
    $interf = new InterfaceHospital();
    $interf->cadastra($_POST["nomehosp"], $_POST["ddd"] . $_POST["telefone"]);
}
?>