<?php /* Smarty version Smarty-3.1.8, created on 2012-06-10 11:54:17
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/profile-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20333635284fd46ec9e5d7c8-45124435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d957cbf118a007685ec26d749cc27eb58962ce0' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/profile-password.tpl',
      1 => 1339059075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20333635284fd46ec9e5d7c8-45124435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'config' => 0,
    'error' => 0,
    'error_last_password' => 0,
    'profile_error_last_password_correct' => 0,
    'profile_error_new_password_empty' => 0,
    'profile_error_new_password_strlen' => 0,
    'profile_error_new_passwordConfirm_empty' => 0,
    'profile_error_not_egale' => 0,
    'success' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd46ec9efe180_17649167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd46ec9efe180_17649167')) {function content_4fd46ec9efe180_17649167($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("lang/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<style>
label{
	width: 150px;
	float:left;
}
</style>
<div id="container">
	<div id="content" style="position: relative" class="clear fix">
    <div>

<div class="content">
<div class="habblet-container" style="float:left; width:210px;">
<div class="cbb settings">

<h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('AccountSettings');?>
</h2>
<div class="box-content">
            <div id="settingsNavigation">
            <ul>

                <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/profile.php?page=index"><?php echo $_smarty_tpl->getConfigVariable('Motto');?>
</a>
                </li>


                <li class="selected"><?php echo $_smarty_tpl->getConfigVariable('password');?>

                </li>
      

                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/friendsmanagement.php"><?php echo $_smarty_tpl->getConfigVariable('FriendManagement');?>
</a>
                </li>

            </ul>
            </div>
</div></div>
</div>
    <div class="habblet-container " style="float:left; width: 560px;">
        <div class="cbb clearfix settings">

            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('ChangePassword');?>
</h2>
            <div class="box-content">
            


<form action="" method="post" id="profileForm">
<input type="hidden" name="tab" value="true" />

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
<div id="error-messages-container" class="">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="">
                    <?php if (isset($_smarty_tpl->tpl_vars['error_last_password']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_last_password');?>
<br/><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['profile_error_last_password_correct']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_last_password_correct');?>
<br/><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['profile_error_new_password_empty']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_new_password_empty');?>
<br/><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['profile_error_new_password_strlen']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_new_password_strlen');?>
<br/><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['profile_error_new_passwordConfirm_empty']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_new_passwordConfirm_empty');?>
<br/><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['profile_error_not_egale']->value)){?><?php echo $_smarty_tpl->getConfigVariable('profile_error_not_egale');?>
<?php }?>
                </div>
            </div>
        </div>
<br/>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
<div id="valideok" style="padding:10px;font-size:18px;display:block;opacity:1;background:#60b200;color:white;text-shadow:0 1px 0 #407700;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;"><?php echo $_smarty_tpl->getConfigVariable('profile_update_success');?>
</div>
 <?php }?>
<p>
<b><?php echo $_smarty_tpl->getConfigVariable('CompleteThisToChangePassword');?>
</b>
</p>
<?php if ($_smarty_tpl->tpl_vars['prefix']->value!='FB'){?>
<p>
<label><?php echo $_smarty_tpl->getConfigVariable('OldPassword');?>
:</label>
<input   type="password" name="lastPassword" size="32" maxlength="32"  />
</p>
<?php }?>
<p>
<label><?php echo $_smarty_tpl->getConfigVariable('NewPassword');?>
:</label>
<input   type="password" name="newPassword" size="32" maxlength="32" />
</p>
<p>
<label><?php echo $_smarty_tpl->getConfigVariable('ConfirmNewPassword');?>
:</label>
<input   type="password" name="newPasswordConfirm" size="32" maxlength="32"   />
</p>

<div class="settings-buttons">
<a href="#" class="new-button" style="display: none" onclick="document.forms['profileForm'].submit();" id="profileForm-submit"><b><?php echo $_smarty_tpl->getConfigVariable('Save');?>
</b><i></i></a>
<noscript><input type="submit" value="Enregistrer" name="save" class="submit" /></noscript>
</div>

</form>

<script type="text/javascript">
$("profileForm-submit").show();
</script>

</div>
</div>
</div>
</div>
</div><?php }} ?>