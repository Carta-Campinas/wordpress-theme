<?php
/**
 * Title: News Item
 * Slug: carta-campinas/news-item
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"article",
    "className":"news-item",
    "layout":{"type":"constrained"}
} -->
<article class="wp-block-group news-item">
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
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
        "fontFamily":"display",
        "layout":{
            "type":"constrained",
            "wideSize":"",
            "contentSize":""
        }
    } -->
    <div class="wp-block-group news-caption has-white-color has-contrast-transp-background-color has-text-color has-background has-link-color has-display-font-family">
        <!-- wp:post-terms {
            "term":"category",
            "className":"news-suite",
            "style":{
                "elements":{
                    "link":{
                        "color":{
                            "text":"var:preset|color|white"
                        }
                    }
                }
            },
            "backgroundColor":"highlight",
            "textColor":"white"
        } /-->

        <!-- wp:post-title {"isLink":true,"className":"news-heading"} /-->
    </div>
    <!-- /wp:group -->
</article>
<!-- /wp:group -->