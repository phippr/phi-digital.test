<?php
get_header();
?>
<main id="primary" class="site-main">

	<section id="home-hero" class="hero blue">
		<div id="hero-container" class="fade-in-bottom">
			<div id="hero-header">
				<h1>We Create</h1>
				<div id="hero-dropdown">
					<h1 id="hero-dropdown-selected">&nbsp</h1>
					<div id="hero-dropdown-caret-down" class="shake-vertical"><?php include get_stylesheet_directory() . '/svg/caret-down.svg'; ?></div>
					<ul id="hero-dropdown-selections">
						<li>
							<h1>brilliant</h1>
						</li>
						<li>
							<h1>bespoke</h1>
						</li>
						<li>
							<h1>beautiful</h1>
						</li>
					</ul>
				</div>
				<h1>Websites</h1>
			</div>
		</div>
		<div id="hero-scroll" class="fade-in-bottom">
			<a href="#recent-work" class="no-dec" title="scroll down">
				<?php include get_stylesheet_directory() . '/svg/caret-down.svg'; ?>
			</a>
		</div>
	</section>
	<section id="recent-work" class="" style="height:800px"></section>
	<section id="services" class="" style="height:800px"></section>
	<section id="get-in-touch" class="" style="height:800px"></section>


</main><!-- #main -->

<?php
get_footer();
