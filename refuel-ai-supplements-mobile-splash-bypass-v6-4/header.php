<?php if (!defined('ABSPATH')) { exit; } ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class('refuel-wc-store-page'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>
<header class="refuel-wc-header">
  <div class="refuel-wc-wrap refuel-wc-nav">
    <a class="refuel-wc-brand" href="https://refuelaisupplements.com/" aria-label="Refuel AI Supplements home"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-94a7da5fab076e2f.png'); ?>" alt=""><span>REFUEL <b>AI</b> SUPPLEMENTS</span></a>
    <details class="refuel-wc-mobile-menu"><summary>Menu</summary><div>
      <a href="https://refuelaisupplements.com/">Home</a><a href="<?php echo esc_url(refuel_woo_shop_url()); ?>">Shop</a><a href="<?php echo esc_url(refuel_shop_page_url('cart')); ?>">Cart</a><a href="<?php echo esc_url(refuel_shop_page_url('myaccount')); ?>">My Account</a>
    </div></details>
    <nav class="refuel-wc-links" aria-label="Store navigation">
      <a href="https://refuelaisupplements.com/">Home</a>
      <a href="<?php echo esc_url(refuel_shop_page_url('shop')); ?>">Shop</a>
      <a href="<?php echo esc_url(refuel_shop_page_url('cart')); ?>">Cart</a>
      <a href="<?php echo esc_url(refuel_shop_page_url('checkout')); ?>">Checkout</a>
      <a href="<?php echo esc_url(refuel_shop_page_url('myaccount')); ?>">My Account</a>
    </nav>
    <form class="refuel-wc-search" role="search" method="get" action="<?php echo esc_url(refuel_woo_shop_url()); ?>"><label for="refuel-wc-search-field">Search products</label><input id="refuel-wc-search-field" name="s" type="search" placeholder="Search products"><input type="hidden" name="post_type" value="product"><button type="submit" aria-label="Search products">⌕</button></form>
    <a class="refuel-wc-cart" href="<?php echo esc_url(refuel_shop_page_url('cart')); ?>" aria-label="View cart">Cart <?php echo esc_html(function_exists('WC') && WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?></a>
  </div>
</header>
