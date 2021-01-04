const cacheName = 'ask-jens-cache';
const startPage = 'https://askjens.themidnight.wiki';
const offlinePage = 'https://askjens.themidnight.wikk';
const filesToCache = [
	'/data/img/askjens.png',
	'/data/img/askjens.jpg',
	'/data/img/askjensfav.png',
];

// Install
self.addEventListener('install', function (e) {
	console.log('Ask Jens service worker installation');
	e.waitUntil(
		caches.open(cacheName).then(function (cache) {
			console.log('Wiki service worker caching dependencies');
			filesToCache.map(function (url) {
				return cache.add(url).catch(function (reason) {
					return console.log('Ask Jens: ' + String(reason) + ' ' + url);
				});
			});
		})
	);
});

// Activate
self.addEventListener('activate', function (e) {
	console.log('Ask Jens service worker activation');
	e.waitUntil(
		caches.keys().then(function (keyList) {
			return Promise.all(keyList.map(function (key) {
				if (key !== cacheName) {
					console.log('Ask Jens old cache removed', key);
					return caches.delete(key);
				}
			}));
		})
	);
	return self.clients.claim();
});

// Fetch
self.addEventListener('fetch', function (e) {

	// Return if request url protocal isn't http or https
	if (!e.request.url.match(/^(http|https):\/\//i))
		return;

	// Return if request url is from an external domain.
	if (new URL(e.request.url).origin !== location.origin)
		return;

	// For POST requests, do not use the cache. Serve offline page if offline.
	if (e.request.method !== 'GET') {
		e.respondWith(
			fetch(e.request).catch(function () {
				return caches.match(offlinePage);
			})
		);
		return;
	}

	// Revving strategy
	if (e.request.mode === 'navigate' && navigator.onLine) {
		e.respondWith(
			fetch(e.request).then(function (response) {
				return caches.open(cacheName).then(function (cache) {
					cache.put(e.request, response.clone());
					return response;
				});
			})
		);
		return;
	}

	e.respondWith(
		caches.match(e.request).then(function (response) {
			return response || fetch(e.request).then(function (response) {
				return caches.open(cacheName).then(function (cache) {
					cache.put(e.request, response.clone());
					return response;
				});
			});
		}).catch(function () {
			return caches.match(offlinePage);
		})
	);
});
