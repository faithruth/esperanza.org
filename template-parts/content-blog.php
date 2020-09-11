<div class="container">
    <div class="section-heading text-center mb-40">
        <h2>Latest Stories</h2>
    </div>

    <div class="stories-wrap row">
        <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $author_id = get_the_author_meta( 'ID' );?>
            <div class="blog-story col-md-6">
                <div class="story-content  row">
                    <div class="col-md-7 blog_image">
                        <a href="" class="d-flex align-items-center" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                        </a>
                    </div>
                    <div class="col-md-5 border-purple">
                        <div class="stories-details">
                            <h3><?php the_title(); ?></h3>
                            <div class="post-details">
                        <p><i class="fas fa-calendar-day"></i> Date: <span><?php echo the_date( 'F j, Y' ); ?></span></p>
                        <p><i class="fas fa-user"></i> Author: <span><?php echo get_the_author_meta( 'display_name', $author_id );
  ?></span></p>
                    </div>
                            <p><?php echo wp_trim_words( get_the_content(), 25, '...' ) ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; // End of the loop.
        endif;
		?>
    </div>
</div>