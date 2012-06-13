<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP - http://habbophp.com                                 #|
#|         Copyright © 2012 Valentin & Robin. All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

require'init.php';


$tpl->assign('jetons',$user->getJetons());
$tpl->assign('groups','shop');
$tpl->assign('token',Tools::generate_token());
if(!$user->haveRooms()){
	
}
else
	$tpl->assign('roomsEmpty','true');

$tpl->display('header.tpl');
$tpl->display('bots.tpl');
$tpl->display('footer.tpl');
