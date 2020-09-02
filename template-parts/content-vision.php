<div class="container">
    <div class="owl-carousel esperanza-about card-deck">
        <?php 
        $pages = get_pages(
            array(
                'child_of'     => 0,
                'number'       => 3,
            )
        );
        foreach ($pages as $page){ ?>

        <?php } ?>
    </div>
</div>

<div class="container">
    <div class="esperanza-about card-deck">
    <?php
    $about_page = get_page_by_path( 'about' );
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $about_page->ID,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
    );

    $pages = new WP_Query( $args );
    if ( $pages->have_posts() ) : ?>

        <?php while ( $pages->have_posts() ) : $pages->the_post(); ?>
    
            <div id="parent-<?php the_ID(); ?>" class="parent-page">
                <div class="card rounded-0 border-purple bg-light mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words( the_content(), 40, '...' ); ?></p>
                    </div>
                    <div class="card-body-overlay">
                            <a href="<?php the_permalink(); ?>" class="">Read More</a>
                    </div>
                </div>
    
            </div>
    
        <?php endwhile; ?>
    
    <?php endif; wp_reset_postdata(); ?>
</div>
</div>
