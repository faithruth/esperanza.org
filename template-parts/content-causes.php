<div class="container">
    <div class="section-heading text-center mb-40">
        <h2>Latest Causes</h2>
        <span class="heading-border"></span>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>
    </div>

    <div class="causes-wrap row">
        <?php
        $args = array( 'post_type' => 'campaigns', 'posts_per_page' => 3 );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="col-md-4 xs-padding">
                <div class="cause-content">
                    <div class="cause-image">
                        <a href="" class="d-flex align-items-center" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                        </a>
                    </div>
                        <?php 
                        $target = get_post_meta( $post->ID, '_esperanza_target_field_key', true ); 
                        $raised = get_post_meta( $post->ID, '_esperanza_raised_field_key', true );
                        $value = ($raised/$target);
                        if($raised == 0 || $target == 0 || !is_numeric($target) || !is_numeric($raised)){
                            $percentage = 0;
                            $raised = 0; 
                            $target = 0;
                        } else {
                            $percentage = ($raised/$target)*100;
                        }
                        ?>
                        <a href="<?php echo get_post_meta( $post->ID, '_esperanza_link_field_key', true ); ?>" class="donate-btn">Donate Now</a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $percentage ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <span class="wow" style="left: <?php echo $percentage ?>%;" ><?php echo $percentage ?>%</span>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
                            <div class="donation-amount">
                                <p><i class="fas fa-signal"></i> Target: <?php echo $target; ?></p>
                                <p><i class="fas fa-thumbs-up"></i> Raised: <?php echo $raised; ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                </div>
            </div>
            <?php endwhile; // End of the loop.
        endif;
		?>
    </div>
</div>