<?php
/*
Template Name: Front
*/
get_header(); ?>
<body class="grid-container">


<!-- image header -->

<div class="grid-4">
<a href="<?php bloginfo('url'); ?>"><img style="display:block;margin-top:50px;margin-left:auto;margin-right:auto;"src="<?php bloginfo('template_directory'); ?>/img/agfilogo.png" /></a>
<a href="<?php bloginfo('url'); ?>/help-the-foundation"><img style="display:block;margin-left:auto;margin-right:auto;"src="<?php bloginfo('template_directory'); ?>/img/iwanttohelp.png" /></a>								
</div>
<a class="grid-8" href="<?php bloginfo('url'); ?>"><img style="display:block;width:100%;"src="<?php bloginfo('template_directory'); ?>/img/agfiheader.png" /></a>

<!-- end of image header -->


<!-- navbar -->
<?php get_template_part(nav,menu); ?>

<!--  -->

				<div class="grid-2"></div>
				<div id="contentmain" class="grid-9">
				



				<?php if(have_posts()) : while( have_posts()) : the_post();?>

					
					<?php the_content(); ?>


				<?php endwhile;?>
				<?php else: ?>

					<p> No posts here ;) </p>

				<?php endif; ?> 
				

				</div>
				<div class="grid-1"></div>



<?php get_footer();?>