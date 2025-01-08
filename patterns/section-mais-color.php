<?php
/**
 * Title: Section Muito Mais (Color)
 * Slug: carta-campinas/section-mais-color
 * Categories: News
 */

?>
<!-- wp:group {
    "tagName":"section",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/section-mais-color",
        "name":"Section Saber \u0026 Saúde (color)"
    },
    "className":"section-mais wide",
    "style":{
        "spacing":{
            "padding":"var(--wp--custom--news-card--radius)"
        },
        "border":{
            "radius":{
                "topLeft":"var(--wp--custom--news-card--radius)",
                "topRight":"var(--wp--custom--news-card--radius)"
            }
        }
    },
    "backgroundColor":"yellow",
    "layout":{
        "type":"constrained"
    }
} -->
<section 
    class="
        wp-block-group
        section-mais
        wide
        has-yellow-background-color
        has-background
    "
    style="
        border-top-left-radius:var(--wp--custom--news-card--radius);
        border-top-right-radius:var(--wp--custom--news-card--radius);
        padding:var(--wp--custom--news-card--radius)
    "
>
<!-- wp:heading {
    "style":{
        "spacing":{
            "margin":{
                "bottom":"var:preset|spacing|50"
            }
        }
    },
    "textColor":"highlight"
} -->
    <h2
        class="
            wp-block-heading
            has-highlight-color
            has-text-color
        "
        style="margin-bottom:var(--wp--preset--spacing--50)"
    >
        <?php esc_html_e('Muito Mais', 'carta-campinas');?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:query {
        "queryId":14,
        "query":{
            "perPage":3,
            "pages":0,
            "offset":0,
            "postType":"post",
            "order":"desc",
            "orderBy":"date",
            "author":"",
            "search":"",
            "exclude":[],
            "sticky":"exclude",
            "inherit":false,
            "tax_query":{
                "relation":"OR",
                "queries":[
                    {
                        "id":"58a55207-40a9-43ec-994a-a685f90b5cf0",
                        "taxonomy":"category",
                        "terms":[
                            "Artes",
                            "Cultura",
                            "Cultura SP",
                            "Política",
                            "Economia",
                            "Economia e Política",
                            "Manchete"
                        ],
                        "include_children":true,
                        "operator":"NOT IN"
                    }
                ]
            }
        },
        "namespace":"advanced-query-loop",
        "metadata":{
            "categories":["posts"],
            "patternName":"core/query-grid-posts",
            "name":"Grade"
        }
    } -->
    <div class="wp-block-query">

        <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

            <!-- wp:pattern {
                "slug":"carta-campinas/news-item-cover-image-4-3-h5"
            } /-->

        <!-- /wp:post-template -->
        
    </div>
    <!-- /wp:query -->

</section>
<!-- /wp:group -->