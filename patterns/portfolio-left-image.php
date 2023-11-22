<?php
/**
 * Title: Portfolio Left Image
 * Slug: cadent-seo/portfolio-left-image
 */
?>

<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
        <!-- wp:image {"id":50,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/portfolio/img1.png')); ?>" alt=""
                class="wp-image-50" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <p style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('Digital Marketing', 'protfolio title tag', 'cadent-seo'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"30px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:30px" aria-hidden="true" class="wp-block-spacer">
        </div>
        <!-- /wp:spacer -->

        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <h2 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('Vestibulum ante ipsum faucibus luctus.', 'portfolio title', 'cadent-seo'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer">
        </div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <p style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('Praesent tempus nibh eget arcu dictum efficitur ac eu arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae felis commodo', 'portfolio description', 'cadent-seo'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer">
        </div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <p style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('Praesent tempus nibh eget arcu dictum efficitur ac eu arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae felis commodo', 'portfolio description', 'cadent-seo'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer">
        </div>
        <!-- /wp:spacer -->

        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                    <?php echo esc_html_x('Find More', 'portfolio button'); ?>
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->