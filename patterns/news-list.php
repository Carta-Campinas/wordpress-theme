<?php
/**
 * Title: Antigo News List
 * Slug: carta-campinas/news-list
 * Categories: News
 */
?>
<!-- wp:query {"queryId":55,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["news"],"patternName":"core/block/129209","name":"News List"},"className":"news-list caption-wide caption-bottom"} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"medium"} -->
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
<!-- /wp:query --></div>