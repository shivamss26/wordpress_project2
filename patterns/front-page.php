<?php
/**
 * Title: front-page
 * Slug: creativium/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"gradient":"custom-main-gradiant","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-main-gradiant-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"top":"var:preset|spacing|50","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div id="hero" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10rem"},"padding":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color"><?php echo __('Unlock your', 'creativium');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color"><?php echo __('creative ✦', 'creativium');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color"><?php echo __('potential', 'creativium');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"200px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:200px"><!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/read-more-texts.png" alt="<?php echo __('', 'creativium');?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero.jpg" alt="<?php echo __('', 'creativium');?>" style="border-radius:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="logos" class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(255, 255, 255)"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-1.png" alt="<?php echo __('', 'creativium');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(255, 255, 255)"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-2.png" alt="<?php echo __('', 'creativium');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(255, 255, 255)"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-3.png" alt="<?php echo __('', 'creativium');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(255, 255, 255)"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-example-4.png" alt="<?php echo __('', 'creativium');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"60px"},"color":{"background":"#040d1cc7"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:60px;background-color:#040d1cc7;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('About', 'creativium');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('We are Creativium, a passionate team dedicated to transforming ideas into visual reality. By blending exceptional creativity with technical expertise, we empower businesses and agencies to reach their full potential through innovative designs and effective strategies. Our commitment is to inspire and impress, creating memorable visual experiences that drive our clients\' success.', 'creativium');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"width":"2px"}},"className":"is-style-button-hover-outline"} -->
<div class="wp-block-button is-style-button-hover-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" style="border-width:2px"><?php echo __('Read More ↗', 'creativium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about-1024x682.jpg" alt="<?php echo __('', 'creativium');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="articles" class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('Popular Articles', 'creativium');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}},"color":{"text":"#ffffff"}}} -->
<div class="wp-block-group alignfull has-text-color" style="color:#ffffff;padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px"><!-- wp:query {"queryId":17,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:separator {"opacity":"css","style":{"color":{"background":"#ffffff"}},"className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-css-opacity has-background alignwide is-style-wide" style="background-color:#ffffff;color:#ffffff"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"13.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13.33%"><!-- wp:post-date {"style":{"color":{"text":"#ffffff"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"73.34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:73.34%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"72px","lineHeight":"1.1"},"color":{"text":"#ffffff","link":"#ffffff"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"13.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"Read More ↗","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div id="contact" class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/contact-bg.jpg","id":139,"source":"file","title":"contact-bg"}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"border":{"radius":"60px"},"color":{"background":"#040d1cc7"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:60px;background-color:#040d1cc7;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('Contact', 'creativium');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('Ready to bring your vision to life? Contact us today to discuss how Creativium can help elevate your brand with our creative solutions. Whether you have a specific project in mind or need guidance on your next design endeavor, our team is here to assist you every step of the way. Reach out to us via the form below or directly at [seu e-mail] to start your journey towards impactful and innovative design.', 'creativium');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"className":"is-style-button-hover-fill"} -->
<div class="wp-block-button is-style-button-hover-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button"><?php echo __('Let\'s Chat ↗', 'creativium');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"width":"2px"}},"className":"is-style-button-hover-outline"} -->
<div class="wp-block-button is-style-button-hover-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" style="border-width:2px"><?php echo __('About Us ↗', 'creativium');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->