<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esperanza
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>About</h2>
					<p></p>
					<ul class=" text-left">
						<li class="list-inline-item">
							<a href=""><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="list-inline-item">
							<a href=""><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="list-inline-item">
							<a href=""><i class="fab fa-instagram"></i></a>
						</li>
						<li class="list-inline-item">
							<a href=""><i class="fab fa-youtube-square"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h2>Cause</h2>
					<ul>
					<?php
					$args = array( 'post_type' => 'campaigns', 'posts_per_page' => 3 );
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) : 
						while ( $the_query->have_posts() ) : $the_query->the_post();?>
						<li>
							<i class="fas fa-angle-right"></i><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
						<?php 
						endwhile;
					endif;
					?>
					</ul>
				</div>
				<div class="col-md-3">
					<h2>Stories</h2>
					<ul>
					<?php
					$args = array( 'cat' => 'stories', 'posts_per_page' => 3 );
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) : 
						while ( $the_query->have_posts() ) : $the_query->the_post();?>
						<li>
							<i class="fas fa-angle-right"></i>
							<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
						</li>
						<?php 
						endwhile;
					endif;
					?>
					</ul>
				</div>
				<div class="col-md-3">
					<h2>Contact us</h2>
					<p>Plot Nakasero Hill Road, Uganda - East Africa.</p>
					<p>+256 775 61 79 13</p>
					<p>+256 785 93 31 96</p>
					<p>info@esperanzaug.org</p>
				</div>

			</div>
			<hr>
			<div class="row">
				<div class="col-12">
					<p class="text-center">
					Copyright ©<?php echo date("Y"); ?> All rights reserved esperanza foundation
					</p>
				</div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
