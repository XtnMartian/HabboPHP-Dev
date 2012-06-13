<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 00:27:51
         compiled from ".\templates\help_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201294f9485e7e03bd8-16159284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7acb78fc68513264a95626eb536d619496621ce9' => 
    array (
      0 => '.\\templates\\help_index.tpl',
      1 => 1335055443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201294f9485e7e03bd8-16159284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totallast' => 1,
    'last' => 1,
    'i' => 1,
    'category' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9485e7e3d119_60097035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9485e7e3d119_60097035')) {function content_4f9485e7e3d119_60097035($_smarty_tpl) {?>
  <div id="solution_suggestion">
<div class="content content_green"><div class="green_box_top"><div class="box box_top"></div></div>    <h2 id="search_box">FAQ</h2>
    <form id="suggest_form" action="search.php">
      <input id="suggestions_query" name="suggestions_query" type="text">
      <input class="button search primary" id="suggestion_submit"  type="submit" value="Recherche">
   
    </form>

      <div id="topic_search_loading"></div>
<div id="topic_search" style="display:none;">
  <div class="frame" style="margin-top: 15px; padding-bottom: 20px;">
    <div id="topic_search_result"></div>


    <h2 style="margin-top: 5px; padding-top: 12px;">Ce n'est pas ce que vous cherchez ?</h2>



    <div class="deflect tickets" id="ticket-deflect">
      <h3>Contactez notre équipe :</h3>
      <ul><li><a href="">Remplissez le formulaire de demande</a></li></ul>
    </div>

    <div style="clear:both;"></div>
  </div>
</div>

<div class="green_box_bottom"><div class="box box_bottom"></div></div>
</div><div class="box_bottom_clear">&nbsp;</div></div>


















  <div class="forum_tabs">
<div class="content content_grey"><div class="grey_box_top"><div class="box box_top"></div></div>      
  <p class="forum-nav">
    <a href="index.php" id="forum_nav_overview" url="index.php" class="active">Voir tous</a>
    <span class="delim">|</span>
    <a href="category.php">Derniers</a>
  </p>



      <div id="content_entries">
        <div class="frame columns">


<div>
          
        

  <div class="category" id="category_none">

<div class="column" id="forum_278771">
  <h3 class="clearfix">
    <a href="category.php">
      <span>Les derniers!</span>
      <span class="sub-counter">(<?php echo $_smarty_tpl->tpl_vars['totallast']->value;?>
)</span>
      <span class="follow_link">»</span>
    </a>

  </h3>

  <ul>
  	 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['last']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
<li class="fade_truncation_outer articles ">
          <div class="fade_truncation_inner"></div>
          <span style="display: block; position: relative; ">
            <a href="more.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a>
          <span class="faded_truncation" style="height: 14px; display: block; "><span class="faded_truncation" style="height: 14px; "></span></span><span class="faded_truncation" style="height: 14px; "></span></span>
        </li>
<?php } ?>
  </ul>
</div>






    <div style="clear:both; height:0px;">&nbsp;</div>
  </div>


      </div>





<div class="category-header">
    <h2><a href="file://localhost/Users/Valentin/Downloads/help.habbo.fr/categories/5796-questions-frequentes/index.html">Questions fréquentes<span class="follow_link">»</span></a></h2>
</div>
  





<div class="category" id="category_5796" data-category_path="/categories/5796-questions-frequentes">




<?php echo $_smarty_tpl->tpl_vars['category']->value;?>











<div style="clear:both; height:0px;">&nbsp;</div>
  </div>



</div>

      </div>
      
      







<div class="grey_box_bottom"><div class="box box_bottom"></div></div></div><div class="box_bottom_clear">&nbsp;</div>  </div>















  
  
  
  
  
  



    </div>
  </div>



</div>


  </div><?php }} ?>