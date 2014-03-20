<?php 
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
{}else
header('Location:../');
?>
<?php
header('Location:../index.php');
?>