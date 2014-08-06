<?php

require_once 'classes/V/ICadastroHospital.php';
require_once 'html/cadastros/administrador/cadastrohospitais.html';

    if (isset($_POST["nomehosp"])) {
        $interf = new InterfaceHospital();
        $interf->cadastra($_POST["nomehosp"], 
                $_POST["ddd"] . $_POST["telefone"]);
    }
?>