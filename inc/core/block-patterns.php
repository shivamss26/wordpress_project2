<?php

/**
 * creativium: Block Patterns
 *
 * @since creativium 1.0.0
 */

/**
 * Registers pattern categories for creativium
 *
 * @since creativium 1.0.0
 *
 * @return void
 */
function creativium_register_pattern_category()
{
	$block_pattern_categories = array(
		'creativium' => array('label' => __('Creativium Patterns', 'creativium')),
	);

	$block_pattern_categories = apply_filters('creativium_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'creativium_register_pattern_category', 9);
