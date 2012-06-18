<?php /* Smarty version Smarty-3.1.8, created on 2012-06-18 12:16:27
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/winwin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18847250414fdefffbe401a8-18982685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c98fd1c65124c60858d99c06b33043a4dd275ed7' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/winwin.tpl',
      1 => 1340013522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18847250414fdefffbe401a8-18982685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'errorPrix' => 0,
    'success' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fdefffbe6aed3_49604959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdefffbe6aed3_49604959')) {function content_4fdefffbe6aed3_49604959($_smarty_tpl) {?><div id="container">
	<div id="content" style="position: relative" class="clear fix">
    	<div>
    		<div class="content">
    			<div class="habblet-container" style="width:400px ;float:left" >
    				<div class="cbb clearfix green" >
    					<h2 class="title" >Achat de <?php echo $_smarty_tpl->tpl_vars['config']->value->winwin;?>
 WinWin</h2>
    					<div class="box-content">
    					<?php if (isset($_smarty_tpl->tpl_vars['errorPrix']->value)){?>
    							<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoEnough');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</div>
    					<?php }?>
    					<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
    							<div style="padding:10px;font-size:18px;background:#60B200;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;"><?php echo $_smarty_tpl->getConfigVariable('SuccessWinWin');?>
</div>
    					<?php }?>
	    					<p>Salut <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 !<br><br/>
		    					Sur <?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
 tu peux acheter <?php echo $_smarty_tpl->tpl_vars['config']->value->winwin;?>
 WinWin pour <?php echo $_smarty_tpl->tpl_vars['config']->value->winwinprix;?>
 !
	    					</p>
	    					<form accept="winwin.php" method="post" id="winwin">
	    					<input class="large-button large-green-button" name="submit" type="submit" value="Acheter"/>
	    					</form>    					
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</div>
</div><?php }} ?>