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
				<?php
					if($page->headline()->exists()) {
						if($page->published()->exists()) {
						//https://forum.getkirby.com/t/translating-date-formats/23435
				?>
					<div class="pubdate">
						<time datetime="<?= $page->published()->toDate('d.m.Y') ?>" pubdate="pubdate"><?= $page->published()->toDate('F l, Y') ?></time>
					</div>
				<?php
						} //endif page has pubdate
				?>
					<h2><?= ($page->has('Headline')) ? $page->headline() : '' ?></h2>
					<nav class="breadcrumb">
						<ol>
							<li>
								<a href="">Blog</a>
								<svg class="inline-icon _12-36">
									<use xlink:href="#hierarchy-icon"></use>
								</svg>
							</li>
							<li>
								<ul class="inline-tags">
									<li><a href="">#Tag</a></li>
									<li><a href="">#Tag</a></li>
									<li><a href="">#Tag</a></li>
								</ul>
								<svg class="inline-icon _12-36">
									<use xlink:href="#hierarchy-icon"></use>
								</svg>
							</li>
							<li>
								<a>Current Page</a>
							</li>
						</ol>
					</nav>
				<?php } //endif page has headline ?>
				<article class="teaser">
					<!-- !!! URL !!! -->
					<img src="content/home/atomic-design-teaser.jpg" alt="Photo of the printed book 'Designing for Atomic Design'">
					<h3>Designing for Atomic Design</h3>
					<ul class="tag-list">
						<li><a href="">Design Systems</a></li>
						<li><a href="">Editorial & Print</a></li>
						<li><a href="">Front-End Development</a></li>
					</ul>
					<section>
						<p>In my Bachelor Thesis (Dec 2020), I re-interpreted the Atomic Design workflow by Brad Frost from a designer's perspective. In my thesis abstract I put it like this:</p>
						<p>"This thesis deals with two mutually reinforcing problems: designing for a variable viewport size and design-development coordination."</p>
					</section>
					<a href="" class="button">view project</a>
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
