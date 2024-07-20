<?php
if ( ! function_exists( 'creativium_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 * @since creativium 1.0
 */

function creativium_setup() {
  // Add support for HTML5 tags
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // Add support for title tag
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add support for post formats
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Add support for block styles
  add_theme_support( 'wp-block-styles' );

  // Make theme available for translation.
  load_theme_textdomain( 'creativium' );
}
endif;  
add_action( 'after_setup_theme', 'creativium_setup' );

function creativium_enqueue_styles_and_scripts() {
	// Enqueue normalize.css
	wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );

	// Enqueue main stylesheet
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

  // Enqueue block.css
	wp_enqueue_style( 'creativium-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );

}
add_action( 'wp_enqueue_scripts', 'creativium_enqueue_styles_and_scripts' );

// Enqueue core
require_once get_template_directory() . '/inc/core/init.php';

function enqueue_editor_styles() {
  wp_enqueue_style( 'editor-style', get_template_directory_uri() . '/assets/css/editor-style.css' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_editor_styles' );

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Creativium_Upsell_Section extends WP_Customize_Section {
		public $type = 'creativium-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : 'linear-gradient(234deg,rgb(150,24,81) 0%,rgb(114,9,183) 75%)';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="creativium_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function creativium_admin_notice() { 
	global $pagenow;
	$theme_args      = wp_get_theme();
	$meta            = get_option( 'creativium_admin_notice' );
	$name            = $theme_args->__get( 'Name' );
	$current_screen  = get_current_screen();

	if( !$meta ){
		if( is_network_admin() ){
				return;
		}

		if( ! current_user_can( 'manage_options' ) ){
				return;
		} if($current_screen->base != 'appearance_page_creativium-guide-page' ) { ?>

			<div class="notice notice-success is-dismissible">
				<p>⭐⭐⭐⭐⭐</p>
				<h1><?php esc_html_e('Thanks for choosing Creativium!', 'creativium'); ?></h1>
				<p><?php echo __('Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Creativium PRO</b>!', 'creativium'); ?></p>
				<div style="display: flex;">
				<p>
					<a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=creativium-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'creativium'); ?></a>
				</p>
				<p><a href="?creativium-dismissed" class="button button-secondary"><?php echo esc_html('Dismiss', 'creativium'); ?></a></p>
				</div>
		</div>
		<?php }?>
		<?php
	}
}

add_action( 'admin_notices', 'creativium_admin_notice' );

function creativium_notice_dismissed() {
	$user_id = get_current_user_id();
	if ( isset( $_GET['creativium-dismissed'] ) ) 
		update_option( 'creativium_admin_notice', true );
}
add_action( 'admin_init', 'creativium_notice_dismissed' );

if( ! function_exists( 'creativium_update_admin_notice' ) ) :
/**
* Updating admin notice on dismiss
*/
function creativium_update_admin_notice(){
	if ( isset( $_GET['creativium_admin_notice'] ) && $_GET['creativium_admin_notice'] = '1' ) {
		update_option( 'creativium_admin_notice', true );
	}
}
endif;
add_action( 'admin_init', 'creativium_update_admin_notice' );

// After switch theme function
add_action('after_switch_theme', 'creativium_getstart_setup_options');
function creativium_getstart_setup_options () {
	update_option('creativium_admin_notice', FALSE );
}

// Theme credit link
define('CREATIVIUM_BUY_NOW',__('https://effethemes.com/themes/creativium-wordpress-theme/','creativium'));
define('CREATIVIUM_PRO_DEMO',__('https://preview.effethemes.site/creativium-wordpress-theme/','creativium'));
define('CREATIVIUM_REVIEW',__('https://wordpress.org/support/theme/creativium/reviews/#new-post','creativium'));
define('CREATIVIUM_SUPPORT',__('https://wordpress.org/support/theme/creativium','creativium'));