<?php
/**
 * Description of ILogout
 *
 * @author Elias
 */

include_once '/../C/CtrlUsuario.php';

class ILogout {
    
    function __construct() {
        $ctrl = new CtrlUsuario();
        $ctrl->logout();
    }

}
