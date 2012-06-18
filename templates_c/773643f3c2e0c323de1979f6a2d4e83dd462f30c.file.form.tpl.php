<?php /* Smarty version Smarty-3.1.8, created on 2012-06-18 17:49:14
         compiled from "/Users/Robin/github/local/HabboPHP-Dev/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18665178714fdf4dfa501f31-12680367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '773643f3c2e0c323de1979f6a2d4e83dd462f30c' => 
    array (
      0 => '/Users/Robin/github/local/HabboPHP-Dev/templates/form.tpl',
      1 => 1340034281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18665178714fdf4dfa501f31-12680367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'formid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fdf4dfa50e244_79876342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fdf4dfa50e244_79876342')) {function content_4fdf4dfa50e244_79876342($_smarty_tpl) {?>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
   				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 
			    
				<div class="habblet-container" id="okt" style="float:left; width: 770px;">		
										<div class="cbb clearfix blue ">
	

							<div style="padding-left:30px;padding-right:30px;padding-top:15px;padding-bottom:15px;">
							<div id="loader"><center><img src="images/load.gif" alt="" /><br />Chargement</center></div>
<iframe src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/admin/form/view.php?id=<?php echo $_smarty_tpl->tpl_vars['formid']->value;?>
" id="iframeform" width="695" scrolling="no" frameborder="0" style="border:0;opacity:0;display:none;" onload="resizer();"></iframe>
<br style="clear:both"/>
					</div>
</div>
		
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>



</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type='text/javascript'>

    jQuery(function(){

        var iFrames = jQuery('#iframeform');
	
    	function iResize() {

    		for (var i = 0, j = iFrames.length; i < j; i++) {
    		  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
    	    }
		function resizer(){
		if ($.browser.safari || $.browser.opera) { 

        	   iFrames.load(function(){
        	       setTimeout(iResize, 0);
               });

        	   for (var i = 0, j = iFrames.length; i < j; i++) {
        			var iSource = iFrames[i].src;
        			iFrames[i].src = '';
        			iFrames[i].src = iSource;
               }

        	} else {
        	   iFrames.load(function() {
        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
        	   });
        	}
		}
        	resizer();
        	//setInterval(resizer,4000);
			
        });
        
        function resizer2(){
         var iFrames = jQuery('#iframeform');
		if ($.browser.safari || $.browser.opera) { 

        	   iFrames.load(function(){
        	       setTimeout(iResize, 0);
               });

        	   for (var i = 0, j = iFrames.length; i < j; i++) {
        			var iSource = iFrames[i].src;
        			iFrames[i].src = '';
        			iFrames[i].src = iSource;
               }

        	} else {
        	   iFrames.load(function() {
        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
        	   });
        	}
		}
        
        setTimeout("jQuery('#loader').animate({opacity:0}).slideUp();jQuery('#iframeform').slideDown().animate({opacity:1});",2000);
		
</script>

<?php }} ?>