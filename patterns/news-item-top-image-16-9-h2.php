<?php
/**
 * Title: 16:9 (H2) News Item with Image at Top
 * Slug: carta-campinas/news-item-top-image-16-9-h2
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"article",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/news-item-top-image-16-9-h2",
        "name":"16:9 (H2) News Item with Image at Top"
    },
    "className":"news-item image-top",
    "layout":{
        "type":"constrained"
    }
} -->
<article class="wp-block-group news-item image-top">

    <!-- wp:group {
        "className":"news-container",
        "layout":{
            "type":"constrained"
        }
    } -->
    <div class="wp-block-group news-container">
    
        <!-- wp:post-featured-image {
            "isLink":true,
            "aspectRatio":"16/9"
        } /-->


        <!-- wp:tijolo-org/featured-category {
            "style":{
                "typography":{
                    "textAlign":"left"
                }
            },
            "fontSize":"small"
        } /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-title {
        "level":2,
        "isLink":true
    } /-->
</article>
<!-- /wp:group -->