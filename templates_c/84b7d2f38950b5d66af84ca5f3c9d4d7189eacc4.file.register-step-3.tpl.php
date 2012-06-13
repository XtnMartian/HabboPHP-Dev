<?php /* Smarty version Smarty-3.1.8, created on 2012-06-07 21:26:35
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/register-step-3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20611432624fd1006bb70242-91256454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b7d2f38950b5d66af84ca5f3c9d4d7189eacc4' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/register-step-3.tpl',
      1 => 1339059082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20611432624fd1006bb70242-91256454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'error' => 0,
    'error_security' => 0,
    'error_figure' => 0,
    'public_key' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd1006bbc55f2_90718335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1006bbc55f2_90718335')) {function content_4fd1006bbc55f2_90718335($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("lang/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<body id="client" class="background-captcha">
<div id="stepnumbers">
    <div class="step1"><?php echo $_smarty_tpl->getConfigVariable('register_bean_and_gender');?>
</div>
    <div class="step2"><?php echo $_smarty_tpl->getConfigVariable('account_details');?>
</div>
    <div class="step3focus"><?php echo $_smarty_tpl->getConfigVariable('security_code');?>
</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">
	

       <div id="error-placeholder"></div>
       <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
 <div id="error-messages-container" class="cbb">
            <div class="rounded" style="background-color: #cb2121;">
               <div id="error-title" class="error">

                    <?php if (isset($_smarty_tpl->tpl_vars['error_security']->value)){?><?php echo $_smarty_tpl->getConfigVariable('register_error_security');?>
<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['error_figure']->value)){?><?php echo $_smarty_tpl->getConfigVariable('register_error_figurey');?>
<?php }?>
                    
               </div>
            </div>
        </div>
<?php }?>
    <h2><?php echo $_smarty_tpl->getConfigVariable('Enter_hotel');?>
</h2>

        <div id="avatar-choices">
            <h3><?php echo $_smarty_tpl->getConfigVariable('Look_for_first_visit');?>
</h3>
           
            <ul id="avatars">
   			 <div class="figure"></div>
            </ul>
            <p style="clear: left;">
                <?php echo $_smarty_tpl->getConfigVariable('You_dont_like');?>

                <a href="#" id="more-avatars"><?php echo $_smarty_tpl->getConfigVariable('See_more_looks');?>
</a>
                <br/><span class="help"><?php echo $_smarty_tpl->getConfigVariable('no_panique_you_can_change_after');?>
</span>
            </p>
        </div>

       <div class="delimiter_smooth">
        <div class="flat">&nbsp;</div>
        <div class="arrow">&nbsp;</div>
        <div class="flat">&nbsp;</div>
    </div>

    <div id="inner-container">
    	<form action="" id="captcha-form" method="post">
 <script type="text/javascript"
     src="http://www.google.com/recaptcha/api/challenge?k=<?php echo $_smarty_tpl->tpl_vars['public_key']->value;?>
">
  </script>
  <noscript>
     <iframe src="http://www.google.com/recaptcha/api/noscript?k=<?php echo $_smarty_tpl->tpl_vars['public_key']->value;?>
"
         height="300" width="500" frameborder="0"></iframe><br>
     <textarea name="recaptcha_challenge_field" rows="3" cols="40">
     </textarea>
     <input type="hidden" name="recaptcha_response_field"
         value="manual_challenge">
  </noscript>
  <input type="hidden" name="hidden" value="hidden"/>
  <input type="hidden" id="avatarFigure" name="figure" value=""/>
  </form
        
    </div>

    <div id="select">
        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
" id="back-link"><?php echo $_smarty_tpl->getConfigVariable('Return');?>
</a>
        <div class="button">
            <a id="" href="#"  onclick="document.forms['captcha-form'].submit();" class="area"><?php echo $_smarty_tpl->getConfigVariable('Valider');?>
</a>
            <span class="close"></span>
        </div>
   </div>

</div>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html><?php }} ?>