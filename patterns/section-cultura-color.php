<?php
/**
 * Title: Section Cultura (Color)
 * Slug: carta-campinas/section-cultura-color
 * Categories: News
 */
?>
<!-- wp:group {
    "tagName":"section",
    "metadata":{
        "categories":["News"],
        "patternName":"carta-campinas/section-cultura-color",
        "name":"Section Cultura (color)"
    },
    "className":"section-cultura",
    "backgroundColor":"red",
    "layout":{
        "type":"constrained"
    },
    "style": {
        "spacing":{
            "padding":"var(--wp--custom--news-card--radius)"
        },
        "border":{
            "radius":"var(--wp--custom--news-card--radius)"
        }
    }
} -->
<section
    class="
        wp-block-group
        section-cultura
        wide
        has-background
        has-red-background-color
    "
    style="
        padding: var(--wp--custom--news-card--radius);
        border-radius: var(--wp--custom--news-card--radius);
    "
    >


    <!-- wp:heading {
        "level":2,
        "textColor": "base",
        "style":{
            "spacing":{
                "margin":{
                    "bottom":"var:preset|spacing|50"
                }
            }
        }
    } -->
    <h2
        class="wp-block-heading has-text-color has-base-color"
        style="margin-bottom:var(--wp--preset--spacing--50)"
    >
        <?php esc_html_e('Cultura', 'carta-campinas');?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:query {
        "queryId":55,
        "query":{
            "perPage":3,
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
            "taxQuery": {
                "category": [<?php
                echo implode(
                    ', ',
                    array_map(
                        function ($item) {
                            return $item->term_id;
                        },
                        get_categories(
                            [
                                'slug' => [
                                    'cultura',
                                    'artes'
                                ]
                            ]
                        )
                    )
                );?>]
            }
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
                "columnCount":null,
                "minimumColumnWidth":"32rem"
            }
        } -->

        <!-- wp:pattern {"slug":"carta-campinas/news-item-cover-image-16-9-h4"} /-->

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