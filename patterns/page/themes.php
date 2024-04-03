<?php
/**
 * Title: Themes
 * Slug: themes
 * Categories: page
 * Block Types: core/post-content
 * ID: 1031
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	 style="padding-top:0;padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xs"}},"boxShadow":""},"backgroundColor":"neutral-0","layout":{"type":"constrained"},"shadowPreset":"","shadowPresetHover":""} -->
	<div
		class="wp-block-group alignfull has-neutral-0-background-color has-background"
		style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xs)">
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"0"}}},"className":"is-style-sub-heading"} -->
		<p class="aligncenter has-text-align-center is-style-sub-heading aligncenter"
		   style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:0">
			Themes</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center">WordPress block
			themes</h1>
		<!-- /wp:heading -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"var:preset|spacing|xxs","right":"4px"},"blockGap":"var:preset|spacing|xxs"},"border":{"radius":"99px"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-surface","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"12"} -->
			<div class="wp-block-group is-style-surface has-12-font-size"
				 style="border-radius:99px;padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:var(--wp--preset--spacing--xxs);font-style:normal;font-weight:500;line-height:1">
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"className":""} -->
				<p style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
					Toggle dark mode</p>
				<!-- /wp:paragraph -->
				<!-- wp:blockify/dark-mode-toggle {"style":{"typography":{"fontSize":"10px"}},"backgroundColor":"primary-500"} -->
				<div
					class="wp-block-blockify-dark-mode-toggle has-primary-500-background-color has-background"
					style="font-size:10px"></div>
				<!-- /wp:blockify/dark-mode-toggle --></div>
			<!-- /wp:group --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|xs"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"
		 style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xs)">
		<!-- wp:query {"queryId":0,"query":{"perPage":"9","pages":0,"offset":0,"postType":"page","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[11]},"align":"wide","layout":{"type":"default"},"style":{"spacing":{"blockGap":"1.5em"}}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|sm"}},"backgroundColor":"neutral-50","className":"is-style-surface","layout":{"type":"default"}} -->
			<div
				class="wp-block-group is-style-surface has-neutral-50-background-color has-background"
				style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
				<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"custom","style":{"objectPosition":{"all":"top"}},"className":"hide-dark-mode","shadowPreset":"sm","usePlaceholder":"default"} -->
				<figure
					class="wp-block-image size-large hide-dark-mode  has-shadow has-sm-shadow">
					<a href="/themes/{post_name}"><img
							src="{home_url}/wp-content/themes/blockify-site/screenshots/{post_name}/page-landing.webp"
							alt=""
							style="aspect-ratio:3/2;object-fit:cover"/></a>
				</figure>
				<!-- /wp:image -->
				<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"custom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"objectPosition":{"all":"top"}},"className":"hide-light-mode","shadowPreset":"sm","usePlaceholder":"default"} -->
				<figure
					class="wp-block-image size-large hide-light-mode  has-shadow has-sm-shadow"
					style="margin-top:0;margin-bottom:0"><a
						href="/themes/{post_name}"><img
							src="{home_url}/wp-content/themes/blockify-site/screenshots/{post_name}/page-landing-dark.webp"
							alt=""
							style="aspect-ratio:3/2;object-fit:cover"/></a>
				</figure>
				<!-- /wp:image -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group">
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"4px","bottom":"4px"}}},"fontSize":"20"} /-->
						<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"4px","right":"4px"}},"border":{"radius":"4px"},"typography":{"fontSize":"10px","lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#fffffff5"}},"backgroundColor":"primary-500","className":"is-style-default"} -->
						<p class="is-style-default has-primary-500-background-color has-text-color has-background"
						   style="border-radius:4px;color:#fffffff5;padding-top:2px;padding-right:4px;padding-bottom:2px;padding-left:4px;font-size:10px;font-style:normal;font-weight:600;line-height:1">
							Free</p>
						<!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
					<div class="wp-block-buttons"
						 style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
						<!-- wp:button {"className":"is-style-ghost","size":"small","iconSet":"wordpress","iconName":"external","iconSize":"1em","iconPosition":"end","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022\u003e\u003cpath d=\u0022M18.2 17c0 .7-.6 1.2-1.2 1.2H7c-.7 0-1.2-.6-1.2-1.2V7c0-.7.6-1.2 1.2-1.2h3.2V4.2H7C5.5 4.2 4.2 5.5 4.2 7v10c0 1.5 1.2 2.8 2.8 2.8h10c1.5 0 2.8-1.2 2.8-2.8v-3.6h-1.5V17zM14.9 3v1.5h3.7l-6.4 6.4 1.1 1.1 6.4-6.4v3.7h1.5V3h-6.3z\u0022/\u003e\u003c/svg\u003e"} -->
						<div class="wp-block-button is-style-ghost"
							 style="--wp--custom--icon--size:1em;--wp--custom--icon--url:url('data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 24 24&quot;&gt;<path d=&quot;M18.2 17c0 .7-.6 1.2-1.2 1.2H7c-.7 0-1.2-.6-1.2-1.2V7c0-.7.6-1.2 1.2-1.2h3.2V4.2H7C5.5 4.2 4.2 5.5 4.2 7v10c0 1.5 1.2 2.8 2.8 2.8h10c1.5 0 2.8-1.2 2.8-2.8v-3.6h-1.5V17zM14.9 3v1.5h3.7l-6.4 6.4 1.1 1.1 6.4-6.4v3.7h1.5V3h-6.3z&quot;/&gt;</svg&gt;')">
							<a class="wp-block-button__link wp-element-button"
							   href="https://demo.blockifywp.com/{post_name}/"
							   target="_blank" rel="noreferrer noopener">View
								Demo</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
				<!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
