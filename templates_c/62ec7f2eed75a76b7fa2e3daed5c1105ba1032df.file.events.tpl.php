<?php /* Smarty version Smarty-3.1.8, created on 2012-06-14 12:23:05
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2151157274fd9bb89db5880-51508480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ec7f2eed75a76b7fa2e3daed5c1105ba1032df' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/events.tpl',
      1 => 1339059081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2151157274fd9bb89db5880-51508480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'config' => 0,
    'title' => 0,
    'content' => 0,
    'comments_type' => 0,
    'success' => 0,
    'error' => 0,
    's' => 0,
    'number' => 0,
    'news_existe' => 0,
    'commentsData' => 0,
    'user' => 0,
    'news_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd9bb89e81050_23014766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd9bb89e81050_23014766')) {function content_4fd9bb89e81050_23014766($_smarty_tpl) {?>	<style>  
	input[type="text"], input[type="password"] {  
	  background-color: #F1F1F1;  
	  border: 1px solid #999999;  
	  width: 175px;  
	  padding: 5px;  
	  font-family: verdana;  
	  font-size: 10px;  
	  color: #666666;  
	}  
	input[type="submit"] {  
	  background-color: #F1F1F1;  
	  border: 1px solid #999999;  
	  padding: 5px;  
	  font-family: verdana;  
	  font-size: 10px;  
	  color: #666666;  
	}  
	textarea {  
	  background-color: #F1F1F1;  
	  border: 1px solid #999999;  
	  padding: 5px;  
	  width: 517px;  
	  height: 70px;  
	  font-family: verdana;  
	  font-size: 10px;  
	  color: #666666;  
	}  
	select {  
	  background-color: #F1F1F1;  
	  border: 1px solid #999999;  
	  padding: 5px;  
	  font-family: verdana;  
	  font-size: 10px;  
	  color: #666666;  
	}  
	</style> 
	
	<div id="container">
	<div id="content" style="position: relative" class="clear fix">
    <div>

<div class="content">
<div class="habblet-container" style="float:left; width:210px;">
<div class="cbb settings">

<h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('Events');?>
</h2>
<div class="box-content">
            <div id="settingsNavigation">
            <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
               	<li style="margin-top:5px"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/events.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['title'];?>
</a></li>
            <?php endfor; endif; ?>
            </ul>
            </div>
</div></div>
</div>
    <div class="habblet-container " style="float:left; width: 560px;">
        <div class="cbb clearfix">

            <h2 class="title" ><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
            <div class="box-content">
            
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['comments_type']->value=='normal'){?>

<div class="cbb clearfix green">
	<h2 class="title" id="post">Poster un commentaire</h2>
        <div class="box-content">
      	<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
			<font color="green"><b>Commentaire envoy&eacute; !</b></font><br><br />
		<?php }?> 
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
			<font color="red"><b>Veuillez attendre 1 minute avant de reposter !</b></font><br />
		<?php }?>
       
	<form action="#post" method="post">  
        <center>
       	 <textarea name="comment" maxlength="500" style="width: 505px;"></textarea>
        </center><br /><br />
        	<input type="submit" name="post_comment" value="Envoyer !" style="float: right; position: relative; margin-top: -18px;"/>  
        </form> 
	</div>
</div>
	        
	<div class="cbb clearfix blue">
	<h2 class="title" >Commentaire<?php if (isset($_smarty_tpl->tpl_vars['s']->value)){?><?php echo $_smarty_tpl->tpl_vars['s']->value;?>
<?php }?>(<?php if (isset($_smarty_tpl->tpl_vars['number']->value)){?><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
<?php }?>)</h2>
	<div class="box-content">
		<table width="100%">
		<?php if ($_smarty_tpl->tpl_vars['news_existe']->value=='true'){?>
		<?php if (isset($_smarty_tpl->tpl_vars['commentsData']->value)){?>
		 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['commentsData']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
		 <tr>  
			<td width="90px" valign="top"> <br/> 
				<div style="float:left"><img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['commentsData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['look'];?>
&size=s&direction=2&head_direction=2&gesture=sml"></div>  
						</td>  
							<td width="427px" valign="top">  
							  <u>Commentaire: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</u>
							 <?php if ($_smarty_tpl->tpl_vars['user']->value->rank>'4'){?>
							  <a href="events.php?id=<?php echo $_smarty_tpl->tpl_vars['news_id']->value;?>
&amp;delete=<?php echo $_smarty_tpl->tpl_vars['commentsData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['id'];?>
#post" style="float: right;" title="Supprimer"><font color="red"><b>X</b></font></a>
							 <?php }?> 
							  <br /><br /><div style="width: 422px; word-wrap: break-word;"><?php echo $_smarty_tpl->tpl_vars['commentsData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['comment'];?>
</div>
							</td>  
						  </tr>  
				  <tr>  
							<td width="0px" valign="top">  
							</td>  
					<td width="70px" align="right">  
					  <i style="margin-top: -20px; position: relative; ">Post&eacute; par <strong><a href="home.php?username=<?php echo $_smarty_tpl->tpl_vars['commentsData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['commentsData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['username'];?>
</a></strong></i><hr color="#FFFFFF" style="border-bottom: 1px dashed #666;" />
					</td>  
				  </tr>
				 <?php endfor; endif; ?> 
				<?php }?>
			<?php }else{ ?>
			<div class="cbb clearfix">
				<h2 class="title" >Commentaires</h2>
     			   <div class="box-content">
						Les commentaires sont d&eacute;sactiv&eacute;s pour cet articles !
					</div>
			</div>
		<?php }?>
		</table>
	</div>


<?php }?>

<?php if ($_smarty_tpl->tpl_vars['comments_type']->value=='facebook'){?>
<div class="habblet-container " style="float:left; width: 560px;">
	<div class="cbb clearfix">
    	<h2 class="title" >Commentaires</h2>
            <div class="box-content">
            <br /><br />
            	<div style="border-top:1px solid #ddd;"></div><br /><div id="fb-root"></div>
					<script>(function(d, s, id) {
				 	 var js, fjs = d.getElementsByTagName(s)[0];
				 	 if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
				 	 js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=110031495788439";
				 	 fjs.parentNode.insertBefore(js, fjs);
					}(document, "script", "facebook-jssdk"));</script>
					<div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/events.php?id=<?php echo $_smarty_tpl->tpl_vars['news_id']->value;?>
" data-num-posts="10" data-width="515">
					</div>
			</div>
	</div>
</div>
<?php }?>


</div>
</div>
</div><?php }} ?>