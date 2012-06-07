<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$config->name}: {$user->username} </title>

{$config->checkMaintenance()}

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

<meta name="generator" content="HabboPHP"/>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/common.css" type="text/css" />
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/fr.css" type="text/css" />

<!--Start Javascript-->
<script src="{$config->url_site}/web-gallery/js/libs2.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/visual.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/libs.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/common.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/fullcontent.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/lightweightmepage.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/moredata.js" type="text/javascript"></script>
<script src="{$config->url_site}/web-gallery/js/windows.js" type="text/javascript"></script>
<!--End Javascript-->

<!--Start Stylesheet-->
<link href="{$config->url_site}/web-gallery/styles/other.css" type="text/css" rel="stylesheet" />
<link href="{$config->url_site}/web-gallery/styles/backgrounds.css" type="text/css" rel="stylesheet" />
<link href="{$config->url_site}/web-gallery/styles/stickers.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/lightwindow.css" type="text/css" />
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/group.css" type="text/css" />
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/custom.css" type="text/css" />
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/cbs2credits.css" type="text/css"/>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/newcredits.css" type="text/css"/>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/lightweightmepage.css" type="text/css" />
<!--End Stylesheet-->


<style type="text/css">

    #playground, #playground-outer {
	    width: 927px;
	    height: 1360px;
    }
    #column1 {
    	width: auto;
    }

</style>

<!--[if IE 8]>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="{$config->url_site}/web-gallery/styles/ie6.css" type="text/css" />
<script src="{$config->url_site}/web-gallery/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="HABBOPHP 1.0" />
</head>
<body id="view mode" class="impor body_classic_width">
<div id="overlay"></div>
<div id="updated" style="position:fixed;width:150px;text-align:center;left:50%;right:50%;margin-left:-75px;font-size:19px;padding:5px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;text-shadow:0 1px 0 #fff;background:#feffba;color:#333;display:none;z-index:9999999;">Mis &agrave; jour</div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="{$config->url_site}/me.php"></a></h1>
<div id="subnavi" class="narrow">
    <div id="subnavi-search">
        <div id="subnavi-search-upper" >
        <ul id="subnavi-search-links" >
                <li><a href="{$config->url_site}/help" target="habbohelp" >{#HelpMe#}</a></li>
                         <li>
                <form action="{$config->url_site}/logout.php" method="post">
                    <button type="submit" id="sign out" class="link"><span>{#Logout#}</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="client.php" class="new-button green-button" target="5582b925d39a3b57fc3e178ad726bd2798015099" onclick="HabboClient.openOrFocus(this); return false;"><b>{#Enterin#} {$config->name}</b><i></i></a>
    </div>
</div>
<ul id="navi">
        <li class="metab {if $groups eq 'index'}selected{/if}">
		<a   href="{$config->url_site}/me.php">
			{$user->username} {if isset($smarty.session.FB)}( <i style="background-image: url({$config->url_site}/web-gallery/images/icon_facebook_connect_small.png)"> )</i>{/if}
		</a>
<span></span>
</li>
		<li class="{if $groups eq 'community'}selected{/if}">
			<a href="{$config->url_site}/community.php">{#Community#}</a>
			<span></span>
		</li>
		<li class="{if $groups eq 'shop'}selected{/if}">
			<a href="{$config->url_site}/shop.php">{#Shop#} ( {$user->jetons} {$config->moneyname})</a>
			<span></span>
		</li>
		<li class="{if $groups eq 'respect'}selected{/if}">
			<a href="{$config->url_site}/s_attitude.php">{#Securite#}</a>
			<span></span>
		</li>
		{if $user->rank eq 6 or $user->rank eq 7 or $user->rank eq 8 }<li id="tab-register-now" class="">
			<a href="{$config->url_site}/admin">Housekeeping</a>
			<span></span>{/if}
		</li>
</ul>

        <div id="habbos-online"><div class="rounded"><span style="color:#000;">{if isset($config->users_online)}{$config->users_online}{/if}<br/>{#online#}</span></div></div>
        
	</div>
</div>
<div id="content-container">
<div id="navi2-container" class="pngbg">
{if $groups eq 'index'}
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="{if $url eq 'me.php'}selected{/if}">
				<a href="{$config->url_site}/me.php">{#Home#}</a>
			</li>
    		<li class="{if $url eq 'home.php'}selected{/if}">
				<a href="{$config->url_site}/home.php?username={$user->username}">{#MyHomePage#}</a>
    		</li>
    		<li class="{if $url eq 'profile.php'}selected{/if} last">
				<a href="{$config->url_site}/profile.php?page=index">{#MyPreferences#}</a>
    		</li>
	</ul>
    </div>
 {/if}
 {if $groups eq 'community'}
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="{if $url eq 'community.php'}selected{/if}">
				<a href="{$config->url_site}/community.php">{#Community#}</a>
			</li>
    		<li class="{if $url eq 'events.php'}selected{/if}">
				<a href="{$config->url_site}/events.php">{#Events#}</a>
    		</li>
    		<li class="{if $url eq 'staff.php'}selected{/if} last">
				<a href="{$config->url_site}/staff.php">Staff</a>
    		</li>
	</ul>
    </div>
 {/if}
 {if $groups eq 'shop'}
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="{if $url eq 'shop.php'}selected{/if}">
				<a href="{$config->url_site}/shop.php">{#Buy#} {$config->moneyname}</a>
    		</li>
			<li class="{if $url eq 'vip.php'}selected{/if}">
				<a href="{$config->url_site}/vip.php">VIP</a>
			</li>
    		<li class="{if $url eq 'badges.php'}selected{/if} last">
    			<a href="{$config->url_site}/badges.php">{#BuyBadges#}</a>
    		</li>
	</ul>
    </div>
 {/if}
  {if $groups eq 'respect'}
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="{if $url eq 's_attitude.php'}selected{/if}">
				<a href="{$config->url_site}/s_attitude.php">{#HabboAttitude#}</a>
			</li>
			<li class="{if $url eq 's_security.php'}selected{/if}">
				<a href="{$config->url_site}/s_security.php">{#ConseilsSecurity#}</a>
			</li>
			<li class="{if $url eq 's_cs.php'}selected{/if}">
				<a href="{$config->url_site}/s_cs.php">{#CentreSecurity#}</a>
			</li>
			<li class="{if $url eq 's_repport.php'}selected{/if}">
				<a href="{$config->url_site}/s_repport.php">{#Signalerdesabus#}</a>
			</li>
	</ul>
    </div>
 {/if}
</div>
<!--Ne pas supprimer se input -->
<input type="hidden" value="{if isset($token)}{$token}{/if}" id="token"/>