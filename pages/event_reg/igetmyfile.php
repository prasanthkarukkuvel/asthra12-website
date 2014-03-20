<?php

$con=mysql_connect("localhost", "itasthra_local","asthra.msec@123");
if ($con) {
    mysql_select_db("itasthra_reg", $con);
    
    
    if ($_POST['iname']!=""&&$_POST['icollege']!=""&&$_POST['imail']!=""&&$_POST['icontact']!="") {
        $name=$_POST['iname'];
        $college=$_POST['icollege'];
        $email=$_POST['imail'];
        $contact=$_POST['icontact'];
        $e1=0;
        $e2=0;
        $e3=0;
        $e4=0;
        $e5=0;
        $e6=0;
        $e7=0;
        $e8=0;
        
        if (isset($_POST['n1'])) {
            $e1=1;
        }
        if (isset($_POST['n2'])) {
            $e2=1;
        }
        if (isset($_POST['n3'])) {
            $e3=1;
        }
        if (isset($_POST['n4'])) {
            $e4=1;
        }
        if (isset($_POST['n5'])) {
            $e5=1;
        }
        if (isset($_POST['n6'])) {
            $e6=1;
        }
        if (isset($_POST['n7'])) {
            $e7=1;
        }
        if (isset($_POST['n8'])) {
            $e8=1;
        }
        
        
        try{
            $sql = "insert into contact (s_name,s_email,s_contact,s_college,e_e1,e_e2,e_e3,e_e4,e_e5,e_e6,e_e7,e_e8)values('$name','$email',$contact,'$college','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8')";
            
            if (!mysql_query($sql,$con)) {
                die('Error: ' . mysql_error());
            } else {
                
                $iid=mysql_insert_id();
                $to = $email;
                $subject = "Asthra 2012- Registered Information";
                $message = '
<html>
<head>
<title></title>
</head>
<body>
<p style="font:20px Tahoma, Geneva, sans-serif;color:#333">Hello! '.$name.'</p>
<p style="font:15px Verdana, Geneva, sans-serif;color:#222">You have successfully registered for Asthra 2012.</p>
<p style="font:20px Tahoma, Geneva, sans-serif;color:#333">Your Details</p>
<table border="0" cellspacing="2" cellpadding="1" style="font:18px Verdana, Geneva, sans-serif;color:#333">
<tr>
<td>Registered ID :</td>
<td><b> '.$iid.' </b></td>
</tr>
<tr>
<td>Name : </td>
<td> '.$name.'</td>
</tr>
<tr>
<td>College : </td>
<td>'.$college.'</td>
</tr>
<tr>
<td>EMail : </td>
<td>'.$email.'</td>
</tr>
<tr>
<td>Contact : </td>
<td>'.$contact.'</td>
</tr>
</table>
<p style="font:15px Verdana, Geneva, sans-serif;color:#222">Please print this email and bring a copy of it to the venue. </p>
<p style="font:15px Verdana, Geneva, sans-serif;color:#222"> Venue : Meenakshi Sundararajan Engineering College<br />
Date : 15<sup>th</sup> Feb 2012<br /><br />
For More information Visit www.itasthra.com<br /><br />
Regards, <br />
Team Asthra</p>


</p>
</body>

</html>';
                
               
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
                
               
                $headers .= 'From: <students@itasthra.com>' . "\r\n";
                $headers .= 'Cc: prasanth@itasthra.com' . "\r\n";
                
                $a=mail($to,$subject,$message,$headers);
                if($a)
				{
                echo '<p class="head">Hooray, You are Registered !</p><p class="con"> Thank you for registering,Your ID has been sent to your registered email address</p><p class="mail"> '.$email.'</p><p> For any Queries : <a href="mailto://students@itasthra.com">students@itasthra.com</a></p><p> Note : Please print this email and bring a copy of it to the venue</p>';}else{echo "<p class='con'>Sending Mail Failed</p>";}
                
            }
        }
        catch(Exception $e)
        {
            echo $e;
        }
        
        
    } else {
        echo "<h1>Error in Information</h1>";
    }
} else {
    echo "<h1>Database Error</h1>";
}

mysql_close($con);







?>