<?php /* Smarty version Smarty-3.1.8, created on 2012-06-14 00:52:40
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/bots.tpl" */ ?>
<?php /*%%SmartyHeaderCode:448848734fd919b84038a4-86689524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc8f6e3a3ba35e3c0f69124ca0f4bcd967b1b0f' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/bots.tpl',
      1 => 1339194253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448848734fd919b84038a4-86689524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'roomsEmpty' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd919b84821a9_30164098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd919b84821a9_30164098')) {function content_4fd919b84821a9_30164098($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/vip.js"></script>
<script>
	jQuery.noConflict();
</script>
<div id="container">
	<div id="content" style="position: relative" class="clear fix">
    <div>
	
	<div class="habblet-container " id="verif" style="opacity:0;display:none;float:left; width: 770px;">
        <div class="cbb clearfix green">
            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('ConfirmBuy');?>
</h2>
            <div class="box-content">
            	<span style="font-size:14px;">Je confirme l'achat pour <span id="pricee"></span></span> <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>

            	<a href="javascript:void(0);" class="new-button red-button" onclick="jQuery('#verif').animate({opacity:0}).slideUp();"><b>Annuler</b><i></i></a>
            	<a href="javascript:void(0);" id="confirmbb" class="new-button green-button"><b>Je confirme mon achat !</b><i></i></a>
            </div>
        </div>
    </div>
	
    <div class="habblet-container " style="float:left; width: 770px;">
        <div class="cbb clearfix settings">
            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('BadgesShop');?>
</h2>
            <div class="box-content">
            <div id="valideok" style="padding:10px;font-size:18px;display:none;opacity:0;background:#60b200;color:white;text-shadow:0 1px 0 #407700;-moz-border-radius:10px;-webkit-border-radius:10px;display:none;opacity:0;border-radius:10px;margin:20px;"><?php echo $_smarty_tpl->getConfigVariable('Success_new_badge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="error_existe"><?php echo $_smarty_tpl->getConfigVariable('YouHaveBadge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="not_enought_money"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoEnough');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</div>
           <?php if (isset($_smarty_tpl->tpl_vars['roomsEmpty']->value)){?>
           	<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoRooms');?>
 </div>
           	<?php }else{ ?>
           	<h3>Achète un bots</h3>
<div style="float:left">
<p>
<label class="alignLabel">Nom du bot :</label>
<input   type="text" name="motto" size="32" maxlength="32" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value->motto)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->motto;?>
<?php }?>" id="avatar motto" />
</p>
<p>
<label class="alignLabel">Mission du bot :</label>
<input   type="text" name="email" size="32" maxlength="32" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value->mail)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
<?php }?>" id="" />
</p>
<p>
<label class="alignLabel">Phrase du bot :</label>
<input   type="text" name="email" size="32" maxlength="32" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value->mail)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
<?php }?>" id="" />
</p>
<p>
<label class="alignLabel">Appart du bot :</label>
<select name="roomid">
	<option value="">OK</option>
</select>
</p>
</div>
<div style="float:right">
	 <td class='tablerow2' align='center'><img src="http://www.habbo.fr/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['user']->value->look;?>
&action=std&gesture=sml&direction=3&head_direction=3&size=b&img_format=gif"></td>
</div>
           <?php }?>          
		</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
function addBadgeVerif(badge,price){
	jQuery('#verif').slideDown().animate({opacity:1});
	jQuery('#vbi').html(badge);
	jQuery('#pricee').html(price);
	jQuery('#confirmbb').attr('onclick',"addBadge('"+badge+"')");
}
function addBadge(badge){
	var token = jQuery('#token').val();
	if(badge == ""){return false}
	jQuery.post('ajax/addBadge.php', { badge:badge,token:token },function(data){
		if(data == "11"){
			jQuery('#valideok').slideDown('fast',function(){ jQuery('#valideok').animate({opacity:1}); });
			setTimeout("jQuery('#valideok').animate({opacity:0}).slideUp('fast');",2000);
		}
		if(data == "existe"){
			jQuery('.error_existe').slideDown('fast',function(){ jQuery('.error_existe').animate({opacity:1}); });
			setTimeout("jQuery('.error_existe').animate({opacity:0},'fast',function(){jQuery('.error_existe').slideUp('fast');});",2000);
		}
		if(data == "nomoney"){
			jQuery('.not_enought_money').slideDown('fast',function(){ jQuery('.not_enought_money').animate({opacity:1}); });
			setTimeout("jQuery('.not_enought_money').animate({opacity:0},'fast',function(){jQuery('.not_enought_money').slideUp('fast');});",2000);
		}
	});
}
</script>
<?php }} ?>