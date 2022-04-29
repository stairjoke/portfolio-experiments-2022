<?php
//Static Header
?>
<header <?php
	if($page->static_header_appearance()->value() == 'Accent') {
		echo "class='accent'";
	}
?>>
	<?php snippet('main-navigation') ?>
</header>