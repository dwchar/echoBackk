<html>
	<title> Oh My </title>
	<body>
		<center>
			<p>Now what ???</p>
		</center>
	</body>
<?php
	$bl_filename = "/etc/security/blacklistip";
	$f = fopen($bl_filename,'a');
	$msg = $_SERVER['REMOTE_ADDR']."\tblack\n";
	fwrite($f,$msg);
	fclose($f);
	
	$bl_filename = "/etc/security/offenses.log";
	$f = fopen($bl_filename,'a');
	$msg = $_SERVER['REQUEST_TIME']."\t".$_SERVER['REMOTE_ADDR']."\n";
	fwrite($f,$msg);
	fclose($f);
	?>
</html>
