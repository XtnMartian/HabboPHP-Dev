<?php /* Smarty version Smarty-3.1.8, created on 2012-05-27 23:19:34
         compiled from "./templates/help_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19673461434fc29a66307352-30352445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7d7507900c6d964e762cd23d65e7643b6f98d8' => 
    array (
      0 => './templates/help_search.tpl',
      1 => 1337522292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19673461434fc29a66307352-30352445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_rows' => 0,
    'data' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc29a66339383_67005567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc29a66339383_67005567')) {function content_4fc29a66339383_67005567($_smarty_tpl) {?>
<div class="content content_grey"><div class="grey_box_top"><div class="box box_top"></div></div>  <div class="content-top-right top">
    <p>
      
    </p>
  </div>

  <h2 class="forums"><a href="/help/"><?php echo $_smarty_tpl->getConfigVariable('logout');?>
 ( <?php echo $_smarty_tpl->tpl_vars['total_rows']->value;?>
 réponse<?php if ($_smarty_tpl->tpl_vars['total_rows']->value>1){?>s<?php }?>  )</a></h2>
<?php if ($_smarty_tpl->tpl_vars['total_rows']->value==0){?>
Pas de résultat
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
  <div class="frame">
    <div class="entry nobottom" style="padding-bottom:0;">
      
      <h3 class="entry-title" style="padding-bottom: 9px;"> <a href="more.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></h3>


      <div class="user_formatted header_section clearfix">
        <p><?php echo $_smarty_tpl->tpl_vars['i']->value['articles'];?>
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
<?php } ?>
<?php }?>
<div class="grey_box_bottom"><div class="box box_bottom"></div></div></div><div class="box_bottom_clear">&nbsp;</div>
<div class="forum_tabs">
<div class="content content_green"><div class="green_box_top"><div class="box box_top"></div></div>

<div class="green_box_bottom"><div class="box box_bottom"></div></div></div><div class="box_bottom_clear">&nbsp;</div></div>
</div><?php }} ?>