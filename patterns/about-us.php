<?php
/**
 * Title: About Us
 * Slug: pico-theme/about-us
 * Categories: about
 */
?>

<!-- wp:group {"style":{"color":{"background":"#2842b0"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group has-background"
    style="background-color:#2842b0;padding-top:100px;padding-bottom:100px;margin-top:0;margin-bottom:0;">
    <!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis: 60%">
            <!-- wp:image {"id":34,"width":"500px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized">
                <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/about.jpg')) ?>" alt=""
                    class="wp-image-34" style="width:500px;height:auto" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 40%">
            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0px","bottom":"30px"}}},"textColor":"base"} -->
            <h2 class="wp-block-heading has-base-color has-text-color has-link-color"
                style="margin-top:0px;margin-bottom:30px">
                <?php echo esc_html_x('We Work with team of creative people, digital marketing expert.', 'About section title', 'pico-theme'); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"base-2"} -->
            <p class="has-base-2-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px">
                <?php echo esc_html_x("There are many variations of passages of Lorem Ipsum available, but the majority have suffered altration in some form, by injected humour, words randomised words which don't look even slightly believable. If you are going to use a passage.", "About section description", 'pico-theme'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                        <?php echo esc_html_x('Know More', 'About section button', 'pico-theme'); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->