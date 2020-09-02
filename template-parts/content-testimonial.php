<div class="container">
    <div class="section-heading text-center mb-40">
            <h2>Testimonials</h2>
    </div>
    <div class="esperanza-about card-deck">
        <?php 
        $pages = get_pages(
            array(
                'child_of'     => 0,
                'number'       => 3,
            )
        );
        foreach ($pages as $page){ ?>
        <div class="card rounded-0 border-purple bg-light mb-3">
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo $page->post_title; ?></h5>
                <p class="card-text"><?php echo wp_trim_words( $page->post_content, 40, '...' ); ?></p>
            </div>
            <div class="card-body-overlay">
                    <a href="<?php echo get_page_link( $page->ID ); ?>" class="">Read More</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
