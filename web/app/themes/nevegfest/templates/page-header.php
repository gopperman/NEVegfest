<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
				<a class="cta" href="/sponsor-and-exhibitor-application/">Sponsor / Exhibit</a>
				<a class="cta" href="#about">Learn More</a>
			</div>
			<h2>Sunday, April 26 2015 &middot; 11AM-5PM &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
