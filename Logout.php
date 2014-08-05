<?php

require_once 'classes/C/CtrlUsuario.php';

$ctrl = new CtrlUsuario();
$ctrl->logout();
header("Location: index.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

