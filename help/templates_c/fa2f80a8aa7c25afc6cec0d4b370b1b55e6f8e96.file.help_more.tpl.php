<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 21:03:25
         compiled from "templates/help_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6348957494fcfa97d624e52-86053947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa2f80a8aa7c25afc6cec0d4b370b1b55e6f8e96' => 
    array (
      0 => 'templates/help_more.tpl',
      1 => 1337522292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6348957494fcfa97d624e52-86053947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 1,
    'content' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcfa97d62c8f6_69399271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcfa97d62c8f6_69399271')) {function content_4fcfa97d62c8f6_69399271($_smarty_tpl) {?>
<div class="content content_grey"><div class="grey_box_top"><div class="box box_top"></div></div>  <div class="content-top-right top">
    <p>
      
    </p>
  </div>

  <h2 class="forums"><a href="/help/">Consulter une question</a></h2>

  <div class="frame">
    <div class="entry nobottom" style="padding-bottom:0;">
      
      <h3 class="entry-title" style="padding-bottom: 9px;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>


      <div class="user_formatted header_section clearfix">
        <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
      </div>
      

      <table class="entry_footer header_section for_vote for_share_buttons">
        <tbody>
          <tr>
            <td>
              <div class="" id="voting_control"></div>

            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="grey_box_bottom"><div class="box box_bottom"></div></div></div><div class="box_bottom_clear">&nbsp;</div>
<div class="forum_tabs">
<div class="content content_green"><div class="green_box_top"><div class="box box_top"></div></div>

<div class="green_box_bottom"><div class="box box_bottom"></div></div></div><div class="box_bottom_clear">&nbsp;</div></div>
</div><?php }} ?>