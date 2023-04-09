<!DOCTYPE html>
<html lang="en" dir="ltr">
		<?php include("metadata.php"); ?>
	<!-- begin postpage section -->
	<script>
		
		yt.setConfig({
			'XSRF_TOKEN': 'x7CvIuUdAH-v909dZSeuvVDWCs98MTI4MjAzNTYyOA==',
			'XSRF_FIELD_NAME': 'session_token'
		});
		yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


		yt.setConfig('XSRF_QL_PAIR', 'session_token=fVuLFuhPg02gset8lOFBLKUM3yF8MA==');



		yt.setConfig('LOGGED_IN', false);
	</script>

		


<script type="text/javascript">

	var moduleHelper = new yt.www.home.ModuleHelper('',
			false, true);
		moduleHelper.addModule('FEA');
		moduleHelper.addModule('REC');
		moduleHelper.addModule('POP');
		moduleHelper.addModule('PRO');
		moduleHelper.addModule('TOP');

	yt.pubsub.subscribe('init', function() {
		(function() {
			var sessionToken = '';
			var rootUrl = 'https://web.archive.org/web/20100816090028/http://www.youtube.com/';
			var locale = 'en_US';
			var serviceInfo = null;
			var isGaiaUser = false;
			var facebookAppKey = '7ff82e59b6b2fbd316cca35309e95df3';
			var tpDomain = 's.youtube-3rd-party.com';

			var autoshare = new yt.sharing.AutoShare(sessionToken, rootUrl, locale, serviceInfo,
					isGaiaUser, facebookAppKey, tpDomain);
			if (_gel('fb-login-btn')) {
				autoshare.registerConnectDialogLauncher(_gel('fb-login-btn'), 'facebook');
			}

			var gaiaChangedCallback = function(autoshare) {
				var isGaiaUser = autoshare.isGaiaUser();
				yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
				yt.style.setDisplayed('fb-promo-google-linked', isGaiaUser);

				if (isGaiaUser) {
					var link = _gel('fb-promo-google-linked-continue-to-fb');
					var fn = function() {
						autoshare.handleConnectService({currentTarget: _gel('fb-login-btn')});
					}
					link.onclick = fn;
				}
			}
			autoshare.addGaiaChangedCallback(gaiaChangedCallback);

			var canConnectCallback = function(autoshare) {
				var isGaiaUser = autoshare.isGaiaUser();
				yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
				yt.style.setDisplayed('fb-promo-google-linked', false);
				yt.style.setDisplayed('fb-promo-fb-linked', false);
				return isGaiaUser;
			}
			autoshare.addCanConnectCallback(canConnectCallback);

			var serviceChangedCallback = function(autoshare) {
				var serviceInfo = autoshare.getServiceInfo();
				for (var service in serviceInfo) {
					var info = serviceInfo[service];
					if (service == 'facebook' && info['is_connected']) {
						yt.style.setDisplayed('fb-promo-fb-linked', true);
						hideFbPromoAlert();
					}
				}
			};
			autoshare.addServiceChangedCallback(serviceChangedCallback);


			window['autoshare'] = autoshare;

			var prefs = yt.UserPrefs;
			var optOut = prefs.getFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT);
			if (!optOut) {
				_showdiv('fb-promo1');
			}

			// The user has "dismissed" the promo, i.e., clicked on the [x].
			// This is distinct from simply hiding the promo as a side effect.
			window.dismissFbPromoAlert = function() {
				prefs.setFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT, true);
				prefs.save();
				hideFbPromoAlert();
			};

			function hideFbPromoAlert() {
				_hidediv('fb-promo1');
			}
})();

	});
</script>



	<script>
		// Initialize the inline "edit subscription" link featurette in the
		// Recent Activity module.
		window['subui_'] = new yt.www.home.Subscriptions();
		yt.pubsub.subscribe('init', function() {
			window['subui_'].setCurrentLink(_gel('_firsteditsublink'));
		});
	</script>


				<script>
			if (window.yt.timing) {
				yt.timing.tick('ct');
			}
		</script>


</head>
<body class="date-20100816 en_US is-english watch5-active" dir="ltr">
 
	<!--[if IE]><div id="ie"><![endif]-->
	<!-- begin prepage section -->
	<form name="logoutForm" method="post" action="logout.php">
		<input type="hidden" name="action_logout" value="1">
	</form>
	<!-- end prepage section -->
	<div id="page" class="">
			<?php require("masthead.php"); ?>
	<div id="baseDiv" class="date-20100816 video-info ">
			

		


<div id="homepage-main-content" class="homepage-non-interactive">






	<div id="dragdrop" style="overflow: hidden; clear: both;">



			
		

					<div id="feedmodule-REC" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="REC-titlebar">
				<div id="feed_recommended">
		<div class="fm-title-underlined-gray">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_recommended-titleText"><a href="videos.php">Recommended for You</a></span>
			</div>

				<div class="feedmodule-preamble" style="border-bottom: 1px dotted;">
					<a href="#" onclick="_showdiv('logged_out_rec_learn_more_box');return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Open');">Learn More</a>
				</div>

					<div class="feedmodule-updown">

			<span id="medit-REC" class="iyt-edit-link iyt-edit-link-gray">Edit</span>

<span id="mup-REC" class="up-button"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mdown-REC" class="down-button"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mclose-REC"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_recommended-content">

			<div id="REC-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/>
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Recommended for You</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('REC')"><img class="img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('REC')">close</div>
				<div id="REC-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="REC-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="REC-loading-icn-image" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				Too bad. I don't know how to or want to implement this.

			</div>
		</div>
	</div>


		<div id="REC-data" class="feedmodule-data">


				<div id="logged_out_rec_learn_more_box" class="side-announcement-box" style="margin: 5px 10px 5px 5px; padding: 5px; display: none; zoom: 1;">
		<div style="cursor: pointer; display:inline; float: right;" onclick="_hidediv('logged_out_rec_learn_more_box'); return false;" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/Rec_LearnMore_Close');"><img class="img-php-close-button master-sprite" style="background-position: -82px -712px;" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></div>

	<div style="color: black; padding-left: 5px;">
The "Recommended for You" module shows the most popular videos.
	</div>
</div>


						<div class="feedmodule-body grid-view">
		<div class="clearL">
		<?php
$statement = $mysqli->prepare("SELECT * FROM videos ORDER BY date DESC LIMIT 8");
//$statement->bind_param("s", $_POST['fr']); i have no idea what this is but we don't need it
$statement->execute();
$result = $statement->get_result();
if($result->num_rows !== 0){
	while($row = $result->fetch_assoc()) {
		echo '
				<div id="reco-'.$row['vid'].'" class="video-cell" style="width:24.5%">
<!--begin video card-->
	<div class="video-entry" style="position:relative">
		    <div class="hid" id="REMOVE-'.$row['vid'].'" style="position:absolute;top:0px;left:140px;z-index:1">
		        <img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite img-php-close-button"/>
		    </div>
<a href="watch.php?v='.$row['vid'].'" class="video-thumb ux-thumb-128" id="video-thumb-eMAQn3TrEUA-6134125"><span class="img"><img onload="" onclick="ieThumbEvent(event, this); " title="'.$row['videotitle'].'" alt="'.$row['videotitle'].'" src="content/thumb/'.$row['vid'].'.jpg" width="128px" height="96px" click=""></span>		
<span class="video-time">0:00</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-eMAQn3TrEUA">



			<div dir="ltr" class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="watch.php?v='.$row['vid'].'" rel="nofollow" title="'.$row['videotitle'].'" class="" id="video-short-title-'.$row['videotitle'].'">'.$row['videotitle'].'</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="watch.php?v='.$row['vid'].'" rel="nofollow" title="'.$row['videotitle'].'" class="" id="video-long-title-'.$row['vid'].'">'.$row['videotitle'].'</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-'.$row['vid'].'" dir="ltr" class="video-description">
				'.$row['description'].'
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-'.$row['vid'].'" class="video-date-added">2 months ago</span>

					<span id="video-num-views-'.$row['vid'].'" class="video-view-count">'.$row['views'].' views
</span>





				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>
</div></div>	<!--end video card-->';}}?>

		
	<div class="clear"></div>
	

		</div>



					<div id="feedmodule-POP" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="POP-titlebar">
				<div id="feed_popular">
		<div class="fm-title-underlined-gray">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_popular-titleText"><a href="/web/20100816090028/http://www.youtube.com/videos?s=pop" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/View_Popular/Logged_Out');">Videos Being Watched Now</a></span>
			</div>


					<div class="feedmodule-updown">

			<span id="medit-POP" class="iyt-edit-link iyt-edit-link-gray">Edit</span>

<span id="mup-POP" class="up-button"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mdown-POP" class="down-button"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mclose-POP"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_popular-content">

			<div id="POP-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/>
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Videos Being Watched Now</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('POP')"><img class="img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('POP')">close</div>
				<div id="POP-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="POP-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="POP-loading-icn-image" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="POP-data" class="feedmodule-data">



						<div class="feedmodule-body bigthumb-view">





			<div class="feeditem-bigthumb super-large-video ">
				<div class="feedmodule-thumbnail">	
	
	
	
		
	
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=Wi4g_U0hoOg&amp;feature=popular" class="video-thumb ux-thumb-224" id="video-thumb-Wi4g_U0hoOg-9228272"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://i4.ytimg.com/vi/Wi4g_U0hoOg/hqdefault.jpg" title="(PART 2) Mini Cannon Firing and Destroying Targets (Among the world's smallest guns)" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span>		
<span class="video-time">1:15</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-Wi4g_U0hoOg-9228272', null, 'Wi4g_U0hoOg', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>
</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=Wi4g_U0hoOg&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="‪(PART 2) Mini Cannon Firing and Destroying Targets (Among the world's smallest guns)‬‎" dir="ltr">(PART 2) Mini Cannon Firing and Destroying Target...</a>
		</div>
		<div>
				1,111,330 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/43287633">43287633</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div class="feedmodule-thumbnail">	
	
	
	
		
	
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=8BU9ulomBdM&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-8BU9ulomBdM-9508657"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://i1.ytimg.com/vi/8BU9ulomBdM/default.jpg" title="Baby Eminem: Not Afraid to Diss Michael J Fox!" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span>		
<span class="video-time">5:17</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-8BU9ulomBdM-9508657', null, '8BU9ulomBdM', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>
</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=8BU9ulomBdM&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="‪Baby Eminem: Not Afraid to Diss Michael J Fox!‬‎" dir="ltr">Baby Eminem: Not Afraid to Diss Michael J Fox!</a>
		</div>
		<div>
				434,221 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/barelypolitical">barelypolitical</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div class="feedmodule-thumbnail">	
	
	
	
		
	
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=feLCpfGniz8&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-feLCpfGniz8-6129604"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://i3.ytimg.com/vi/feLCpfGniz8/default.jpg" title="HOMOPHOBIC BATMAN - Start Here!" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span>		
<span class="video-time">3:25</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-feLCpfGniz8-6129604', null, 'feLCpfGniz8', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>
</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=feLCpfGniz8&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="‪HOMOPHOBIC BATMAN - Start Here!‬‎" dir="ltr">HOMOPHOBIC BATMAN - Start Here!</a>
		</div>
		<div>
				323,691 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/TotallySketch">TotallySketch</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>




			<div class="feeditem-bigthumb normal-size-video ">
				<div class="feedmodule-thumbnail">	
	
	
	
		
	
	
		
	
	
	
	
		
		
	
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=MKIvJRR9bxo&amp;feature=popular" class="video-thumb ux-thumb-128" id="video-thumb-MKIvJRR9bxo-3294527"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://i2.ytimg.com/vi/MKIvJRR9bxo/default.jpg" title="HOMOPHOBIC BATMAN - Gay" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');"></span>		
<span class="video-time">1:42</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-MKIvJRR9bxo-3294527', null, 'MKIvJRR9bxo', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>
</div>
				
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=MKIvJRR9bxo&amp;feature=popular" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/POP/Logged_Out');" title="‪HOMOPHOBIC BATMAN - Gay‬‎" dir="ltr">HOMOPHOBIC BATMAN - Gay</a>
		</div>
		<div>
				314,285 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/TotallySketch">TotallySketch</a>
			</nobr>
		</div>
	</div>

				<div class="spacer">&nbsp;</div>
			</div>

		<div class="spacer">&nbsp;</div>
	</div>

	
		</div>
	</div>
	<div class="clear"></div>
	

		</div>

		

					<div id="feedmodule-PRO" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="PRO-titlebar">
				<div id="feed_promoted">
		<div class="fm-title-underlined-blue">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_promoted-titleText">Featured Videos</span>
			</div>


					<div class="feedmodule-updown">


<span id="mup-PRO" class="up-button"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mdown-PRO" class="down-button"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_promoted-content">

			<div id="PRO-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/>
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Featured Videos</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('PRO')"><img class="img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('PRO')">close</div>
				<div id="PRO-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="PRO-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="PRO-loading-icn-image" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="PRO-data" class="feedmodule-data">



						<div class="feedmodule-body grid-view">
		<div class="clearL">
	
				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=XlVEmG4j2fI&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-XlVEmG4j2fI-2891244"><span class="img"><img onload="" thumb="http://i1.ytimg.com/vi/XlVEmG4j2fI/default.jpg" onclick="ieThumbEvent(event, this); " title="Chris Brown Shows Off His Dance Moves" alt="Chris Brown Shows Off His Dance Moves" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span>		
<span class="video-time">8:09</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-XlVEmG4j2fI-2891244', null, 'XlVEmG4j2fI', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-XlVEmG4j2fI">



			<div dir="ltr" class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=XlVEmG4j2fI&amp;feature=fvhl" rel="nofollow" title="Chris Brown Shows Off His Dance Moves" class="" id="video-short-title-XlVEmG4j2fI" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Chris Brown Shows Off His Dance ...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=XlVEmG4j2fI&amp;feature=fvhl" rel="nofollow" title="Chris Brown Shows Off His Dance Moves" class="" id="video-long-title-XlVEmG4j2fI" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Chris Brown Shows Off His Dance Moves</a>

						<div class="video-logos">
	</div>

				</div>
			</div>

				<div id="video-description-XlVEmG4j2fI" dir="ltr" class="video-description">
					Chris Brown wows the crowd by dancing to old and new party jams including "Teach M...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-XlVEmG4j2fI" class="video-date-added">1 week ago</span>

					<span id="video-num-views-XlVEmG4j2fI" class="video-view-count">98,218 views
</span>



					<span class="video-username"><a id="video-from-username-XlVEmG4j2fI" class="hLink" href="/web/20100816090028/http://www.youtube.com/user/RapUpTV">RapUpTV</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=c_stcgW8E4o&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-c_stcgW8E4o-7400074"><span class="img"><img onload="" thumb="http://i4.ytimg.com/vi/c_stcgW8E4o/default.jpg" onclick="ieThumbEvent(event, this); " title="Katy Perry California Gurls Parody!  Key of Awesome #22" alt="Katy Perry California Gurls Parody!  Key of Awesome #22" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span>		
<span class="video-time">3:15</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-c_stcgW8E4o-7400074', null, 'c_stcgW8E4o', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-c_stcgW8E4o">



			<div dir="ltr" class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=c_stcgW8E4o&amp;feature=fvhl" rel="nofollow" title="Katy Perry California Gurls Parody!  Key of Awesome #22" class="" id="video-short-title-c_stcgW8E4o" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Katy Perry California Gurls Paro...</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=c_stcgW8E4o&amp;feature=fvhl" rel="nofollow" title="Katy Perry California Gurls Parody!  Key of Awesome #22" class="" id="video-long-title-c_stcgW8E4o" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Katy Perry California Gurls Parody!  Key of Awesome #22</a>

						<div class="video-logos">
		<a href="/web/20100816090028/http://www.youtube.com/watch?v=c_stcgW8E4o&amp;feature=fvhl&amp;hd=1"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite hd-video-logo video-logo"/></a>
	</div>

				</div>
			</div>

				<div id="video-description-c_stcgW8E4o" dir="ltr" class="video-description">
					Katy Perry California Gurls PARODY!  If you ain't rich, they're going nowhere near...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-c_stcgW8E4o" class="video-date-added">2 months ago</span>

					<span id="video-num-views-c_stcgW8E4o" class="video-view-count">7,962,625 views
</span>



					<span class="video-username"><a id="video-from-username-c_stcgW8E4o" class="hLink" href="/web/20100816090028/http://www.youtube.com/user/barelypolitical">barelypolitical</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=HSaRmc6WzRg&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-HSaRmc6WzRg-8742413"><span class="img"><img onload="" thumb="http://i1.ytimg.com/vi/HSaRmc6WzRg/default.jpg" onclick="ieThumbEvent(event, this); " title="Fast food rage customer jailed" alt="Fast food rage customer jailed" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span>		
<span class="video-time">1:23</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-HSaRmc6WzRg-8742413', null, 'HSaRmc6WzRg', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-HSaRmc6WzRg">



			<div dir="ltr" class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=HSaRmc6WzRg&amp;feature=fvhl" rel="nofollow" title="Fast food rage customer jailed" class="" id="video-short-title-HSaRmc6WzRg" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Fast food rage customer jailed</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=HSaRmc6WzRg&amp;feature=fvhl" rel="nofollow" title="Fast food rage customer jailed" class="" id="video-long-title-HSaRmc6WzRg" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Fast food rage customer jailed</a>

						<div class="video-logos">
		<a href="/web/20100816090028/http://www.youtube.com/watch?v=HSaRmc6WzRg&amp;feature=fvhl&amp;hd=1"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite hd-video-logo video-logo"/></a>
	</div>

				</div>
			</div>

				<div id="video-description-HSaRmc6WzRg" dir="ltr" class="video-description">
					A prison sentence has been given to a US fast food customer who became incensed th...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-HSaRmc6WzRg" class="video-date-added">6 days ago</span>

					<span id="video-num-views-HSaRmc6WzRg" class="video-view-count">321,791 views
</span>



					<span class="video-username"><a id="video-from-username-HSaRmc6WzRg" class="hLink" href="/web/20100816090028/http://www.youtube.com/user/itnnews">itnnews</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

				<div class="video-cell" style="width:24.5%">



	


	<div class="video-entry">



				
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=QTiFml51wWI&amp;feature=fvhl" class="video-thumb ux-thumb-128" id="video-thumb-QTiFml51wWI-6232407"><span class="img"><img onload="" thumb="http://i2.ytimg.com/vi/QTiFml51wWI/default.jpg" onclick="ieThumbEvent(event, this); " title="Annoying Orange: Crabapple" alt="Annoying Orange: Crabapple" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" click="" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');"></span>		
<span class="video-time">2:23</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-QTiFml51wWI-6232407', null, 'QTiFml51wWI', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>



		<div class="video-main-content video-title-one-line" id="video-main-content-QTiFml51wWI">



			<div dir="ltr" class="video-title ">
				<div class="video-short-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=QTiFml51wWI&amp;feature=fvhl" rel="nofollow" title="Annoying Orange: Crabapple" class="" id="video-short-title-QTiFml51wWI" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Annoying Orange: Crabapple</a>

				</div>
				<div class="video-long-title">
						
	
	

		
	
		
	
		

	
	
	<a href="/web/20100816090028/http://www.youtube.com/watch?v=QTiFml51wWI&amp;feature=fvhl" rel="nofollow" title="Annoying Orange: Crabapple" class="" id="video-long-title-QTiFml51wWI" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/PRO/Logged_Out');">Annoying Orange: Crabapple</a>

						<div class="video-logos">
		<a href="/web/20100816090028/http://www.youtube.com/watch?v=QTiFml51wWI&amp;feature=fvhl&amp;hd=1"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite hd-video-logo video-logo"/></a>
	</div>

				</div>
			</div>

				<div id="video-description-QTiFml51wWI" dir="ltr" class="video-description">
					Orange meets one of the crabbiest fruits ever.

RETWEET: http://bit.ly/9UNKyU

...
				</div>
			

      

			<div class="video-facets">
						<span id="video-added-time-QTiFml51wWI" class="video-date-added">1 week ago</span>

					<span id="video-num-views-QTiFml51wWI" class="video-view-count">2,713,144 views
</span>



					<span class="video-username"><a id="video-from-username-QTiFml51wWI" class="hLink" href="/web/20100816090028/http://www.youtube.com/user/realannoyingorange">realannoyingorange</a></span>


				
			</div>	
			
		</div>	


		<div class="video-clear-list-left"></div>




	</div>	
</div>	

		</div>
	</div>


		</div>
	</div>
	<div class="clear"></div>
	

		</div>

		

					<div id="feedmodule-TOP" class="feedmodule-anchor">
				<div class="feedmodule-modheader" id="TOP-titlebar">
				<div id="feed_top_videos">
		<div class="fm-title-underlined-gray">
			<div class="fm2-title">
				<span class="fm2-titleText" id="feed_top_videos-titleText"><a href="/web/20100816090028/http://www.youtube.com/videos?s=pop" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/View_TopVideos/Logged_Out');">Most Popular</a></span>
			</div>


					<div class="feedmodule-updown">


<span id="mup-TOP" class="up-button"><img class="master-sprite img-php-up-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mdown-TOP" class="down-button"><img class="master-sprite img-php-down-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span><span id="mclose-TOP"><img class="master-sprite img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></span></div>


		</div>
	</div>

	</div>

	<div class="clear" id="feed_top_videos-content">

			<div id="TOP-options" class="opt-pane" style="display: none;">
		<div class="opt-box-top">
			<img class="homepage-sprite img-php-opt-box-caret" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/>
		</div>
		<div class="opt-banner">
			<div class="opt-links">
				<div class="opt-edit">Editing: Most Popular</div>
				<div class="opt-close opt-close-button" onclick="moduleHelper.closeOptionsPane('TOP')"><img class="img-php-close-button" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif"/></div>
				<div class="opt-close opt-close-text" onclick="moduleHelper.closeOptionsPane('TOP')">close</div>
				<div id="TOP-loading-msg" class="opt-loading-msg" style="display: none;">
Saving...
				</div>
				<div id="TOP-loading-icn" class="opt-loading-icn" style="display: none;">
					<img width="16" id="TOP-loading-icn-image" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" image="http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="opt-main">
			<div class="opt-simple-msg">
				Want to customize this homepage?

				<a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US<mpl=sso" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignIn/EditModuleBox');">Sign In</a> or <a href="https://web.archive.org/web/20100816090028/https://www.google.com/accounts/LogoutWarning?continue=http%3A%2F%2Fwww.youtube.com%2Fcreate_account%3Fnext%3DNone<mpl=sso&amp;hl=en_US&amp;service=youtube" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/LoginSuggest/SignUp/EditModuleBox');">Sign Up</a> now!

			</div>
		</div>
	</div>


		<div id="TOP-data" class="feedmodule-data">



						<div class="feedmodule-body compressed-view">
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=24" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/24');">Entertainment</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=nGawAhRjtoA&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-nGawAhRjtoA-693272"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="Monster High™ Fright Song" thumb="http://i3.ytimg.com/vi/nGawAhRjtoA/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/24');"></span>		
<span class="video-time">2:56</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-nGawAhRjtoA-693272', null, 'nGawAhRjtoA', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=nGawAhRjtoA&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/24');" title="‪Monster High™ Fright Song‬‎" dir="ltr">Monster High™ Fright Song</a>
		</div>
		<div>
				962,966 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/MonsterHigh">MonsterHigh</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=10" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/10');">Music</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=EGh9zlN6eLo&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-EGh9zlN6eLo-5230788"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="Lady Gaga with Semi Precious Weapons (Official)" thumb="http://i2.ytimg.com/vi/EGh9zlN6eLo/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/10');"></span>		
<span class="video-time">3:57</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-EGh9zlN6eLo-5230788', null, 'EGh9zlN6eLo', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=EGh9zlN6eLo&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/10');" title="‪Lady Gaga with Semi Precious Weapons (Official)‬‎" dir="ltr">Lady Gaga with Semi Precious Weapons ...</a>
		</div>
		<div>
				3,342,155 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/lollapalooza">lollapalooza</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/news" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/25');">News &amp; Politics</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=Nabo1iTcA5w&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-Nabo1iTcA5w-4355162"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="August 10, 2010- America's Got Talent-Jackie Evancho.wmv" thumb="http://i3.ytimg.com/vi/Nabo1iTcA5w/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/25');"></span>		
<span class="video-time">3:53</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-Nabo1iTcA5w-4355162', null, 'Nabo1iTcA5w', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=Nabo1iTcA5w&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/25');" title="‪August 10, 2010- America's Got Talent-Jackie Evancho.wmv‬‎" dir="ltr">August 10, 2010- America's Got Talent...</a>
		</div>
		<div>
				1,108,350 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/tycoongambler">tycoongambler</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=1" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/1');">Film &amp; Animation</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=9_PxibeYqfc&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-9_PxibeYqfc-2924183"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="STEP UP 3D - Legacy TV Spot: 15" thumb="http://i2.ytimg.com/vi/9_PxibeYqfc/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/1');"></span>		
<span class="video-time">0:17</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-9_PxibeYqfc-2924183', null, '9_PxibeYqfc', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=9_PxibeYqfc&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/1');" title="‪STEP UP 3D - Legacy TV Spot: 15‬‎" dir="ltr">STEP UP 3D - Legacy TV Spot: 15</a>
		</div>
		<div>
				122,460 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/StepUpMovie">StepUpMovie</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/sports" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/17');">Sports</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=vm7jA4yaPCg&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-vm7jA4yaPCg-1635525"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="HD Starcraft 2 Tester v TheSTC g2 p1/2" thumb="http://i3.ytimg.com/vi/vm7jA4yaPCg/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/17');"></span>		
<span class="video-time">7:31</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-vm7jA4yaPCg-1635525', null, 'vm7jA4yaPCg', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=vm7jA4yaPCg&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/17');" title="‪HD Starcraft 2 Tester v TheSTC g2 p1/2‬‎" dir="ltr">HD Starcraft 2 Tester v TheSTC g2 p1/2</a>
		</div>
		<div>
				98,444 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/HDstarcraft">HDstarcraft</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=26" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/26');">Howto &amp; Style</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=0O-fPGn8uQc&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-0O-fPGn8uQc-5913215"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="BACK TO THE BASICS W/ ANOWA (THE NIGERIAN POWERHOUSE)" thumb="http://i1.ytimg.com/vi/0O-fPGn8uQc/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/26');"></span>		
<span class="video-time">3:23</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-0O-fPGn8uQc-5913215', null, '0O-fPGn8uQc', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=0O-fPGn8uQc&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/26');" title="‪BACK TO THE BASICS W/ ANOWA (THE NIGERIAN POWERHOUSE)‬‎" dir="ltr">BACK TO THE BASICS W/ ANOWA (THE NIGE...</a>
		</div>
		<div>
				10,359 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/MissAnowa">MissAnowa</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=28" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/28');">Science &amp; Technology</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=OISkTYqK2jo&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-OISkTYqK2jo-3727352"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="What's Up with Apple: iTV, Verizon, iPod Touch" thumb="http://i4.ytimg.com/vi/OISkTYqK2jo/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/28');"></span>		
<span class="video-time">4:51</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-OISkTYqK2jo-3727352', null, 'OISkTYqK2jo', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=OISkTYqK2jo&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/28');" title="‪What's Up with Apple: iTV, Verizon, iPod Touch‬‎" dir="ltr">What's Up with Apple: iTV, Verizon, i...</a>
		</div>
		<div>
				45,801 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/SoldierKnowsBest">SoldierKnowsBest</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?c=2" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/2');">Autos &amp; Vehicles</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=DdHbRKAeDks&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-DdHbRKAeDks-6849012"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="California Visitors" thumb="http://i1.ytimg.com/vi/DdHbRKAeDks/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/2');"></span>		
<span class="video-time">4:28</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-DdHbRKAeDks-6849012', null, 'DdHbRKAeDks', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=DdHbRKAeDks&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/2');" title="‪California Visitors‬‎" dir="ltr">California Visitors</a>
		</div>
		<div>
				14,183 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/RedneckRickem">RedneckRickem</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?s=mp" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/0%26s%3Dmp');">Most Viewed</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=UdJ0E7HbTKc&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-UdJ0E7HbTKc-9621939"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="Return of the Jedi Missing Lightsaber Scene" thumb="http://i2.ytimg.com/vi/UdJ0E7HbTKc/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmp');"></span>		
<span class="video-time">0:56</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-UdJ0E7HbTKc-9621939', null, 'UdJ0E7HbTKc', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=UdJ0E7HbTKc&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmp');" title="‪Return of the Jedi Missing Lightsaber Scene‬‎" dir="ltr">Return of the Jedi Missing Lightsaber...</a>
		</div>
		<div>
				460,004 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/TheForcenet">TheForcenet</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
			<div class="feeditem-compressed">


				<div class="feeditem-compressed-category-title">
					<div>
						<a class="hLink" href="/web/20100816090028/http://www.youtube.com/videos?s=mf" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/CategoryTitle/Logged_Out/0%26s%3Dmf');">Top Favorited</a>
					</div>
				</div>

				<div class="TOP-data compressed-form-content">
					<div class="clear">
						<div class="feedmodule-thumbnail">
								
	
	
	
		
	
	
		
	
	
	
	
		
		
	
			
	
		

		

<a href="/web/20100816090028/http://www.youtube.com/watch?v=992zi9V3oiQ&amp;feature=topvideos" class="video-thumb ux-thumb-128" id="video-thumb-992zi9V3oiQ-8039934"><span class="img"><img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" title="Asian Man vs. Wild - Australian Outback" thumb="http://i2.ytimg.com/vi/992zi9V3oiQ/default.jpg" onclick="ieThumbEvent(event, this); " onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmf');"></span>		
<span class="video-time">4:18</span><span class="video-actions"><button type="button" class=" yt-uix-button yt-uix-button-short" onclick="yt.www.watch.quicklist.clickedAddIcon_w5('video-thumb-992zi9V3oiQ-8039934', null, '992zi9V3oiQ', '', '');return false;"><span class="yt-uix-button-content"><strong>+</strong></span></button></span><span class="video-in-quicklist">Added to <br/> queue</span></a>

						</div>
						
						
	<div class="feedmodule-singleform-info">

		<div class="video-title">
			<a href="/web/20100816090028/http://www.youtube.com/watch?v=992zi9V3oiQ&amp;feature=topvideos" onmousedown="yt.analytics.urchinTracker('/Events/Home/PersonalizedHome/TOP/Logged_Out/0%26s%3Dmf');" title="‪Asian Man vs. Wild - Australian Outback‬‎" dir="ltr">Asian Man vs. Wild - Australian Outback</a>
		</div>
		<div>
				167,208 views

		</div>
		<div>
			<nobr>
			<a href="/web/20100816090028/http://www.youtube.com/user/yourchonny">yourchonny</a>
			</nobr>
		</div>
	</div>

						<div class="spacer">&nbsp;</div>
					</div>
				</div>

				<div class="spacer">&nbsp;</div>
			</div>
		<div class="spacer">&nbsp;</div>
	</div>

	
		</div>
	</div>
	<div class="clear"></div>
	

		</div>

			</div>

	<div class="main-spacer-bottom"></div>
</div> <!-- end homepage-main-content -->

<div id="homepage-side-content">

	<script type="text/javascript">
		yt.setConfig('PYV_IS_ALLOWED', true);
		yt.setConfig('PYV_AD_CHANNEL', 'pyv-top-right-homepage pyv-top-right-homepage-us logged-out');
			yt.setMsg({
		'RENTAL': "Rental",
		'VIEWS': "views"
	});

	</script>


	

<div id="ppv-placeholder" style="display: none;">
		<div class="pyv-large-thumb">
		<a class="large-thumb" title="'Jackass 3D' Trailer HD" href="/web/20100816090028/http://www.youtube.com/watch?v=fKwjU_pSSW4&amp;feature=fvhr">
			<img src="https://web.archive.org/web/20100816090028im_/http://i3.ytimg.com/vi/fKwjU_pSSW4/hqdefault.jpg" alt="'Jackass 3D' Trailer HD">
		</a>
		<h3>
			<a title="'Jackass 3D' Trailer HD" href="/web/20100816090028/http://www.youtube.com/watch?v=fKwjU_pSSW4&amp;feature=fvhr">
				<span class="title-label">
						<span class="duration">1:33</span>
					'Jackass 3D' Trailer HD
				</span>
				<span class="watch-video-label">
					<img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite">
Watch this video
				</span>
			</a>
		</h3>
		<p class="description">For more info on 'Jackass 3D' visit: http://www.hollywood.com</p>
		<p class="extra-info">
			<span class="promoted-label">
				<a href="https://web.archive.org/web/20100816090028/http://www.google.com/support/youtube/bin/answer.py?hl=en&amp;answer=143421">Featured Video</a>
			</span>
				<a href="/web/20100816090028/http://www.youtube.com/user/hollywoodstreams?feature=dka">hollywoodstreams</a>
					<span class="stat">
1,116,134 views
	</span>

			&nbsp; 		</p>
	</div>


</div>


			

		<div id="pyv-placeholder"></div>

	<!-- Begin ad tag -->

		<div id="ad_creative_2" class="ad-div homepage-side-block">




	

		
		
	<input type="hidden" id="pvaHl" value="en"/>
	<input type="hidden" id="pvaTag" value="http://ad-g.doubleclick.net/adj/com.ythome/_default;sz=399x299;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_2;kap=0;tile=2;"/>
	<input type="hidden" id="burl" value="http://www.youtube.com/pva/"/>
	<input type="hidden" id="canv" value="False"/>
	<input type="hidden" id="tdl" value="http://www.youtube.com/"/>
	<input type="hidden" id="yeurl" value="http://s.ytimg.com/yt/swf/yvaexpandable-vfl182182.swf"/>




	
	<script type="text/javascript">
		if (yt.timing) {
			yt.timing['addomain']="ad-g.doubleclick.net";
		}
		ord = Math.random()*10000000000000000;
		add_timestamp = (Math.floor(Math.random() * 100) < 5);
		if (add_timestamp) {
			kts = new Date().getTime();
			document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100816090028/http://ad-g.doubleclick.net/adj/com.ythome/_default;sz=399x299;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_2;kap=0;tile=2;kts='+ kts + ';ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
		} else {
			document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100816090028/http://ad-g.doubleclick.net/adj/com.ythome/_default;sz=399x299;klg=en;kt=K;kga=-1;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_2;kap=0;tile=2;ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
		}
	</script>

			<div style="font-size: 10px; padding-top: 3px;" class="alignC grayText">
				<a href="/web/20100816090028/http://www.youtube.com/t/ads_preferences">Advertisement</a>

			</div>

		</div>



	<!-- End ad tag -->



		<div id="iyt-login-suggest-side-box" class="homepage-side-block">
				
	
	
	<?php
	if(!isset($_SESSION['profileuser3'])) {
		echo '
	<div id="iyt-login-suggest-side-box" class="yt-alert yt-alert-announce yt-rounded">
			<img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div class="yt-alert-content">
									<strong>Want to customize this homepage?
</strong><br/>

			<a href="login.php">Sign In</a> or <a href="create_account.php">Sign Up</a> now!


		</div>
		
	</div>


		</div>'; } ?>



			<div class="homepage-side-block hid" id="homepage-chrome-side-promo">
			<div id="side-announcement-box">
				
	
	
	
	<div class="yt-alert yt-alert-info yt-rounded">
		
		<div id="chrome-promo-hp" class="yt-alert-content">
						




	<div id="chrome-promo-hp">
		<a href="https://web.archive.org/web/20100816090028/http://www.google.com/chrome/index.html?brand=CHFH&amp;utm_source=en-et-yt-ftr-lx&amp;utm_medium=et&amp;utm_campaign=en&amp;hl=en-US" id="chrome-link-hp" style="padding: 0;">
			<button class="master-sprite chrome-icon"></button>
			<div class="textblock">
				<div class="tagline">Try YuoTueb in a resource-hogging browser</div>
				<div class="link">Download Google Chrome</div>
			</div>
			<div class="clear"></div>
		</a>
	</div>

		</div>
		
			<button onclick="_hidediv(this.parentNode);dismissChromePromoAlert();" class="close master-sprite">
				close
			</button>
	</div>

			</div>
		</div>

	</div>


	<div class="clear"></div>

	<div class="homepage-side-block">
	<div id="homepage-whats-new">
			<h2>What's New</h2>
	
		<h3><a href="https://web.archive.org/web/20100816090028/http://www.youtube.com/music">2010 layout</a></h3>
		<div class="entry">old one sucked....</div>

		<h3><a href="https://web.archive.org/web/20100816090028/http://www.youtube.com/leanback">no idea what to put here</a></h3>
		<div class="entry">i am Clueless</div>


			<h3>
				<a href="https://web.archive.org/web/20100816090028/http://youtube-global.blogspot.com/">join official discord server no cap</a>
			</h3>
			<div class="entry">
				<i>new discord server, you should join.....NOW! <a href="//discord.gg/yuotueb">vanity link</a></i>
			</div>
			
			<p class="alignR">
				<a href="https://web.archive.org/web/20100816090028/http://youtube-global.blogspot.com/">Read more in our Blog</a>
			</p>

	</div>
</div>


</div> <!-- end homepage-side-content -->

<div class="clear"></div>
<?php include("footer.php"); ?>
			<div id="quicklist" class="hid passive" data-active-ajax-url="" data-passive-ajax-url="quicklist.php" data-autohide-mode="off">
		<div id="quicklist-bar-container">
			<div id="quicklist-bar">
				<span id="quicklist-info">
<span class="yt-uix-button-group quicklist-active"><button type="button" class="master-sprite start start-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.prev"><img class="yt-uix-button-icon-quicklist-prev" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button><button type="button" class="master-sprite end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.next"><img class="yt-uix-button-icon-quicklist-next" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span><span class="yt-uix-button-group quicklist-passive"><button type="button" class="master-sprite start start-edge end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.play"><img class="yt-uix-button-icon-quicklist-play" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span><button type="button" class="reverse yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;"><span class="yt-uix-button-content">		<span class="quicklist-passive">Queue</span>
</span> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><div style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-media yt-uix-button-menu-text">		<ul>
			<li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clear()">
Clear all videos from your Queue
			</span></li>
				<li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.showPassive()">
Show your Queue
				</span></li>
		</ul>
</div></button>				</span>
				<span id="quicklist-controls">
<span class="yt-uix-button-group"><button type="button" class="master-sprite start quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.autoplay"><img class="yt-uix-button-icon-quicklist-autoplay" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">			<span class="quicklist-autoplay-off">Autoplay Off</span>
			<span class="quicklist-autoplay-on">Autoplay On</span>
</span></button><button type="button" class="master-sprite quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.shuffle"><img class="yt-uix-button-icon-quicklist-shuffle" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">			<span class="quicklist-shuffle-off">Shuffle Off</span>
			<span class="quicklist-shuffle-on">Shuffle On</span>
</span></button><button type="button" class="master-sprite end end-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.toggle"><img class="yt-uix-button-icon-quicklist-toggle" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span>				</span>
			</div>
		</div>
		<div id="quicklist-tray-container">
			<div id="quicklist-tray">
				<div id="quicklist-tray-passive" class="quicklist-passive"></div>
			</div>
			<div id="quicklist-loading">
				<img src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt="">
				<span>Loading...</span>
			</div>
		</div>
	</div>

	<div> 

	</div>
					<script>
			yt.setConfig('TIMING_ACTION', 'index');
		</script>

	
	
	<script>
			yt.setMsg({
				'QUEUE_CLEAR': 'Are you sure you wish to continue?'
			});
				yt.pubsub.subscribe('init', yt.www.watch.quicklist.init);
	
		

		
		yt.www.thumbnailDelayLoad.setFudgeFactor(0);
	
	if (document.documentElement["getBoundingClientRect"]) {
		yt.events.listen(window, 'scroll', yt.www.thumbnailDelayLoad.loadImages);
		yt.events.listen(window, 'resize', yt.www.thumbnailDelayLoad.loadImages);
	}
	yt.www.thumbnailDelayLoad.loadImages();

		yt.www.thumbnailDelayLoad.setLoadAllAtOnce(true);


		
			yt.events.listen(_gel('masthead-search-term'), 'focus', yt.www.home.ads.workaroundReset);
		
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
	
	<script id="legacy-user-datastore" style="behavior:url('/web/20100816090028im_/http://www.youtube.com/#default#userdata')"></script>
	
	


	<!-- end postpage section -->
	<!--[if IE]></div><![endif]-->
</body>

</html>