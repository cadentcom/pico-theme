<?php
/**
 * Title: Featured Post
 * Slug: picodemo/featured-post
 * Categories: Posts
 */
?>


<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"}}},"backgroundColor":"custom-color-9","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-color-9-background-color has-background"
    style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px">
    <!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[9]}},"layout":{"type":"default"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"10px"}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                <!-- wp:post-terms {"term":"category"} /-->

                <!-- wp:post-date /-->

                <!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /-->

                <!-- wp:post-excerpt /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->