<div id="masthead-container">
			<div id="masthead" class="">
					<a href="." title="YouTube home">
			<img id="logo" class="master-sprite" src="https://web.archive.org/web/20100816090028im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt="YouTube home">
		</a>

		<div id="masthead-search">
			
	<form autocomplete="off" class="search-form" action="results.php" method="get" name="searchForm" onsubmit="">
		<input id="masthead-search-term" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" maxlength="128">



			<button type="button" class="search-button yt-uix-button" onclick="if (_gel('masthead-search-term').value != '') { document['searchForm'].submit(); }; return false;;return false;" tabindex="2"><span class="yt-uix-button-content">Search</span></button>

			<script>document.getElementById('masthead-search-term').focus();</script>
	</form>

		</div>
		<div id="masthead-nav">
			<a href="videos.php">Browse</a><a href="my_videos_upload.php">Upload</a>
		</div>
			<div id="masthead-utility">
            <?php
      if(!$loggedIn) {
        echo '<a class="start" href="create_account.php">Create Account</a><a class="end" href="login.php">Sign In</a>';
      } else {
        $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
			    $statement->bind_param("s", $_SESSION['profileuser3']);
			    $statement->execute();
			    $result = $statement->get_result();
			    if($result->num_rows === 0) exit('No rows');
			    while($row = $result->fetch_assoc()) {
			        echo '<button type="button" class="flip yt-uix-button yt-uix-button-text" onclick=";return false;"><span class="yt-uix-button-content">'.$row['username'].'</span> <img class="yt-uix-button-arrow" src="http://web.archive.org/web/20100805073628im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><div style="min-width: 139px; left: 914.1px; top: 107.633px; display: none;" class="yt-uix-button-menu yt-uix-button-menu-text hid">	<table>
                    <tbody><tr>
                        <td><a class="yt-uix-button-menu-item" href="profile.php?user='.$row['username'].'">My Channel</a></td>
                        <td><a class="yt-uix-button-menu-item" href="my_subscriptions.php">Subscriptions</a></td>
                    </tr>
                    <tr>
                        <td><a class="yt-uix-button-menu-item" href="inbox.php">Inbox</a></td>
                        <td><a class="yt-uix-button-menu-item" href="my_videos.php">My Videos</a></td>
                    </tr>
                    <tr>
                        <td><a class="yt-uix-button-menu-item" href="account.php">Account</a></td>
                        <td><a class="yt-uix-button-menu-item" href="my_favorites.php">Favorites</a></td>
                    </tr>
                    <!--<tr>
                        <td><a class="yt-uix-button-menu-item" href="admin.php" width="175px">Admin</a></td>
                    </tr>-->
                </tbody></table>
            </div></button><a class="end" href="logout.php" onclick="document.logoutForm.submit(); return false;">Sign Out</a>';
			    }
			    $statement->close();
      }
    ?>
            </div>
	</div>

	</div>
	
	</div> 