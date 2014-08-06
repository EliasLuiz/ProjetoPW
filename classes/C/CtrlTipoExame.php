<?php
/**
 * Description of CtrlTipoExame
 *
 * @author Elias
 */
class CtrlTipoExame {
    public function cadastra($tipoExame) {
        $tipoExame->salva();
    }
}
