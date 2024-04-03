<?php
/**
 * Title: Template Archive Docs
 * Slug: archive-docs
 * Categories: template
 * Template Types: template-archive-docs
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"className":"site-main","layout":{"type":"constrained"},"metadata":{"name":"Main"}} -->
<main class="wp-block-group alignfull site-main" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false} /-->
<!-- wp:query -->
<div class="wp-block-query"></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->