<?php
// Add custom Theme Functions here

// Register Custom Taxonomy Authors in the Woo Book Store

add_action( 'init', 'ps_taxonomy_author' );
function ps_taxonomy_author()  {
  $labels = array(
    'name'                       => 'מחברים',
    'singular_name'              => 'מְחַבֵּר',
    'menu_name'                  => 'מחברים',
    'all_items'                  => 'כל המחברים',
    'new_item_name'              => 'שם המחבר החדש',
    'add_new_item'               => 'הוסף מחבר חדש',
    'edit_item'                  => 'ערוך מחבר',
    'update_item'                => 'עדכן מחבר',
    'separate_items_with_commas' => 'מחבר נפרד עם פסיקים',
    'search_items'               => 'חיפוש מחברים',
    'add_or_remove_items'        => 'הוספה או הסרה של מחברים',
    'choose_from_most_used'      => 'בחר מתוך המחברים הנפוצים ביותר',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );

  register_taxonomy( 'authors', 'product', $args );
  register_taxonomy_for_object_type( 'authors', 'product' );
}

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'מדיה ועיתונות' );		// Rename the description tab

	return $tabs;

}