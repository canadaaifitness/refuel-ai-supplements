<?php
if (!defined('ABSPATH')) { exit; }

$topics = [
    'authenticity' => [
        'title' => 'Product Authenticity',
        'intro' => 'Check the product details before you place an order.',
        'details' => [
            'Review the brand, product label, serving size and ingredient information on the product page.',
            'If you need a batch number, expiry date, seal photo or sourcing details, contact us with the product name before ordering.',
            'Keep the original packaging and your order details in case you need help after delivery.',
        ],
    ],
    'delivery' => [
        'title' => 'Delivery',
        'intro' => 'See the available delivery options and charges at checkout.',
        'details' => [
            'Enter a complete delivery address and a phone number where the courier can reach you.',
            'Delivery availability and charges are shown during checkout before you place the order.',
            'For help with an existing order, email us your order number and delivery city.',
        ],
    ],
    'returns' => [
        'title' => 'Returns',
        'intro' => 'Please contact us before sending a product back.',
        'details' => [
            'Email your order number, product name, and a short description of the issue.',
            'If an item arrived damaged or different from your order, include clear photos of the product and packaging.',
            'We will review the request and explain the available next steps for that order.',
        ],
    ],
    'contact' => [
        'title' => 'Contact Us',
        'intro' => 'Get help with a product or an order.',
        'details' => [
            'Email canadaaifitness@gmail.com with your question.',
            'For an existing order, include your order number and the name used at checkout.',
            'For a product question, include the product name so we can identify it.',
        ],
    ],
];

$selected = isset($topic) && isset($topics[$topic]) ? $topic : 'contact';
$page = $topics[$selected];
get_header();
?>
<main class="refuel-care refuel-wc-wrap" id="main-content">
  <a class="refuel-care-back" href="<?php echo esc_url(refuel_public_home_url()); ?>">← Back to shop</a>
  <div class="refuel-care-layout">
    <nav class="refuel-care-nav" aria-label="Customer care topics">
      <h2>Customer Care</h2>
      <?php foreach ($topics as $key => $item) : ?>
        <a href="<?php echo esc_url(refuel_customer_care_url($key)); ?>" <?php if ($key === $selected) : ?>aria-current="page"<?php endif; ?>><?php echo esc_html($item['title']); ?></a>
      <?php endforeach; ?>
    </nav>
    <article class="refuel-care-content">
      <p class="refuel-care-eyebrow">REFUEL AI SUPPLEMENTS · CUSTOMER CARE</p>
      <h1><?php echo esc_html($page['title']); ?></h1>
      <p class="refuel-care-intro"><?php echo esc_html($page['intro']); ?></p>
      <ul><?php foreach ($page['details'] as $detail) : ?><li><?php echo esc_html($detail); ?></li><?php endforeach; ?></ul>
      <div class="refuel-care-help">
        <strong>Need help?</strong>
        <a href="mailto:canadaaifitness@gmail.com?subject=Refuel%20AI%20Supplements%20support">Email canadaaifitness@gmail.com</a>
      </div>
    </article>
  </div>
</main>
<?php get_footer(); ?>
