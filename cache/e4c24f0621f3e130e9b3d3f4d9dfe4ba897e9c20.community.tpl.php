<?php /*%%SmartyHeaderCode:116644f957b1677b5a4-52317325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c24f0621f3e130e9b3d3f4d9dfe4ba897e9c20' => 
    array (
      0 => '.\\templates\\community.tpl',
      1 => 1335146269,
      2 => 'file',
    ),
    '7ce7f541337a85abc09f84de7d1f151b5e6741f2' => 
    array (
      0 => 'lang\\fr.lang',
      1 => 1335071401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116644f957b1677b5a4-52317325',
  'variables' => 
  array (
    'lang' => 0,
    'news' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f957b1686f119_08907021',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f957b1686f119_08907021')) {function content_4f957b1686f119_08907021($_smarty_tpl) {?><div id="container">
<style>
label{
	width: 150px;
	float:left;
}
</style>



	<div id="content" style="position: relative" class="clear fix">
    <div>

	    
	 <div id="promo-box">

    <div id="promo-bullets"></div>

    <div class="promo-container" style="background-image: url(http://www.habbogama.fr/images/news/1335066703.png)">
        <div class="promo-content">
            <div class="title">Nouveau</div>
            <div class="body">YEAH, rénovation de la charpente!</div>
        </div>
        <a href="http://www.facebook.com/HabbobetaFR" target="_blank" class="facebook-link" onclick="recordOutboundLink('Promo','Horses Facebook Button');"></a>
        <a href="http://twitter.com/Axsofficial" target="_blank" class="twitter-link" onclick="recordOutboundLink('Promo','Horses Twitter Button');"></a>
<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="events.php?id=74">Lire la suite<i></i></a>
        <b></b>
    </div>
</div>
    </div>
<div style="clear:both;"></div>


<script type="text/javascript">
$("profileForm-submit").show();
</script>

</div>
</div>
	<div style="float:left;" id="twitterfeed-habblet-container">
    <div id="twitterfeed-habblet-content"></div>
    <script> new TWTR.Widget({
                version: 2,
                id: 'twitterfeed-habblet-content',
                type: 'profile',
                rpp: 5,
                interval: 30000,
                width: 400,
                height: 161,
                theme: {
                    shell: {
                        background: '#4a4d4f',
                        color: '#ffffff'
                    },
                    tweets: {
                        background: '#ffffff',
                        color: '#4a4d4f',
                        links: '#fe6301'
                    }
                },
                features: {
                    scrollbar: true,
                    loop: false,
                    live: false,
                    behavior: 'default'
                } }).render().setUser('Axsofficial').start();
    </script>

</div>
<div id="fb-root" style="background:#FFF"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=370401413012475";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" style="background:#FFF" data-href="http://www.facebook.com/HabbobetaFR" data-width="350" data-height="249" data-show-faces="true" data-stream="true" data-header="true" ></div>
</div>
</div>
</div><?php }} ?>