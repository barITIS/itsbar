const CACHE_NAME = 'itsbar-cache-v2'; // Aggiornato il nome della cache
const urlsToCache = [
  '/',
  '/index.php',
  '/style.css',
  '/script.js',
  '/logo.png',
  // Aggiungi qui altri file statici che vuoi memorizzare nella cache
];

self.addEventListener('install', function(event) {
  // Installa la cache
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Cache opened');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  // Gestione delle richieste di rete e della cache
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Se la risorsa è già memorizzata nella cache, restituisci la risorsa dalla cache
        if (response) {
          return response;
        }
        // Altrimenti, effettua la richiesta di rete e memorizza la risorsa nella cache
        return fetch(event.request)
          .then(function(response) {
            // Verifica se la risposta è valida e memorizzala nella cache
            if (!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }
            var responseToCache = response.clone();
            caches.open(CACHE_NAME)
              .then(function(cache) {
                cache.put(event.request, responseToCache);
              });
            return response;
          });
      })
  );
});

self.addEventListener('activate', function(event) {
  // Rimuovi eventuali cache obsolete
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(cacheName) {
          return cacheName !== CACHE_NAME;
        }).map(function(cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});

// Aggiorna il Service Worker ogni volta che il file viene modificato
self.addEventListener('install', function(event) {
  event.waitUntil(self.skipWaiting());
});

self.addEventListener('activate', function(event) {
  event.waitUntil(self.clients.claim());
});
