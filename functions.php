<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
});

function refuel_public_home_url() {
    return 'https://refuelaisupplements.com/';
}

// The WooCommerce installation has its own WordPress homepage. Send shoppers
// back to the public storefront when they leave the cart or checkout.
add_action('template_redirect', function () {
    if ('shop.refuelaisupplements.com' !== wp_parse_url(home_url(), PHP_URL_HOST)) {
        return;
    }

    if (isset($_GET['refuel_cart_add'])) {
        if (!function_exists('WC') || !WC()->cart) {
            return;
        }
        $raw = sanitize_text_field(wp_unslash($_GET['refuel_cart_add']));
        $ids = array_slice(array_unique(array_filter(array_map('absint', explode(',', $raw)))), 0, 8);
        foreach ($ids as $id) {
            $product = wc_get_product($id);
            if ($product && $product->is_type('simple') && $product->is_purchasable() && $product->is_in_stock()) {
                WC()->cart->add_to_cart($id, 1);
            }
        }
        wp_safe_redirect(refuel_shop_page_url('cart'));
        exit;
    }

    if (is_front_page() && !isset($_GET['refuel_pwa_worker']) && !isset($_GET['add-to-cart'])) {
        wp_redirect(refuel_public_home_url(), 302, 'Refuel AI Supplements');
        exit;
    }
}, 9);

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('refuel-ai-supplements-live-style', get_stylesheet_uri(), [], '6.4.12');
});

/**
 * Serve the service worker from the site root so it can control the complete
 * storefront instead of being restricted to the theme directory.
 */
add_action('template_redirect', function () {
    if (!isset($_GET['refuel_pwa_worker']) || '1' !== (string) $_GET['refuel_pwa_worker']) {
        return;
    }

    $worker = get_theme_file_path('/sw.js');
    if (!is_readable($worker)) {
        status_header(404);
        exit;
    }

    nocache_headers();
    header('Content-Type: application/javascript; charset=UTF-8');
    header('Service-Worker-Allowed: /');
    echo file_get_contents($worker); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
    exit;
}, 0);

add_action('wp_head', function () {
    $manifest = get_theme_file_uri('/manifest.webmanifest');
    $icon = get_theme_file_uri('/assets/refuel-app-icon-192.png');
    $touch_icon = get_theme_file_uri('/assets/refuel-app-icon-192.png');
    ?>
    <link rel="manifest" href="<?php echo esc_url($manifest); ?>?v=6.4.12">
    <meta name="refuel-theme-version" content="6.4.12">
    <link rel="icon" href="<?php echo esc_url($icon); ?>?v=6.4.12" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="192x192" href="<?php echo esc_url($touch_icon); ?>?v=6.4.12">
    <meta name="theme-color" content="#020708">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Refuel AI Supplements">
    <meta name="apple-mobile-web-app-title" content="Refuel AI Supplements">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <script id="refuel-mobile-browser-bootstrap-v6-4">
      (function () {
        var mobile = window.matchMedia('(max-width: 820px)').matches;
        var standalone = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
        if (mobile && !standalone) document.documentElement.classList.add('refuel-mobile-browser-safe');
      })();
    </script>
    <style id="refuel-mobile-browser-first-load-v6-4">
      @media (max-width: 820px) {
        html.refuel-mobile-browser-safe {
          position: static !important;
          height: auto !important;
          min-height: 100% !important;
          overflow-x: hidden !important;
          overflow-y: auto !important;
          overscroll-behavior-y: auto !important;
          touch-action: pan-y !important;
        }
        html.refuel-mobile-browser-safe body:not(.modal-open) {
          position: static !important;
          height: auto !important;
          min-height: 100dvh !important;
          overflow-x: hidden !important;
          overflow-y: auto !important;
          /* The auto-height body has no vertical scroll range. Allow its
             gestures to reach the document instead of trapping them here. */
          overscroll-behavior-y: auto !important;
          touch-action: pan-y !important;
        }
        html.refuel-mobile-browser-safe body.modal-open {
          overflow-y: hidden !important;
        }
        html.refuel-mobile-browser-safe #refuelPremiumLoader {
          inset: 0 0 auto !important;
          width: 100% !important;
          height: 5px !important;
          min-height: 0 !important;
          background: transparent !important;
          -webkit-backdrop-filter: none !important;
          backdrop-filter: none !important;
          pointer-events: none !important;
        }
        html.refuel-mobile-browser-safe #refuelPremiumLoader .refuel-loader-pill {
          display: none !important;
        }
        html.refuel-mobile-browser-safe #v6Splash {
          display: none !important;
          visibility: hidden !important;
          opacity: 0 !important;
          pointer-events: none !important;
        }
        html.refuel-mobile-browser-safe #refuelLoginModal,
        html.refuel-mobile-browser-safe #refuelLoginBackdrop {
          display: none !important;
          visibility: hidden !important;
          pointer-events: none !important;
        }
        html.refuel-mobile-browser-safe.refuel-mobile-ready #refuelPremiumLoader,
        html.refuel-mobile-browser-safe.refuel-mobile-ready #refuel-page-loader,
        html.refuel-mobile-browser-safe.refuel-mobile-ready #v6Splash {
          display: none !important;
          visibility: hidden !important;
          opacity: 0 !important;
          pointer-events: none !important;
          animation: none !important;
        }
      }
    </style>
    <script id="refuel-cart-schema-config">
      window.RefuelCartConfig = {
        schema: 'v5-6',
        resetUrl: <?php echo wp_json_encode(esc_url_raw(admin_url('admin-ajax.php'))); ?>
      };
    </script>
    <style id="refuel-premium-loader-v4">
      #refuel-page-loader{position:fixed;z-index:2147483646;inset:0 0 auto;height:5px;opacity:0;visibility:hidden;pointer-events:none;transition:opacity .16s ease,visibility .16s ease;background:rgba(2,7,8,.72)}
      #refuel-page-loader.is-active{opacity:1;visibility:visible}
      #refuel-page-loader .refuel-loader-bar{display:block;height:100%;width:42%;border-radius:0 999px 999px 0;background:linear-gradient(90deg,#f6c66d,#20eee0,#85ffc1);box-shadow:0 0 16px rgba(32,238,224,.72);transform:translateX(-110%);animation:refuelPremiumLoad 1.05s cubic-bezier(.65,.05,.36,1) infinite}
      @keyframes refuelPremiumLoad{0%{transform:translateX(-110%)}55%{width:58%}100%{transform:translateX(250%);width:38%}}
      @media (prefers-reduced-motion:reduce){#refuel-page-loader .refuel-loader-bar{animation-duration:2s}}
    </style>
    <script id="refuel-mobile-fail-open-v4">
      window.addEventListener('error',function(){
        var body=document.body;
        if(body&&body.classList.contains('app-shell-mode')&&!document.querySelector('.mobile-app-screen.active')){
          body.classList.remove('app-shell-mode');
        }
      });
    </script>
    <?php
}, 20);

add_action('wp_body_open', function () {
    ?>
    <div id="refuel-page-loader" class="is-active" aria-hidden="true"><span class="refuel-loader-bar"></span></div>
    <?php
}, 1);

/**
 * Clear the stale pre-V5.5 WooCommerce cart once, then leave every new cart
 * untouched. The browser-side Smart Cart performs the same one-time schema
 * migration for cached homepage copies.
 */
function refuel_mark_cart_schema_v55() {
    $expires = time() + YEAR_IN_SECONDS;
    if (function_exists('wc_setcookie')) {
        wc_setcookie('refuel_cart_schema', 'v5-6', $expires, is_ssl(), true);
    } else {
        setcookie('refuel_cart_schema', 'v5-6', $expires, COOKIEPATH ?: '/', COOKIE_DOMAIN, is_ssl(), true);
    }
    $_COOKIE['refuel_cart_schema'] = 'v5-6';
}

function refuel_clear_stale_cart_v55() {
    if (function_exists('WC') && WC()->cart) {
        WC()->cart->empty_cart(true);
    }
    refuel_mark_cart_schema_v55();
}

function refuel_ajax_clear_stale_cart_v55() {
    nocache_headers();
    $schema = isset($_POST['schema']) ? sanitize_key(wp_unslash($_POST['schema'])) : '';
    if ('v5-6' !== $schema) {
        wp_send_json_error(['message' => 'Unsupported cart schema.'], 400);
    }
    refuel_clear_stale_cart_v55();
    wp_send_json_success(['cart_count' => 0, 'schema' => 'v5-6']);
}
add_action('wp_ajax_refuel_reset_stale_cart', 'refuel_ajax_clear_stale_cart_v55');
add_action('wp_ajax_nopriv_refuel_reset_stale_cart', 'refuel_ajax_clear_stale_cart_v55');

add_action('wp_footer', function () {
    $worker_url = add_query_arg([
        'refuel_pwa_worker' => '1',
        'v'                 => '6.4.12',
    ], home_url('/'));
    ?>
    <script id="refuel-theme-loader-and-pwa-v4">
    (function () {
      var loader = document.getElementById('refuel-page-loader');
      var premiumLoader = document.getElementById('refuelPremiumLoader');
      var timer = 0;
      if (premiumLoader && loader) loader.classList.remove('is-active');
      function showLoader(autoHide) {
        if (!loader) return;
        window.clearTimeout(timer);
        loader.classList.remove('is-active');
        void loader.offsetWidth;
        loader.classList.add('is-active');
        if (autoHide) timer = window.setTimeout(hideLoader, autoHide);
      }
      function hideLoader() {
        if (loader) loader.classList.remove('is-active');
      }
      window.RefuelPageLoader = { show: showLoader, hide: hideLoader };
      if (document.readyState === 'complete') window.setTimeout(hideLoader, 450);
      else window.addEventListener('load', function () { window.setTimeout(hideLoader, 450); }, { once: true });
      window.addEventListener('pageshow', hideLoader);

      // A companion premium-loader plugin may already own navigation and form
      // loading. Do not intercept the same interaction twice: two delayed
      // handlers made mobile Chrome appear frozen and made the PWA feel rough.
      if (!premiumLoader) {
        document.addEventListener('click', function (event) {
          var link = event.target.closest && event.target.closest('a[href]');
          if (!link || event.defaultPrevented || link.target === '_blank' || link.hasAttribute('download')) return;
          var url;
          try { url = new URL(link.href, window.location.href); } catch (error) { return; }
          if (url.origin !== window.location.origin || !/^https?:$/.test(url.protocol)) return;
          if (url.pathname === window.location.pathname && url.search === window.location.search && url.hash) {
            showLoader(600);
            return;
          }
          event.preventDefault();
          showLoader(0);
          window.setTimeout(function () { window.location.assign(url.href); }, 240);
        });

        document.addEventListener('submit', function () { showLoader(0); }, true);
      }

      window.setTimeout(function () {
        var body = document.body;
        if (window.innerWidth <= 820 && body && body.classList.contains('app-shell-mode') && !document.querySelector('.mobile-app-screen.active')) {
          body.classList.remove('app-shell-mode');
        }
      }, 2500);

      if ('serviceWorker' in navigator && window.isSecureContext) {
        // Register before slow images finish. Never force a reload mid-shopping.
          navigator.serviceWorker.register(<?php echo wp_json_encode(esc_url_raw($worker_url)); ?>, {
            scope: '/',
            updateViaCache: 'none'
          })
            .catch(function (error) { console.warn('Refuel PWA registration:', error); });
      }

      var standalone = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
      function requestPortraitLock() {
        if (!standalone || !window.matchMedia('(max-width: 1000px)').matches) return;
        if (!screen.orientation || typeof screen.orientation.lock !== 'function') return;
        screen.orientation.lock('portrait').catch(function () {
          // The manifest and landscape overlay remain the safe fallback.
        });
      }
      requestPortraitLock();
      window.addEventListener('pointerdown', requestPortraitLock, { once: true, passive: true });
      window.addEventListener('keydown', requestPortraitLock, { once: true });
      if (!standalone) {
        window.setTimeout(function () {
          var banner = document.getElementById('installBanner');
          if (banner && !sessionStorage.getItem('refuelInstallDismissed')) banner.classList.add('show');
        }, 1800);
      }
      var dismiss = document.getElementById('dismissInstall');
      if (dismiss) dismiss.addEventListener('click', function () { sessionStorage.setItem('refuelInstallDismissed', '1'); });
    })();
    </script>
    <?php
}, 100);

/**
 * Repair the mandatory customer-login popup supplied by the companion plugin.
 * Its rendered WooCommerce forms currently contain empty nonce fields, so a
 * guest can neither sign in nor create an account and mobile Chrome remains
 * locked behind the modal. Supply valid tokens immediately, then refresh them
 * from an uncached endpoint in case the homepage itself was page-cached.
 */
function refuel_mobile_auth_tokens() {
    return [
        'login'    => wp_create_nonce('woocommerce-login'),
        'register' => wp_create_nonce('woocommerce-register'),
    ];
}

add_action('wp_ajax_nopriv_refuel_mobile_auth_tokens', function () {
    nocache_headers();
    wp_send_json_success(refuel_mobile_auth_tokens());
});

add_action('wp_ajax_nopriv_refuel_mobile_login', function () {
    check_ajax_referer('woocommerce-login', 'security');

    $username = isset($_POST['username']) ? sanitize_text_field(wp_unslash($_POST['username'])) : '';
    $password = isset($_POST['password']) ? (string) wp_unslash($_POST['password']) : '';
    if ('' === $username || '' === $password) {
        wp_send_json_error(['message' => 'Please enter your username/email and password.'], 400);
    }

    $user = wp_signon([
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => !empty($_POST['rememberme']),
    ], is_ssl());

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => wp_strip_all_tags($user->get_error_message())], 401);
    }

    wp_set_current_user($user->ID);
    wp_send_json_success(['redirect' => home_url('/')]);
});

add_action('wp_ajax_nopriv_refuel_mobile_register', function () {
    check_ajax_referer('woocommerce-register', 'security');

    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $password = isset($_POST['password']) ? (string) wp_unslash($_POST['password']) : '';
    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Please enter a valid email address.'], 400);
    }
    if (strlen($password) < 8) {
        wp_send_json_error(['message' => 'Password must contain at least 8 characters.'], 400);
    }
    if (!function_exists('wc_create_new_customer')) {
        wp_send_json_error(['message' => 'Customer registration is temporarily unavailable.'], 503);
    }

    $user_id = wc_create_new_customer($email, '', $password);
    if (is_wp_error($user_id)) {
        wp_send_json_error(['message' => wp_strip_all_tags($user_id->get_error_message())], 400);
    }

    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id, true, is_ssl());
    wp_send_json_success(['redirect' => home_url('/')]);
});

add_action('wp_footer', function () {
    if (is_user_logged_in()) {
        return;
    }

    $tokens = refuel_mobile_auth_tokens();
    $endpoint = add_query_arg('action', 'refuel_mobile_auth_tokens', admin_url('admin-ajax.php'));
    ?>
    <script id="refuel-mobile-auth-bridge-v5-3">
    (function () {
      var ajaxEndpoint = <?php echo wp_json_encode(esc_url_raw(admin_url('admin-ajax.php'))); ?>;

      function applyTokens(tokens) {
        if (!tokens) return;
        document.querySelectorAll('input[name="woocommerce-login-nonce"]').forEach(function (input) {
          input.value = tokens.login || '';
        });
        document.querySelectorAll('input[name="woocommerce-register-nonce"]').forEach(function (input) {
          input.value = tokens.register || '';
        });
        document.querySelectorAll('input[name="_wp_http_referer"]').forEach(function (input) {
          if (!input.value) input.value = window.location.pathname + window.location.search;
        });
        document.querySelectorAll('input[name="redirect"]').forEach(function (input) {
          if (!input.value) input.value = window.location.href;
        });
        document.documentElement.dataset.refuelAuthReady = '1';
      }

      applyTokens(<?php echo wp_json_encode($tokens); ?>);

      fetch(<?php echo wp_json_encode(esc_url_raw($endpoint)); ?>, {
        credentials: 'same-origin',
        cache: 'no-store',
        headers: { 'Accept': 'application/json' }
      })
        .then(function (response) { return response.ok ? response.json() : null; })
        .then(function (payload) {
          if (payload && payload.success && payload.data) applyTokens(payload.data);
        })
        .catch(function () {
          // The server-rendered tokens above remain available if refresh fails.
        });

      function authMessage(form, message, isError) {
        var node = form.querySelector('.refuel-auth-message');
        if (!node) {
          node = document.createElement('p');
          node.className = 'refuel-auth-message';
          node.setAttribute('role', 'status');
          node.style.margin = '10px 0 0';
          node.style.fontSize = '.86rem';
          node.style.lineHeight = '1.45';
          form.appendChild(node);
        }
        node.style.color = isError ? '#ff8f8f' : '#85ffc1';
        node.textContent = message || '';
      }

      function unlockStore(redirect) {
        var modal = document.getElementById('refuelLoginModal');
        var backdrop = document.getElementById('refuelLoginBackdrop');
        if (modal) modal.classList.remove('show');
        if (backdrop) backdrop.classList.remove('show');
        document.body.style.overflow = '';
        var destination = redirect || window.location.href;
        var separator = destination.indexOf('?') === -1 ? '?' : '&';
        window.location.replace(destination + separator + 'refuel_auth=success&t=' + Date.now());
      }

      function submitAuth(form, action, nonceField) {
        if (!form || form.dataset.refuelAjaxBusy === '1') return;
        var nonce = form.querySelector('[name="' + nonceField + '"]');
        var submit = form.querySelector('[type="submit"]');
        var data = new FormData(form);
        data.set('action', action);
        data.set('security', nonce ? nonce.value : '');
        form.dataset.refuelAjaxBusy = '1';
        if (submit) submit.disabled = true;
        authMessage(form, action === 'refuel_mobile_login' ? 'Signing you in…' : 'Creating your account…', false);

        fetch(ajaxEndpoint, {
          method: 'POST',
          credentials: 'same-origin',
          cache: 'no-store',
          body: data,
          headers: { 'Accept': 'application/json' }
        })
          .then(function (response) {
            return response.json().catch(function () { return null; });
          })
          .then(function (payload) {
            if (!payload || !payload.success) {
              var message = payload && payload.data && payload.data.message
                ? payload.data.message
                : 'Unable to continue. Please check your details and try again.';
              throw new Error(message);
            }
            authMessage(form, 'Success. Opening the store…', false);
            unlockStore(payload.data && payload.data.redirect);
          })
          .catch(function (error) {
            authMessage(form, error.message || 'Unable to continue. Please try again.', true);
            form.dataset.refuelAjaxBusy = '0';
            if (submit) submit.disabled = false;
          });
      }

      var loginForm = document.querySelector('#refuelLoginPanel form.woocommerce-form-login');
      var registerForm = document.querySelector('#refuelRegisterPanel form.woocommerce-form-register');
      if (loginForm) {
        loginForm.addEventListener('submit', function (event) {
          event.preventDefault();
          event.stopImmediatePropagation();
          submitAuth(loginForm, 'refuel_mobile_login', 'woocommerce-login-nonce');
        }, true);
      }
      if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
          event.preventDefault();
          event.stopImmediatePropagation();
          submitAuth(registerForm, 'refuel_mobile_register', 'woocommerce-register-nonce');
        }, true);
      }
    })();
    </script>
    <?php
}, 999);

/**
 * The companion customer-login plugin can leave its mandatory overlay active
 * for logged-out visitors. On mobile Chrome this also leaves body scrolling
 * disabled, making the storefront appear frozen. Keep the installed PWA login
 * flow unchanged, but fail open in the normal mobile browser.
 */
add_action('wp_footer', function () {
    ?>
    <style id="refuel-mobile-browser-unlock-v6-1-css">
      @media (max-width: 820px) {
        body.refuel-mobile-browser-unlocked:not(.modal-open) {
          position: static !important;
          height: auto !important;
          min-height: 100dvh !important;
          overflow-y: auto !important;
          overscroll-behavior-y: auto !important;
          touch-action: pan-y !important;
        }
        body.refuel-mobile-browser-unlocked #refuelLoginModal,
        body.refuel-mobile-browser-unlocked #refuelLoginBackdrop {
          display: none !important;
          visibility: hidden !important;
          pointer-events: none !important;
        }
      }
    </style>
    <script id="refuel-mobile-browser-unlock-v6-1">
    (function () {
      var query = window.matchMedia('(max-width: 820px)');
      var observer = null;

      function isStandalone() {
        return window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
      }

      function conceal(node) {
        if (!node) return;
        if (node.classList.contains('show')) node.classList.remove('show');
        if (node.getAttribute('aria-hidden') !== 'true') node.setAttribute('aria-hidden', 'true');
        if (node.style.getPropertyValue('display') !== 'none' || node.style.getPropertyPriority('display') !== 'important') {
          node.style.setProperty('display', 'none', 'important');
        }
        if (node.style.getPropertyValue('pointer-events') !== 'none') {
          node.style.setProperty('pointer-events', 'none', 'important');
        }
      }

      function unlockMobileBrowser() {
        var body = document.body;
        if (!body) return;
        // Class removal still queues an attribute mutation when a token is
        // absent. Do not observe our own writes: otherwise the callback can
        // re-queue itself forever, starving taps, paint and loader timers.
        if (observer) observer.disconnect();
        try {
          var enabled = query.matches && !isStandalone();
          body.classList.toggle('refuel-mobile-browser-unlocked', enabled);
          if (!enabled) return;

          if (body.classList.contains('app-shell-mode')) body.classList.remove('app-shell-mode');
          var activePanel = body.querySelector(
            '.cart-drawer.open, .assessment-modal.show, .review-modal.show, ' +
            '.chat-panel.open, .v6-bottom-sheet.show, .mobile-ios-install-sheet.show, ' +
            '#facilityLightbox:not([hidden])'
          );
          if (!activePanel) {
            if (body.classList.contains('modal-open')) body.classList.remove('modal-open');
            if (body.style.getPropertyValue('overflow')) body.style.removeProperty('overflow');
          }
          conceal(document.getElementById('refuelLoginModal'));
          conceal(document.getElementById('refuelLoginBackdrop'));
        } finally {
          if (observer) watchLoginOverlay();
        }
      }

      function watchLoginOverlay() {
        if (!observer) observer = new MutationObserver(unlockMobileBrowser);
        observer.disconnect();
        [document.body, document.getElementById('refuelLoginModal'), document.getElementById('refuelLoginBackdrop')]
          .filter(Boolean)
          .forEach(function (node) {
            observer.observe(node, { attributes: true, attributeFilter: ['class', 'style', 'aria-hidden'] });
          });
      }

      unlockMobileBrowser();
      watchLoginOverlay();
      window.addEventListener('pageshow', unlockMobileBrowser);
      window.addEventListener('resize', unlockMobileBrowser, { passive: true });
      window.addEventListener('orientationchange', unlockMobileBrowser, { passive: true });
    })();
    </script>
    <?php
}, 10000);

/**
 * The companion premium loader waits for the full window load event. The
 * storefront contains many remote product images, so a slow resource can keep
 * that overlay visible indefinitely on a phone. Never let either mobile launch
 * overlay block the interface for longer than the intended three seconds.
 */
add_action('wp_footer', function () {
    ?>
    <script id="refuel-mobile-loader-failsafe-v6-4">
    (function () {
      if (!window.matchMedia('(max-width: 820px)').matches) return;
      var timer = 0;
      var standalone = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;

      function hideMobileLoaders() {
        window.clearTimeout(timer);
        if (!standalone) document.documentElement.classList.add('refuel-mobile-ready');
        var premium = document.getElementById('refuelPremiumLoader');
        if (premium) {
          premium.classList.remove('is-active');
          premium.setAttribute('aria-hidden', 'true');
        }
        var pageLoader = document.getElementById('refuel-page-loader');
        if (pageLoader) {
          pageLoader.classList.remove('is-active');
          pageLoader.setAttribute('aria-hidden', 'true');
        }
        var splash = document.getElementById('v6Splash');
        if (splash) {
          splash.classList.remove('show');
          splash.setAttribute('aria-hidden', 'true');
        }
      }

      function armMobileFailsafe() {
        window.clearTimeout(timer);
        var elapsed = window.performance && typeof window.performance.now === 'function'
          ? window.performance.now()
          : 0;
        timer = window.setTimeout(hideMobileLoaders, Math.max(0, 3000 - elapsed));
      }

      armMobileFailsafe();
      window.addEventListener('pageshow', function (event) {
        // A fresh navigation keeps the intended three-second launch window;
        // a back/forward-cache restore must never revive an old loader.
        if (event.persisted) hideMobileLoaders();
      });
      window.addEventListener('error', hideMobileLoaders);
      window.addEventListener('unhandledrejection', hideMobileLoaders);
    })();
    </script>
    <?php
}, 10001);

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    if (!function_exists('WC')) {
        return $fragments;
    }

    ob_start();
    ?>
    <span class="cart-badge" id="cartCount"><?php echo esc_html(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?></span>
    <?php
    $fragments['span#cartCount'] = ob_get_clean();
    return $fragments;
});

/** Shop product data, cached briefly so the homepage shows current prices. */
function refuel_catalog_data() {
    $cached = get_transient('refuel_shop_catalog_v6411');
    if (false !== $cached) { return $cached; }
    $data = [];
    // The shop host is the source of truth, even if the landing site has its own WC database.
    $response = wp_remote_get('https://shop.refuelaisupplements.com/wp-json/wc/store/v1/products?per_page=100', ['timeout' => 5]);
        if (!is_wp_error($response) && 200 === wp_remote_retrieve_response_code($response)) {
            $items = json_decode(wp_remote_retrieve_body($response), true);
            if (is_array($items)) {
                foreach ($items as $item) {
                    if (empty($item['name']) || empty($item['permalink']) || !isset($item['prices']['price'])) { continue; }
                    $prices = $item['prices'];
                    $minor = isset($prices['currency_minor_unit']) ? max(0, min(3, (int) $prices['currency_minor_unit'])) : 0;
                    $price = (float) $prices['price'] / pow(10, $minor);
                    $data[strtolower(trim(wp_strip_all_tags($item['name'])))] = [
                        'name' => wp_strip_all_tags($item['name']),
                        'wooId' => isset($item['id']) ? absint($item['id']) : 0,
                        'wooType' => isset($item['type']) ? sanitize_key($item['type']) : '',
                        'url' => esc_url_raw($item['permalink']),
                        'price' => $price,
                        'priceText' => 'PKR ' . number_format($price, $minor),
                        'inStock' => !empty($item['is_in_stock']),
                        'image' => !empty($item['images'][0]['thumbnail']) ? esc_url_raw($item['images'][0]['thumbnail']) : '',
                        'onSale' => !empty($item['on_sale']),
                    ];
                }
            }
        }
    if (!$data && function_exists('wc_get_products') && 'shop.refuelaisupplements.com' === wp_parse_url(home_url(), PHP_URL_HOST)) {
        foreach (wc_get_products(['status' => 'publish', 'limit' => 100]) as $product) {
            $data[strtolower(trim($product->get_name()))] = [
                'name' => $product->get_name(),
                'wooId' => $product->get_id(),
                'wooType' => $product->get_type(),
                'url' => get_permalink($product->get_id()),
                'price' => (float) $product->get_price(),
                'priceText' => wp_strip_all_tags($product->get_price_html()),
                'inStock' => $product->is_in_stock(),
                'image' => wp_get_attachment_image_url($product->get_image_id(), 'woocommerce_thumbnail') ?: '',
                'onSale' => $product->is_on_sale(),
            ];
        }
    }
    set_transient('refuel_shop_catalog_v6411', $data, $data ? 5 * MINUTE_IN_SECONDS : MINUTE_IN_SECONDS);
    return $data;
}

function refuel_woo_shop_url() {
    return refuel_shop_page_url('shop');
}

function refuel_shop_page_url($page) {
    $paths = ['shop' => 'shop', 'cart' => 'cart', 'checkout' => 'checkout', 'myaccount' => 'my-account'];
    if (!isset($paths[$page])) { return 'https://shop.refuelaisupplements.com/shop/'; }
    if ('shop.refuelaisupplements.com' === wp_parse_url(home_url(), PHP_URL_HOST) && function_exists('wc_get_page_permalink')) {
        return wc_get_page_permalink($page);
    }
    return 'https://shop.refuelaisupplements.com/' . $paths[$page] . '/';
}
