<?php
/**
 * Title: Query Docs
 * Slug: docs
 * Categories: query
 *
 */

$docs_categories = get_terms( [
	'taxonomy'   => 'documentation_category',
	'hide_empty' => false,
	'order'      => 'DESC',
] );

if ( empty( $docs_categories ) ) {
	return;
}

if ( is_wp_error( $docs_categories ) ) {
	return;
}

foreach ( array_chunk( $docs_categories, 3 ) as $chunks ) {
	?>

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php

		foreach ( $chunks as $docs_category ) { ?>
			<!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|xxs"}{"padding":{"top":"var:preset|spacing|sm","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm"}}},"backgroundColor":"neutral-900","className":"is-style-default","verticalAlignment":"stretch"} -->
			<div
				class="wp-block-column is-style-default has-neutral-900-background-color has-background is-vertically-aligned-stretch"
				style="border-width:1px;margin-top:var(--wp--preset--spacing--xxs);padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)">
				<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xs","top":"0"}}},"fontSize":"28"} -->
				<h2 class="wp-block-heading has-28-font-size"
					style="padding-top:0;padding-bottom:var(--wp--preset--spacing--xs)">
					<a href="{home_url}/docs/category/<?php echo esc_attr( $docs_category->slug ); ?>/"
					   data-type="doc_cat"
					   data-id="21"><?php echo esc_html( $docs_category->name ); ?></a>
				</h2>
				<!-- /wp:heading -->

				<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"doc","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"taxQuery":{"doc_cat":[<?php echo esc_attr( $docs_category->term_id ); ?>]}}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"className":"is-style-icon","textColor":"neutral","iconName":"page","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022\u003e\u003cpath d=\u0022M7 5.5h10a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5V6a.5.5 0 0 1 .5-.5zM17 4H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm-1 3.75H8v1.5h8v-1.5zM8 11h8v1.5H8V11zm6 3.25H8v1.5h6v-1.5z\u0022/\u003e\u003c/svg\u003e"} -->
						<figure
							class="wp-block-image is-style-icon has-neutral-color has-text-color"
							style="--wp--custom--icon--color:var(--wp--preset--color--neutral,currentColor);--wp--custom--icon--url:url('data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 24 24&quot;&gt;<path d=&quot;M7 5.5h10a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5V6a.5.5 0 0 1 .5-.5zM17 4H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm-1 3.75H8v1.5h8v-1.5zM8 11h8v1.5H8V11zm6 3.25H8v1.5h6v-1.5z&quot;/&gt;</svg&gt;')">
							<img src="#" alt=""/></figure>
						<!-- /wp:image -->

						<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"18","fontFamily":"dm-sans"} /-->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template --></div>
				<!-- /wp:query --></div>
			<!-- /wp:column -->

			<?php
		}
		?>

	</div>
	<!-- /wp:columns -->

	<?php
}
