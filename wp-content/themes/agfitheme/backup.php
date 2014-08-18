
<!--<h2>FEATURES</h2>
				<ul>
					<li><i>Award-winning Story</i> – Experience the story that was adjudged one of the 1st National Children’s Book Award Best Reads in 2010, given by the National Book Development Board (NBDB) and the Philippine Board on Books for Young People (PBBY).</li><br>
					<li><i>Kid-tested Story</i> – A Day in the Market is a story made for children and approved by children. The story and illustrations were tested with more than a hundred schoolchildren who gave their feedback and thoughts about the story and art.</li><br>
					<li><i>Interactive</i> – Immerse yourself in every page of A Day in the Market’s digital narrative. Manipulate different characters and objects to see how they react. Watch your child interact and discover the different interactions throughout the story.</li><br>
					<li><i>Sounds and Visuals</i> – A Day in the Market is complete with colorful visuals, a playful musical score, and interesting sound effects to delight every reader.</li><br>
					<li><i>Narration</i> – Listen to the story in two languages! Narrations can be toggled between English and Filipino.</li><br>
					<li><i>Sorting Game</i> – Sort the food Nanay bought from their exciting trip in the market in a fun and easy way.</li><br>
					<li><i>Cooking game</i> – Discover and cook your favorite Filipino dish with the different ingredients encountered in the story.</li><br>
				</ul> -->

				
			<!--<h2>FEATURES</h2>
				<ul>
					<li><i>Kid-tested Story</i> – But That Won’t Wake Me Up! is a story made for children and approved by children. The story and illustrations were tested with more than a hundred schoolchildren who gave their feedback and thoughts about the story and art.</li><br>
					<li><i>Interactive</i> – Immerse yourself in every page of But That Won’t Wake Me Up!’s digital narrative. Manipulate different characters and objects to see how they react. Watch your child interact and discover the different interactions throughout the story.</li><br>
					<li><i>Sounds and Visuals</i> – But That Won’t Wake Me Up! is complete with colorful visuals, a playful musical score, and interesting sound effects to delight every reader.</li><br>
					<li><i>Narration</i> – Listen to the story in two languages! Narrations can be toggled between English and Filipino.</li><br>
				</ul> -->

<div class="grid-2" style="display:inline-block">
			<div ><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-lang="en" data-count="vertical">Tweet</a></div>
			<div class=" fb-like" data-href="<?php the_permalink() ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		




<div class="grid-container">
	<?php get_template_part(nav,menu); ?>
</div>

<a href="<?php bloginfo('url'); ?>"><img style="display:block;margin-left:auto;margin-right:auto;"src="<?php bloginfo('template_directory'); ?>/img/ahdigitallogo.png" /></a>
<div id="pagewrap">
	
	
	<div id="blogcontent">

		<?php if(have_posts()) : while( have_posts()) : the_post();?>
		<p id="blogdetails"> Posted on: <?php the_time('F j, Y'); ?></p>
		
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 46 ); ?>
		
		<div id="postinfo">
			<h2><?php the_title(); ?></h2>
			<span>Posted by <?php the_author(); ?></span>
		</div>

		<div id="social">
		<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-lang="en" data-count="vertical">Tweet</a></div>
		<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-type="box_count"></div>
		</div>



		<?php the_content(); ?>
		
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


									<!-- <p>Categories: <?php the_category(', '); ?> </p> -->
									<hr class="bloghr">
								<?php endwhile;?>
							<?php else: ?>

							<p> No posts here ;). </p>

						<?php endif; ?>

		</div>



				<div id="balloonbar">
					<h3>Experience Filipino Stories!</h3>




					<div id="slideshow">
						<div>
							<a href="https://itunes.apple.com/ph/app/a-day-in-the-market/id593049585?mt=8"><img src="<?php bloginfo('template_directory'); ?>/img/aspicon.png" />
							<h4> Araw sa Palengke </h4></a>
							<p>  Experience the sights, smells, and sounds of A Day in the Market in Filipino & English. </p> 
						</div>

						<div>
							<a href="https://itunes.apple.com/ph/app/but-that-wont-wake-me-up!/id704205932?mt=8"><img src="<?php bloginfo('template_directory'); ?>/img/btwicon.png" />
							<h4>  But That Won't Wake me Up </h4></a>
							<p> Watch the pages of this award-winning story come to life in Filipino & English.</p>			
						</div>
						<div>
							<div class="fb-like-box" data-href="http://www.facebook.com/adarnadigital" data-width="220" data-height="200" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
						</div>
					</div>
				</div>
</div>
<!-- <div class="turnpage">
	<div class="alignright">
		<?php previous_posts_link('Next Entries &raquo;') ?>
	</div>
	<div class="alignleft">
		<?php next_posts_link('&laquo; Previous Entries') ?>
	</div>
</div> -->


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php get_footer(); ?>