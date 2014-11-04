<?php include('inc/html-head.php'); ?>
<body class="edit-profile">
	<?php include('inc/header.php'); ?>
	<section class="main-body">
		<div class="wrapper">
			<?php include('inc/profile-side.php'); ?>
			<article class="edit-profile-main">
				<h1 class="edit-profile-header">Edit Profile</h1>
				<form action="" class="edit-profile-form">
					<fieldset>
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Name">
					</fieldset>
					<fieldset>
						<label for="email">Email</label>
						<input type="text" name="email" placeholder="Email">
					</fieldset>
					<fieldset>
						<label for="password">Password</label>
						<input type="text" name="password" placeholder="Password">
					</fieldset>
					<fieldset>
						<label for="password2">Confirm Password</label>
						<input type="text" name="password2" placeholder="Confirm Password">
					</fieldset>
					<fieldset>
						<label for="blog">Blog URL</label>
						<input type="text" name="blog" placeholder="Blog URL">
					</fieldset>
					<fieldset>
						<label for="slug">Profile Slug</label>
						<input type="text" name="slug" placeholder="Profile Slug">
					</fieldset>
					<fieldset>
						<label for="avatar" class="avatar-label">Upload your avatar</label>
						<img src="lib/img/cookiemonster-profile.png" class="profile-avatar">
						<div class="avatar-info">
							<input type="file" name="avatar" accept="image/*" class="avatar-file">
							<span class="avatar-description">Recommended Dimensions 150x150</span>
						</div>
					</fieldset>
					<button class="edit-profile-submit" name="submit">Save Changes</button>
				</form>
			</article>
		</div>
	</section>
	<?php include('inc/footer.php'); ?>
</body>
</html>