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

function product()
{
    $command = 'GetProducts';
    $postData = array();
    $adminUsername = 'TheMaxium69';

    $results = localAPI($command, $postData, $adminUsername);

    return $results['products'];
}
