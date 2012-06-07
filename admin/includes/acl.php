<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP - http://habbophp.com                                 #|
#|         Copyright © 2012 Valentin & Robin. All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

/*
@info : Sur se fichier vous pouvez dŽfinir le rank MINIMUM a avoir pour pouvoir voir ou faire une action sur l'administration
@tuto : Pour ajouter un autorisation ˆ un rank, sŽparez le deuxime paramtre par un ";" ex : define('ACL_MENU_SERVER','6,5,4');
*/

//Menu
define('ACL_MENU_SERVER','6,7,8');
define('ACL_MENU_SITE','6');
define('ACL_MENU_USERS','6');
define('ACL_MENU_SHOP','6');
define('ACL_MENU_HELP','6');
define('ACL_MENU_LOGS','6');
define('ACL_MENU_PAGE','6');
define('ACL_MENU_FORM','6');


//Serveur
define('ACL_SERVER_CONFIG','6');
define('ACL_SERVER_WORDS','6');
define('ACL_SERVER_MAINTENACE','6');

//Site
define('ACL_SITE_NEWS_POST','6');
define('ACL_SITE_NEWS_VIEW','6');
define('ACL_SITE_NEWS_DELETE','6');
define('ACL_SITE_NEWS_EDIT','6');

define('ACL_SITE_ADS','6');
define('ACL_SITE_CONFIG','6');
define('ACL_SITE_MAIL_CONFIG','6');
define('ACL_SITE_SOCIAL','6');
define('ACL_SITE_FB','6');

?>