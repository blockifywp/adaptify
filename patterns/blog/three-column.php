<?php
/**
 * Title: Blog Three Column
 * Slug: three-column
 * Categories: blog
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xxl"}}},"className":"alignfull","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xxl)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"is-style-surface","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-surface"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"width":{"all":"100%"},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"}}} /-->
<!-- wp:post-terms {"term":"category","style":{"typography":{"textDecoration":"none"}},"className":"is-style-default"} /-->
<!-- wp:post-title {"isLink":true,"fontSize":"36"} /-->
<!-- wp:post-excerpt {"hideReadMore":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"typography":{"textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->