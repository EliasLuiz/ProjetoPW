<?php

/**
 * Description of CtrlFuncionario
 *
 * @author Elias
 */
class CtrlFuncionario {
    public function cadastra($funcionario){
        $funcionario->salva();
    }
}
