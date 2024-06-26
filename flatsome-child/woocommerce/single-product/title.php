<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h1 class="product-title entry-title">
	<?php the_title(); ?>
</h1>

<?php if(get_theme_mod('product_title_divider', 1)) { ?>
	<div class="is-divider small"></div>
<?php } ?>

<?php the_terms( $post->ID, 'authors', '<div class="product-title__author">מְחַבֵּר: ', ', ', '</div>' );
 ?>
