<?php
// Sticky Header
?>
<?php
if($page->splash()->exists()){
	?>
	<script>
		//<!--
		// If the document scroll position Y is smaller
		// than Nvh apply a class to the hader.
		// Otherwise, ensure the class is not applied.
		
		function stickyHeaderClassTrigger() {
			//_o-home-splash.scss -> Splash height is 90vh
			const triggerYPosition = window.innerHeight * 0.9
			const scrollYposition = window.pageYOffset;
			
			if(scrollYposition < triggerYPosition){
				let target = document.querySelector("main\ header")
				if(target){
					target.classList.add("transparent")
				}
			}else{
				let target = document.querySelector("main\ header.transparent")
				if(target){
					target.classList.remove("transparent")
				}
			}
		}
		document.addEventListener("DOMContentLoaded", stickyHeaderClassTrigger)
		document.addEventListener("scroll", stickyHeaderClassTrigger)
		//-->
	</script>
	<?php
}
?>
<header>
	<?php snippet('main-navigation') ?>
</header>