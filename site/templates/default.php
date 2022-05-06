<!DOCTYPE html>
<html>
	<?php snippet('html-head') ?>
	<body>
		<?php snippet('svg-sprite') ?>
		<?php
			if($page->splash()->exists()) {
				snippet('static-header');
			}
		?>
		<main>
			<?php snippet('sticky-header'); ?>
			<?php
				if($page->splash()->exists()){
				?>
				<section class=splash id="<?= $page->splash() ?>">
					<?php snippet('splash_' . $page->splash()->value()); ?>
				</section>
				<?php
				}
			?>
			<section>
				<?php snippet('o-h2'); ?>
				<article class="teaser">
					<div class="block">
						<div class="graphic-column">
							<!-- !!! URL !!! -->
							<img src="content/home/atomic-design-teaser.jpg" alt="Photo of the printed book 'Designing for Atomic Design'">
						</div>
						<div class="text-column">
							<h3>Designing for Atomic Design</h3>
							<ul class="m-tag-list">
								<li><a href="">Design Systems</a></li>
								<li><a href="">Editorial & Print</a></li>
								<li><a href="">Front-End Development</a></li>
							</ul>
							<section>
								<p>In my Bachelor Thesis (Dec 2020), I re-interpreted the Atomic Design workflow by Brad Frost from a designer's perspective. In my thesis abstract I put it like this:</p>
								<p>"This thesis deals with two mutually reinforcing problems: designing for a variable viewport size and design-development coordination."</p>
							</section>
							<a href="" class="button">view project</a>
						</div>
					</div>
				</article>
				<article class="teaser">
					<div class="block">
						<div class="graphic-column">
							<!-- !!! URL !!! -->
							<img src="content/home/atomic-design-teaser.jpg" alt="Screnshot of the home view of the application 'Proximity'.">
						</div>
						<div class="text-column">
							<h3 class="L">Proximity</h3>
							<ul class="m-tag-list">
								<li><a href="">UX Research</a></li>
								<li><a href="">UX Design</a></li>
								<li><a href="">UI Design</a></li>
								<li><a href="">Documentation</a></li>
							</ul>
							<section>
								<p>Proximity is a university project. It is a privacy-first social network designed to connect people, local businesses, and the city. The app concept provides a fourth dimension, a meta-layer for our world, but does so with an elementary medium: a map on your phone.</p>
							<p>You can discover groups of friends (crowds) around you, browse digital storefronts, and see information for areas marked by your municipality.</p>
							</section>
							<a href="" class="button">view project</a>
						</div>
					</div>
				</article>
			</section>
		</main>
		<section id="layout-viz">
			<div class="column" id="c1">
				1
			</div>
			<div class="column" id="c2">
				2
			</div>
			<div class="column" id="c3">
				3
			</div>
			<div class="column" id="c4">
				4
			</div>
			<div class="column" id="c5">
				5
			</div>
			<div class="column" id="c6">
				6
			</div>
			<div class="column" id="c7">
				7
			</div>
			<div class="column" id="c8">
				8
			</div>
			<div class="column" id="c9">
				9
			</div>
			<div class="column" id="c10">
				10
			</div>
			<div class="column" id="c11">
				11
			</div>
		</section>
	</body>
</html>
