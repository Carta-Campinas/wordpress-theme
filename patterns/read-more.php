<?php
/**
 * Title: Read More
 * Slug: carta-campinas/read-more
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"section",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/read-more",
        "name":"Read More"
    },
    "className":"news-section wide",
    "backgroundColor":"base",
    "layout":{
        "type":"constrained"
    }
} -->
<section
    class="
        wp-block-group
        news-section
        wide
        has-base-background-color
        has-background
    "
>
    <!-- wp:heading {
        "level":1,
        "style":{
            "spacing":{
                "margin":{
                    "bottom":"var:preset|spacing|50"
                }
            },
            "elements":{
                "link":{
                    "color":{
                        "text":"var:preset|color|highlight"
                    }
                }
            }
        },
        "textColor":"highlight",
        "fontSize":"large",
        "fontFamily":"display"
    } -->

    <h1
        class="
            wp-block-heading
            has-highlight-color
            has-text-color
            has-link-color
            has-display-font-family
            has-large-font-size
        "
        style="
            margin-bottom:var(--wp--preset--spacing--50)
        "
    >
        <?php esc_html_e('Leia também', 'carta-campinas');?>
    </h1>

    <!-- /wp:heading -->

    <!-- wp:query {
        "queryId":55,
        "query":{
            "perPage":"4",
            "pages":0,
            "offset":0,
            "postType":"post",
            "order":"desc",
            "orderBy":"date",
            "author":"",
            "search":"",
            "exclude":[],
            "sticky":"",
            "inherit":false
        },
        "metadata":{
            "categories":["news"],
            "patternName":"core/block/129209",
            "name":"News List"
        },
        "className":"news-list caption-wide caption-bottom"
    } -->
    <div class="wp-block-query news-list caption-wide caption-bottom">

        <!-- wp:post-template {
            "fontSize":"small",
            "layout":{
                "type":"grid",
                "columnCount":4
            }
        } -->
            <!-- wp:pattern {"slug":"carta-campinas/news-item-cover-image-16-9-h5"} /-->
        <!-- /wp:post-template -->
        <!-- wp:query-no-results -->
            <!-- wp:paragraph {
                "placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."
            } -->
            <p></p>
            <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</section>
<!-- /wp:group -->