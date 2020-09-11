<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Esperanza
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
	esperanza_post_thumbnail(); 
	echo '<h2 class="entry-title">'. get_the_title().'</h2>';?>
	<div class="entry-meta">
		<?php
			esperanza_posted_on();
			esperanza_posted_by();
		?>
	</div><!-- .entry-meta -->
	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
