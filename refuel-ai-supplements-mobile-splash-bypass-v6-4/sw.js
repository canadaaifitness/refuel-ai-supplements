// Refuel AI Supplements 6.4.6: never replay a cached storefront/customer page.

self.addEventListener('install', event => {
  event.waitUntil(self.skipWaiting());
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(keys => Promise.all(keys
        .filter(key => /^(refuel|mobile-pwa)/i.test(key))
        .map(key => caches.delete(key))))
      .then(() => self.clients.claim())
  );
});

function isPrivateStoreRoute(url) {
  return /\/(wp-admin|wp-login\.php|cart|checkout|my-account)(\/|$)/i.test(url.pathname) ||
    url.searchParams.has('wc-ajax') ||
    url.searchParams.has('add-to-cart') ||
    url.searchParams.has('refuel_pwa_worker');
}

function offlineResponse() {
  return new Response(`<!doctype html><html lang="en"><head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Refuel AI Supplements — Connection unavailable</title>
    <style>body{margin:0;min-height:100vh;display:grid;place-items:center;background:#020708;color:#f2ffff;font:16px system-ui}main{max-width:30rem;padding:2rem}b,a{color:#20eee0}a{display:inline-block;padding:1rem 0}</style>
    </head><body><main><h1>Refuel <b>AI</b> Supplements</h1>
    <p>We couldn’t connect to the store. Check your connection and try again.</p>
    <p>Live prices and checkout require an internet connection.</p>
    <a href="/">Try again</a></main></body></html>`, {
      status: 503,
      headers: { 'Content-Type': 'text/html; charset=utf-8', 'Cache-Control': 'no-store' }
  });
}

self.addEventListener('fetch', event => {
  const request = event.request;
  if (request.method !== 'GET' || request.mode !== 'navigate') return;

  const url = new URL(request.url);
  if (url.origin !== self.location.origin || isPrivateStoreRoute(url)) return;

  // Wait for the live response, even on slow connections. Do not substitute
  // an old homepage after 3.5 seconds or store personalized HTML offline.
  event.respondWith(fetch(request, { cache: 'no-store' }).catch(offlineResponse));
});
