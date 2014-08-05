<?php

    require_once 'classes/M/Convenio.php';
    require_once 'classes/V/ICadastroConvenio.php';
    require_once 'html/cadastros/administrador/cadastroconvenios.html';

    if(isset($_POST["nomeconvenio"])){
        $interf = new ICadastroConvenio();
        $interf->cadastra($_POST['nomeconvenio'], $_POST['responsavel']);
    }
?>