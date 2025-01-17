<?php
/**
 * Title: 16:9 (H4) News Item with Image Cover
 * Slug: carta-campinas/news-item-cover-image-16-9-h4
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"article",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/news-item-cover-image-16-9-h4",
        "name":"News Item with Image Cover 16:9 (H4)"
    },
    "className":"news-container news-item cover",
    "layout":{
        "type":"constrained"
    }
} -->
<article class="wp-block-group news-container news-item cover">
    
    <!-- wp:post-featured-image {
        "isLink":true,
        "aspectRatio":"16/9"
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
                "level":4,
                "isLink":true,
                "className":"news-heading"
            } /-->
    </div>
    <!-- /wp:group -->
</article>
<!-- /wp:group -->