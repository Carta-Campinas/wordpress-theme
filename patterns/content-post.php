<?php
/**
 * Title: content-post
 * Slug: carta-campinas/content-post
 * Inserter: no
 */
?>
<!-- wp:post-featured-image {
    "isLink":false,
    "aspectRatio":"16/9"
} /-->
<!-- wp:post-title {
    "textAlign":"center",
    "level":1
} /-->
<!-- wp:columns {
    "style":{
        "spacing":{
            "margin":{
                "top":"var:preset|spacing|50",
                "bottom":"var:preset|spacing|50"
            }
        }
    }
} -->
<div
    class="wp-block-columns"
    style="
        margin-top:var(--wp--preset--spacing--50);
        margin-bottom:var(--wp--preset--spacing--50)
    "
>

    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%">
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%">

        <!-- wp:group {
            "style":{
                "spacing":{
                    "margin":{
                        "top":"var:preset|spacing|30",
                        "bottom":"var:preset|spacing|30"
                    }
                }
            },
            "layout":{
                "type":"flex",
                "flexWrap":"nowrap",
                "justifyContent":"space-between",
                "verticalAlignment":"center"
            }
        } -->
        <div
            class="wp-block-group"
            style="
                margin-top:var(--wp--preset--spacing--30);
                margin-bottom:var(--wp--preset--spacing--30)
            "
        >
            <!-- wp:avatar {"size":40} /-->

            <!-- wp:group {
                "layout":{
                    "type":"flex",
                    "orientation":"vertical"
                }
            } -->
            <div class="wp-block-group">

                <!-- wp:group {
                    "style":{
                        "typography":{
                            "fontStyle":"normal",
                            "fontWeight":"700"
                        }
                    },
                    "fontSize":"medium",
                    "fontFamily":"display",
                    "layout":{
                        "type":"flex",
                        "flexWrap":"nowrap"
                    }
                } -->
                <div
                    class="
                        wp-block-group
                        has-display-font-family
                        has-medium-font-size
                    "
                    style="
                        font-style:normal;
                        font-weight:700
                    "
                >
                
                    <!-- wp:paragraph -->
                    <p>
                        <?php esc_html_e('por ', 'carta-campinas');?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author {
                        "showAvatar":false,
                        "isLink":true
                    } /-->
            
                </div>
                <!-- /wp:group -->

                <!-- wp:group {
                    "fontSize":"small",
                    "fontFamily":"display",
                    "layout":{
                        "type":"flex",
                        "flexWrap":"nowrap"
                    }
                } -->
                <div
                    class="
                        wp-block-group
                        has-display-font-family
                        has-small-font-size
                    "
                >

                    <!-- wp:paragraph -->
                    <p>
                        <?php esc_html_e('em ', 'carta-campinas');?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date /-->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {
                "style":{
                    "layout":{
                        "selfStretch":"fill",
                        "flexSize":null
                    }
                }
            } -->
            <div aria-hidden="true" class="wp-block-spacer">
            </div>
            <!-- /wp:spacer -->

            <!-- wp:post-terms {
                "term":"category",
                "separator":"",
                "className":"pills"
            } /-->

        </div>
        <!-- /wp:group -->

        <!-- wp:separator {
            "className":"is-style-wide",
            "style":{
                "spacing":{
                    "margin":{
                        "top":"var:preset|spacing|50",
                        "bottom":"var:preset|spacing|50"
                    }
                }
            },
            "backgroundColor":"highlight"
        } -->
        <hr
            class="
                wp-block-separator
                has-text-color
                has-highlight-color
                has-alpha-channel-opacity
                has-highlight-background-color
                has-background
                is-style-wide
            "
            style="
                margin-top:var(--wp--preset--spacing--50);
                margin-bottom:var(--wp--preset--spacing--50)
            "
        />
        <!-- /wp:separator -->

        <!-- wp:post-content {"fontSize":"large"} /-->
        
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%">
    </div>
    <!-- /wp:column -->

</div>
<!-- /wp:columns -->