<?php
/**
 * Title: Feature Video
 * Slug: video
 * Categories: feature
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|lg"}},"overflow":{"all":"hidden"}},"className":"alignfull","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:cover {"dimRatio":80,"overlayColor":"neutral-950","isUserOverlayColor":true,"align":"full","style":{"position":{"all":"fixed"},"top":{"all":"0px"},"right":{"all":"0px"},"bottom":{"all":"0px"},"left":{"all":"0px"},"zIndex":{"all":"4"},"display":{"all":"none"}},"className":"video-popup is-style-light","layout":{"type":"constrained","orientation":"horizontal"}} -->
<div class="wp-block-cover alignfull video-popup is-style-light"><span aria-hidden="true" class="wp-block-cover__background has-neutral-950-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"position":{"all":"fixed"},"top":{"all":"0px"},"right":{"all":"0px"},"bottom":{"all":"0px"},"left":{"all":"0px"}},"className":"is-style-default","layout":{"type":"constrained"},"onclick":"((event)=\u003e{\n  const popup = document.getElementsByClassName('video-popup')[0] ?? null;\n  \n  if ( popup \u0026\u0026 ! event.target.matches( 'figure *' ) ) {\n    popup.classList.add('has-display-none');\n  }\n})(event);"} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"className":"is-style-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-light" style="min-height:100%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"36","onclick":"(()=\u003e{\n  const popup = document.getElementsByClassName('video-popup')[0] ?? null;\n  \n  if ( popup ) {\n    popup.classList.add('has-display-none');\n  }\n})();\n","iconSet":"wordpress","iconName":"close","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 role=\u0022img\u0022 aria-labelledby=\u0022icon-661a7683979b8\u0022 data-icon=\u0022wordpress-close\u0022 width=\u002224\u0022 height=\u002224\u0022 fill=\u0022currentColor\u0022\u003e\u003ctitle id=\u0022icon-661a7683979b8\u0022\u003eClose Icon\u003c/title\u003e\u003cpath d=\u0022m13 11.8 6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z\u0022\u003e\u003c/path\u003e\u003c/svg\u003e"} /--></div>
<!-- /wp:buttons -->
<!-- wp:video {"id":2526,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-300"}}}},"backgroundColor":"neutral-950","textColor":"primary-300"} -->
<figure class="wp-block-video has-primary-300-color has-neutral-950-background-color has-text-color has-background has-link-color" style="margin-bottom:var(--wp--preset--spacing--xl)"><video controls poster="<?php echo esc_url( content_url( "/themes/agencify/assets/" ) ) ?>svg/scribbles-30.svg" src="<?php echo esc_url( content_url( "/themes/agencify/assets/" ) ) ?>video/background.mp4"></video></figure>
<!-- /wp:video --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxs","bottom":"0"},"blockGap":{"top":"var:preset|spacing|xxl","left":"var:preset|spacing|xxl"},"margin":{"top":"0","bottom":"0"}},"u002du002dflex-direction":"column-reverse","u002du002dflex-direction-desktop":"row"}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxs);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"position":{"all":"relative"},"overflow":{"all":""},"order":"","display":"","width":"","maxWidth":""},"className":"is-style-light","layout":{"inherit":false},"animation":{"name":"fade-in-up","duration":1}} -->
<div class="wp-block-column is-vertically-aligned-center is-style-light has-animation" style="flex-basis:50%;animation-name:fade-in-up;animation-duration:1s;animation-iteration-count:1"><!-- wp:image {"width":"100px","height":"100px","scale":"cover","style":{"svgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 fill=\u0022none\u0022 viewBox=\u00220 0 109 85\u0022\u003e\n  \u003cpath fill=\u0022currentcolor\u0022 d=\u0022M100.655 40.781c-3.683.213-6.802.474-9.912.551-5.274.153-10.477.061-15.374-2.104-4.966-2.201-7.683-6.134-7.6-11.726.057-3.433 1.012-6.892 1.682-10.314.27-1.337.902-2.637 1.58-4.576-2.582 1.524-4.593 2.752-6.646 3.895-5.009 2.814-9.922 5.836-15.066 8.294-7.034 3.405-12.41 1.142-15.086-6.138-1.048-2.856-1.417-6.044-2.065-9.096-.19-.92-.247-1.864-.391-2.98-3.581 4.235-6.93 8.31-10.4 12.225-8.105 9.132-15.774 4.58-18.92-2.983-.842-2.022-1.209-4.327-1.592-6.546-.207-1.495.376-2.98 1.986-3.288 1.456-.296 2.2.856 2.604 2.204.417 1.324.748 2.697 1.3 3.935.646 1.446 1.316 2.904 2.232 4.178 2.58 3.578 5.396 3.943 8.86.873 2.447-2.16 4.619-4.69 6.787-7.156 2.018-2.296 3.947-4.701 5.877-7.107 1.007-1.227 2.06-2.43 3.71-2.15 1.898.317 2.224 2.033 2.533 3.615.405 2.01.513 4.082 1.026 6.056.617 2.5 1.293 5.002 2.273 7.318 1.34 3.137 3.094 3.945 6.352 2.813 3.114-1.083 6.25-2.374 9.188-3.959 6.28-3.428 12.428-7.053 18.589-10.701 1.46-.86 2.781-1.291 4.073-.226 1.237 1.004 1.034 2.44.5 3.887-.958 2.576-2.034 5.152-2.864 7.765-.719 2.294-1.418 4.661-1.726 7.016-.84 6.291 1.308 9.575 7.014 11.383 4.288 1.369 8.74 1.817 13.27 1.677 3.264-.09 6.528-.4 9.775-.624 1.719-.124 3.496-.25 4.282 1.712.72 1.863-.372 3.36-1.506 4.772-.491.589-1.06 1.104-1.607 1.632-1.115 1.044-2.188 2.173-3.393 3.106-8.918 7-10.098 16.039-7.555 25.956.473 1.826 1.511 3.48 2.346 5.184.405.846 1.077 1.58 1.374 2.463.228.625.293 1.667-.07 2.072-.39.455-1.386.554-2 .542-1.332-.047-2.679-.953-3.456-1.933-1.53-1.948-2.992-4.08-3.878-6.409-1.982-5.148-2.314-10.678-1.696-16.331.528-4.82 2.89-8.758 6.237-12.11 2.212-2.16 4.555-4.125 7.353-6.667Z\u0022/\u003e\n\u003c/svg\u003e","position":{"all":"absolute"},"top":{"all":"-4em"},"right":{"all":"-2em"},"bottom":{"all":""},"left":{"all":""},"elements":{"link":{"color":{"text":"var:preset|color|primary-400"}}},"maskSvg":true},"className":"is-style-svg","animation":{"name":"pop","duration":1,"delay":".5"},"textColor":"primary-400"} -->
<figure class="wp-block-image is-resized is-style-svg has-primary-400-color has-text-color has-link-color has-animation" style="animation-name:pop;animation-duration:1s;animation-delay:.5s;animation-iteration-count:1"><img src="#" alt="" style="object-fit:cover;width:100px;height:100px"/></figure>
<!-- /wp:image -->
<!-- wp:cover {"url":"<?php echo esc_url( content_url( "/themes/agencify/assets/" ) ) ?>img/achievement.jpg","id":2366,"dimRatio":50,"overlayColor":"neutral-950","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"20px"}},"onclick":"(()=\u003e{\n  const popup = document.getElementsByClassName('video-popup')[0] ?? null;\n  \n  if ( popup ) {\n    popup.classList.remove('has-display-none');\n  }\n})();"} -->
<div class="wp-block-cover" style="border-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-neutral-950-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2366" alt="" src="<?php echo esc_url( content_url( "/themes/agencify/assets/" ) ) ?>img/achievement.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"110px","height":"110px","scale":"cover","style":{"svgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 xml:space=\u0022preserve\u0022 viewBox=\u00220 0 122 122\u0022 fill=\u0022currentcolor\u0022\u003e\u003cpath d=\u0022M61 1C27.9 1 1 27.9 1 61s26.9 60 60 60 60-26.9 60-60S94.1 1 61 1zm13.7 60.6-10.2 5.3-10.7 5.6c-1.3.7-2.9-.3-2.9-1.8V49c0-1.5 1.6-2.5 2.9-1.8l10.7 5.6 10.2 5.3c1.4.7 1.4 2.8 0 3.5z\u0022/\u003e\u003c/svg\u003e","elements":{"link":{"color":{"text":"var:preset|color|primary-300"}}},"transformHover":{"scale":"1.1"},"pointerEvents":{"all":"none"},"maskSvg":true},"className":"is-style-svg","animation":{"name":"pulse","duration":"4","event":"infinite","iterationCount":"1","timingFunction":"ease-in-out"},"onclick":"(()=\u003e{\n  const popup = document.getElementsByClassName('video-popup')[0] ?? null;\n  \n  if ( popup ) {\n    popup.classList.remove('has-display-none');\n  }\n})();","textColor":"primary-300"} -->
<figure class="wp-block-image is-resized is-style-svg has-primary-300-color has-text-color has-link-color has-animation has-transform" style="--animation-event:infinite;animation-iteration-count:infinite;animation-name:pulse;animation-duration:4s;animation-timing-function:ease-in-out;--transform-hover:scale(1.1)"><img src="#" alt="" style="object-fit:cover;width:110px;height:110px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"50%","animation":{"name":"fade-in-right","duration":1,"delay":"1"}} -->
<div class="wp-block-column is-vertically-aligned-center has-animation" style="flex-basis:50%;animation-name:fade-in-right;animation-duration:1s;animation-delay:1s;animation-iteration-count:1"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0">Personalized design and marketing for your business</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"is-style-sub-heading"} -->
<p class="is-style-sub-heading">We are a group of people who think differently, with a passion for all things digital. Our value-driven approach to design and marketing is unique.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs"},"blockGap":{"top":"var:preset|spacing|xxs","left":"var:preset|spacing|sm"}}},"fontSize":"20"} -->
<div class="wp-block-columns has-20-font-size" style="padding-top:var(--wp--preset--spacing--xs)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-none"} -->
<ul class="is-style-none"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-500-color">✦</mark> Enhanced Online Visibility</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-500-color">✦</mark> Increased conversion rate</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-none"} -->
<ul class="is-style-none"><!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-500-color">✦</mark> Customized Strategies</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-500-color">✦</mark> Improved Branding</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->