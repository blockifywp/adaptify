<?php
/**
 * Title: Template Index
 * Slug: index
 * Categories: template
 * Template Types: template-index
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"className":"site-main","layout":{"type":"default"},"metadata":{"name":"Main"}} -->
<main class="wp-block-group alignfull site-main" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|sm","top":"var:preset|spacing|xs"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--sm)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xxs"}}},"gradient":"primary-foreground"} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"is-style-badges","align":"center","showAll":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"inherit":false},"style":{"spacing":{"blockGap":"1.5em"}}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"aspectRatio":null,"objectFit":null,"objectPosition":null,"height":null,"width":{"all":"100%"}}} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"textDecoration":"none"},"spacing":{"blockGap":"var:preset|spacing|xxs","margin":{"top":"var:preset|spacing|xs"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"14"} -->
<div class="wp-block-group has-14-font-size" style="margin-top:var(--wp--preset--spacing--xs);text-decoration:none"><!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"inherit"} /-->
<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->
<!-- wp:post-terms {"term":"category","className":"is-style-default","fontSize":"inherit"} /--></div>
<!-- /wp:group -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0.5em","right":"0em","bottom":"0.5em","left":"0em"}},"typography":{"lineHeight":"1.4"}},"fontSize":"24"} /-->
<!-- wp:post-excerpt {"moreText":"Read more","excerptLength":20,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"hideReadMore":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->