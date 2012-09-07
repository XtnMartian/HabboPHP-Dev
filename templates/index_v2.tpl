
<!DOCTYPE html>
<html>
<head>
	<title>Habboon - make friends, hang out, get noticed!</title>
	<link rel="stylesheet" href="web-gallery/styles/index_v2.css" />
	<link rel="icon" type="image/png" href="img/roc.ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="web-gallery/js/index_v2.js"></script>
	<meta name="description" content="Powered by RocCF - an open-source Coldfusion content management system by Otaku-Studios." />
	<meta name="keywords" content="roc, roccf, roc-cf, cf, coldfusion, habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />
</head>

<body>
	<div class="barline">
		<a href="#">
			<span class="joinnow">{#register_you#}</span>
			<!--span class="logo"></span-->
			<span class="online">{if isset($config->users_online)}{$config->users_online}{/if} Joueurs Online !</span>
		</a>
		<div class="content">
			<div class="column">
				<h3>Register</h3>
				<span class="or">
					Please fill in the required information or
				</span>
				<a href="#"><span class="facebookConnect">
					Facebook (soon™)
				</span></a>
			</div>
			<form method="post" name="registration" action="ajax/register/register.php">
				<div class="column">
					<input type="text" class="username" name="pseudo" placeholder="Pseudo" />
					<input type="text" class="email" name="email" placeholder="E-mail" />
					<input type="text" class="rep_email" name="rep_email" placeholder="Repeat E-mail" />
					<div class="proceed">Next</div>
				</div>
				<div class="column">
					<input type="password" class="password" name="password" placeholder="Password" />
					<input type="password" class="password2" name="password2" placeholder="Repeat Password" />
					<div class="complete">Complete</div>
				</div>
			</form>
			<div class="hideColumn">
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="header">
			<div class="login">
				<div class="loginheader">
					<h2>{#Enter#}</h2>
					{if isset($error_login)}
						<h4> => Mauvais identifiant</h4>
					{/if}
				</div>
				<form method="post" action="index_v2.php">
					<input type="text" name="username" id="username" class="username-class" placeholder="Utilisateur" />
					<input type="password" name="password" id="password" class="password-class" placeholder="Mot de passe" />
					<button type="submit">{#Enter#}</button>
				</form>
			</div>
		</div>
		<div class="welcomeText">
			{$config->welcome_message}
		</div>

		<div id="slider">
		    <div id="buttons">
		    	<a class="selected">0</a>
				<a>1</a>
		    	<a>2</a>
		    </div>
		    {foreach from=$news item=i}
			<div class="article" style="background-image: url('{$i.image}');">
			    <div class="article-content">
			        <div class="title">{$i.title}</div>
			        <div class="body">{$i.short}</div>
			    </div>
				<!--div class="link">
					<a href="##">Read More <span class="arrow">è</span></a>
				</div-->
			</div>
			{/foreach}
		</div>
<!--
		<div class="stream">
			<h3>Live Stream</h3>
			<div class="stream-content">
				<div class="story">
					<div class="story-avatar" style="background:url('img/frontpage/stream-avatar.gif') -16px -20px no-repeat">
					</div>
					<div class="story-desc">
						Aaron just registered! <a href="##" class="link">Visit Profile</a>
					</div>
				</div>
				<a href="##" class="more">Load more...</a>
			</div>
		</div>
-->	
		<div class="adContainer">
		<!--Pub-->
		</div>
		
		<div class="footer">

		</div>
	</div>
</body>
</html>