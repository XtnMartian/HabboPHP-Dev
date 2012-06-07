<?php
require 'init.php' ;
$config->checkUpdatePath();
$tpl->assign('css',$config->path_habbo);
$tpl->assign('groups','respect');
$tpl->display('header.tpl');
$tpl->display('s_attitude.tpl');	
$tpl->display('footer.tpl');