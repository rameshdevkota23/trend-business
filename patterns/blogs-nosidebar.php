<?php
/**
 * Title: Blogs No Sidebar
 * Slug: trend-business-pro/blogs-nosidebar
 * Categories: trend-business-pro
 *
 * @package Trend Business
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":336,"dimRatio":80,"customOverlayColor":"#1f1f1f","isUserOverlayColor":true,"minHeight":270,"minHeightUnit":"px","sizeSlug":"large","metadata":{"categories":["trend-business-pro"],"patternName":"trend-business-pro/page-banner","name":"Page Banner"},"className":"page-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover page-cover" style="min-height:270px"><img class="wp-block-cover__image-background wp-image-336 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#1f1f1f"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html__( 'Blogs with No Sidebar', 'trend-business-pro' ); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|0","left":"var:preset|spacing|0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-secondary-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:50px;padding-right:var(--wp--preset--spacing--30);padding-bottom:50px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"sidebar-variation","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-columns sidebar-variation" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"100%","className":"col-content"} -->
<div class="wp-block-column is-vertically-aligned-top col-content" style="flex-basis:100%"><!-- wp:group {"align":"wide","className":"wp-block-section","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wp-block-section" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":23,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"blog-description-section","style":{"spacing":{"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-description-section" style="border-radius:0px"><!-- wp:post-featured-image {"isLink":true,"height":"250px","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":""} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","lineHeight":1.4}}} /-->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"Read More","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","backgroundColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":" "} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":" "} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->