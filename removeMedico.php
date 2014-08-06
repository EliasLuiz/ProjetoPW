<?php

    // DELETAR?

    require_once 'html/cadastros/configuracoes/removemedicos.html';
    require_once 'classes/M/Medico.php';
    
    if(isset($_POST['nomemedico'])){
        $medico = new Medico();
        $lista = $medico->lista();
        $medico->carrega($lista[$_POST['nomemedico']]);
        $medico->remove();
    }

?>