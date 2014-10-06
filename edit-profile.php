<?php include('inc/html-head.php'); ?>
	<?php include('inc/header.php'); ?>
	<section class="main-body">
		<div class="wrapper">
			<article class="edit-profile-main">
				<h1 class="edit-profile-header">Edit Profile</h1>
				<form action="" class="edit-profile-form">
					<fieldset>
						<label for="name">Name</label>
						<input type="text" name="name">
						<label for="email">Email</label>
						<input type="text" name="email">
					</fieldset>
					<fieldset>
						<label for="password">Password</label>
						<input type="text" name="password">
						<label for="password2">Confirm Password</label>
						<input type="text" name="password2">
					</fieldset>
					<fieldset>
						<label for="blog">Blog URL</label>
						<input type="text" name="blog">
						<label for="slug">Profile Slug</label>
						<input type="text" name="slug">
					</fieldset>
					<fieldset>
						<img src="lib/img/cookie.jpg" class="profile-avatar">
						<label for="avatar">Upload your avatar</label>
						<input type="file" name="avatar" accept="image/*">
					</fieldset>
				</form>
			</article>
		</div>
	</section>
	<?php include('inc/footer.php'); ?>
</body>
</html>