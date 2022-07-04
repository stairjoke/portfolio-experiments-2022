<?php
// Organism Footer
?>
<footer>
	<div class="o-h2">
		<h2><?= $site->FooterTitle() ?></h2>
	</div>
	<div class="columns">
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
						?>
						<li>
							<a href="<?= $url ?>">
							<svg class="inline-icon _1">
								<use xlink:href="#<?= strtolower($words) ?>"></use>
							</svg> <?= $words ?>
							</a>
						</li>
						<?php
					}
				?>
			</ul>
		</div>
		<div class="column">
			<h3><?= $site->FooterColumn2Title() ?></h3>
			<p>
			<?php
				if($site->has('ContactEmail')):
			?>
			email: <a href="mailto:<?= $site->ContactEmail()->value() ?>"><?= $site->ContactEmail() ?></a><br>
			<?php
				endif; //contact email
				if($site->has('ContactPhone')):
			?>
			phone: <a href="tel:<?= $site->ContactPhone()->value() ?>"><?php
				if($site->ContactPhoneHumanFriendly()->exists()):
						echo($site->ContactPhoneHumanFriendly());
					else:
						echo($site->ContactPhone());
					endif;
						?></a><br>
			<?php
				endif;
			?>
			</p>
			<form>
				<form>
					<label for="name">Name, how should I address you?</label>
					<input type="text" minlength="2" id="name" name=name placeholder="Your Name" />
					<input type="text" minlength="2" id="honeypot" value="Name" name="honeypot" aria-hidden="true" placeholder="Last Name" />
					<label for="email">Reply email address</label>
					<input type="email" minlength="5" id="email" name="email" placeholder="your@email.address" />
					<label for="message">Your message</label>
					<textarea id="message" name="message" placeholder="Your Message"></textarea>
					<p>
						Your contact information and the contents of your message will only be used to repond to you. For more information please red the <a href="privacy">Privacy Policy.</a>
					</p>
					<input type="submit" name="submit" value="I agree, send." />
				</form>
			</form>
		</div>
		<div class="column">
			<h3><?= $site->FooterColumn3Title() ?></h3>
			<?=
					kirbytext($site->NewsletterDescription());
			?>
			<form>
				<p>email input</p>
				<?=
						kirbytext($site->NewsletterDisclaimer());
				?>
				<p>
					Signup button
				</p>
			</form>
		</div>
	</div>
	<div class="legal">
		<p><a href="">Imprint,</a> <a href="">Privacy Policy.</a> &copy; (Copyright) 2021 Wenzel Massag, all rights reserved.</p>
	</div>
</footer>