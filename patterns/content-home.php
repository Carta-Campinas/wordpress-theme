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
        "verticalAlignment":"bottom",
        "width":"60%"
    } -->

    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
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
                    "categories": ["manchete"]
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
                <!-- wp:pattern {"slug":"carta-campinas/news-item-top-image-16-9-h2"} /-->
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
                    "categories": ["manchete"]
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
                <!-- wp:pattern {"slug":"carta-campinas/news-item-cover-image-4-3-h3"} /-->
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
    </div>
    <!-- /wp:column -->

    <!-- wp:column {
        "verticalAlignment":"bottom",
        "width":"40%"
    } -->
    <div
        class="wp-block-column is-vertically-aligned-bottom"
        style="flex-basis:40%"
    >
        <!-- wp:heading {
            "level":1,
            "style":{
                "spacing":{
                    "margin":{
                        "bottom":"var:preset|spacing|50"
                    }
                }
            },
            "fontSize":"large",
            "fontFamily":"display"
        } -->
        <h1
            class="
                wp-block-heading
                has-display-font-family
                has-large-font-size
            "
            style="margin-bottom:var(--wp--preset--spacing--50)"
        >
            <?php esc_html_e('Cultura', 'carta-campinas');?>
        </h1>
        <!-- /wp:heading -->
        <!-- wp:query {
            "queryId":55,
            "query":{
                "perPage":"3",
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
                    "categories": ["cultura"]
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
                <!-- wp:pattern {"slug":"carta-campinas/news-item-cover-image-4-3-h3"} /-->
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
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:query {
    "queryId":55,
    "query":{
        "perPage":3,
        "pages":0,
        "offset":"3",
        "postType":"post",
        "order":"desc",
        "orderBy":"date",
        "author":"",
        "search":"",
        "exclude":[],
        "sticky":"exclude",
        "inherit":false
    },
    "metadata":{
        "categories":["news"],
        "patternName":"core/block/129209",
        "name":"News List"
    },
    "className":"news-list caption-wide caption-bottom"
} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"medium","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"tagName":"article","metadata":{"categories":["News"],"patternName":"carta-campinas/news-item","name":"News Item"},"className":"news-item","layout":{"type":"constrained"}} -->
<article class="wp-block-group news-item"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"news-caption","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"contrast-transp","textColor":"white","fontFamily":"display","layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group news-caption has-white-color has-contrast-transp-background-color has-text-color has-background has-link-color has-display-font-family"><!-- wp:post-terms {"term":"category","className":"news-suite","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"highlight","textColor":"white"} /-->

<!-- wp:post-title {"isLink":true,"className":"news-heading"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":55,"query":{"perPage":"4","pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["news"],"patternName":"core/block/129209","name":"News List"},"className":"news-list caption-wide caption-bottom"} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"small","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"tagName":"article","metadata":{"categories":["News"],"patternName":"carta-campinas/news-item","name":"News Item"},"className":"news-item","layout":{"type":"constrained"}} -->
<article class="wp-block-group news-item"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"news-caption","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"contrast-transp","textColor":"white","fontFamily":"display","layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group news-caption has-white-color has-contrast-transp-background-color has-text-color has-background has-link-color has-display-font-family"><!-- wp:post-terms {"term":"category","className":"news-suite","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"highlight","textColor":"white"} /-->

<!-- wp:post-title {"isLink":true,"className":"news-heading"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"tagName":"section","className":"news-section wide","backgroundColor":"luminous-vivid-amber","layout":{"type":"constrained"}} -->
<section class="wp-block-group news-section wide has-luminous-vivid-amber-background-color has-background"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"large","fontFamily":"display"} -->
<h1 class="wp-block-heading has-display-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('Nome da Seção', 'carta-campinas');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":55,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["news"],"patternName":"core/block/129209","name":"News List"},"className":"news-list caption-wide caption-bottom"} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"small","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"14rem"}} -->
<!-- wp:group {"tagName":"article","metadata":{"categories":["News"],"patternName":"carta-campinas/news-item","name":"News Item"},"className":"news-item","layout":{"type":"constrained"}} -->
<article class="wp-block-group news-item"><!-- wp:post-featured-image {"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"news-caption","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"contrast-transp","textColor":"white","fontFamily":"display","layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group news-caption has-white-color has-contrast-transp-background-color has-text-color has-background has-link-color has-display-font-family"><!-- wp:post-terms {"term":"category","className":"news-suite","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"highlight","textColor":"white"} /-->

<!-- wp:post-title {"className":"news-heading"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->