<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP - http://habbophp.com                                 #|
#|         Copyright © 2012 Valentin & Robin. All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

require 'init.php';

//print_r($_SESSION);

//echo intval(00000011,10);

$dataNews = $db->query('SELECT * FROM habbophp_news ORDER BY id DESC LIMIT 0,'.$config->slideNews.'',true,true);
$user->checkVIP();
$tpl->assign('vip',$user->getSatutsVIP());	
$tpl->assign('news',$dataNews);
$tpl->assign('groups','index');
$tpl->assign('selected','selected');
$tpl->display('header.tpl');
$tpl->display('me.tpl');
$tpl->display('footer.tpl');

?>