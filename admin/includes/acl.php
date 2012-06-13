<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP - http://habbophp.com                                 #|
#|         Copyright © 2012 Valentin & Robin. All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

/*
@tuto : Pour ajouter un autorisation ˆ un rank, sŽparez le deuxime paramtre par un ";" ex : define('ACL_MENU_SERVER','7,5,4');
@warning : Ne pas mettre deux fois le mme chiffre : 7;7
*/

//Global
define('ACL_GLOBAL_ADMIN','7;6;8'); //Les ranks qui ont le droit d'accŽder ˆ l'administration

//Index
define('ACL_INDEX_STATS','7;8');
define('ACL_INDEX_NOTES','7');


//Menu
define('ACL_MENU_SERVER','7');
define('ACL_MENU_SITE','7');
define('ACL_MENU_USERS','7');
define('ACL_MENU_SHOP','7');
define('ACL_MENU_HELP','7');
define('ACL_MENU_LOGS','7');
define('ACL_MENU_PAGE','7');
define('ACL_MENU_FORM','7');


//Serveur
define('ACL_SERVER_CONFIG','7');
define('ACL_SERVER_WORDS','7');
define('ACL_SERVER_MAINTENACE','7');

//Site
define('ACL_SITE_NEWS','7');
define('ACL_SITE_NEWS_POST','7');
define('ACL_SITE_NEWS_VIEW','7');

define('ACL_SITE_ADS','7');
define('ACL_SITE_CONFIG','7');
define('ACL_SITE_CONFIG_MAIL','7');
define('ACL_SITE_SOCIAL','7');
define('ACL_SITE_FB','7;7');

//Users
define('ACL_USERS_VIEW','7');
define('ACL_USERS_BAN','7');

//Shop
define('ACL_SHOP_STATS','7');
define('ACL_SHOP_VOUCHER','7');
define('ACL_SHOP_CONFIG_MONEY','7');
define('ACL_SHOP_BADGES','7');
define('ACL_SHOP_RARES','7;6');
define('ACL_SHOP_PAIEMENT','7');
define('ACL_SHOP_PAIEMENT_LOGS','7');

//Support
define('ACL_SUPPORT_ARTICLES','7');
define('ACL_SUPPORT_CATEGORIES','7');

//Logs
define('ACL_LOGS_VIEW','7');

//Pages
define('ACL_PAGES_ADD','7');
define('ACL_PAGES_VIEW','7');


//Form
define('ACL_FORM_MANAGE','7;7');

?>