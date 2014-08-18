<?php
/*
Template Name: about
*/
get_header(); ?>
<body class="regbg">
<div class="texture">

		<div id="topcloud">
			<?php get_template_part(nav,menu); ?>
		</div>

				<div class="grid-container">
					<div class="grid-12">
				



				<?php if(have_posts()) : while( have_posts()) : the_post();?>

					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>


				<?php endwhile;?>
				<?php else: ?>

					<p> No posts here ;) </p>

				<?php endif; ?> 
					</div>
		

				</div>
</div>
<?php get_footer();?>
