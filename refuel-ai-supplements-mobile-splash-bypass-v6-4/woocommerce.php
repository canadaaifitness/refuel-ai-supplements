<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header(); ?>
<main class="refuel-wc-main">
  <div class="refuel-wc-wrap">
    <?php if (function_exists('woocommerce_content')) { woocommerce_content(); } else { echo '<div class="refuel-wc-panel">Please install and activate WooCommerce.</div>'; } ?>
  </div>
</main>
<?php get_footer();
