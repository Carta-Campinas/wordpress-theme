<?php
/**
 * Title: content-not-found
 * Slug: carta-campinas/content-not-found
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":1,"fontSize":"extra-large"} -->
<h1 class="wp-block-heading has-extra-large-font-size"><?php esc_html_e('Não Encontrado', 'carta-campinas');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"highlight"} -->
<hr class="wp-block-separator has-text-color has-highlight-color has-alpha-channel-opacity has-highlight-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"large"} -->
<p class="has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e('O conteúdo solicitado não pode ser encontrado. Está a procura de algo específico? Use a nossa busca:', 'carta-campinas');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Pesquisar","buttonText":"Pesquisar","buttonPosition":"button-inside","buttonUseIcon":true,"backgroundColor":"highlight"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"tagName":"section","metadata":{"categories":["News"],"patternName":"carta-campinas/read-more","name":"Read More"},"className":"news-section wide","backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group news-section wide has-base-background-color has-background"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}}},"textColor":"highlight","fontSize":"large","fontFamily":"display"} -->
<h1 class="wp-block-heading has-highlight-color has-text-color has-link-color has-display-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('Leia também', 'carta-campinas');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":55,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["news"],"patternName":"core/block/129209","name":"News List"},"className":"news-list caption-wide caption-bottom"} -->
<div class="wp-block-query news-list caption-wide caption-bottom"><!-- wp:post-template {"fontSize":"small","layout":{"type":"grid","columnCount":"4"}} -->
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
<!-- /wp:query --></section>
<!-- /wp:group -->