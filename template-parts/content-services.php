<div class="container">
    <div class="esperanza-slider owl-carousel owl-theme">
    <?php
    $services_page = get_page_by_path( 'services' );
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $services_page->ID,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
    );

    
    $pages = new WP_Query( $args );
    if ( $pages->have_posts() ) : ?>

        <?php while ( $pages->have_posts() ) : $pages->the_post(); ?>
    
            <div id="parent-<?php the_ID(); ?>" class="parent-page">
                <div class="justify-content-between">
                <div class="esperanza-slider__img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="esperanza-slider__description ">
                    <div class="text-wrapper text-left">
                        <h3 class="esperanza-slider__title"><?php the_title(); ?></h3>
                        <p class="esperanza-slider__content welcomePrompt"><?php echo wp_trim_words( get_the_content(), 25, '...' ) ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
    
            </div>
    
        <?php endwhile; ?>
    
    <?php endif; wp_reset_postdata(); ?>
</div>
</div>
