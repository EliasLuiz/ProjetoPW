<?php
/**
 * Description of ILogout
 *
 * @author Elias
 */

require_once $GLOBALS["HOME"] . 'classes/C/CtrlUsuario.php';

class ILogout {
    
    function __construct() {
        $ctrl = new CtrlUsuario();
        $ctrl->logout();
    }

}
