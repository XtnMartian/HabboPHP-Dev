<?php

require '../init.php' ;


	$error=0;
	
	
	if($error==0) echo '<font lang="en">Everything is okay!<br />Tout est ok!</font><br /><br /><a href="javascript:void(0);" onclick="step(2);" class="downloadButton" lang="en">Next</a>';
	else echo '<a href="javascript:void(0);" onclick="step(1);setTimeout(getchmod,800);" class="downloadButton" lang="en">Retest</a>';
?>