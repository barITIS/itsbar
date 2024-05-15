const menuIcon = document.querySelector('.menu-icon');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    navbar.classList.toggle('active');
    menuIcon.classList.toggle('active'); // Aggiunge o rimuove la classe "active" al pulsante
});

// Verifica se il browser supporta le notifiche
if ("Notification" in window) {
    // Richiedi il permesso all'utente per inviare notifiche
    Notification.requestPermission().then(function(permission) {
      if (permission === "granted") {
        // Crea la notifica
        var notification = new Notification("Scarica l'applicazione!", {
          body: "Clicca qui per scaricare l'applicazione.",
          icon: "images/icon-192x192.png" // Inserisci il percorso dell'icona desiderata
        });
      }
    });
  }
  