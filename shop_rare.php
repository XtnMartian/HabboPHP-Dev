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

if(empty($config->paypalemail)) $tpl->assign('paypalD','style="display:none;"');
else $tpl->assign('paypalD','');

if(empty($config->allopassauth)) $tpl->assign('allopassD','style="display:none;"');
else $tpl->assign('allopassD','');

if(empty($config->starpassacc)) $tpl->assign('starpassD','style="display:none;"');
else $tpl->assign('starpassD','');

$tpl->display('header.tpl');
$tpl->display('shop-rare.tpl');
$tpl->display('footer.tpl');
