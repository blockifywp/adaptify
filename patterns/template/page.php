<?php
/**
 * Title: Template Page
 * Slug: page
 * Categories: template
 * Template Types: template-page
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header","style":{}} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xxl"}}},"className":"site-main","layout":{"type":"constrained"},"metadata":{"name":"Main"}} -->
<main class="wp-block-group alignfull site-main" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xxl)"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|xxs"}}},"gradient":"primary-foreground"} /-->
<!-- wp:post-excerpt {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"hideReadMore":true} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg)"><!-- wp:post-content /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->