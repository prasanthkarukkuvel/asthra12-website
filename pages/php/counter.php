<html>
<head></head>
<body>
<?php
					$fp = fopen("counterlog.txt","r"); 
					$count = fread($fp, 1024); 
					fclose($fp); 
					$count++;
					$fp = fopen("counterlog.txt", "w"); 
					fwrite($fp, $count); 
					fclose($fp); 
					$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
					$fp = fopen("counterlog.txt", "r");
					$cout = fread($fp, 1024);
					fclose($fp);
					$today = date("D M j G:i:s T Y");
					$fp = fopen("viewlog.txt", "a+");
					fwrite($fp, "\r\n" . $cout . " " . $today . " " . $hostname);
					fclose($fp);
					
?>
</body>
</html>