<?php
/**
 * Title: Template Single
 * Slug: single
 * Categories: template
 * Template Types: template-single
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header","style":{}} /-->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xxl"}}},"className":"site-main","layout":{"type":"constrained"},"metadata":{"name":"Main"}} -->
<main class="wp-block-group alignfull site-main" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xxl)"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|xxs"}}},"gradient":"primary-foreground"} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|xs"},"typography":{"textDecoration":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);text-decoration:none"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":32,"style":{"border":{"radius":"40px"}}} /-->
<!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"fontSize":"16"} /--></div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->
<!-- wp:post-date {"displayType":"modified"} /--></div>
<!-- /wp:group -->
<!-- wp:post-excerpt {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"hideReadMore":true} /-->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0"><!-- wp:post-content /--></div>
<!-- /wp:group -->
<!-- wp:comments {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-comments" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)"><!-- wp:comments-title {"level":4} /-->
<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->
<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- wp:comment-content /-->
<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->
<!-- wp:comments-pagination /-->
<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->