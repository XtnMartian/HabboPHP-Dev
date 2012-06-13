<?php /* Smarty version Smarty-3.1.8, created on 2012-06-10 11:54:02
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8730500784fd46eba759fe9-86602677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b074782415ace8cffeb7be31e55f2fcd388b17' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/staff.tpl',
      1 => 1339059080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8730500784fd46eba759fe9-86602677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'rank' => 0,
    'i' => 0,
    'user_info' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd46eba89e0d7_76768685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd46eba89e0d7_76768685')) {function content_4fd46eba89e0d7_76768685($_smarty_tpl) {?>﻿<?php  $_config = new Smarty_Internal_Config("lang/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<style>
label{
	width: 150px;
	float:left;
}
.ssh {
float:left;
width:100px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
margin-left:10px;
border-radius:5px;
text-align:center;
border:3px solid #000;
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* IE10+ */
background: linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
}
.ssh:hover {
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #f3f3f3 50%, #ededed 51%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f3f3f3), color-stop(51%,#ededed), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* IE10+ */
background: linear-gradient(top, #ffffff 0%,#f3f3f3 50%,#ededed 51%,#ffffff 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
.r7 {

}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.qtip-1.0.0-rc3.min.js"></script>
<script>
jQuery.noConflict();
</script>
<div id="container">
	<div id="content" style="position: relative" class="clear fix">
    <div>


    <div class="habblet-container " style="float:left; width: 770px;">
        <div class="cbb clearfix settings">
        
			
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom'];?>
</h2>
				 <div class="box-content">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['rank']==$_smarty_tpl->tpl_vars['i']->value['Rank']){?>
				
				<script type="text/javascript">
				function slideSwitch<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
() {
				    var $active = jQuery("#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG.active");
				
				    if ( $active.length == 0 ) $active = jQuery("#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG:last");
				
				    var $next =  $active.next().length ? $active.next()
				        : jQuery("#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG:first");
				
				    $active.addClass("last-active");
				
				    $next.addClass("active")
				   	$active.removeClass("active last-active");
				}
				
				jQuery(function(){
				setInterval( "slideSwitch<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
()", 200 );
				});
				</script>
				<style>
				#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 {
				    position:relative;
				    height:97px;
				    width:100px;
				}
				
				#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG {
				    position:absolute;
				    top:0;
				    left:0;
				    z-index:8;
				    opacity:0;
				     width:100px;
				}
				
				#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG.active {
				    z-index:10;
				    opacity:1;
					float: center;
					margin-left: 18px;
				    height:110px;
				    width:64px;
				}
				
				#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 IMG.last-active {
				    z-index:9;
				    opacity:0;
				} 
				</style>
				
				<script type="text/javascript">
				jQuery(document).ready(function() 
				{
				      jQuery("#tt<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
").qtip({
				         content: "<div style=\'text-align:center;background:<?php echo $_smarty_tpl->tpl_vars['i']->value['Couleur'];?>
;color:white;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;padding:7px;\'><b><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom'];?>
</b></div><?php echo $_smarty_tpl->tpl_vars['item']->value['motto'];?>
",
				         position: {
				      		corner: {
				       		  tooltip: "leftMiddle",
				       		  target: "rightMiddle"
				     		}
				  		 }
				      });
				});
				</script>
								
					
					 <a href="home.php?username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" style="color:black;"><div style="width:100px" class="ssh" id="tt<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onmouseover="jQuery('#one<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').hide();jQuery('#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').show();" onmouseout="jQuery('#slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').hide();jQuery('#one<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').show();">
<div id="slideshow<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="display:none;">
<img id="f1" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=0&head_direction=0&gesture=std&size=l&img_format=gif" class="active" />
<img id="f2" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=1&head_direction=1&gesture=std&size=l&img_format=gif" />
<img id="f3" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=2&head_direction=2&gesture=std&size=l&img_format=gif" />
<img id="f4" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=3&head_direction=3&gesture=std&size=l&img_format=gif" />
<img if="f5" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=4&head_direction=4&gesture=std&size=l&img_format=gif" />
<img id="f6" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=5&head_direction=5&gesture=std&size=l&img_format=gif" />
<img id="f7" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=6&head_direction=6&gesture=std&size=l&img_format=gif" />
<img id="f8" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=7&head_direction=7&gesture=std&size=l&img_format=gif" />
</div>
<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
&direction=3&head_direction=3&gesture=std&size=l&img_format=gif" id="one<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><br/>
<b style="width:60px;word-wrap: break-word;"><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</b><br /><br/></div></a>
					 
				
					<?php }?>
				<?php } ?>
					<div style="clear:both;"></div>
				 </div>
			<?php } ?>
			
			
			</div>
	</div>
</div>
</div><?php }} ?>