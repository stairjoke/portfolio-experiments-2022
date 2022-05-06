<?php
// Organism Footer
?>
<footer>
	<h2><?= $site->FooterTitle() ?></h2>
	<div class="column">
		<h3><?= $site->FooterColumn1Title() ?></h3>
		<ul class="griddy">
			<?php
				$socials = explode(', ', htmlspecialchars($site->FooterSocials()->value()));
				$pattern_square = '\[(.*?)\]';
				$pattern_round  = "\((.*?)\)";
				$pattern = "/".$pattern_square.$pattern_round."/";
				
				foreach($socials as $social) {	
					preg_match($pattern, $social, $matches);
					$words = $matches[1];
					$url   = $matches[2];
					echo("<li>Words: $words, URL: $url</li>");
				}
			?>
		</ul>
	</div>
	<div class="column">
		<h3><?= $site->FooterColumn2Title() ?></h3>
	</div>
	<div class="column">
		<h3><?= $site->FooterColumn3Title() ?></h3>
	</div>
</footer>