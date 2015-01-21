<?php

/**
 * Description of CtrlFuncionario
 *
 * @author Elias
 */
class CtrlFuncionario {
    public function cadastra($funcionario){
        echo 'entrou em cadastra<br>';
        $funcionario->salva();
    }
}
