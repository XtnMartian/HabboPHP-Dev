<?php /* Smarty version Smarty-3.1.8, created on 2012-04-22 06:32:58
         compiled from ".\templates\help_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215474f9389fa9c1d79-70741702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922d344e986b17d7cd85e58d395bde11401f9310' => 
    array (
      0 => '.\\templates\\help_more.tpl',
      1 => 1335055443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215474f9389fa9c1d79-70741702',
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
  'unifunc' => 'content_4f9389fa9d2487_88497350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9389fa9d2487_88497350')) {function content_4f9389fa9d2487_88497350($_smarty_tpl) {?>
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