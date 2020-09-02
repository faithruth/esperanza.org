<div class="container">
    <div class="section-heading text-center mb-40">
        <h2>Latest Stories</h2>
    </div>

    <div class="stories-wrap row">
        <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="col-md-6 xs-padding">
                <div class="story-content  row">
                    <div class="col-md-6">
                    <a href="<?php the_permalink(); ?>" class="read-more">
                    <?php esperanza_post_thumbnail(); ?>
                    </a>
                    </div>
                    <div class="col-md-6">
                        <div class="stories-details">
                            <h3><?php the_title(); ?></h3>
                            <p><?php wp_trim_words( the_content(), 25, '...' ) ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <?php endwhile; // End of the loop.
        endif;
		?>
    </div>
</div>