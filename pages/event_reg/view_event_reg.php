<html>
<head>
<style>
body {
	width:1008px;
	font:13px Verdana, Geneva, sans-serif;
}
p { padding:2px; }
table {
	font-size:13px;
	text-align:left;
}
td, th { padding: 5px 10px; }
</style>
</head>
<body>
<?php
$con=mysql_connect("localhost","itasthra_local","asthra.msec@123");
if($con)
mysql_select_db("itasthra_reg", $con);
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e1=1;");
echo "<table><th>Quiz</th><th>PPT</th><th>Debug</th><th>Poster</th><th>Adzap</th><th>Gaming</th><th>B & T</th><th>Minute</th><th>ToTal</th><tr>";
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e2=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e3=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e4=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e5=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e6=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e7=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008 and e_e8=1;");
echo "<td>".mysql_num_rows($result)."</td>";
$result = mysql_query("SELECT * FROM contact where s_id>1008");
echo "<td>".mysql_num_rows($result)."</td></tr></table>";

echo '<div><table align="center"  border="0" ><th>ID</th><th>Name</th><th>Contact</th><th>College</th><th>EMail</th><th>Quiz</th><th>PPT</th><th>Debug</th><th>Poster</th><th>Adzap</th><th>Game</th><th>B&T</th><th>Minute</th><th>D&T</th>';
while($row = mysql_fetch_array($result))
  {
	  
  echo "<tr><td>".$row['s_id']."</td><td>".$row['s_name']."</td><td>".$row['s_contact']."</td><td>".$row['s_college']."</td><td>".$row['s_email']."</td><td>".$row['e_e1']."</td><td>".$row['e_e2']."</td><td>".$row['e_e3']."</td><td>".$row['e_e4']."</td><td>".$row['e_e5']."</td><td>".$row['e_e6']."</td><td>".$row['e_e7']."</td><td>".$row['e_e8']."</td><td>".$row['s_date']."</td></tr>";
  echo "<br />";
  }
echo "</table></div>";

mysql_close($con);
?>
</body>
</html>