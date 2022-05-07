<?php
// Snippet – Organism H2
?>

<?php
	if($page->Headline()->exists()) {
?>
	<div class="o-h2" onClick="alert('implement copy page URL')">
<?php
		if($page->published()->exists()) {
		//https://forum.getkirby.com/t/translating-date-formats/23435
?>
		<div class="pubdate">
			<time datetime="<?= $page->published()->toDate('d.m.Y') ?>" pubdate="pubdate"><?= $page->published()->toDate('F j, Y') ?></time>
		</div>
<?php
		} //endif page has pubdate
?>
		<h2><?= ($page->Headline()->exists()) ? $page->Headline() : '' ?></h2>
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
	</div>
<?php } //endif page has headline ?>