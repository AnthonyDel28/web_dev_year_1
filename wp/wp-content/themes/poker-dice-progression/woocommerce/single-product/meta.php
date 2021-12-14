<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>		

<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php _e( 'SKU:', 'poker-dice-progression' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'poker-dice-progression' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'poker-dice-progression' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'poker-dice-progression' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>


				<?php if (get_theme_mod( 'progression_studios_shop_post_sharing', 'on') == 'on') : ?>
									<div id="progression-woocommerce-sharing-title"><?php echo esc_html__( 'Share:', 'poker-dice-progression' ); ?></div>
									<ul class="single-shop-social-sharing noselect">

										<?php if (get_theme_mod( 'progression_single_shop_sharing_facebook', '1')) : ?><li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(the_permalink()); ?>&t=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Facebook', 'poker-dice-progression' ); ?>" class="facebook-share" target="_blank"><i class="fa fa-facebook"></i></a></li><?php endif; ?>

										<?php if (get_theme_mod( 'progression_single_shop_sharing_twitter', '1')) : ?><li><a href="https://twitter.com/share?text=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Twitter', 'poker-dice-progression' ); ?>" class="twitter-share" target="_blank"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
		
										<?php if (get_theme_mod( 'progression_single_shop_sharing_pinterest', '1')) : ?><li><a href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;//assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="<?php esc_html_e( 'Share on Pinterest', 'poker-dice-progression' ); ?>" class="pinterest-share"><i class="fa fa-pinterest-p"></i></a></li><?php endif; ?>

	
										<?php if (get_theme_mod( 'progression_single_shop_sharing_vk' )) : ?><li><a href="http://vkontakte.ru/share.php?url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on VK', 'poker-dice-progression' ); ?>" class="vk-share" target="_blank"><i class="fa fa-vk"></i></a></li><?php endif; ?>
	
										<?php if (get_theme_mod( 'progression_single_shop_sharing_google', '1')) : ?><li><a href="https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on Google+', 'poker-dice-progression' ); ?>" class="google-share" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>


										<?php if (get_theme_mod( 'progression_single_shop_sharing_reddit')) : ?><li><a href="http://reddit.com/submit?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Reddit', 'poker-dice-progression' ); ?>" class="reddit-share" target="_blank"><i class="fa fa-reddit-alien"></i></a></li><?php endif; ?>

										<?php if (get_theme_mod( 'progression_single_shop_sharing_linkedin')) : ?><li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on LinkedIn', 'poker-dice-progression' ); ?>" class="linkedin-share" target="_blank"><i class="fa fa-linkedin-square"></i></a></li><?php endif; ?>

										<?php if (get_theme_mod( 'progression_single_shop_sharing_tumblr')) : ?><li><a href="http://www.tumblr.com/share/link?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Tumblr', 'poker-dice-progression' ); ?>" class="tumblr-share" target="_blank"><i class="fa fa-tumblr"></i></a></li><?php endif; ?>


										<?php if (get_theme_mod( 'progression_single_shop_sharing_stumble')) : ?><li><a href="http://www.stumbleupon.com/submit?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on StumbleUpon', 'poker-dice-progression' ); ?>" class="stumble-share" target="_blank"><i class="fa fa-stumbleupon"></i></a></li><?php endif; ?>
	
										<?php if (get_theme_mod( 'progression_single_shop_sharing_mail', '1')) : ?><li><a href="mailto:?subject=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;body=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on E-mail', 'poker-dice-progression' ); ?>" class="mail-share" ><i class="fa fa-envelope"></i></a></li><?php endif; ?>
						
									</ul>
									<div class="clearfix-pro"></div>

				<?php endif; ?>