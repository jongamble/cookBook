<aside class="profile-side">
	<img src="lib/img/cookiemonster-profile.png" alt="" class="profile-picture">
	<p class="profile-name"><a href="profile.php">John Smith</a></p>
	<a href="" class="profile-blog">Blog</a>
	<div class="profile-follows">
		<span class="follower-number">9999 <span class="label">Followers</span></span>
		<span class="following-number">329 <span class="label">Following</span></span>
	</div>
	<?php if($page=='profile'){ ?>
		<a href="edit-profile.php" class="profile-edit">Edit profile &#8594;</a>
	<?php } ?>
</aside>