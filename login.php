<html>
<style type="text/css"><!--
.gaia.le.lbl { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.fpwd { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.chusr { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.val { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.button { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.rem { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }

.gaia.captchahtml.desc { font-family: arial, sans-serif; font-size: smaller; } 
.gaia.captchahtml.cmt { font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
  
--></style>
 <head>
  <title>YouTube</title>
  <?php include("conf.php"); ?>
  <style type="text/css"><!--
    body {
      font-family: arial, sans-serif;
      margin: 0;
      padding: 13px 15px 15px;
    }
    .body {
      margin: 0;
    }
    div.errorbox-good {}

    div.errorbox-bad {} 

    div.errormsg { color: red; font-size: smaller; font-family: arial,sans-serif;}
    font.errormsg { color: red; font-size: smaller; font-family: arial,sans-serif;}
    
    div.pagemsg {
      font-size: smaller; 
      font-weight: bold; 
      text-align: center;
    }
    div.pagemsg span {
      padding: 5px; 
      background: #ff9;
    }

    
    div.topbarwrap {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }
    div.topbar {
      padding: 3px 8px 0px;
    }
    div.header {
      
      margin-bottom: 9px;
      margin-left: -2px;
      position:relative;
      zoom: 1
    }
    div.header img.logo {
      border: 0;
      float:left;
    }
    div.header div.headercontent {
      float:right;
      margin-top:17px;
    }
    div.header:after{
      content:".";
      display:block;
      height:0;
      clear:both;
      visibility:hidden;
    }
    div.pagetitle {
      font-weight:bold;
    }
    
    .footer { 
      color: #666;
      font-size: smaller;
      margin-top: 40px;
      text-align: center;
    }
    
    table#signupform {
      left: -5px;
      top: -7px;
      position:relative;
    }
    table#signupform td{
      padding: 7px 5px;
    }
    table#signupform td table td{
      padding: 1px;
    }

    
    
    hr {
      border: 0;
      background-color:#DDDDDD;
      height: 1px;
      width: 100%;
      text-align: left;
      margin: 5px;
    }
    

    
    
  --></style>
</head>
  <body dir="ltr" onload="gaia_setFocus();">
  <div id="main">
  <style type="text/css">
  <!--
  body { font-family: arial,sans-serif; background-color: #fff; margin-top: 2; }
  td {font-family: arial, sans-serif;}
  .c { width: 4; height: 4; }
  a:link { color: #00c; }
  a:visited { color: #551a8b; }
  a:active { color: #f00; }
  .form-noindent { background-color: #fff; border: 1px solid #c3d9ff; }
  -->
</style>
<style type="text/css"><!--


#main {
  width: 960px;
  margin: auto;
}
body {
  padding-top: 9px;
  margin-top: 0;
}
#masthead-container {
  font-size: 75%;
  border-bottom: 1px solid #ccc;
  margin: 0 auto 0.8333em;
}
#masthead {
  margin: 0 auto;
  padding: 0 0 0.38462em; /* 9px 0px 5px @ 13px font-size */
  font-size: 1.0833em;
}
#masthead-main {
  float: left;
  padding: 0.69231em 0px 0.38462em;
}
a:link, a:visited {
  color: #03c;
  text-decoration: none;
}
form {
  padding: 0;
}
.search-term {
  border: 1px solid #666;
  padding: 4px 2px 1px 2px;
  width: 22em;
  font-size: inherit;
}
.yt-uix-button {
  padding: 0 0.5em;
  height: 1.9em;
  border: 1px solid #ccc;
  background: #F6F6F;
  background-image: -moz-linear-gradient(top, #FFFFFF, #EFEFEF);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#EFEFEF));
  filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr=#FFFFFF, endColorStr=#EFEFEF);
  -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(startColorStr=#FFFFFF, endColorStr=#EFEFEF)";
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  overflow: visible; /* fix ie7 padding */
}
.search-button {
  height: 1.9231em;
  vertical-align: top;
  font-size: inherit;
  font-family: Arial, sans-serif;
  margin-right: 4px;
}
.yt-uix-button:hover,
.yt-uix-button:focus {
  border-color: #999;
  background: #F3F3F3;
  background-image: -moz-linear-gradient(top, #FFFFFF, #EBEBEB);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#EBEBEB));
  filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr=#FFFFFF, endColorStr=#EBEBEB);
  -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(startColorStr=#FFFFFF, endColorStr=#EBEBEB)";
  outline: 0;
  -moz-box-shadow: 0px 0 px 3px #999;
  -webkit-box-shadow: 0px 0 px 3px #999;
  box-shadow: 0px 0 px 3px #999;
}

#masthead .search-form {
  display: inline;
  position: relative; /* fix yt-button in IE7 */
  width: 366px;
}

#masthead-nav-main {
  float: left;
  padding-left: 1em;
  line-height: 3.0769em; /* 40px line-height @ 13px font-size */
}
#masthead-nav-main a:hover {
  text-decoration: underline;
}
#masthead-nav-main a {
  padding: 0.1em 0.8em;
  border-left: 1px solid #CCC;
  white-space: nowrap;
}
#masthead-utility {
  float: right;
  padding-left: 1em;
  line-height: 3.0769em; /* 40px line-height @ 13px font-size */
}
.logo{
  float: left;
  display: block;
  margin: 0 18px 0 0;
}
.logo img{
  width: 110px;
  height: 44px;
  background: white url("https://web.archive.org/web/20110406073724im_/https://www.google.com/accounts/youtube/youtube_master.png") no-repeat scroll 0 0;
}
.title-bar {
  border-bottom: 1px solid #999;
}
.page-title {
  font-size: 19px;
  font-weight: bold;
  padding: 5px 0;
}
--></style>
<div id="masthead-container">
<div id="masthead">
  <a href="." class="logo">
  <img src="https://web.archive.org/web/20110406073724im_/https://www.google.com/accounts/youtube/youtube_pixel.gif" border="0" alt=""/>
  </a>
  <div id="masthead-main">
  <form class="search-form" action="results.php" method="get" name="searchForm">
  <input id="masthead-search-term" class="search-term" name="search_query" type="text" tabindex="1" value="" maxlength="128"/>
  <button type="submit" class="search-button yt-uix-button" tabindex="2">
  <span>
  Search
  </span>
  </button>
  </form>
  </div>
  <div id="masthead-nav-main">
  <a href="videos.php">
  Browse
  </a><nobr>
  <a href="my_videos_upload.php">
  Upload
  </a>
  </div>
  <div id="masthead-utility">
  </div>
  <div style="clear: both"></div>
</div>
</div>
  <div class="title-bar page-title">
  Sign in to YuoTueb!
  </div>
  <br/>
  <table border="0" width="90%" align="center" cellpadding="5" cellspacing="1">
  <tr>
  <td width="75%" valign="top">
  <div style="font-size:83%;">
<div style="font-weight: bold;">
Join the largest worldwide video community!
</div><br/>
Get full access to
YuoTueb
 with your account:
<ul>
  <li>
  Upload and share your own videos with the world
  </li>
  <li>
  Comment on, rate, and make video responses to your favorite videos
  </li>
  <li>
  Build playlists of favorites to watch later
  </li>
</ul>
</div>
  </td>
  <td style="padding-left: 10px;" valign="top" align="center">
<script><!--

function gaia_onLoginSubmit() {
  
  if (window.gaiacb_onLoginSubmit) {
    return gaiacb_onLoginSubmit();
  } else {
    return true;
  }
}

--></script>
<style type="text/css"><!--
  div.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }
  font.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }  
--></style>
<style type="text/css"><!--
.gaia.le.lbl { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.fpwd { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.chusr { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.val { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.button { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.rem { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }

.gaia.captchahtml.desc { font-family: arial, sans-serif; font-size: smaller; } 
.gaia.captchahtml.cmt { font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
  
--></style>
<?php
                                if(isset($_SESSION['profileuser3'])) {
                                    echo('<script>
                                         window.location.href = "index.php";
                                         </script>');
                                }
                                if(!empty($_POST)){
                                    $username = htmlspecialchars($_POST['username']);
                                    $statement = $mysqli->prepare("SELECT `password` FROM `users` WHERE `username` = ? LIMIT 1");
                                    $statement->bind_param("s", $username);
                                    $statement->execute();
                                    $result = $statement->get_result();
                                    if($result->num_rows !== 0){
                                    while($row = $result->fetch_assoc()){
                                            $hash = $row['password'];
                                            if(!isset($row['banned'])) {
                                            if(password_verify($_POST['password'], $hash)){
                                                session_start();
                                                $_SESSION["profileuser3"] = htmlspecialchars($_POST['username']);
                                                echo('<script>
                                         window.location.href = "index.php";
                                         </script>');
                                            }
                                            else {
                                                echo 'These credentials do not match our records.';
                                            }
                                        }
                                    }
                                    }
                                    else{
                                        echo 'These credentials do not match our records.';
                                    }
                                }
                            ?>
<form id="gaia_loginform" action="" method="post" onsubmit="return(gaia_onLoginSubmit());">
<div id="gaia_loginbox">
<table class="form-noindent" cellspacing="3" cellpadding="5" width="100%" border="0">
  <tr>
  <td valign="top" style="text-align:center" nowrap="nowrap" bgcolor="#e8eefa">
  <input type="hidden" name="ltmpl" value="sso">
  <input type="hidden" id="pstMsg" name="pstMsg" value=""/>
  <input type="hidden" id="dnConn" name="dnConn" value=""/>
  <div class="loginBox">
  <table id="gaia_table" align="center" border="0" cellpadding="1" cellspacing="0">
  <tr>
<td colspan="2" align="center">
  <div style="margin: 5px 0; font-size: 13px; width: 300px;">
  <div>
  <img src="https://web.archive.org/web/20110406073724im_/https://www.google.com/accounts/youtube/youtube_google_brand.png" border="0" alt="" style="vertical-align: middle;"/>
  </div>
  <div style="width: 200px; padding-top: 10px;">
  Sign in to YuoTueb with your
  YuoTueb <!--<b>OR</b> Google--> Account
  </div>
  </div>
</td>
</tr>
<tr>
  <td colspan="2" align="center">
  </td>
</tr>
<tr>
  <td nowrap="nowrap">
  <div align="right">
  <span class="gaia le lbl">
  Username:
  </span>
  </div>
  </td>
  <td>
  <input type="text" name="username" id="username" size="18" value="" class="gaia le val"/>
  </td>
</tr>
<tr>
  <td></td>
  <td align="left">
  </td>
</tr>
<tr>
  <td align="right">
  <span class="gaia le lbl">
  Password:
  </span>
  </td>
  <td>
  <input type="password" name="password" id="password" size="18" class="gaia le val"/>
  </td>
</tr>
<tr>
  <td>
  </td>
  <td align="left">
  </td>
</tr>
  <tr id="rememberme-row" class="enabled">
  <td align="right" valign="top">
  <input type="checkbox" name="PersistentCookie" id="PersistentCookie" value="yes" checked="checked"/>
  <input type="hidden" name="rmShown" value="1"/>
  </td>
  <td>
  <label for="PersistentCookie" id="PersistentCookieLabel" class="gaia le rem">
  Stay signed in
  </label>
  </td>
</tr>
<tr>
  <td>
  </td>
  <td align="left">
  <input type="submit" class="gaia le button" name="signIn" id="signIn" value="Sign in"/>
  </td>
</tr>
<tr id="ga-fprow">
  <td colspan="2" height="33.0" class="gaia le fpwd" align="center" valign="bottom">
  <a href="https://web.archive.org/web/20110406073724/http://www.youtube.com/account_recovery" target="http://www.youtube.com/account_recovery">
  Can&#39;t access your account?
  </a>
  </td>
</tr>
  </table>
  </div>
  </td>
  </tr>
</table>
</div>
<input type="hidden" name="asts" id="asts" value="">
</form>
<script><!--
var gaia_loginForm;
if (document.getElementById) {
  gaia_loginForm = document.getElementById("gaia_loginform");
} else if (window.gaia_loginform) {
  gaia_loginForm = window.gaia_loginform;
}

var gaia_emailHasKeypress = false;
if (gaia_loginForm && gaia_loginForm.Email) {
  gaia_loginForm.Email.onkeypress = function() {
    gaia_emailHasKeypress = true;
  }
}

function gaia_setFocus() {
  if (gaia_loginForm) {
    if (gaia_loginForm.Email && !gaia_loginForm.Email.value) {
      gaia_loginForm.Email.focus();
    } else if (gaia_loginForm.Passwd && !gaia_emailHasKeypress) {
      gaia_loginForm.Passwd.focus();
    }
    
  }
}

gaia_setFocus();
--></script>
<!-- <form id="gaia_universallogin" action="login.php" method="post" onsubmit="return(gaia_onLoginSubmit());">
  <input type="hidden" name="continue" id="continue" value="login.php"/>
  <input type="hidden" name="service" id="service" value="youtube"/>
  <input type="hidden" name="uilel" id="uilel" value="3"/>
  <input type="hidden" name="dsh" id="dsh" value="-4443856152890097787"/>
  <input type="hidden" name="ltmpl" id="ltmpl" value="sso"/>
  <input type="hidden" name="hl" id="hl" value="en_US"/>
  <input type="hidden" name="ltmpl" id="ltmpl" value="sso"/>
  <input type="hidden" name="ltmpl" id="ltmpl" value="sso"/>
</form> -->
<script type="text/javascript"> <!--
  
--> </script>
  <br/>
<table class="form-noindent" border="0" cellpadding="6" cellspacing="3" width="100%">
  <tr>
  <td bgcolor="#e8eefa" align="center" style="font-size:83%">
  <b>
  Don't have an account?
  </b><br/>
  <a style="text-decoration: none;" href="create_account.php">
  <b>
  Sign up for YuoTueb!
  </b>
  </a>
  </td>
  </tr>
</table>
  </td>
  </tr>
  </table>
  <br/>
  <br/>
  <style type="text/css"><!--
.footer { 
  font-family: arial, sans-serif;
  font-size: 83%;
  text-align: center;
  border-top: 1px solid #ccc; 
  padding: 4px;
  margin: 0 3px;
}
--></style>
<div class="footer" align="center">
  <font color="#666666">
  &copy;2010 YuoTueb, LLC
  </font>
  -
  <a href="terms.php">Terms of Use</a>
  -
  <a href="privacy.php">Privacy Policy</a>
  -
  <a href="help.php">Help</a>
  -
  <a href="community_guidelines.php">Community Guidelines</a>
  -
  <a href="https://discord.gg/yuotueb">Contact</a>
</div>
  </div>
  </body>
</html>