<?php
/**
 * Title: content-index
 * Slug: carta-campinas/content-index
 * Inserter: no
 */
?>
<!-- wp:query-title {"type":"archive","showPrefix":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"extra-large"} /-->

<!-- wp:term-description {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"medium"} /-->

<!-- wp:query {"queryId":55,"query":{"perPage":10,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["news"],"patternName":"core/block/129209","name":"News List"},"className":"news-list caption-wide caption-bottom"} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"medium","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"300px"}} -->
<!-- wp:group {"tagName":"article","metadata":{"categories":["News"],"patternName":"carta-campinas/news-item","name":"News Item"},"className":"news-item","layout":{"type":"constrained"}} -->
<article class="wp-block-group news-item"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"news-caption","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"contrast-transp","textColor":"white","fontFamily":"display","layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group news-caption has-white-color has-contrast-transp-background-color has-text-color has-background has-link-color has-display-font-family"><!-- wp:post-terms {"term":"category","className":"news-suite","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"highlight","textColor":"white"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"news-heading"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Adicione texto ou blocos que serão exibidos quando uma consulta não retornar resultados."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->