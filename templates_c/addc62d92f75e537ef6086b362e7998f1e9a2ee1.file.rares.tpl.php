<?php /* Smarty version Smarty-3.1.8, created on 2012-06-14 12:23:25
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/rares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14693253784fd9bb9dbc7e41-56790804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addc62d92f75e537ef6086b362e7998f1e9a2ee1' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/rares.tpl',
      1 => 1339190964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14693253784fd9bb9dbc7e41-56790804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'Rares' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd9bb9dc15265_72669650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd9bb9dc15265_72669650')) {function content_4fd9bb9dc15265_72669650($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('RaresShop');?>
</h2>
            <div class="box-content">
            <div id="valideok" style="padding:10px;font-size:18px;display:none;opacity:0;background:#60b200;color:white;text-shadow:0 1px 0 #407700;-moz-border-radius:10px;-webkit-border-radius:10px;display:none;opacity:0;border-radius:10px;margin:20px;"><?php echo $_smarty_tpl->getConfigVariable('Success_new_badge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="error_existe"><?php echo $_smarty_tpl->getConfigVariable('YouHaveBadge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="not_enought_money"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoEnough');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</div>
                
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Rares']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<a href="javascript:void(0);" style="text-decoration:none;" onclick="addBadgeVerif('<?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
',<?php echo $_smarty_tpl->tpl_vars['v']->value['prix'];?>
)">
				<div style="width:auto;padding:10px 7px;" class="ssh">
					<center><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" ></img>
					<br>
					<span style="font-size:15px;color:#000;"><?php echo $_smarty_tpl->tpl_vars['v']->value['prix'];?>
<br /><span style="font-size:10px;"><?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</span></span></a></center>
				</div>
			<?php } ?>
		</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
function addBadgeVerif(rare,price){
	jQuery('#verif').slideDown().animate({opacity:1});
	jQuery('#vbi').html(rare);
	jQuery('#pricee').html(price);
	jQuery('#confirmbb').attr('onclick',"addRares('"+rare+"')");
}
function addRares(rare){
	var token = jQuery('#token').val();
	if(rare == ""){return false}
	jQuery.post('ajax/addRare.php', { rare:rare,token:token },function(data){
		if(data == "12"){
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