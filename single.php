<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Esperanza
 */

get_header();
?>
<div class="entry-header pager-header">
	<div class="container">
		<div class="page-content">
			<?php
			if ( is_singular() ) :
				echo '<h2 class="entry-title">'. get_the_title().'</h2>';
			else :
				echo '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.get_the_title().'</a></h2>';
			endif;
			get_breadcrumb()?>
		</div>
	</div>
</div><!-- .entry-header -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="primary" class="site-main">
				

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				

				</main><!-- #main -->
			</div>
		
			<div class="col-md-3">
				<?php
				get_sidebar();?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
