<?php if (substr_count($_SERVER[ 'HTTP_ACCEPT_ENCODING'], 'gzip')){ ob_start( "ob_gzhandler"); }else ob_start(); require( "../php/file_imp_con_reg.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<noscript>
<meta http-equiv="Refresh" content="0; url=../JSDisabled/" />
</noscript>
<title>Registration | Asthra 12</title>
<link rel="shortcut icon" type="text/css" href="../../images/favicon.ico" />
<link href="../../images/reg-other.css" rel="stylesheet" type="text/css" />
<link href="../../images/theme.css" rel="stylesheet" type="text/css" />
<link href="../../images/style-ui.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<?php echo '<link href="../../images/reg-ie.css" rel="stylesheet" type="text/css" />'; ?><!--[if gte IE 9]> <style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head><body>

<div id="iload" class="fixed">
  <div id="load" class="fixed"><img src="../../images/loading-round.gif" alt="loading" /><br />
  </div>
</div>
<div id="sopen" style="display:block">
  <div>
    <table border="0" cellspacing="0" cellpadding="0" align="center" class="stable">
      <tr>
        <td><h1>Registration</h1>
          <div id="slinks"><a href="../../index.php">Home</a><a href="../../events.php">Events</a><a href="../../asthra.php">Asthra</a><a href="../../schedule.php">Schedule</a><a href="../../contact.php">Contact</a></div></td>
      </tr>
      <tr>
        <td><div id="s_id">
            <div id="nerr"></div>
          </div></td>
      </tr>
      <tr>
        <td>
          <table border="0" cellspacing="0" cellpadding="0" align="center" style="table-layout:fixed">
            <tr>
              <td><div id="ires" style="display:block"><p class="head">Online Registration is Now Closed</p><p class="con">Spot Registration Available at Venue.</p><p class="con">You can Directly Register before 11 am</p><p>Venue:<br /><p class="con">Meenakshi Sundararajan Engineering College,</p>Kodambakkam,Chennai-24</p></div></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
</div>

</body>
</html>
<?php ob_flush(); ?>