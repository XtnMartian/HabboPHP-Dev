<?php /* Smarty version Smarty-3.1.8, created on 2012-06-14 13:33:11
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19527409734fd9cbf782da46-61014040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54c6a4433ab20270ae3a43ecc7d0c8913ca75add' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/footer.tpl',
      1 => 1339059079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19527409734fd9cbf782da46-61014040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'url' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd9cbf78e6202_92079607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd9cbf78e6202_92079607')) {function content_4fd9cbf78e6202_92079607($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("lang/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div id="column3" class="column">
		

						
					
				</div>
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				<?php if ($_smarty_tpl->tpl_vars['url']->value=='home.php'||$_smarty_tpl->tpl_vars['url']->value=='vip.php'||$_smarty_tpl->tpl_vars['url']->value=='shop.php'||$_smarty_tpl->tpl_vars['url']->value=='community.php'){?>
				<div class="habblet-container "></div>
				<?php }else{ ?>
				<div class="habblet-container">		
	
						
					<div style="float:right"><?php if ($_smarty_tpl->tpl_vars['url']->value=='me.php'){?>&nbsp;&nbsp;<?php }?><?php echo $_smarty_tpl->tpl_vars['config']->value->ads1X0x600;?>
</div>
						
					
				</div><?php }?>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
		 

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div class="habblet-container "><br /><?php echo $_smarty_tpl->tpl_vars['config']->value->ads728x90;?>
</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
    </div>
   
<div id="footer">
	<?php echo $_smarty_tpl->tpl_vars['config']->value->adsSlide;?>

	<?php echo $_smarty_tpl->tpl_vars['config']->value->adsPopup;?>

	<p class="footer-links"><a href="https://help.habbo.se" target="_new"><?php echo $_smarty_tpl->getConfigVariable('Help');?>
</a> | <a href="http://habbophp.com" title="HabboPHP" target="_new">HabboPHP</a> | <a href="https://help.habbo.se/home" target="_new">FAQ</a></p>
	<p class="copyright">Habbobeta est un projet indépendant, à but non lucratif &copy; 2010-2012.<br>
                         Habbo est une marque déposée de Sulake Corporation. Tous droits réservés à leur propriétaire respectif(s).<br>
                         Nous ne sommes pas approuvé, affiliés, ou offertes par Sulake Corporation LTD.<br>
                         Powered by HabboPHP - Valentin & Robin.</p>
</div><!--end of footer-->

</div>

</div> 
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Roundeverything(); }</script>
        


</body>
</html><?php }} ?>