<?php $con=mysql_connect( "localhost", "itasthra_local", "asthra.msec@123"); 
if($con) 
mysql_select_db( "itasthra_reg", $con);
 else echo "<h1>Database Error</h1>"; 
 
 $result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e3=1");

while($row = mysql_fetch_array($result))
  {
	    echo $row['s_email'].",<br>";
  }
echo "</table></div>";
 
 mysql_close($con); 




?>