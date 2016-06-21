//Empty cart
add_action( 'init', 'we_woocommerce_clear_cart_url' );
function we_woocommerce_clear_cart_url() {
	global $woocommerce;
	if( isset($_REQUEST['clear-cart']) ) {
		$woocommerce->cart->empty_cart();
	}
}
