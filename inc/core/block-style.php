<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package creativium
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function creativium_register_block_styles() {
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-outline',
                'label' => __('Hover: Outline', 'creativium'),
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-fill',
                'label' => __('Hover: Fill', 'creativium')
            )
        );
    }
    add_action('init', 'creativium_register_block_styles');
}
