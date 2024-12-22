<?php
/**
 * Title: Section Youtube @cartacampinastv
 * Slug: carta-campinas/section-cartacampinastv
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"section",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/section-cartacampinastv",
        "name":"Section Youtube @cartacampinastv"
    },
    "className":"section-cartacampinastv",
    "layout":{
        "type":"constrained"
    },
    "style": {
        "spacing":{
            "padding":"var(--wp--custom--news-card--radius)"
        },
        "border":{
            "radius":{
                "topLeft": "var(--wp--custom--news-card--radius)",
                "topRight": "var(--wp--custom--news-card--radius)"
            }
        }
    }
} -->
<section
    class="
        wp-block-group
        section-cartacampinastv
        wide
    "
    style="
        padding: var(--wp--custom--news-card--radius);
        border-top-left-radius: var(--wp--custom--news-card--radius);
        border-top-right-radius: var(--wp--custom--news-card--radius);
    "
    >


    <!-- wp:heading {
        "level":2,
        "textColor": "highlight",
        "style":{
            "spacing":{
                "margin":{
                    "bottom":"var:preset|spacing|50"
                }
            }
        }
    } -->
    <h2
        class="wp-block-heading has-text-color has-highlight-color"
        style="margin-bottom:var(--wp--preset--spacing--50)"
    >
        <?php esc_html_e('@cartacampinastv', 'carta-campinas');?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:hackeamos-org/hackeamos-video-list {
        "serviceName": "youtube",
        "serviceSettings": {
            "numVideos": 2,
            "resource": "@cartacampinastv",
            "isValid": true
        }
    } -->
    <ul
        class="wp-block-hackeamos-org-hackeamos-video-list"
        data-video-list-service="youtube"
        data-video-list-resource="@cartacampinastv"
        data-video-list-num-videos=2
    >
        <li class="video-list-item">
            <article class="video-list-placeholder"></article>
        </li>
        <li class="video-list-item">
            <article class="video-list-placeholder"></article>
        </li>
    </ul>
    <!-- /wp:hackeamos-org/hackeamos-video-list -->

</section>
<!-- /wp:group -->