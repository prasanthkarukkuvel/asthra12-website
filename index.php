<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){ ob_start("ob_gzhandler"); }else ob_start(); require("pages/php/file_imp_con.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" itemscope itemtype="http://schema.org/Event">
<head>
<title><?php echo getTitle("index");?></title>
<noscript>
<meta http-equiv="Refresh" content="0; url=pages/JSDisabled/" />
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="HTML Tidy for Linux (vers 6 November 2007), see www.w3.org" />
<meta name="Description" content="Asthra - National Level Technical Symposium 2012 - Department of Information Technlolgy" />
<meta name="Keywords" content="asthra,2012,events,itasthra,about asthra,technical,symposium" />
<meta name="google-site-verification" content="cZkbe9MggnwaIt8f6PKzkxEqr-i54k4Uz-CETeWka6Y" />
<meta property="og:title" content="Asthra"/>
<meta property="og:type" content="Symposium"/>
<meta property="og:url" content="http://www.itasthra.com"/>
<meta property="og:image" content="http://www.itasthra.com/archive/logoweb.png"/>
<meta property="og:site_name" content="Asthra"/>
<meta property="fb:admins" content="1748363566"/>
<meta property="og:description" content="National Level Technical Symposium 2012"/>
<meta property="og:language" content="english" />
<meta itemprop="name" content="Asthra 12">
<meta itemprop="description" content="A National Level Technical Symposium-Department Of Information Technology">
<meta itemprop="image" content="http://www.itasthra.com/archive/logoweb.png">
<link rel="shortcut icon" type="text/css" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="images/style-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href='images/menu-layout.css' />
<link rel="stylesheet" type="text/css" media="screen" href="images/layout.css" />
<script type="text/javascript">
//<![CDATA[
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-22637730-1']);
_gaq.push(['_setDomainName', 'itasthra.com']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
//]]>
</script>
</head><body class="bimg removeYScroll">
<script type="text/javascript" src="Scripts/swfobject_modified.js"></script> <script type="text/javascript" src="Scripts/jquery.js"></script> <script type="text/javascript" src="Scripts/jquery.min.js"></script> <script type="text/javascript" src="Scripts/jquery-ui.js"></script> <script type="text/javascript" src="Scripts/prefixcss.js"></script> <script type="text/javascript" src="Scripts/jquery.cycle.all.js"></script> <script type="text/javascript" src="Scripts/example.js"></script>
<?php if (!isIE()) echo '<script type="text/javascript" src="Scripts/menu.js"></script>'; ?>
<script>if($(window).height()<660){$('body').removeClass('removeYScroll');}</script>
<div id="open">
  <div id="sdown" class="fixed">
    <h1>Loading please wait....</h1>
  </div>
  <div id="errResize" class="fixed">Please Maximize your Window!!</div>
  <div id="err" class="fixed">
    <table border="0" cellspacing="0" cellpadding="0" align="center" class="ints">
      <tr>
        <td><h1 id="g1">Welcome to Asthra 12 - Technical Symposium</h1></td>
      </tr>
    </table>
  </div>
  <div id="load" class="fixed"><img src="images/loading-spiral.gif" alt="loading" /><br />
  </div>
  <div class="edge" id="left"></div>
  <div class="edge" id="right"></div>
  <div class="edge" id="top"></div>
  <div class="edge" id="bottom"></div>
  <div id="osx-modal-content">
    <div id="osx-modal-title">Comments</div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-modal-data" style="width:550px;height:450px;overflow:auto;">
      <?php getComments();?>
    </div>
  </div>
  <table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td><div id="flash-logo">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="200" height="160" id="FlashID" title="Logo">
            <param name="movie" value="images/flash/logo.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="8.0.35.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <param name="SCALE" value="noborder" />
            <object type="application/x-shockwave-flash" data="images/flash/logo.swf" width="200" height="160">
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <param name="swfversion" value="8.0.35.0" />
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <param name="SCALE" value="noborder" />
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" width="112" height="33" alt="Get Adobe Flash player" /></a></p>
              </div>
            </object>
          </object>
        </div></td>
    </tr>
  </table>
  <div class="header_top">
    <table border="0" cellspacing="0" cellpadding="0" align="center" width="950">
      <tr>
        <td><div class="header_top_content" id="thead">
            <div class="c1">
              <table cellpadding="0" cellspacing="3" >
                <tr>
                  <td><a href="pages/redirect/fb/" target="_blank">
                    <div id="fbconnect">&nbsp;</div>
                    </a></td>
                  <td><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                    <fb:like href="www.itasthra.com" send="false" layout="button_count" width="450" show_faces="true" action="recommend" font="arial"></fb:like></td>
                </tr>
              </table>
            </div>
          </div></td>
      </tr>
    </table>
  </div>
  <table align="center" cellpadding="0" cellspacing="0" border="0" width="950">
    <tr>
      <td align="center"><div class="head-layout">
          <div class="logo-asthra-12" id="logo"></div>
          <div class="top-content">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><div class="form-serach input-class form-elements">
                    <form method="get" action="http://www.google.com/search" target="_blank" onsubmit="return searchvalid()">
                      <div class="opt-time">
                        <div id="opt-but" class="myopt" title="Options"></div>
                        <div id="greeting" <?php if (isIE()) {echo 'class="greet-ie"';}?>><script>document.write(greet());</script></div>
                        <div id="time"></div>
                      </div>
                      <input type="hidden" name="ie" value="UTF-8" />
                      <input type="hidden" name="oe" value="UTF-8" />
                      <p>
                        <input type="text" name="q" id="gh" size="22" maxlength="255" class="search-textbox" value="Google it!" title="" onclick="this.style.color='#000';if(this.value=='Google it!'){this.value='';}" onblur="this.style.color='#666';if(this.value==''){this.value='Google it!';};" />
                        <input type="submit" name="btnG" value=" " class="search-button" title="Search" />
                      </p>
                      <input type="hidden" name="domains" value="www.itasthra.com" />
                      <dl >
                        <dd class="search-option" id="opt">
                          <div <?php if (isIE()) echo 'class="ie-search-options"';else echo 'class="ot-search-options"';?>>
                            <input type="radio" name="sitesearch" value="" checked="checked" class="opt1" />
                            Google
                            <input type="radio" name="sitesearch" value="www.itasthra.com" class="opt2" />
                            Search This Site</div>
                        </dd>
                      </dl>
                    </form>
                    <br />
                    <br />
                    <div class="social-network <?php if (isChrome()) echo 'chor-saf-social-network';else if(isSafari())echo 'chor-saf-social-network';?>">
                      <div class="MyLinks"><a href="pages/intro/" target="_new">Intro Page</a><a class="c2" href="http://email.itasthra.com" target="_new">Mail</a></div>
                      <div class="social-icons icon-list" id="link-icon"><a class="facebook-icon" href="https://www.facebook.com/Asthra.IT" target="_new"></a><a class="blog-icon" href="http://www.asthra12.blogspot.com/" target="_new"></a><a class="orkut-icon" href="https://plus.google.com/u/0/101748347153671937785/posts" target="_new"></a><a class="twitter-icon" href="https://twitter.com/Asthra_IT" target="_new"></a></div>
                      <div class="site-rating">
                        <div class="otherbutton" id="star" onclick="window.open('pages/siterate/?code=none','Rate this site','menubar=no,status=no,scrollbars=no,resizable=no,width=780,height=450');"></div>
                        Rate this Site</div>
                    </div>
                  </div></td>
              </tr>
            </table>
          </div>
        </div></td>
    </tr>
    <tr class="header-bottom">
      <td align="center"><div id="d-tab">&nbsp;</div>
        <div class="nav-wrap c4" id="tabs"><?php echo menu_tabs(); ?></div></td>
    </tr>
    <tr>
      <td align="center"><div>
          <div id="infotab">
            <div class="logo-icon">
              <div class="int-logo" id="int-logo-cl">&nbsp;</div>
              <div class="int-logo" id="int-logo-bw">&nbsp;</div>
            </div>
            <div>
              <h3 id="b1">Welcome to Asthra! About Asthra, New Updates, Sponsors and more</h3>
              <h3 style="margin-right:60px;">&nbsp;</h3>
              <a id="next2" class="changeButton" href="#">Next Page !</a></div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td align="center"><div id="cons">
          <div>
            <iframe src="images/flash/web/" width="1000" height="380" frameborder="0"></iframe>
          </div>
          <div>
            <div class="content">
              <div class="content-top">
                <div class="content-top-info" align="left">
                  <div class="page-links"><a id="prev2" class="changeButton" href="#">Previous Page !</a><a id="next3" class="changeButton" href="theme.php">Next Page !</a></div>
                </div>
                <div class="content-info">
                  <div class="content-text">
                    <div class="content-lay">
                      <div id="abt-asthra-id"><img src="images/abt-asthra.png" width="230" height="70" alt="About Asthra" />
                        <div style="position:relative;bottom:80px;left:550px;">
                          <div class="it-icon" id="it-ani" ></div>
                        </div>
                      </div>
                    </div>
                    <p class="about"><?php echo get_text("index","about_asthra");?></p>
                    <div class="read-more" ><a href="asthra.php" target="_self">Read more<span class="arrow-left"></span></a></div>
                    <div class="dLine"></div>
                    <div class="content-lay" style="margin-top:20px;">
                      <div id="abt-msec-id"><img src="images/abt-msec.png" width="230" height="70" alt="About Msec" />
                        <div style="position:relative;bottom:80px;left:550px;">
                          <div class="msec-icon" id="msec-ani"></div>
                        </div>
                      </div>
                    </div>
                    <p class="about"><?php echo get_text("index","about_msec");?></p>
                    <div class="read-more" ><a href="http://www.msec.edu.in/" target="_self">Read more<span class="arrow-left"></span></a></div>
                    <div class="dLine"></div>
                  </div>
                </div>
                <div class="content-bottom-info">
                  <div class="social-links">
                    <div class="face-like"> <script src="http://connect.facebook.net/en_US/all.js#appId=APP_ID&amp;xfbml=1"></script>
                      <fb:like href="http://www.itasthra.com" send="true" layout="button_count"></fb:like>
                      <div id="fb-root"></div>
                    </div>
                    <div class="gplus">
                      <g:plusone size="medium" href="http://www.itasthra.com"></g:plusone>
                    </div>
                    <div class="tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.itasthra.com" data-text="Asthra 12 - National Level Technical Symposium" >Tweet</a></div>
                  </div>
                  <div class="slides-t" style="">Team Asthra</div>
                  <table border="0" align="left" cellspacing="0" style="margin:20px 0 0 20px;position:absolute;">
                    <tr>
                      <td align="left"><iframe allowtransparency="true" align="middle" frameborder="0" scrolling="none" src="pages/team/index.html" width="400" height="300" style="position:absolute"></iframe></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="updates-spon">
                <div class="updates">
                  <iframe src="pages/updates/" id="frame" width="270" height="320" frameborder="0" ></iframe>
                </div>
                <div class="sponsors">
                  <div id="spon-info">
                    <?php sponsors_details(); ?>
                  </div>
                  <div class="extra">
                    <div id="ads-info">
                      <?php ads_details(); ?>
                    </div>
                    <a href="contact.php" target="_blank">Add your Ads</a></div>
                </div>
                <div style="float:right;margin:205px 30px 0 0px;"><a href="pages/event_reg/" target="_self"><img src="images/registernow.jpg" width="150" height="134" alt="Register Now!" /></a></div>
              </div>
            </div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td><div class="footer-layout" id="ifooter-s">
          <div>
            <div class="social-footer"><a class="social-face" href="https://www.facebook.com/Asthra.IT" target="_new"></a><a class="social-blog" href="http://www.asthra12.blogspot.com/" target="_new"></a><a class="social-gplus" href="https://plus.google.com/u/0/101748347153671937785/posts" target="_new"></a><a class="social-tweet" href="https://twitter.com/Asthra_IT" target="_new"></a></div>
            <div class="count-down-layout">
              <div class="count-down">
                <table width="200" border="0" cellspacing="5" cellpadding="0" align="center">
                  <tr>
                    <td><input name="" type="text" id="days" readonly="true" /></td>
                    <td><input name="" type="text" id="hours" readonly="true" /></td>
                    <td><input name="" type="text" id="minutes" readonly="true" /></td>
                    <td><input name="" type="text" id="seconds" readonly="true" /></td>
                  </tr>
                  <tr>
                    <td>Days</td>
                    <td>Hours</td>
                    <td>Minutes</td>
                    <td>Seconds</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="extra-links">
              <div class="left-comments">
                <div class="comments-t " id="icomment-t" ></div>
                <div class="comments" id="icomment"></div>
              </div>
              <div>
                <div id="smiley">&nbsp;</div>
                <a href="events.php">
                <div class="events-t" id="ievents-t"></div>
                <div class="events" id="ievents"></div>
                </a></div>
            </div>
            <div class="footer-contents">
              <div class="quicklinks">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="theme.php">Theme</a></li>
                  <li><a href="asthra.php">Asthra</a></li>
                  <li><a href="schedule.php">Schedule</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="pages/Maps/">Site Map</a></li>
                </ul>
              </div>
              <div class="feedback-text">
                <form name="feedform" id="myform" method="post" action="pages/php/process.php" onsubmit="return feedvalidataion()" onreset="resetfeedform()" >
                  <table width="240" border="0" align="center" id="feedback" >
                    <tr>
                      <td width="11"><div id="invalid-text-name"></div></td>
                      <td width="50">Name</td>
                      <td width="167" height="23"><input name="feedname" type="text" value=" Your name" id="name" autocomplete="off" onclick="if(this.value==' Your name'){this.value='';this.style.color='#FFF';};valid();" onblur="if(this.value==''){this.value=' Your name';this.style.color='#323030';};"/></td>
                    </tr>
                    <tr>
                      <td><div id="invalid-text-mail"></div></td>
                      <td>eMail</td>
                      <td height="23"><input type="text" name="feedemail" value=" Your id" id="email" autocomplete="off" onclick="if(this.value==' Your id'){this.value='';this.style.color='#FFF';};valid();" onblur="if(this.value==''){this.value=' Your id';this.style.color='#323030';};"/></td>
                    </tr>
                    <tr>
                      <td><div id="invalid-text-comment"></div></td>
                      <td><p>Feedback</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p></td>
                      <td height="103"><textarea name="feedcomment" id="comment" onclick="if(this.value==' Comments here'){this.value='';this.style.color='#FFF';};valid();" onblur="if(this.value==''){this.value=' Comments here';this.style.color='#323030';};"></textarea></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td height="30"><p>
                          <input name="feedback-submit" type="submit" value="Submit" class="button" id="lisubmit"/>
                          <input name="feedback-reset" type="reset" class="button" value="Clear" />
                        </p></td>
                    </tr>
                  </table>
                </form>
              </div>
              <div class="contac-text">
                <div>
                  <table width="300" border="0" id="contact-members">
                    <tr>
                      <td width="30">&nbsp;</td>
                      <td width="110" class="nam">Mr Venkatesh </td>
                      <td width="90">9677299286</td>
                      <td width="30"><a href="mailto:venkatesh@itasthra.com"><img src="images/mail-icon.png" width="20" height="20" alt="Mail" /></a></td>
                      <td width="30"><a href="http://www.facebook.com/people/Venkatesh-Naidu/1397204257" target="_blank"><img src="images/facebook-follow.png" width="20" height="20" alt="Facebook" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="nam">Mr Shakeer </td>
                      <td>9566136163</td>
                      <td><a href="mailto:shakeer@itasthra.com"><img src="images/mail-icon.png" width="20" height="20" alt="Mail" /></a></td>
                      <td><a href="https://www.facebook.com/profile.php?id=100000098214992&sk=info" target="_new"><img src="images/facebook-follow.png" width="20" height="20" alt="Facebook" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="nam">Ms Shankari </td>
                      <td>9445294005</td>
                      <td><a href="mailto:shankari@itasthra.com"><img src="images/mail-icon.png" width="20" height="20" alt="Mail" /></a></td>
                      <td><a href="https://www.facebook.com/profile.php?id=1579354719" target="_new"><img src="images/facebook-follow.png" width="20" height="20" alt="Facebook" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="nam">Ms Harini </td>
                      <td>9840446646</td>
                      <td><a href="mailto:harini@itasthra.com"><img src="images/mail-icon.png" width="20" height="20" alt="Mail" /></a></td>
                      <td><a href="https://www.facebook.com/harini.santhanam" target="_new"><img src="images/facebook-follow.png" width="20" height="20" alt="Facebook" /></a></td>
                    </tr>
                    <tr>
                      <td height="73">&nbsp;</td>
                      <td colspan="4"><p>&nbsp;</p>
                        <p class="text">Here the full information in PDF</p>
                        <a href="pages/pdf/contacts.pdf" target="_new">
                        <div class="cdownload"></div>
                        </a></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="other-info">
                <div class="cen">
                  <div class="sleft">
                    <div class="info-values">Page Hits</div>
                    <div class="info-values-text">
                      <?php $fp = fopen("pages/php/counterlog.txt","r"); $count = fread($fp, 1024); $count++; fclose($fp); echo $count; ?>
                    </div>
                  </div>
                  <div class="sright">
                    <div class="info-values">Rating</div>
                    <div class="info-values-text">
                      <?php get_rate(); ?>
                    </div>
                  </div>
                  <div class="cen"><br />
                    <div class="info-values-i ot">Designed by</div>
                    <div class="info-values-text-i ot" ><a href="https://www.facebook.com/prashanth.kandhasamy" target="_new">Prasanth</a></div>
                    <div class="info-values-i ot">Credits</div>
                    <div class="info-values-text-i ot" ><a href="commitee.php">Editorial Committee</a></div>
                  </div>
                  <div class="cen">
                    <div class="smail">
                      <table width="200" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><img src="images/email-small.png" width="20" height="20" alt="email" /></td>
                          <td><a href="mailto:students@itasthra.com">students@itasthra.com</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td align="center" height="30"><div style="text-align:center;">
          <div style="background:url(images/shadow-footer.png) center no-repeat;position:relative;width:1000px;height:30px;bottom:5px;"></div>
          <p style="position:relative;bottom:60px;">&copy;&nbsp;Asthra 2012. All Rights Reserved</p>
        </div></td>
    </tr>
  </table>
</div>
<div id="bottom-fade">&nbsp;</div>
<script type="text/javascript">
//<![CDATA[
setInterval("settime()", 1000); 
$('#g1').airport(["Welcome  to"," Asthra 12 !"]);
swfobject.registerObject("FlashID");
$(document).ready(function(){$('.otherbutton').append('<span class="hover"><\/span>').each(function(){var $span = $('> span.hover', this).css('opacity', 0);$(this).hover(function(){$span.stop().fadeTo(500, 1);},function(){$span.stop().fadeTo(500, 0);});});});
$(document).ready(function(){$('.cdownload').append('<span class="hover"><\/span>').each(function(){var $span = $('> span.hover', this).css('opacity', 0);$(this).hover(function(){$span.stop().fadeTo(500, 1);},function(){$span.stop().fadeTo(500, 0);});});});
$(document).ready(function(){$('.logo-asthra-12').append('<span class="hover"><\/span>').each(function(){var $span = $('> span.hover', this).css('opacity', 0);$(this).hover(function(){$span.stop().fadeTo(500, 1);$(".edge").stop().fadeIn();},function(){$span.stop().fadeTo(500, 0);$(".edge").stop().fadeOut();});});});
//]]>
document.getElementById("comment").value=' Comments here';
</script> <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> <script>
function countdown(a,b,c){theyear=a;themonth=b;theday=c;var d=new Date;var e=d.getYear();if(e<1e3)e+=1900;var f=d.getMonth();var g=d.getDate();var h=d.getHours();var i=d.getMinutes();var j=d.getSeconds();var k=montharray[f]+" "+g+", "+e+" "+h+":"+i+":"+j;futurestring=montharray[b-1]+" "+c+", "+a;dd=Date.parse(futurestring)-Date.parse(k);dday=Math.floor(dd/(60*60*1e3*24)*1);dhour=Math.floor(dd%(60*60*1e3*24)/(60*60*1e3)*1);dmin=Math.floor(dd%(60*60*1e3*24)%(60*60*1e3)/(60*1e3)*1);dsec=Math.floor(dd%(60*60*1e3*24)%(60*60*1e3)%(60*1e3)/1e3*1);if(dday==0&&dhour==0&&dmin==0&&dsec==1){return}else{idays.value=dday;ihours.value=dhour;iminutes.value=dmin;iseconds.value=dsec}setTimeout("countdown(theyear,themonth,theday)",1e3)}var before="for Asthra 2012 !";var current="Welcome";var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");var idays=document.getElementById("days");var ihours=document.getElementById("hours");var iminutes=document.getElementById("minutes");var iseconds=document.getElementById("seconds");countdown(2012,2,15)
	
	
</script> <script src="Scripts/jquery.simplemodal.js" type="text/javascript"></script>
</body>
</html>
<?php ob_flush(); ?>