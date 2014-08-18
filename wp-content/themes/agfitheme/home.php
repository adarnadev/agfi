<?php get_header(); ?>
<body id="blogbg">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=528587357257232&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	





<div id="topcloud">
	<?php get_template_part(nav,menu); ?>
</div>


<div class="grid-container">


	<a class="grid-12" href="<?php bloginfo('url'); ?>/products/"><img style="display:block;margin-left:auto;margin-right:auto;margin-bottom:80px;"src="<?php bloginfo('template_directory'); ?>/img/ahdigitallogo.png" /></a>
		
	<div class="grid-12">
			
			<?php if(have_posts()) : while( have_posts()) : the_post();?>
			
			<div id="social">
				<div><a href="<?php the_permalink(); ?>" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a></div>
				<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
			<br><br><br>
			<div>
				<h2 style="text-align:center"><?php the_title(); ?></h2>
				
				<p style="font-size:.7em;text-align:center;">Posted on: <?php the_time('F j, Y'); ?>
				Posted by <?php the_author(); ?></p>
				
				<?php the_content('Read more...'); ?>
				
				<!-- Begin MailChimp Signup Form -->
										
					<div id="mc_embed_signup">
						<form action="http://adarna.us3.list-manage2.com/subscribe/post?u=52208460643c2b191e0f68272&amp;id=493cffffec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<label for="mce-EMAIL">Join our community!</label>
							<input style="margin:0 auto;"type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;"><input type="text" name="b_52208460643c2b191e0f68272_493cffffec" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</form>
					</div>

				<!--End mc_embed_signup-->
				
				<hr class="bloghr">
				<?php endwhile;?>
				<?php else: ?>
				<p> No posts here ;). </p>
				<?php endif; ?>
			</div>
	</div>
</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php get_footer(); ?>
