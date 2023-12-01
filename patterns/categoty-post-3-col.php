<?php
/**
 * Title: Category Post 3 column
 * Slug: picodemo/categoty-post-3-col
 * Categories: Posts
 */
?>

<!-- Lifestyle category post section -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"30px","right":"30px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-right:30px;padding-bottom:50px;padding-left:30px">
    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
                <h2 class="wp-block-heading">
                    <?php echo esc_html_x('Lifestyle', 'category post title', 'picodemo'); ?>
                </h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:paragraph {"align":"right","style":{"typography":{"textDecoration":"none"}}} -->
                <p class="has-text-align-right" style="text-decoration:none">
                    <a href="#" data-type="category">
                        <?php echo esc_html_x('Show all', 'Show all category post button', 'picodemo'); ?>
                    </a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group">
        <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[11]}},"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-query alignwide">
            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
            <p class="has-text-align-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
                <?php echo esc_html_x('No posts were found.', 'Post not found message', 'picodemo'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group"
                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"}},"border":{"radius":"0px"}}} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0">
                    <!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":null,"selfStretch":"fixed"}},"fontSize":"large"} /-->
                    
                    <!-- wp:post-date /-->

                    <!-- wp:post-excerpt {"excerptLength":30,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->