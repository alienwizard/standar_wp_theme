<?php get_header(); ?>
<article>
	<div class="container">
<?php if(have_posts()){

		while (have_posts()) {
			the_post();


			the_title();


			the_content();


		}


		wp_reset_postdata();


	}?>
	</div>
</article>
<?php get_footer(); ?>
