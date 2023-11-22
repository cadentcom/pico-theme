<?php
/**
 * Title: Portfolio
 * Slug: pico-theme/portfolio
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:100px;padding-bottom:100px">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <p style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('Portfolio', 'Portfolio section title tag', 'pico-theme'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"25px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:25px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <h2 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('Please Check Our recent Case Study', 'Portfolio section title', 'pico-theme'); ?>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:40px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <p style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.', 'Portfolio section title descrption', 'pico-theme'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->


    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">

        <!-- wp:pattern {"slug":"pico-theme/portfolio-left-image"} /-->

        <!-- wp:spacer {"height":"50px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:pattern {"slug":"pico-theme/portfolio-right-image"} /-->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->