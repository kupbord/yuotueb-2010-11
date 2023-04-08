<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("metadata.php"); ?>

	<!-- begin postpage section -->
	<script>
		
		yt.setConfig({
			'XSRF_TOKEN': 'r4t5n2UavsIJOaVusxXboGYn0iV8MTI3NzIxNTAzMw==',
			'XSRF_FIELD_NAME': 'session_token'
		});
		yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


		yt.setConfig('XSRF_QL_PAIR', 'session_token=gPVsc0KVRAYtdWrWheCvVC9TrXF8MA==');



		yt.setConfig('LOGGED_IN', false);
	</script>

			<script type="text/javascript">
	function handleSignInInput(e) {
		var key;
		if (window.event) {
			// Get input key from IE
			key = e.keyCode;
		} else if (e.which) {
			// Get input key from Firefox/Netscape/Opera
			key = e.which;
		}
		// Check to see if key is 'enter'
		if (key == 13) {
			document.getElementById("loginForm").submit();
		}
	}
	function updatePostalCodeVisibility() {
		var select = _gel('countrySelect');
		var postalCodeRow = _gel('postalCodeRow');
		if (!select || !postalCodeRow) {
			return;
		}

		switch (select.value) {
			default:
				postalCodeRow.style.display = 'none';
				break;
			case 'US':
			case 'CA':
			case 'GB':
				postalCodeRow.style.display = '';
		}
	}
	yt.pubsub.subscribe('init', updatePostalCodeVisibility);
	</script>



		

</head>
<body class="date-20100621 en_US is-english watch5-active">
 
	<!--[if IE]><div id="ie"><![endif]-->
	<!-- begin prepage section -->
	<form name="logoutForm" method="post" action="/web/20100621135713/http://www.youtube.com/">
		<input type="hidden" name="action_logout" value="1">
	</form>
	<!-- end prepage section -->
	<div id="page" class="">
	<?php include("masthead.php"); ?>

	<div id="baseDiv" class="date-20100621 video-info ">
				
	

		
<h1 class="main-header">Get started with your account</h1>

<div class="signup-main">
	<div id="pagination-top" style="padding: 25px 0pt 5px; text-align: right;"></div>
	  <table cellpadding="0" cellspacing="0" style="width:875px;">
		<tbody><tr>
			<td width="40%" valign="top">
	</td>
<td valign="top">
<div id="suSignupDiv">

	 <div class="signup-outer-frame" style="margin-left:0%; margin-right:0%; border: 1px solid #c3d9ff; width: 478px !important;">
		<div class="signup-inner-frame" style="width: 478px !important;">
	<form name="signupForm" id="signupForm" method="post" action="">
		<input type="hidden" name="current_form" value="signupForm">
		<input type="hidden" name="next" value="/">
		<table class="signup-table" cellpadding="4" cellspacing="0" style="background-color: #e8eefa; border: 1px solid #e8eefa;">
			<tr>
              <td width="25%">&nbsp;</td>
              <td width="72%">&nbsp;</td>
            </tr>
			<tr valign="top">
				<td class="loginFormLabel"><label for="username">		<span class="nowrap">Username:</span>
</label></td>
				<td class="formFieldSmall">
					<table border="0" cellpadding="2" cellspacing="0">
						<tr>
							<td valign="top">
								<input type="text" size="40" maxlength="20" id="username" name="username" value="" onload="clearUsernameStatus()" onchange="updateUsernameStatus()" onkeyup="clearUsernameStatus();goog.i18n.bidi.setDirAttribute(event,this);"/>
								<div id="check_username"></div>
								<div id="suggest_username" style="display: none;"></div>
								<div class="formFieldInfo">
Your username can only contain letters A-Z or numbers 0-9
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr valign="top">
				<td class="loginFormLabel"><label for="email">		<span class="nowrap">Email:</span>
</label></td>
				<td class="formFieldSmall">
					<table border="0" cellpadding="2" cellspacing="0">
						<tr>
							<td valign="top">
								<input type="text" size="40" maxlength="20" id="email" name="email" value=""/>
								<div class="formFieldInfo">
If you provide a fake email you won't be able to reset your password.
							</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr valign="top">
				<td class="loginFormLabel"><label for="password">		<span class="nowrap">Password:</span>
</label></td>
				<td class="formFieldSmall">
					<table border="0" cellpadding="2" cellspacing="0">
						<tr>
							<td valign="top">
								<input type="text" size="40" maxlength="20" id="password" name="password" value=""/>
								<div class="formFieldInfo">
Make it something secure.
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="loginFormLabel" valign="top"><div id="termsOfUseLabel" name="termsOfUseLabel">
					<label for="termsOfUseResponse">
Terms of Use:
					</label>
				</td>
				<td class="formFieldSmall">
					<div style="padding: 0 10px 10px 0;">Please review the redst0ne Terms of Service and YuoTueb Terms of Use below:</div>
					<textarea id="terms_of_services" cols="60" rows="3" readonly="readonly" onclick="_gel('terms_of_services').rows = '10';">﻿Terms of Service

don't upload illegal or discriminatory/offense stuff, thanks
</textarea>
					<div style="padding: 10px 10px 10px 0;">Uploading materials that you do not own is a copyright violation and against the law. If you upload material you do not own, your account will be deleted.</div>

					<div style="padding: 0 10px 10px 0;">
By clicking 'I accept' below you are agreeing to the <a href="/web/20100621135713/http://www.youtube.com/t/terms">YouTube Terms of Use</a>, <a href="https://web.archive.org/web/20100621135713/https://www.google.com/accounts/TOS?loc=US&amp;hl=en">Google Terms of Service</a> and <a href="/web/20100621135713/http://www.youtube.com/t/privacy">Privacy Policy</a>.
					</div>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<button type="button" id="button-signin" onclick="validateUsernameWhenSubmit(); return false;;return false;" class=" yt-uix-button yt-uix-button-primary"><span class="yt-uix-button-content">I accept</span></button>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<input type="hidden" name="email" value="">
		<input type="hidden" name="service_key" value="">
		<input type="hidden" name="session_key" value="">
	</form>
</div></div></div>
</td>
</tr>
</tbody></table>
</div> <div class="clear"> </div>

<script type="text/javascript">
	document.signupForm.username.focus();
	var validUsernameStatus = true;
	var usernameStatusMessage = '';

	function clearUsernameStatus() {
		_gel('check_username').innerHTML = '';
	}

	function validateUsernameWhenSubmit() {
		if (validUsernameStatus) {
			document.getElementById("signupForm").submit();
		} else {
			document.signupForm.username.focus();
			alert(usernameStatusMessage);
		} 
	}

	function updateUsernameStatus() {
		var username = document.signupForm.username.value;
		if (username != "") {
			showAjaxDiv('check_username', '/user_ajax?action_check_username&user=' + username + '&suggest=1');
		}
		else{
			clearUsernameStatus();
		}
	}

	function showAjaxDiv(divName, url) {
		var callback = function(req) {
			showAjaxDivResponse(req, divName)
		};
		yt.net.ajax.sendRequest(url, { method: "GET", onComplete: callback });
	}

	function showAjaxDivResponse(req, divName) {
		_gel(divName).innerHTML = yt.net.ajax.getNodeValue(req.responseXML, 'html_content');
		usernameStatusMessage = _gel('status_msg').innerHTML;
		if (_gel('user_status').innerHTML == 'username_ok') {
			validUsernameStatus = true;
		} else {
			validUsernameStatus = false;
		}
		_showdiv(divName);

		divName = 'suggest_username';
		var suggestions = yt.net.ajax.getNodeValue(req.responseXML, 'suggestions');
		if (suggestions != null) {
			var usernames = suggestions.split(',');
			var content = '';
			for (var i = 0; i < usernames.length; i++) {
				var username = usernames[i];
				var onclick = "onclick=fillInUsername('" + username + "'); return false;";
				content += '<input type="radio"' + onclick + '>' + username + '</input><br>';
			}
			_gel(divName).innerHTML = content;
			_showdiv(divName);
		} else {
			_hidediv(divName);
		}
	}

	function fillInUsername(username) {
		document.signupForm.username.value = username;
		_hidediv('check_username');
		_hidediv('suggest_username');
		updateUsernameStatus();
	}

</script>


		<?php include("footer.php");?>
	<div> 

	</div>
			
	
	
	<script>
		

		
	
	if (document.documentElement["getBoundingClientRect"]) {
		yt.events.listen(window, 'scroll', yt.www.thumbnailDelayLoad.loadImages);
		yt.events.listen(window, 'resize', yt.www.thumbnailDelayLoad.loadImages);
	}
	yt.www.thumbnailDelayLoad.loadImages();



		
		
			yt.setTimeout(function() {
				window.yt.www.suggest.install(document.searchForm,
						document.searchForm.search_query,
						'en','close',
						'Suggestions',
						'Web search',
						-1,
						null);
					}, 100);

	</script>
	
	<script id="legacy-user-datastore" style="behavior:url('/web/20100621135713im_/http://www.youtube.com/create_account?next=%2F#default#userdata')"></script>
	
	


	<!-- end postpage section -->
	<!--[if IE]></div><![endif]-->
</body>

</html>