<?php
/**
 * Title: Hero Search
 * Slug: pico-theme/hero-search
 */
?>


<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"custom-color-9","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-color-9-background-color has-background"
    style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-x-large-font-size"
            style="font-style:normal;font-weight:700;text-transform:capitalize">
            <?php echo esc_html_x('search your favorite topic', 'Hero search titile', 'pico-theme'); ?>
        </h1>
        <!-- /wp:heading -->

        <!-- wp:search {"label":"","width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"2px","color":"#bc6c25","radius":"100px"}},"className":"pico-search"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->