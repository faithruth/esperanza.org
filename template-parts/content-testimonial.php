<div class="container">
    <div class="section-heading text-center mb-40">
            <h2>Testimonials</h2>
    </div>
    <div class="esperanza-testimonials owl-carousel owl-theme ">
        <?php 
        $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
        $testimonials = new WP_Query( $args );
        if ( $testimonials->have_posts() ) : 
            while ( $testimonials->have_posts() ) : $testimonials->the_post();
            
            ?>
        <div class="testimonial-card">
            <div class="testimonail-box border-purple">
                <div class="text-left">
                    <h4><?php the_title(); ?><span><?php echo get_post_meta( get_the_ID(), '_esperanza_position_field_key', true );?></span></h4>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; // End of the loop.
        endif;
		?>
    </div>
</div>
