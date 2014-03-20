<?php

define('YOUR_APP_ID', 'your app id ');
define('YOUR_APP_SECRET', 'your app secret');

function get_facebook_cookie($app_id, $app_secret) {
  $args = array();
  parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
  ksort($args);
  $payload = '';
  foreach ($args as $key => $value) {
    if ($key != 'sig') {
      $payload .= $key . '=' . $value;
    }
  }
  if (md5($payload . $app_secret) != $args['sig']) {
    return null;
  }
  return $args;
}

$cookie = get_facebook_cookie(249350978411370, c88129d533dee529da2fd209873e7442);

$user = json_decode(file_get_contents(
    'https://graph.facebook.com/me?access_token=249350978411370|2.AQA_I9tJOfWKPmZt.3600.1310922000.0-1748363566|LztUyza8NjWdoyXF62aTMfAamuc' .
    $cookie['access_token']));

?>
<html>
  <body>
    <?php if ($cookie) { ?>
      Welcome <?= $user->name ?>
    <?php } else { ?>
      <fb:login-button></fb:login-button>
    <?php } ?>
    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript">
      FB.init({appId: '<?= 249350978411370 ?>', status: true,
               cookie: true, xfbml: true});
      FB.Event.subscribe('auth.login', function(response) {
        window.location.reload();
      });
    </script>
  </body>
</html>