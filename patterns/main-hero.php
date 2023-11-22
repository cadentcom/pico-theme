<?php
/**
 * Title: Hero with image
 * Slug: pico-theme/main-hero
 * Categories: banner, hero
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"50px","right":"50px"}},"color":{"background":"#dee8f4"}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group has-background"
    style="background-color:#dee8f4;padding-top:100px;padding-right:50px;padding-bottom:100px;padding-left:50px">
    <!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
            <!-- wp:heading {"level":1} -->
            <h1 class="wp-block-heading">
                <?php echo esc_html_x('We Help To Build Your Success With great Marketing', 'Hero section title', 'pico-theme') ?>
            </h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>
                <?php echo esc_html_x('Mauris in diam sed magna rutrum scelerisque. Nulla iaculis quis massa eu iaculis. Fusce in tempus augue, et hendrerit ligula.', 'Hero section short description', 'pico-theme') ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                        <?php echo esc_html_x('Know More', 'Hero section call to action button', 'pico-theme') ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
            <!-- wp:image {"align":"right","id":12,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full alignright">
                <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/hero/hero-object.png')); ?>"
                    alt="" class="wp-image-12" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->