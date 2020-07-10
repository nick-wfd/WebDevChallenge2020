<?php get_header(); ?>

<main>
	<section class="c-icon-columns">
		<div class="container">
			<div class="row d-flex flex-wrap">
				<div class="col-sm-6 col-md-3">
					<div class="c-icon-col">
						<img src="<?php echo bloginfo('template_directory').'/dist/img/icon-drone-cam.png'?>">
						<h3>From air</h3>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="c-icon-col">
						<img src="<?php echo bloginfo('template_directory').'/dist/img/icon-drone-beye.png'?>">
						<h3>Best drones</h3>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="c-icon-col">
						<img src="<?php echo bloginfo('template_directory').'/dist/img/icon-drone-blade.png'?>">
						<h3>Speed</h3>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="c-icon-col">
						<img src="<?php echo bloginfo('template_directory').'/dist/img/icon-remote.png'?>">
						<h3>Long range</h3>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
					</div>
				</div>
			</div>
			<div class="row cta-wrapper justify-content-center">
				<a href="#" class="o-btn">Ask for price</a>
			</div>
		</div>
	</section>
	<section class="c-product">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="c-product-intro">
						<h2>Nature from the air</h2>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis. Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
					</div>
					<div class="c-product-items">
						<div class="item">
							<div class="item__icon"><span>1</span></div>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						</div>
						<div class="item">
							<div class="item__icon"><span>2</span></div>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						</div>
						<div class="item">
							<div class="item__icon"><span>3</span></div>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						</div>
						<div class="item">
							<div class="item__icon"><span>4</span></div>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						</div>
						<div class="item">
							<div class="item__icon"><span>5</span></div>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-text-image">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="c-text-image-media">
						<div class="cover" style="background-image: url('<?php echo bloginfo('template_directory').'/dist/img/bg-ocean.jpg'?>')"></div>
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="c-text-image-content">
						<h2>Nature from the air</h2>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis. Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						<a href="#" class="o-btn">Ask for price</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-text-image">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-md-6 p-0 order-md-6">
					<div class="c-text-image-media">
						<div class="cover" style="background-image: url('<?php echo bloginfo('template_directory').'/dist/img/bg-city.jpg'?>')"></div>
					</div>
				</div>
				<div class="col-md-6 p-0 order-md-1">
					<div class="c-text-image-content">
						<h2>Nature from the air</h2>
						<p>Mauris consequat libero metus, nec ultricies sem efficitur quis. Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
						<a href="#" class="o-btn">Ask for price</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-signup">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-50">
					<div class="c-signup-inner">
						<h2>Sign up for our newsletter</h2>
						<form action="#">
							<input type="email" name="sp_email" id="sp_email" placeholder="Email address">
							<button type="submit" class="o-btn o-btn--light">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-map">
		<div class="container-fluid p-0">
			<div class="c-map-inner">
				<div id="map" class="c-map-el"></div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>