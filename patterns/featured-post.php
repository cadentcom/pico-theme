<?php
/**
 * Title: Featured Post
 * Slug: picodemo/featured-post
 * Categories: Posts
 */
?>

<!-- Featured post section -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"custom-color-9","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-color-9-background-color has-background"
    style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[9]}},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"align":"center","backgroundColor":"accent-4","fontSize":"large"} -->
        <p class="has-text-align-center has-accent-4-background-color has-background has-large-font-size">
            <?php echo esc_html('No posts were found.', 'picodemo'); ?>
        </p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"className":"pico\u002d\u002dfeatured\u002d\u002dpost-item","layout":{"type":"default"}} -->
            <div class="wp-block-group pico--featured--post-item">
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"9/16","dimRatio":30,"style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"}},"border":{"radius":"0px"}}} /-->

                <!-- wp:group {"className":"pico\u002d\u002dfeatured\u002d\u002dpost-content","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group pico--featured--post-content">
                    <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

                    <!-- wp:post-terms {"term":"category"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->