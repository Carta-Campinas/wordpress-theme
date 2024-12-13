<?php
/**
 * Title: 4:3 (H5) News Item with Image Cover
 * Slug: carta-campinas/news-item-cover-image-4-3-h5
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"article",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/news-item-cover-image-4-3-h5",
        "name":"4:3 (H5) News Item with Image Cover"
    },
    "className":"news-container news-item cover",
    "layout":{
        "type":"constrained"
    }
} -->
<article class="wp-block-group news-container news-item cover">
    
    <!-- wp:post-featured-image {
        "isLink":true,
        "aspectRatio":"4/3"
    } /-->

    <!-- wp:group {
        "className":"news-caption",
        "style":{
            "elements":{
                "link":{
                    "color":{
                        "text":"var:preset|color|white"
                    }
                }
            }
        },
        "backgroundColor":"contrast-transp",
        "textColor":"white",
        "layout":{
            "type":"constrained",
            "wideSize":"",
            "contentSize":""
        }
    } -->
    <div
        class="
            wp-block-group
            news-caption
            has-white-color
            has-contrast-transp-background-color
            has-text-color
            has-background
            has-link-color
        "
    >
            <!-- wp:tijolo-org/featured-category {
                "style":{
                    "typography":{
                        "textAlign":"left"
                    }
                },
                "fontSize":"small"
            } /-->

            <!-- wp:post-title {
                "level":5,
                "isLink":true,
                "className":"news-heading"
            } /-->
    </div>
    <!-- /wp:group -->
</article>
<!-- /wp:group -->