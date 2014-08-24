<?php

require_once $GLOBALS["HOME"] . 'classes/V/IAlteraEmail.php';

require_once $GLOBALS["HOME"] . 'alteraEmail.html';

//criar classe de interface depois

if (isset($_POST["email"])) {
    $interf = new IAlteraEmail($_POST['email']);
    $interf->alteraEmail();
}
?>