<?php

require '../includes/init.php';
if(!Tools::checkACL($user->rank,ACL_USERS_PERMISSIONS)) { exit ; }

if(isset($_GET['id']) && isset($_GET['c']) && in_array($_GET['c'],array('1','0')){
	$rank = substr($_GET['id'],-1);
	$cmd =  substr($_GET['id'],0,-2);
	mysql_query('UPDATE permissions_ranks SET '.$cmd.'="'.intval($_GET['c']).'" WHERE rank='.intval($rank));
	if(addLog($user->username,"Update permissions ".$cmd." rank : ".$rank."")) { echo "1";  }
}