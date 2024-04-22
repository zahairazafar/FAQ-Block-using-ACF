//* Place this code in functions.php to register an ACF block for FAQs. Customize function names, block names, and descriptions as needed.
//* Register a ACF Block for FAQs
add_action('acf/init', 'wpms_acf_init_block_types');
function wpms_acf_init_block_types() {
	// Check function exists.
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'faq',
			'title'             => __('FAQ Block - WPMINDS'),
			'description'       => __('A Block for adding FAQ Block.'),
			'render_template'   => 'template-parts/blocks/faq.php',
			'category'          => 'text',
			'icon'              => 'admin-page',
			'keywords'          => array( 'faq' ),
		));
	}
}
