<?php $page = 'recipe'; ?>
<?php include('inc/html-head.php'); ?>
<body class="recipe">
	<?php include('inc/header.php'); ?>
	<section class="main-body">
		<div class="wrapper">
			<?php include('inc/recipe-side.php'); ?>
			<article class="recipe-main">
				<div class="recipe-main-top">
					<h1 class="recipe-title">Pork Whatchamacallit</h1>
					<span class="recipe-rating-short"><strong>Rating</strong>: 5/5</span>
					<span class="recipe-favorites"><strong>Favorites</strong>: 234</span>
					<a href="" class="recipe-favorite-button">Favorite</a>
					<span class="recipe-cuisine"><strong>Cuisine</strong>: American</span>
					<span class="recipe-difficulty"><strong>Difficulty</strong>: Easy</span>
					<p class="recipe-description">This is the pork thingamabob. It is easy to cook in a crockpot. This is some filler text. I don't know what to write so I am going to keep on rambling until something comes to my mind that is more fun to talk about like baseball or what show I am watching on TV, like the blacklist or Boss. Boss has Kelsey Grammar in it. It is about a Chicago mayor that is losing his mind and control of the city. His wife got shot because she is a bitch. Daughter does a lot of drugs and sleeps with drug dealers.</p>
					<span class="recipe-prep-time"><strong>Prep Time</strong>: 30 Minutes</span>
					<span class="recipe-cook-time"><strong>Cook Time</strong>: 360 Minutes</span>
				</div>
				<div class="recipe-tab-bar">
					<a href="#" data-tab="tools" class="recipe-tab-link"><i class="fa fa-wrench"></i></a>
					<a href="#" data-tab="ingredients" class="recipe-tab-link"><i class="fa fa-leaf"></i></a>
					<a href="#" data-tab="steps" class="recipe-tab-link"><i class="fa fa-tasks"></i></a>
					<a href="#" data-tab="pictures" class="recipe-tab-link"><i class="fa fa-photo"></i></a>
					<a href="#" data-tab="comments" class="recipe-tab-link"><i class="fa fa-comments"></i></a>
				</div>
				<div class="recipe-section" data-section="tools">
					<h3 class="recipe-section-header">Tools List</h3>
					<ul class="recipe-section-list">
						<li class="recipe-section-list-item">Crockpot</li>
						<li class="recipe-section-list-item">Sauce Pan</li>
						<li class="recipe-section-list-item">Frying Pan</li>
						<li class="recipe-section-list-item">Measuring Cup</li>
						<li class="recipe-section-list-item">Dutch Oven</li>
					</ul>
				</div>
				<div class="recipe-section" data-section="ingredients">
					<h3 class="recipe-section-header">Ingredients List</h3>
					<ul class="recipe-section-list">
						<li class="recipe-section-list-item">1 tsp Olive Oil</li>
						<li class="recipe-section-list-item">2 cups Flour</li>
						<li class="recipe-section-list-item">1 tbsp Black Pepper</li>
						<li class="recipe-section-list-item">2 tsp Cayenne</li>
						<li class="recipe-section-list-item">2 lb Pork Tenderloin</li>
					</ul>
				</div>
				<div class="recipe-section" data-section="steps">
					<h3 class="recipe-section-header">Steps List</h3>
					<ul class="recipe-section-list">
						<li class="recipe-section-list-item">Preheat oven</li>
						<li class="recipe-section-list-item">Add pork</li>
						<li class="recipe-section-list-item">mix spices with oil</li>
						<li class="recipe-section-list-item">put pork in oven</li>
						<li class="recipe-section-list-item">Eat</li>
					</ul>
				</div>
				<div class="recipe-section" data-section="pictures">
					<h3 class="recipe-section-header">Pictures</h3>
					<ul class="recipe-section-list">
						<li class="recipe-section-list-item">image 1</li>
						<li class="recipe-section-list-item">image 2</li>
						<li class="recipe-section-list-item">image 3</li>
						<li class="recipe-section-list-item">image 4</li>
						<li class="recipe-section-list-item">image 5</li>
					</ul>
				</div>
				<div class="recipe-section" data-section="comments">
					<h3 class="recipe-section-header">Comments</h3>
					<ul class="recipe-section-list">
						<li class="recipe-section-list-item">blah blah blah blah</li>
						<li class="recipe-section-list-item">blah blah blah blah</li>
						<li class="recipe-section-list-item">blah blah blah blah</li>
						<li class="recipe-section-list-item">blah blah blah blah</li>
						<li class="recipe-section-list-item">blah blah blah blah</li>
					</ul>
				</div>
				
			</article>
		</div>
	</section>
	<?php include('inc/footer.php'); ?>
</body>
</html>