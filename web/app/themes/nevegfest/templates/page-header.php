<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
        <a class="cta" href="//member.vegfest.org?src=nevf18" target="_blank">BECOME A MEMBER</a>
        <a class="cta yellow" href="//NewEnglandVegFest.com/exhibit/?src=frontpage2018"> Exhibit/Sponsor at VegFest</a>
        <a class="cta" href="//facebook.com/events/144050729606900/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP ON FACEBOOK</a>
			</div>
			<h2>Sunday April 29, 2018 &middot; Noon-5pm &middot; DCU Center &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
