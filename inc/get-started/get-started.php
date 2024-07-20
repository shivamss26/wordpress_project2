<?php
add_action( 'admin_menu', 'creativium_getting_started' );
function creativium_getting_started() {
	add_theme_page( esc_html__('Creativium Theme', 'creativium'), esc_html__('Creativium Theme', 'creativium'), 'edit_theme_options', 'creativium-guide-page', 'creativium_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function creativium_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'creativium_admin_theme_style');

// Guidline for about theme
function creativium_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'creativium' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Creativium WordPress Theme', 'creativium' ); ?></h1>
			<p><?php esc_html_e('Version: ','creativium'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( CREATIVIUM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'creativium'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'creativium'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'creativium'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( CREATIVIUM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'creativium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'creativium'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'creativium'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( CREATIVIUM_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'creativium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'creativium'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'creativium'); ?></p>
				<a href="<?php echo esc_url( CREATIVIUM_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'creativium'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'creativium'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'creativium'); ?></p>
				<a href="<?php echo esc_url( CREATIVIUM_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'creativium'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>