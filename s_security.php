<?php
require'init.php';
$config->checkUpdatePath();
$tpl->assign('css',$config->path_habbo);
$tpl->assign('groups','respect');

$tpl->display('header.tpl');

$tpl->assign('groups','community');
$tpl->display('s_security.tpl');	

$tpl->display('footer.tpl');

?>