<?php
/**
 * External product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $mr_tailor_theme_options;

?>

<?php if ( (isset($mr_tailor_theme_options['catalog_mode'])) && ($mr_tailor_theme_options['catalog_mode'] == 1) ) : ?>
<?php else : ?>

    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

    <p class="cart">
        <a href="<?php echo esc_url( $product_url ); ?>" rel="nofollow" class="single_add_to_cart_button button alt"><?php echo $button_text; ?></a>
    </p>

    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

<?php endif; ?>