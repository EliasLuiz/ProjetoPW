<?php
/**
 * Description of ILogout
 *
 * @author Elias
 */

require_once __DIR__ . '/../C/CtrlUsuario.php';

class ILogout {
    
    function __construct() {
        $ctrl = new CtrlUsuario();
        $ctrl->logout();
    }

}
