<?php
	@session_start();
	define('AUTH','FALSE');
	require '../../init.php';
	
	
	$Error = new Error();
	
	$req = $db->query('SELECT username FROM users WHERE username = "'.safe($_POST['pseudo'],'SQL').'" LIMIT 1');
	$user_exist = $db->NumRowsC();
	
	$req = $db->query('SELECT mail FROM users WHERE mail = "'.safe($_POST['email'],'SQL').'" LIMIT 1');
	$mail_exist = $db->NumRowsC();
	
	$prefix = array('ADM-','MOD-','M0D-','SOS-','S0S-','XXX-','OWN-','0WN-');
	
	$Syntaxe_email='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	
	if(isset($_POST['pseudo'])){
		$pseudo_prefix = strtoupper(substr($_POST['pseudo'],0,4)); //Conversion du mot en MAJ et on prend les 4 premières lettre
		$pseudo = trim($_POST['pseudo']);
	}
	
		
	if(isset($_POST['pseudo']) && empty($_POST['pseudo']))
		$Error->set('pseudo1',$tpl->assign('error_pseudo','true'));
	elseif(strlen($_POST['pseudo']) > 24)
		$Error->set('pseudo2',$tpl->assign('error_pseudo_strlen','true'));
	elseif(!preg_match("#^[0-9a-zA-Z\-]+$#i",$_POST['pseudo']))
		$Error->set('pseudo3',$tpl->assign('error_pseudo_preg','true'));
	elseif($user_exist >= 1)
		$Error->set('pseudo4',$tpl->assign('error_pseudo_exist','true'));
	elseif(in_array($pseudo_prefix,$prefix))
		$Error->set('pseudo5',$tpl->assign('error_pseudo_prefix','true'));
	
		
	if(isset($_POST['email']) && empty($_POST['email']))
		$Error->set('email',$tpl->assign('error_email','true'));
	elseif(!preg_match($Syntaxe_email,$_POST['email']))
		$Error->set('email',$tpl->assign('error_email_syntaxe','true'));
	elseif($mail_exist >= 1)
		$Error->set('email',$tpl->assign('error_email_exist','true'));
		
	if(isset($_POST['password']) && empty($_POST['password']))
		$Error->set('password',$tpl->assign('error_password','true'));
	elseif(strlen($_POST['password']) <= 5)
		$Error->set('password',$tpl->assign('error_strlen','true'));
		
	if(isset($_POST['password2']) && empty($_POST['password2']))
		$Error->set('password2',$tpl->assign('error_password2','true'));
		
	if(trim($_POST['password']) != trim($_POST['password2']))
		$Error->set('password',$tpl->assign('error_password_different','true'));
	
				
	if($Error->ErrorPresent()){
		$tpl->assign('error','true');
		redirection($config->url_site.'/index_v2.php?error');
	}
			
	else{
	
	$password = hashMe($_SESSION['Register']['password']);
	
	$_SESSION['Register'] = $_POST ;	

	$UserDB = new Db('users');
		$data = array(
			'username' => 	safe($_SESSION['Register']['pseudo'],'HTML'),
			'password' =>	safe($password),
			'mail'     => 	safe($_SESSION['Register']['email'],'HTML'),
			'rank'     => 	safe($config->rank_default,'SQL'),
			'gender'   => 	'M',
			'motto'    =>	safe($config->motto_default,'SQL'),
			'credits'  => 	safe($config->credit_default,'SQL'),
			'activity_points' => safe($config->activitypoints_default,'SQL'),
			'account_created' => FullDate('hc'),
			'ip_reg'  =>	safe($_SERVER['REMOTE_ADDR'],'HTML'),
			'last_online' => FullDate('full')
			
		);
		
		$UserDB->save($data);	;
		$uid = $db->getLastID();
		$salt = hashMe(uniqid()) ;
		$Auth->setSaltUsers($uid);

		
		$d = date('Y-m-d') ;
		$req = $db->query('UPDATE habbophp_stats SET inscrits=inscrits+1 WHERE date="'.safe($d,'SQL').'"');	
			if($req){

				print_r($_SESSION);

			echo $Auth->connexion(array('username' => $_SESSION['Register']['pseudo'] ,'password' => $_SESSION['Register']['password']));
			
				session_destroy();
				session_start();
				if($Auth->connexion(array('username' => $username,'password' => $password)))
					redirection($config->url_site.'/me.php');
			}
	}
?>