<?php
/**
 * Title: reviews
 * Slug: sekolah-alam-cikeas/reviews
 * Categories: hidden
 * Inserter: no
 */


$reviews = function_exists( 'sekolahalamcikeas_get_reviews' ) ? sekolahalamcikeas_get_reviews() : [];

?>
<!-- wp:group {"className":"background-testimoni","layout":{"type":"constrained"}} -->
<div class="wp-block-group background-testimoni"><!-- wp:group {"backgroundColor":"dark-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-blue-background-color has-background"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large-38","fontFamily":"headland-one"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-headland-one-font-family has-large-38-font-size">Testimoni &amp; Ulasan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontSize":"small-16","fontFamily":"poppins"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-poppins-font-family has-small-16-font-size" style="font-style:normal;font-weight:500">Terbukti mendidik siswa menjadi individu yang mandiri dan patriotis.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"-30px"}}},"layout":{"type":"constrained","contentSize":"88%","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:-30px"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","className":"is-style-outline testimoni-prev","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"8px"},"spacing":{"padding":{"left":"13px","right":"13px","top":"8px","bottom":"8px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"helvetica-font"} -->
<div class="wp-block-button is-style-outline testimoni-prev has-helvetica-font-font-family" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" style="border-radius:8px;padding-top:8px;padding-right:13px;padding-bottom:8px;padding-left:13px">&lt;</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline testimoni-next","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"8px"},"spacing":{"padding":{"left":"13px","right":"13px","top":"8px","bottom":"8px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"helvetica-font"} -->
<div class="wp-block-button is-style-outline testimoni-next has-helvetica-font-font-family" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" style="border-radius:8px;padding-top:8px;padding-right:13px;padding-bottom:8px;padding-left:13px">&gt;</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"overflow-x-hidden","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontFamily":"poppins","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group overflow-x-hidden has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--60)">

<?php foreach ($reviews as $value) { ?>
<!-- wp:group {"className":"testimoni-item","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group testimoni-item has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|dark-blue"}}}},"textColor":"dark-blue","fontSize":"small-18"} -->
<p class="has-dark-blue-color has-text-color has-link-color has-small-18-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html( $value['nama'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#797979"}}},"spacing":{"padding":{"left":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"text":"#797979"}},"fontSize":"small-14"} -->
<p class="has-text-color has-link-color has-small-14-font-size" style="color:#797979;padding-left:var(--wp--preset--spacing--20);font-style:normal;font-weight:400"><?php echo esc_html( wp_date( get_option( 'date_format' ), strtotime( $value['tanggal'] ))); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"13px","bottom":"13px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:13px;margin-bottom:13px"><!-- wp:html -->
<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.0001 17.27L19.6951 21L17.9184 13.97L23.8334 9.24L16.0442 8.63L13.0001 2L9.95591 8.63L2.16675 9.24L8.08175 13.97L6.30508 21L13.0001 17.27Z" fill="#7299D0"/>
</svg>
<!-- /wp:html -->

<!-- wp:html -->
<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.0001 17.27L19.6951 21L17.9184 13.97L23.8334 9.24L16.0442 8.63L13.0001 2L9.95591 8.63L2.16675 9.24L8.08175 13.97L6.30508 21L13.0001 17.27Z" fill="#7299D0"/>
</svg>
<!-- /wp:html -->

<!-- wp:html -->
<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.0001 17.27L19.6951 21L17.9184 13.97L23.8334 9.24L16.0442 8.63L13.0001 2L9.95591 8.63L2.16675 9.24L8.08175 13.97L6.30508 21L13.0001 17.27Z" fill="#7299D0"/>
</svg>
<!-- /wp:html -->

<!-- wp:html -->
<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.0001 17.27L19.6951 21L17.9184 13.97L23.8334 9.24L16.0442 8.63L13.0001 2L9.95591 8.63L2.16675 9.24L8.08175 13.97L6.30508 21L13.0001 17.27Z" fill="#7299D0"/>
</svg>
<!-- /wp:html -->

<!-- wp:html -->
<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.0001 17.27L19.6951 21L17.9184 13.97L23.8334 9.24L16.0442 8.63L13.0001 2L9.95591 8.63L2.16675 9.24L8.08175 13.97L6.30508 21L13.0001 17.27Z" fill="#7299D0"/>
</svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#373737"}}},"color":{"text":"#373737"}},"fontSize":"small-14"} -->
<p class="has-text-color has-link-color has-small-14-font-size" style="color:#373737;font-style:normal;font-weight:400;line-height:1.6"><?php echo esc_html( $value['teks'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php } ?>

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"background-testimoni-opacity"},"className":"background-testimoni-opacity","layout":{"type":"constrained"}} -->
<div class="wp-block-group background-testimoni-opacity"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
