<?php
/**
 * WHMCS Sample Local API Call
 *
 * @package    WHMCS
 * @author     WHMCS Limited <development@whmcs.com>
 * @copyright  Copyright (c) WHMCS Limited 2005-2016
 * @license    http://www.whmcs.com/license/ WHMCS Eula
 * @version    $Id$
 * @link       http://www.whmcs.com/
 */


require_once '../../whmcs/whmcs-8.2.1/whmcs-8.2.1/init.php';
var_dump($_SESSION);

if ($_SESSION['login_auth_tk']){
    $isLog = true;
} else {
    $isLog = false;
}