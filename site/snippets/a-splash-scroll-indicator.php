<?php
	//Splash Scroll Indicator
?>
<script>
	//<!--
	// If the document scroll position Y reaches 10% vh
	// Hide the scroll up arrow
	
	function hideScrollUpArrow() {
		//_o-home-splash.scss -> Splash height is 90vh
		const triggerYPosition = window.innerHeight * 0.1
		const scrollYposition = window.pageYOffset;
		
		if(scrollYposition > triggerYPosition){
			let target = document.querySelector(".splash-scroll-indicator")
			if(target){
				target.classList.add("hide")
				window.setTimeout(function() {
							target.classList.add("hidden")
					}, 500)
			}
		}
	}
	document.addEventListener("DOMContentLoaded", hideScrollUpArrow)
	document.addEventListener("scroll", hideScrollUpArrow)
	//-->
</script>
<svg class="splash-scroll-indicator">
	<use xlink:href="#scroll-up"></use>
</svg>