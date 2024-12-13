<?php
/**
 * Title: 16:9 (H3) News Item with Image Cover
 * Slug: carta-campinas/news-item-cover-image-16-9-h3
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"article",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/news-item",
        "name":"News Item"
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
        "level":3,
        "isLink":true
    } /-->
</article>
<!-- /wp:group -->