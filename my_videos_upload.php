<!DOCTYPE html>
<html lang="en" dir="ltr">

		

		<title>
		YouTube
				- &#x202a;Upload your video&#x202c;&lrm;
	</title>
<?php include("metadata.php"); ?>
<link rel="stylesheet" href="https://web.archive.org/web/20100805073632cs_/http://s.ytimg.com/yt/cssbin/www-the-rest-vfl181382.css">

<link rel="stylesheet" href="https://web.archive.org/web/20100805073632cs_/http://s.ytimg.com/yt/cssbin/www-upload-new-vfl180318.css">
	<!-- begin postpage section -->
	<script>
		
		yt.setConfig({
			'XSRF_TOKEN': 'V0zoS27z9sL21Cnawr1v-hVMBS18MTI4MTA4MDE5Mg==',
			'XSRF_FIELD_NAME': 'session_token'
		});
		yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


		yt.setConfig('XSRF_QL_PAIR', 'session_token=7cas5AETIBoks8en_PrluLuJztd8MA==');



		yt.setConfig('LOGGED_IN', true);
	</script>

			<script id="www-upload-new-js" src="https://web.archive.org/web/20100805073632js_/http://s.ytimg.com/yt/jsbin/www-upload-new-vfl180237.js"></script>

		<script type="text/javascript">

			yt.setMsg({
				'WARN_UPLOAD_CANCELLED': 'The upload was cancelled.',
				'ERROR_UPLOAD_FAILED': 'The upload failed due to an unknown error.',
				'ERROR_FILE_TOO_LARGE': 'The upload failed because the file is too large.',
				'WARN_INVALID_FORMAT': 'The file you are uploading may not be a valid video file.',
				'SUCCESS_UPLOAD_COMPLETE': 'Your file has been uploaded. We are now processing the video...',
				'SUCCESS_PROCESSING_COMPLETE': 'Your video will be live in a moment at:',
				'PROCESSING_VIDEO': 'Processing video...',
				'SUCCESS_SETTINGS_SAVED': 'Your video settings have been saved.',
				'WARN_SETTINGS_PENDING': 'Changes pending: your video settings will be saved once your upload is completed.',
				'ERROR_SETTINGS_SAVED': 'There was an error saving your video settings.',
				'SAVING_IN_PROGRESS': 'Saving...',
				'SAVE_CHANGES': 'Save changes',
				'RETRY': 'Upload queued: your upload will be retried after the remaining videos have completed.',
				'STARTING_UPLOAD': 'Starting upload...',
				'UPLOAD_TIME_REMAINING': 'About *** min. remaining...',
				'LESS_THAN_ONE_MINUTE': 'Less than a minute remaining...',
				'FINISHING_UPLOAD': 'Finishing upload...',
				'COMPLETED_UPLOAD': 'Upload completed',
				'PROCESSING_TIME_REMAINING': 'About *** min. remaining...',

				'ERROR_REVSHARE_SETTINGS_SAVED': 'There was an error saving your revenue sharing settings.',

				'UPLOAD_IN_PROGRESS_WARNING': 'Your upload is still in progress and will be lost if you navigate away from this page. Click \"Cancel\" to continue your upload.',

				'FINISHING_PROCESSING': 'Finishing processing...',
				'COMPLETED_PROCESSING': 'Processing completed'
			});

			yt.setMsg({

				'UF_ISSUE_1': 'The file you uploaded contains only audio and no video.',
				'UF_ISSUE_2': 'You uploaded an image file, not a video file.',
				'UF_ISSUE_3': 'The file you uploaded is too short.',
				'UF_ISSUE_4': 'You uploaded a MS movie maker project file, not a video file. The section on MS movie maker in <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">this article<\/a> will help you fix the problem.',
				'UF_ISSUE_5': 'The file you uploaded is not a properly formatted video file.',
				'UF_ISSUE_6': 'You uploaded a document file, not a video file. <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">This article<\/a> should help you.',
				'UF_ISSUE_7': 'You uploaded an archive file, not a video file. <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">This article<\/a> should help you.',
				'UF_ISSUE_101': 'We did not recognize the container format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
				'UF_ISSUE_102': 'We did not recognize the video codec format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
				'UF_ISSUE_103': 'We did not recognize the audio codec format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
				'UF_ISSUE_104': 'We see inconsistencies in the aspect ratios in your uploaded video file. If you see something odd about your file, you might want to take a look at <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=146402\" target=\"_blank\">this article<\/a> for more information.'

			});

			var options = {
				'javaUrl': 'https://web.archive.org/web/20100805073632/http://www.youtube.com/redirect?q=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fuploaderapi-vfl162728.jar&amp;event=upload_jar&amp;usg=fEigxnhkXdixdNF0zRQF4OGD8PM=',
				'flashUrl': 'https://web.archive.org/web/20100805073632/http://s.ytimg.com/yt/swf/uploaderapi-vfl151036.swf',
				'rupioUrl': 'https://web.archive.org/web/20100805073632/http://upload.youtube.com/upload/rupio',
				'locale': 'en_US',
				'uploadKey': 'E72FD322251E43A5-FD58142723DB792F',
				'restrictMechanism': '',
				'returnAddress': 'upload.youtube.com',
				'sessionKey': 'ut2Amuu0Vgxk1280993792.43',
				'firstTime': false,
				'isReadOnly': false,
				'processingUrl' : 'https://web.archive.org/web/20100805073632/http://upload.youtube.com/api/upload_feedback',
				'parentVideoId' : '',
				'allowOffWeb' : 'True',
				'enableXhr': false,
				'hasSeriesPlaylist' : false
			};

			var uploader = new yt.www.upload.Uploader(options);
		</script>
	
				<script type="text/javascript">
	(function() {

		var updateInfo = function(el, info) {
			if (el) {
				if (info.connected_as != '') {
					el.innerHTML = info.connected_as;
				}

				if (!info.is_connected) {
					var spinny_el = _gel('autoshare-spare-spinny');
					if (spinny_el) {
						el.innerHTML = spinny_el.innerHTML;
					} else {
						el.innerHTML = '-';
					}
				}
			}
		}

		var canConnectCallback = function(the_autoshare, service) {
			var is_gaia_user = the_autoshare.isGaiaUser();
			yt.style.setDisplayed('autoshare-google-nag', !is_gaia_user);
			yt.style.setDisplayed('autoshare-google-linked', false);
			yt.style.setDisplayed('autoshare-facebook-publish-nag', false);
			yt.style.setDisplayed('autoshare-facebook-feed-nag', false);
			yt.style.setDisplayed('autoshare-service-sharing-spinny-' + service, true);
			return is_gaia_user;
		}

		var serviceChangedCallback = function(the_autoshare) {
			var service_info = the_autoshare.getServiceInfo();
			for (var service in service_info) {
				var info = service_info[service];

				updateInfo(_gel('autoshare-service-sharing-info-' + service), info);
				yt.style.setDisplayed('autoshare-service-sharing-info-' + service, info.is_connected);
				yt.style.setDisplayed('autoshare-service-sharing-info-separator-' + service, info.is_connected);
				yt.style.setDisplayed('autoshare-service-sharing-disconnect-' + service, info.is_connected);
				yt.style.setDisplayed('autoshare-service-sharing-connect-' + service, !info.is_connected);
				yt.style.setDisplayed('autoshare-service-sharing-disable-' + service, info.is_connected && info.is_autosharing);
				yt.style.setDisplayed('autoshare-service-sharing-enable-' + service, info.is_connected && !info.is_autosharing);
				yt.style.setDisplayed('autoshare-service-sharing-spinny-' + service, false);

				if (service == 'facebook') {
					if (typeof(info.has_publish) != 'undefined') {
						yt.style.setDisplayed('autoshare-facebook-publish-nag', info.is_connected && info.is_autosharing && !info.has_publish);
					}
					if (typeof(info.has_feed) != 'undefined' && typeof(info.has_offline) != 'undefined') {
						yt.style.setDisplayed('autoshare-facebook-feed-nag', info.is_connected && (!info.has_feed || !info.has_offline));
					}
				}
			}
		}

		var gaiaChangedCallback = function(the_autoshare) {
			var is_gaia_user = the_autoshare.isGaiaUser();
			yt.style.setDisplayed('autoshare-google-nag', !is_gaia_user);
			yt.style.setDisplayed('autoshare-google-linked', is_gaia_user);
		}

		if (typeof(window.autoshare) == 'undefined') {
			var session_token = 'WVKMtC_XiSKF9aopp1x0vSamRK58MA==';
			var root_url = 'https://web.archive.org/web/20100805073632/http://upload.youtube.com';
			var locale = 'en_US';
			var service_info = {"orkut": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "twitter": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "facebook": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "reader": {"connected_as": "", "is_connected": false, "is_autosharing": false}};
			var is_gaia_user = false;
			var facebook_app_key = '7ff82e59b6b2fbd316cca35309e95df3';
			var tp_domain = 's.youtube-3rd-party.com';

			window.autoshare = new yt.sharing.AutoShare(
				session_token, root_url, locale, service_info,
				is_gaia_user, facebook_app_key, tp_domain);
		}

		window.autoshare.addCanConnectCallback(canConnectCallback);
		window.autoshare.addServiceChangedCallback(serviceChangedCallback);
		window.autoshare.addGaiaChangedCallback(gaiaChangedCallback);

			yt.pubsub.subscribe('init', function() { window.autoshare.doOnLoad(true); });
	})();
	</script>




		

</head>
<body class="date-20100805 en_US is-english watch5-active" dir="ltr">
	<!--[if IE]><div id="ie"><![endif]-->
	<!-- begin prepage section -->
	<form name="logoutForm" method="post" action="/web/20100805073632/http://www.youtube.com/">
		<input type="hidden" name="action_logout" value="1">
	</form>
	<!-- end prepage section -->
	<div id="page" class="">
			<?php include("masthead.php"); ?>
	<div id="baseDiv" class="date-20100805 video-info ">
			

				<div id="upload-page">


			<h1 class="header">
Video File Upload
			</h1>
			<div id="top-row">

			</div>

			<div id="left-col">

				

	
	
	
	<div id="restrict-error-gears" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
			<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div id="restrict-error-message" class="yt-alert-content">
						You do not have Gears installed or enabled.
		</div>
		
			<button onclick="_hidediv(this.parentNode);" class="close master-sprite">
				close
			</button>
	</div>


	
	
	
	<div id="restrict-error-java" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
			<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div id="restrict-error-message" class="yt-alert-content">
						You do not have Java installed or enabled. You can <a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=185316">learn more</a> about enabling Java, or go back and try the <a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload">standard upload page</a>.

		</div>
		
			<button onclick="_hidediv(this.parentNode);" class="close master-sprite">
				close
			</button>
	</div>


	
	
	
	<div id="restrict-error-xhr" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
			<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div id="restrict-error-message" class="yt-alert-content">
						You are not using an HTML5 compatible browser.
		</div>
		
			<button onclick="_hidediv(this.parentNode);" class="close master-sprite">
				close
			</button>
	</div>


	
	
	
	<div id="alert-template" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
			<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div class="yt-alert-content">
		</div>
		
			<button onclick="_hidediv(this.parentNode);" class="close master-sprite">
				close
			</button>
	</div>




<div id="active-uploads-contain"></div>

<div id="upload-item-template" class="upload-item-container upload-outer-box hid">
	<div class="upload-inner-box">

		<div class="upload-drop">
        <?php
    if(!isset($_SESSION['profileuser3'])) {
        echo('<script>
             window.location.href = "index.php";
             </script>');
    }
   if (isset($_POST['submit'])){
//     if(empty($_POST['fileToUpload'])) {
         error_reporting(E_ALL);
 ini_set('display_errors', '1');
//         echo('<script>
//         window.location.href = "index.php?err=No video file.";
//         </script>');
//     }
    if(empty($_POST['videotitle'])) {
        echo('<script>
        window.location.href = "index.php?err=No title.";
        </script>');
    }
    if(empty($_POST['bio'])) {
        echo('<script>
        window.location.href = "index.php?err=No description.";
        </script>');
    }
    if (strlen($_POST['videotitle']) > 15) {
        echo('<script>
        window.location.href = "index.php?err=Video title too long.";
        </script>');
        exit();
    }
       if(!isset($_SESSION['profileuser3'])) {
        echo '<script>
        window.location.href = "login.php";
        </script>';
       }
       function randstr($len, $charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-"){
           return substr(str_shuffle($charset),0,$len);
       }
       $v_id = randstr(11);
       $target_dir = "./content/tmp/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       if(!is_dir($target_dir)){
           mkdir($target_dir);
       }
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
       if (file_exists($target_file)) {
           echo "
           <div class='alert-message error page-alert'>
           Video with the same filename already exists.
           </div>
           ";
           $uploadOk = 0;
       }
       if($imageFileType != "mp4" && $imageFileType != "avi") {
           echo "
           <div class='alert-message error page-alert'>
           MP4 files only.
           </div>
           ";
           $uploadOk = 0;
       }
       if ($uploadOk == 0) {
           echo "
           <div class='alert-message error page-alert'>
           Unknown error.
           </div>
           ";
       } else {
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               rename("$target_file", "./content/unprocessed/$v_id.mp4");
               $new_target_file = "./content/unprocessed/$v_id.mp4";
               exec("$ffmpeg -i ".$new_target_file." -vf scale=1280x720 -c:v libx264 -b:a 72k  -c:a aac -ar 22050 content/video/$v_id.mp4");
               $processed_file = "./content/video/$v_id.mp4";
               unlink("./content/unprocessed/$v_id.mp4");
               $target_thumb = "./content/thumb/".$v_id.".jpg";
               $thumbcmd = "$ffmpeg -i $processed_file -vf \"thumbnail\" -frames:v 1 -s 1280x720 $target_thumb";
               $video = $_POST['videotitle'];
               $user = $_SESSION['profileuser3'];
             //  $v_id = randstr(11);
               $statement = $mysqli->prepare("INSERT INTO videos (videotitle, vid, description, author, filename, thumb, date) VALUES (?, ?, ?, ?, ?, ?, now())");
               $statement->bind_param("ssssss", $videotitle, $v_id, $description, $author, $filename, $thumb);
               $videotitle = htmlspecialchars($_POST['videotitle']);
               $description = str_replace(PHP_EOL, "<br>", htmlspecialchars($_POST['bio']));
               $author = htmlspecialchars($_SESSION['profileuser3']);
               $filename = "$v_id.mp4";
               $thumb = "$v_id.jpg";
               exec($thumbcmd);
               $statement->execute();
               $statement->close();
               $webhookurl = $webhook;
               $msg = "**$user** just uploaded **$video** => uploaded to a private test instance";
               $json_data = array ('content'=>"$msg");
               $make_json = json_encode($json_data);
               $ch = curl_init( $webhookurl );
               curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
               curl_setopt( $ch, CURLOPT_POST, 1);
               curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
               curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
               curl_setopt( $ch, CURLOPT_HEADER, 0);
               curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
               $response = curl_exec( $ch );
               echo('<script>
             window.location.href = "./index.php?msg=Your video has been uploaded!";
             </script>');
           } else {
               echo "The upload failed. Error code: ";
               echo $_FILES["fileToUpload"]["error"];
           }
       }
   }
   ?>
        <form method="POST" action="" enctype="multipart/form-data">
			<div><h4>Select a file to upload.</h4></div>
                <input type="file" name="fileToUpload" id="fileToUpload" size="20">
		</div>

		<div class="upload-container">

			<div class="upload-form-container">
				
		<dl class="table-display">
	</dl>
	<div class="clearL"></div>



	<h3 class="video-settings-header expanded">Video information and privacy settings<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="master-sprite video-settings-expand"></h3>

	<div class="video-settings-container">
				<dl class="table-display">
		<dt>Title:</dt>
		<dd>
			<input class="video-settings-title textbox" type="text" id="videotitle" name="videotitle"/>
		</dd>

		<dt>Description:</dt>
		<dd>
			<textarea class="video-settings-description" id="bio" name="bio" rows="5"></textarea>
		</dd>

		<!-- <dt>Tags:</dt>
		<dd>
			<input class="video-settings-tags textbox" type="text" name="keywords" value="">
				<div class="tag-suggest-container">
					<div class="tag-suggest-title" style="display: none;">Suggestions:</div>
					<div class="tag-suggest-tags" style="display: none;">
						<span class="generating-tags">Generating tag suggestions</span>
						<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/loader-vfl35975.gif"/>
					</div>
					<a class="tag-suggest-add-all" style="display: none;">Add All</a>
				</div>
				<div class="clear"></div>
		</dd> -->

		<dt>Category:</dt>
		<dd>
			<select class="video-settings-category" name="category">
				<option value="" selected>-- <small>not implemented yet</small> --</option>
					<option value="2">Autos &amp; Vehicles</option>
					<option value="23">Comedy</option>
					<option value="27">Education</option>
					<option value="24">Entertainment</option>
					<option value="1">Film &amp; Animation</option>
					<option value="20">Gaming</option>
					<option value="26">Howto &amp; Style</option>
					<option value="10">Music</option>
					<option value="25">News &amp; Politics</option>
					<option value="29">Nonprofits &amp; Activism</option>
					<option value="22">People &amp; Blogs</option>
					<option value="15">Pets &amp; Animals</option>
					<option value="28">Science &amp; Technology</option>
					<option value="17">Sports</option>
					<option value="19">Travel &amp; Events</option>
			</select>
		</dd>


		<dt>Privacy:</dt>
		<dd>
			<ul class="option-list video-settings-privacy">
				<li class="option"><input id="video-settings-privacy-public" class="video-settings-privacy-public radio" type="radio" name="privacy" value="public" checked="checked">
						<label for="video-settings-privacy-public">Public (anyone can search for and view - recommended)</label>
				</li>
				<li class="option"><input id="video-settings-privacy-unlisted" class="video-settings-privacy-unlisted radio" type="radio" name="privacy" value="unlisted">
					<label for="video-settings-privacy-unlisted">Unlisted (anyone with the link can view)
						<label id="unlisted-learn-more"><a href="#" id="unlisted-help-link" onclick="yt.style.toggle('about-unlisted-videos');yt.style.toggle('unlisted-learn-more');yt.style.toggle('unlisted-learn-less');return false;">Learn more</a></label>
						<label id="unlisted-learn-less" style="display:none"><a href="#" id="unlisted-help-link" onclick="yt.style.toggle('about-unlisted-videos');yt.style.toggle('unlisted-learn-more');yt.style.toggle('unlisted-learn-less');return false;">Learn less</a></label>
					</label>
					<div id="about-unlisted-videos" style="display:none">

							<b>"Unlisted"</b> means that only people who know the link to the video can view it.  The video will not appear in any of YuoTueb's public spaces, such as search results, your channel, or the Browse page, but the link can be shared with anyone.  <a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=181547" target="_blank">(Learn even more)</a>
						
					</div>
				</li>
				<li class="option"><input id="video-settings-privacy-private" class="video-settings-privacy-private radio" type="radio" name="privacy" value="private">
						<label for="video-settings-privacy-private">Private (only specific YuoTueb users can view)</label>
					</li>
			</ul>
		</dd>

	</dl>
	<div class="clearL"></div>

					<dl class="table-display">
			<dt></dt>
			<dd>
                
				<button type="submit" name="submit" class="save-changes-button yt-uix-button"><span class="yt-uix-button-content">Save changes</span></button>
			<!-- &nbsp; or &nbsp;
				<span class="skip-save jslink">
Skip for now
				</span>	 -->
			</dd>
		</dl>
		<div class="clearL"></div>

		</form>
	</div>

		<!-- <h3>Sharing options</h3>
	<dl class="table-display last">

		<dt>URL:</dt>
		<dd>
			<input class="readonly textbox video-sharing-url" type="text" name="video-sharing-url" value="" readonly>
		</dd>

		<dt>Embed:</dt>
		<dd>
			<input class="readonly textbox video-embed-url" type="text" name="video-embed-url" value="" readonly>
		</dd>

	</dl>
	<div class="clearL"></div> -->



			</div>
		</div>
	</div>
</div>


					<div id="upload-interface" class="upload-outer-box">
		<div id="filelist-box" class="filelist-box">
			<noscript>
			
	
	
	<div class="yt-alert yt-alert-warn yt-rounded">
			<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
		
		<div class="yt-alert-content">
						You don't need Javascript enabled to upload a video.
		</div>
		
			<button onclick="_hidediv(this.parentNode);" class="close master-sprite">
				close
			</button>
	</div>

			</noscript>
		</div>

		<div id="upload-another" class="hid">
			<h4>Upload another video</h4>
			<h4 id="my-videos-link"><a href="/web/20100805073632/http://www.youtube.com/my_videos" target="_new">My videos&#187;</a></h4>
			<div class="clear"></div>
		</div>

		<div id="starting-box" class="starting-box upload-inner-box">
			<div id="loading-message">
Loading...
			</div>

			<div id="upload-prompt-box">
				<button type="button" id="start-upload-button" onclick="yt.analytics.urchinTracker('/Events/UploadPage/UploadButton');;return false;" class=" yt-uix-button yt-uix-button-urgent"><span class="yt-uix-button-content">Upload video</span></button>
	
				&nbsp; or &nbsp;

				<a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/my_webcam" id="record-from-webcam">
Record from webcam
				</a>

			</div>
		</div>

		<div id="about-uploading-box">
			<h4>Videos can be...</h4>
			<ul class="constraints">
				<li class="constraint">High Definition</strong></li>
							<li class="constraint">Up to <span dir="ltr">2 GB</span> in size.</li>
							<li class="constraint">Up to <span dir="ltr">15</span> minutes in length.</li>
				<li class="constraint">A wide variety of formats</li>
			</ul>
		</div>

		<div class="clearL"></div>

	</div>

				<!--		<div class="upload-outer-box">
		<p class="autosharing">
		<strong>AutoShare</strong>
		</p>

		<div class="upload-inner-box">
				<div class="autoshare-intro">
Want to automatically share your activity feed (your uploads, favorites, ratings, etc.) to your profile on other websites?  Choose a site to get started:
	</div>
		<div id="autoshare-spare-spinny" style="display: none;">
		<span class="autoshare-spinny" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
	</div>

		<div id="autoshare-sharing">
				<div id="autoshare-service-sharing-facebook" class="autoshare-service-detail">
					<div class="autoshare-service-detail">
							<div style="display: inline;">
		<div class="autoshare-service-icon">
			<img class="img-autoshare-facebook" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<span class="autoshare-service-name">Facebook</span>
	</div>

						<span>
							<span id="autoshare-service-sharing-info-separator-facebook">&nbsp;/&nbsp;
							</span>
							<span id="autoshare-service-sharing-info-facebook">
								<span class="autoshare-spinny" style="padding-left: 10px;">
									&nbsp;&nbsp;&nbsp;&nbsp;
								</span>
							</span>&nbsp;-&nbsp; 
								<span id="autoshare-service-sharing-disconnect-facebook">
									<a class="hLink" href="javascript:;" onclick="autoshare.disconnectService('facebook'); return false;">Disconnect accounts</a>
								</span>
								<span id="autoshare-service-sharing-connect-facebook">
									<a class="hLink" href="javascript:;" onclick="autoshare.connectService('facebook', false); return false;">Connect accounts</a>
								</span>
								<span id="autoshare-service-sharing-disable-facebook">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly('facebook', true); return false;">Disable AutoShare</a>
								</span>
								<span id="autoshare-service-sharing-enable-facebook">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService('facebook'); return false;">Enable AutoShare</a>
								</span>
						</span>
						<span id="autoshare-service-sharing-spinny-facebook" style="display:none;">
							<span class="autoshare-spinny" style="padding-left: 10px;">
								&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
						</span>
					</div>
				</div>
				<div id="autoshare-service-sharing-twitter" class="autoshare-service-detail">
					<div class="autoshare-service-detail">
							<div style="display: inline;">
		<div class="autoshare-service-icon">
			<img class="img-autoshare-twitter" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<span class="autoshare-service-name">Twitter</span>
	</div>

						<span>
							<span id="autoshare-service-sharing-info-separator-twitter">&nbsp;/&nbsp;
							</span>
							<span id="autoshare-service-sharing-info-twitter">
								<span class="autoshare-spinny" style="padding-left: 10px;">
									&nbsp;&nbsp;&nbsp;&nbsp;
								</span>
							</span>&nbsp;-&nbsp; 
								<span id="autoshare-service-sharing-disconnect-twitter">
									<a class="hLink" href="javascript:;" onclick="autoshare.disconnectService('twitter'); return false;">Disconnect accounts</a>
								</span>
								<span id="autoshare-service-sharing-connect-twitter">
									<a class="hLink" href="javascript:;" onclick="autoshare.connectService('twitter', false); return false;">Connect accounts</a>
								</span>
								<span id="autoshare-service-sharing-disable-twitter">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly('twitter', true); return false;">Disable AutoShare</a>
								</span>
								<span id="autoshare-service-sharing-enable-twitter">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService('twitter'); return false;">Enable AutoShare</a>
								</span>
						</span>
						<span id="autoshare-service-sharing-spinny-twitter" style="display:none;">
							<span class="autoshare-spinny" style="padding-left: 10px;">
								&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
						</span>
					</div>
				</div>
				<div id="autoshare-service-sharing-reader" class="autoshare-service-detail">
					<div class="autoshare-service-detail">
							<div style="display: inline;">
		<div class="autoshare-service-icon">
			<img class="img-autoshare-reader" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<span class="autoshare-service-name">Reader</span>
	</div>

						<span>
							<span id="autoshare-service-sharing-info-separator-reader">&nbsp;/&nbsp;
							</span>
							<span id="autoshare-service-sharing-info-reader">
								<span class="autoshare-spinny" style="padding-left: 10px;">
									&nbsp;&nbsp;&nbsp;&nbsp;
								</span>
							</span>&nbsp;-&nbsp; 
								<span id="autoshare-service-sharing-disconnect-reader">
									<a class="hLink" href="javascript:;" onclick="autoshare.disconnectService('reader'); return false;">Disconnect accounts</a>
								</span>
								<span id="autoshare-service-sharing-connect-reader">
									<a class="hLink" href="javascript:;" onclick="autoshare.connectService('reader', false); return false;">Connect accounts</a>
								</span>
								<span id="autoshare-service-sharing-disable-reader">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly('reader', true); return false;">Disable AutoShare</a>
								</span>
								<span id="autoshare-service-sharing-enable-reader">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService('reader'); return false;">Enable AutoShare</a>
								</span>
						</span>
						<span id="autoshare-service-sharing-spinny-reader" style="display:none;">
							<span class="autoshare-spinny" style="padding-left: 10px;">
								&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
						</span>
					</div>
				</div>
				<div id="autoshare-service-sharing-orkut" class="autoshare-service-detail">
					<div class="autoshare-service-detail">
							<div style="display: inline;">
		<div class="autoshare-service-icon">
			<img class="img-autoshare-orkut" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<span class="autoshare-service-name">Orkut</span>
	</div>

						<span>
							<span id="autoshare-service-sharing-info-separator-orkut">&nbsp;/&nbsp;
							</span>
							<span id="autoshare-service-sharing-info-orkut">
								<span class="autoshare-spinny" style="padding-left: 10px;">
									&nbsp;&nbsp;&nbsp;&nbsp;
								</span>
							</span>&nbsp;-&nbsp; 
								<span id="autoshare-service-sharing-disconnect-orkut">
									<a class="hLink" href="javascript:;" onclick="autoshare.disconnectService('orkut'); return false;">Disconnect accounts</a>
								</span>
								<span id="autoshare-service-sharing-connect-orkut">
									<a class="hLink" href="javascript:;" onclick="autoshare.connectService('orkut', false); return false;">Connect accounts</a>
								</span>
								<span id="autoshare-service-sharing-disable-orkut">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly('orkut', true); return false;">Disable AutoShare</a>
								</span>
								<span id="autoshare-service-sharing-enable-orkut">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService('orkut'); return false;">Enable AutoShare</a>
								</span>
						</span>
						<span id="autoshare-service-sharing-spinny-orkut" style="display:none;">
							<span class="autoshare-spinny" style="padding-left: 10px;">
								&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
						</span>
					</div>
				</div>
	</div>

		<div id="autoshare-google-nag" class="autoshare-box" style="display: none;">
		<div style="float: left;" class="autoshare-service-icon">
			<img class="img-autoshare-failure-icon" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<div style="float: left; width: 450px;">
			<b>A Google Account needs to be linked to your YouTube account in order to use AutoShare</b>
			<ul>
					<li><a class="hLink" href="javascript:;" onclick="autoshare.upgradeToGoogleAccount(); return false;">Get a new Google Account or link to an existing one</a> (you'll be signed out of any existing Google Account during linking)</li>
			</ul>
		</div>
			<div style="float: right;">
		<a class="hLink" href="javascript:;" onclick="yt.style.toggle('autoshare-google-nag'); return false;">Close</a>
	</div>
	<div style="clear: both;"></div>

	</div>
	<div id="autoshare-google-linked" class="autoshare-box" style="display: none;">
		<div style="float: left;" class="autoshare-service-icon">
			<img class="img-autoshare-success-icon" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<div style="float: left; width: 450px;">
			<b>Thanks for setting up a Google Account</b>
			<ul>
				<li>Please choose a site above to get started.</li>
			</ul>
		</div>
			<div style="float: right;">
		<a class="hLink" href="javascript:;" onclick="yt.style.toggle('autoshare-google-linked'); return false;">Close</a>
	</div>
	<div style="clear: both;"></div>

	</div>

		<div id="autoshare-info-box" class="autoshare-box" style="display: none;">
		<div style="float: left;" class="autoshare-service-icon">
			<img class="img-autoshare-success-icon" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<div class="autoshare-info-box-text">
Great, you're now connected to Buzz! The YouTube actions in your activity feed will be shared publicly on your Google profile and to your Buzz followers.
		</div>
			<div style="float: right;">
		<a class="hLink" href="javascript:;" onclick="yt.style.toggle('autoshare-info-box'); return false;">Close</a>
	</div>
	<div style="clear: both;"></div>

	</div>

		<div id="autoshare-facebook-publish-nag" class="autoshare-box" style="display: none;">
		<div style="float: left;" class="autoshare-service-icon">
			<img class="img-autoshare-failure-icon" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/none-vfl36657.gif" height="16" width="16" alt=""/>
		</div>
		<div style="float: left; width: 450px;">
			<b>Your activity won't be sent to Facebook because you didn't give full access for YouTube to post to Facebook.</b>
			<ul>
				<li><a href="javascript:;" onclick="autoshare._facebookUpgradePermissions(); return false;" class="hLink">Change Access Settings</a></li>
			</ul>
		</div>
			<div style="float: right;">
		<a class="hLink" href="javascript:;" onclick="yt.style.toggle('autoshare-facebook-publish-nag'); return false;">Close</a>
	</div>
	<div style="clear: both;"></div>

	</div>


		</div>
	</div>-->

						<p class="instruction">Need more help? Watch <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/watch?v=SzSwnbxb9TY" target="_new">this video</a> or visit the <a href="/web/20100805073632/http://www.youtube.com/t/creators_corner" target="_new">Creator's Corner</a>.</p>

		<p class="instruction">Upload problems? Try the <a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload?restrict=html_form">basic uploader</a> (works on older computers and web browsers).</p>



	<div id="sponsored-videos-box">
		<h2 class="title">Promote your Videos with Promoted Videos</h2>
		<p>Create and manage your video channel promotions on YuoTueb.  Your promotion will appear with search results when people look for related content.</p>
		<a href="https://web.archive.org/web/20100805073632/https://ads.youtube.com/index" target="_blank">Get started now!</a>
	</div>




			</div>
			<div id="right-col">

					<div class="upload-tools">
		<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/icn_mobile-vfl151459.png">
		<div class="upload-sidebar-content">
			<h4>YuoTueb direct mobile uploads</h4>
			<p>Did you know you can upload directly from your mobile phone?</p>
			<a href="/web/20100805073632/http://www.youtube.com/my_videos_mobile_upload"><strong>Set up</strong></a> |
			<a href="/web/20100805073632/http://www.youtube.com/mobile">Learn more</a>
		</div>
		<div class="clearL"></div>
	</div>

					<div class="upload-tools">
		<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/icn_tools-vfl174654.gif" id="tools-icon">
		<div class="upload-sidebar-content">
			<h4>Advanced Video Upload</h4>
			<p>Support for large (&gt;100MB) files and resumable uploads (requires Java).</p>
			<a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload?restrict=java"><strong>Try now</strong></a> |
			<a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=185316">Learn more</a>
		</div>
		<div class="clearL"></div>
	</div>

					<div id="instructions">
		<p class="instruction">
			<strong>Important:</strong>
Do not upload any TV shows, music videos, music concerts, or commercials without permission unless they consist entirely of content you created yourself.
		</p>
		<p class="instruction">
The <a href="/web/20100805073632/http://www.youtube.com/t/howto_copyright">Copyright Tips page</a> and the <a href="community_guidelines.php">Community Guidelines</a> can help you determine whether your video infringes someone else's copyright.
		</p>
		<p class="instruction">
By clicking "Upload Video", you are representing that this video does not violate YouTube's <a id="terms-of-use-link" href="terms.php">Terms of Use</a> and that you own all copyrights in this video or have authorization to upload it.
		</p>
	</div>


			</div>              
			<div id="bottom-row"></div>
		</div>



		<?php include("footer.php"); ?>
			<div id="quicklist" class="hid passive" data-active-ajax-url="" data-passive-ajax-url="/list_ajax?action_get_quicklist=1&amp;style=bottomfeedr" data-autohide-mode="on">
		<div id="quicklist-bar-container">
			<div id="quicklist-bar">
				<span id="quicklist-info">
<span class="yt-uix-button-group quicklist-active"><button type="button" class="master-sprite start start-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.prev"><img class="yt-uix-button-icon-quicklist-prev" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button><button type="button" class="master-sprite end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.next"><img class="yt-uix-button-icon-quicklist-next" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span><span class="yt-uix-button-group quicklist-passive"><button type="button" class="master-sprite start start-edge end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.play"><img class="yt-uix-button-icon-quicklist-play" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span><button type="button" class="reverse yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;"><span class="yt-uix-button-content">		<span class="quicklist-passive">Queue</span>
</span> <img class="yt-uix-button-arrow" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><div style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-media yt-uix-button-menu-text">		<ul>
			<li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clear()">
Clear all videos from your Queue
			</span></li>
				<li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.showPassive()">
Show your Queue
				</span></li>
		</ul>
</div></button>				</span>
				<span id="quicklist-controls">
<span class="yt-uix-button-group"><button type="button" class="master-sprite start quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.autoplay"><img class="yt-uix-button-icon-quicklist-autoplay" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">			<span class="quicklist-autoplay-off">Autoplay Off</span>
			<span class="quicklist-autoplay-on">Autoplay On</span>
</span></button><button type="button" class="master-sprite quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.shuffle"><img class="yt-uix-button-icon-quicklist-shuffle" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">			<span class="quicklist-shuffle-off">Shuffle Off</span>
			<span class="quicklist-shuffle-on">Shuffle On</span>
</span></button><button type="button" class="master-sprite end end-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.toggle"><img class="yt-uix-button-icon-quicklist-toggle" src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""> </button></span>				</span>
			</div>
		</div>
		<div id="quicklist-tray-container">
			<div id="quicklist-tray">
				<div id="quicklist-tray-passive" class="quicklist-passive"></div>
			</div>
			<div id="quicklist-loading">
				<img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt="">
				<span>Loading...</span>
			</div>
		</div>
	</div>

	<div> 

	</div>
			
	
	
	<script>
			yt.setMsg({
				'QUEUE_CLEAR': 'Are you sure you wish to continue?'
			});
				yt.pubsub.subscribe('init', yt.www.watch.quicklist.init);
	
		

		
	
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
	
	<script id="legacy-user-datastore" style="behavior:url('/web/20100805073632im_/http://www.youtube.com/#default#userdata')"></script>
	
	


	<!-- end postpage section -->
	<!--[if IE]></div><![endif]-->
</body>

</html>