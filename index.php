<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution
include_once 'config.php';
include_once 'include/Webservices/Relation.php';

include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

$webUI = new Vtiger_WebUI();
<<<<<<< HEAD
<<<<<<< HEAD
$_REQUEST['user_name'] = 'jugal';
$_REQUEST['password'] = 'Jugal@2002';
$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));
// $webUI->process(new Vtiger_Request($_REQUEST['user_name'], $_REQUEST['password']));
=======
$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));
>>>>>>> parent of d1dac76 (index file cred entry point No login entry)
=======
$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));
>>>>>>> parent of d1dac76 (index file cred entry point No login entry)
//$webUI->process(new Vtiger_Request('jugal','Jugal@2002'));
