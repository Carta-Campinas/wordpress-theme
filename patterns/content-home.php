<?php
/**
 * Title: content-home
 * Slug: carta-campinas/content-home
 * Inserter: no
 */
?>
<!-- wp:columns -->
<div class="wp-block-columns">

    <!-- wp:column {
        "verticalAlignment":"top",
        "width":"60%"
    } -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">

        <!-- wp:query {
            "queryId":55,
            "query":{
                "perPage":"1",
                "pages":0,
                "offset":0,
                "postType":"post",
                "order":"desc",
                "orderBy":"date",
                "author":"",
                "search":"",
                "exclude":[],
                "sticky":"",
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
                                    'name' => [
                                        'manchete'
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
            <!-- wp:post-template -->
                <!-- wp:pattern {
                    "slug":"carta-campinas/news-item-top-image-16-9-h2"
                } /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:query {
            "queryId":55,
            "query":{
                "perPage":"4",
                "pages":0,
                "offset":"1",
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
                                    'name' => [
                                        'manchete'
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
            <!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:pattern {
                    "slug":"carta-campinas/news-item-cover-image-16-9-h5"
                } /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {
        "verticalAlignment":"top",
        "width":"40%"
    } -->
    <div
        class="
            wp-block-column
            is-vertically-aligned-top
        "
        style="flex-basis:40%;"
    >

        <!-- wp:pattern {"slug":"carta-campinas/section-cultura-color"} /-->

    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:pattern {"slug":"carta-campinas/section-mais-color"} /-->

<!-- wp:pattern {"slug":"carta-campinas/section-cartacampinastv"} /-->

<!-- wp:pattern {"slug":"carta-campinas/section-ultimas"} /-->
