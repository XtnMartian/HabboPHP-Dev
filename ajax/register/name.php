<?php
	define('AUTH','FALSE');
	require '../../init.php';
	
	$Error = new Error();
	
	$req = $db->query('SELECT username FROM users WHERE username = "'.safe($_POST['pseudo'],'SQL').'" LIMIT 1');
	$user_exist = $db->NumRowsC();
	
	$prefix = array('ADM-','MOD-','M0D-','SOS-','S0S-','XXX-','OWN-','0WN-');
	
	$Syntaxe_email='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	
	if(isset($_POST['pseudo'])){
		$pseudo_prefix = strtoupper(substr($_POST['pseudo'],0,4)); //Conversion du mot en MAJ et on prend les 4 premières lettre
		$pseudo = trim($_POST['pseudo']);
	}
	
	if(isset($_POST['pseudo']) && empty($_POST['pseudo']))
		$Error->set('pseudo',$tpl->assign('error_pseudo','true'));
	elseif(strlen($_POST['pseudo']) > 24)
		$Error->set('pseudo',$tpl->assign('error_pseudo_strlen','true'));
	elseif(!preg_match("#^[0-9a-zA-Z\-]+$#i",$_POST['pseudo']))
		$Error->set('pseudo',$tpl->assign('error_pseudo_preg','true'));
	elseif($user_exist >= 1)
		$Error->set('pseudo',$tpl->assign('error_pseudo_exist','true'));
	elseif(in_array($pseudo_prefix,$prefix))
		$Error->set('pseudo',$tpl->assign('error_pseudo_prefix','true'));

	$e = ($Error->ErrorPresent()) ? '0' : '1' ;
	
	echo $e ;
	
?>