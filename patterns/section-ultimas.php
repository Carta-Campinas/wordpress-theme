<?php
/**
 * Title: Section Últimas
 * Slug: carta-campinas/section-ultimas
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"section",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/section-ultimas",
        "name":"Section Últimas"
    },
    "className":"section-ultimas",
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
        section-ultimas
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
        <?php esc_html_e('Últimas', 'carta-campinas');?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:query {
        "queryId":55,
        "query":{
            "perPage":12,
            "pages":0,
            "offset":"0",
            "postType":"post",
            "order":"desc",
            "orderBy":"date",
            "author":"",
            "search":"",
            "exclude":[],
            "sticky":"exclude",
            "inherit":false,
            "taxQuery": {}
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
                "columnCount":2,
                "minimumColumnWidth":null
            }
        } -->

        <!-- wp:pattern {"slug":"carta-campinas/news-item-title-only-h3"} /-->

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