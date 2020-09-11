<div class="container">
    <?php 
$args = array(
    'post_status' => 'inherit',
'posts_per_page' => 4,
'post_type' => 'attachment',
);

$args['tax_query'] = array(
array(
    'taxonomy' => 'images',
    'terms' => array( 'volunteer' ),
    'field' => 'slug',
),
);

$volunteer_images = get_posts( $args );
?>
    <div class="esperanza-team row">
        <div class="col-md-6">
            <div class="esperanza-gallery row">
            <?php foreach($volunteer_images as $volunteer_image) {?>
                <div class="col-md-6">
                    <a href="<?php echo wp_get_attachment_url($volunteer_image->ID); ?>" class="gallery_image gallery d-flex align-items-center" style="background-image: url(<?php echo wp_get_attachment_url($volunteer_image->ID); ?>);">
                    </a>
                </div>
            <?php }?>
			</div>
        </div>
        <div class="col-md-6">
            <div class="esperanza-volunterr-details text-center">
                <div class="text-wrapper">
                    <h2>Volunteer with us</h2>
                    <p>Volunteers from around the world are called upon to join Esperanza Foundation in cause of helping the most vulnerable people in the societies of Nebbi -Uganda.</p>
                    <a href="https://www.givingway.com/organization/esperanza-foundation/?context=apply" class="esperanza-btn-dark">Join us</a>
                </div>
			</div>
		</div>
</div>
</div>
