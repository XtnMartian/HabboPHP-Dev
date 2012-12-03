<?php include "includes/header.php"; ?>

<header class="jumbotron subhead" id="overview">
  <h1>Permissions Phoenix</h1>
  <p class="lead"><?php echo $lang['EditPermissionsEachRank']; ?></p>
  <div class="subnav">
    <ul class="nav nav-pills">
      <?php if(Tools::checkACL($user->rank,ACL_USERS_VIEW)) { ?><li><a href="users.php"><?php echo $lang['Users']; ?></a></li><?php } ?>
      <?php if(Tools::checkACL($user->rank,ACL_USERS_BAN)) {  ?><li><a href="ban.php"><?php echo $lang['ManageBan']; ?></a></li><?php } ?>
      <?php if(Tools::checkACL($user->rank,ACL_USERS_PERMISSIONS)) {  ?><li><a href="permissions.php"><?php echo $lang['ManagePermissions']; ?></a></li><?php } ?>

    </ul>
  </div>
</header>
<script src="assets/js/jquery.js"></script>

<br/>
 <?php if(Tools::checkACL($user->rank,ACL_USERS_PERMISSIONS)) {  ?>
<section style="padding:0;">
<div style="height:30px;margin-bottom:30px;">
	<div class="alert alert-success" style="display:none" id="success-update" >
	Permission update : OK !
	</div>
</div>
<table  class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Commande</th>
			<?php
				$req = mysql_query('SELECT * FROM permissions_ranks');
				while($data = mysql_fetch_assoc($req)){
					echo '<th>Rank : '.$data['rank'].'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
			<?php
				$req = mysql_query('SHOW COLUMNS  FROM permissions_ranks');
				while($data = mysql_fetch_assoc($req)){
					if($data['Field'] != 'rank'){
					echo '<tr>
							<td>'.$data['Field'].'</td>';
							$req2 = mysql_query('SELECT * FROM permissions_ranks');
							while($data2 = mysql_fetch_assoc($req2)){
							
									$value = '';
									if($data2[$data['Field']] == '1'){
										$value = 'checked';
									}
									echo'<td><input onclick="updatePermissions(\''.$data['Field'].'_'.$data2['rank'].'\')" id="'.$data['Field'].'_'.$data2['rank'].'" type="checkbox" '.$value.' name="'.$data['Field'].'_'.$data2['rank'].'"/></td>';
								}
							
						echo'</tr>';
						}
				}
			?>
			
						
	</tbody>
</table>

</section>
<?php } ?>
<?php include "includes/footer.php"; ?>