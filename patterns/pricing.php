<?php
/**
 * Title: Pricing
 * Slug: pico-theme/pricing
 */
?>

<!-- wp:group {"style":{"color":{"background":"#f3f8fd"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group has-background"
    style="background-color:#f3f8fd;margin-top:0px;margin-bottom:0px;padding-top:100px;padding-bottom:100px">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('Choose your Best Plan', 'Pricing section title', 'pico-theme'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <div style="margin-top:0px;margin-bottom:0px;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
        <p class="has-text-align-center" style="margin-top:0px;margin-bottom:0px">
            <?php echo esc_html_x('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'Pricing section title description', 'pico-theme'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"50px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div style="margin-top:0px;margin-bottom:0px;height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"color":{"background":"#dee8f4"}}} -->
            <div class="wp-block-column has-background"
                style="background-color:#dee8f4;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
                <!-- wp:image {"align":"center","id":61,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full">
                    <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/pricing/pricing-icon-1.png')); ?>"
                        alt="" class="wp-image-61" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"30px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:30px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('Start Up', 'pricing card title', 'pico-theme'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"15px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:15px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"large"} -->
                <h5 class="wp-block-heading has-text-align-center has-large-font-size"
                    style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('$10.00 /Month', 'Pricing card price per month', 'pico-theme'); ?>
                </h5>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:list {"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"padding":{"top":"0","bottom":"0"}}},"className":"is-style-checkmark-list"} -->
                <ul style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0;padding-bottom:0"
                    class="is-style-checkmark-list"><!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Fusce eget sagittis libero finibus.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Sed quam in risus placerat.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Ultricies elit tortor nec diam.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Varius tincunt dolor pharetra.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Donec cursus lectus quis porta', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px">
                    <!-- wp:button {"width":50,"style":{"color":{"background":"#2842b0"}}} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-50"><a
                            class="wp-block-button__link has-background wp-element-button"
                            style="background-color:#2842b0">
                            <?php echo esc_html_x('Select plan', 'Pricing card button', 'pico-theme'); ?>
                        </a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"color":{"background":"#2842b0"}}} -->
            <div class="wp-block-column has-background"
                style="background-color:#2842b0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
                <!-- wp:image {"align":"center","id":62,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full">
                    <img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/pricing/pricing-icon-2.png')); ?>"
                        alt="" class="wp-image-62" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"30px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:30px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
                <h4 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color"
                    style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('Premium', 'pricing card title', 'pico-theme'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"15px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:15px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"large"} -->
                <h5 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color has-large-font-size"
                    style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('$50.00 /Month', 'Pricing card price per month', 'pico-theme'); ?>
                </h5>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:list {"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","className":"is-style-checkmark-list"} -->
                <ul style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"
                    class="is-style-checkmark-list has-base-2-color has-text-color has-link-color"><!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Fusce eget sagittis libero finibus', 'Pricing card features list', 'pico-theme'); ?>.
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Sed quam in risus placerat', 'Pricing card features list', 'pico-theme'); ?>.
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Ultricies elit tortor nec diam', 'Pricing card features list', 'pico-theme'); ?>.
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Varius tincunt dolor pharetra.', 'Pricing card features list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Donec cursus lectus quis porta', 'Pricing card features list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px">
                    <!-- wp:button {"backgroundColor":"accent-3","width":50} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-50"><a
                            class="wp-block-button__link has-accent-3-background-color has-background wp-element-button">
                            <?php echo esc_html_x('Select plan', 'Pricing card button', 'pico-theme'); ?>
                        </a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"color":{"background":"#dee8f4"}}} -->
            <div class="wp-block-column has-background"
                style="background-color:#dee8f4;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
                <!-- wp:image {"align":"center","id":63,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full"><img
                        src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/pricing/pricing-icon-3.png')); ?>"
                        alt="" class="wp-image-63" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"30px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:30px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('Unlimited', 'pricing card title', 'pico-theme'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"15px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:15px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"large"} -->
                <h5 class="wp-block-heading has-text-align-center has-large-font-size"
                    style="margin-top:0px;margin-bottom:0px">
                    <?php echo esc_html_x('$100.00 /Month', 'Pricing card price per month', 'pico-theme'); ?>
                </h5>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:list {"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"className":"is-style-checkmark-list"} -->
                <ul style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"
                    class="is-style-checkmark-list">
                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Fusce eget sagittis libero finibus.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Sed quam in risus placerat.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Ultricies elit tortor nec diam.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Varius tincunt dolor pharetra.', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                    
                    <!-- wp:list-item -->
                    <li>
                        <?php echo esc_html_x('Donec cursus lectus quis porta', 'Pricing card feature list', 'pico-theme'); ?>
                    </li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:spacer {"height":"35px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div style="margin-top:0px;margin-bottom:0px;height:35px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px">
                    <!-- wp:button {"width":50,"style":{"color":{"background":"#2842b0"}}} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-50"><a
                            class="wp-block-button__link has-background wp-element-button"
                            style="background-color:#2842b0">
                            <?php echo esc_html_x('Select plan', 'Pricing card button', 'pico-theme'); ?>
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
</div>
<!-- /wp:group -->