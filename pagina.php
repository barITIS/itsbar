<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITSBAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_mobile.css">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="/FAVICON/ITS.png" type="image/x-icon">
</head>

<body>
    <header>
        <!-- Barra di navigazione -->
        <img src="logo.png" class="logo" alt="logo">
        <div class="menu-icon">
            <i class="bx bx-menu"></i>
        </div>
        <ul class="navbar">
            <li class="black"><a href="#home">HOME</a></li>
            <li><a href="#categoria">CATEGORIE</a></li>
            <li><a href="#service">SERVICE</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#carrello"><i class='bx bx-cart bx-tada'></i></a></li>
        </ul>

    </header>
    <br><br>
    <div class="pulsante">
        <button id="pulsanteVisualizza" onclick="visualizza()">MENU PRODOTTI</button>
    </div>
    <script>
        function visualizza() {

            var pulsante = document.getElementById("pulsanteVisualizza");

            if (document.getElementById("categoria").style.display === "none") {
                document.getElementById("categoria").style.display = "block";
                pulsante.innerHTML = "NASCONDI MENU";
            } else {
                document.getElementById("categoria").style.display = "none";
                pulsante.innerHTML = "MENU PRODOTTI";
            }
        }

     
        if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/serviceworker.js')
      .then(function(registration) {
        console.log('Service Worker registered with scope: ', registration.scope);
      })
      .catch(function(error) {
        console.error('Service Worker registration failed: ', error);
      });
  });
}

    </script>
    <section class="categoria" id="categoria" style="display:none;">

        <div class="categoria-container">
            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/cornetto.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Cornetti</h2>
                <button id="pulsanteVisualizzaCornetti" onclick="visualizzaProdotti('cornetti')" class="btm">Visualizza Cornetti</button>
                <table id="displayCornetti" style="display: none;">

                </table>
            </div>

            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/bevande.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Bevande</h2>
                <button id="pulsanteVisualizzaBevande" onclick="visualizzaProdotti('bevande')" class="btm">Visualizza Bevande</button>
                <table id="displayBevande" style="display: none;">

                </table>
            </div>
            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/pizza.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Pizze</h2>
                <button id="pulsanteVisualizzaPizze" onclick="visualizzaProdotti('pizze')" class="btm">Visualizza Pizze</button>
                <table id="displayPizze" style="display: none;">

                </table>
            </div>

            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/panini.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Panini</h2>
                <button id="pulsanteVisualizzaPanini" onclick="visualizzaProdotti('panini')" class="btm">Visualizza Panini</button>
                <table id="displayPanini" style="display: none;">

                </table>
            </div>
            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/caffe.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Caffe</h2>
                <button id="pulsanteVisualizzaCaffe" onclick="visualizzaProdotti('caffe')" class="btm">Visualizza Caffe</button>
                <table id="displayCaffe" style="display: none;">

                </table>
            </div>
            <div class="box">
                <div class="categoria-img">
                    <img src="IMGCATEGORIA/snack.png" alt="">
                </div>
                <div class="stelline">
                    <!-- Stelline o valutazione del prodotto... -->
                </div>
                <h2>Snack</h2>
                <button id="pulsanteVisualizzaSnack" onclick="visualizzaProdotti('snack')" class="btm">Visualizza Snack</button>
                <table id="displaySnack" style="display: none;">

                </table>
            </div>
        </div>
    </section>
    <section class="service" id="service">
        <h2>My Service</h2>
        <div class="service-img">
            <div class="box">
                <div class="box-img">
                    <img src="utente.png" alt="">
                </div>
                <a href="#" style='color:black; font-size: 20px ;font-weight:bold'>Me</a>
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quam perspiciatis in amet
                    incidunt consequatur</h3>

                <p class="pu" align="center">
                    <button id="more">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg> Explore me
                    </button>
                </p>

            </div>
            <div class="box">
                <div class="box-img">
                    <img src="utenti.png" alt="">
                </div>
                <a href="#" style='color:black; font-size: 20px; font-weight:bold'>Community</a>
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quam perspiciatis in amet
                    incidunt consequatur</h3>
                <p class="pu" align="center">
                    <button id="more">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg> Explore me
                    </button>
                </p>

            </div>
            <div class="box">
                <div class="box-img">
                    <img src="carrello.png" alt="">
                </div>
                <a href="#" style='color:black; font-size: 20px;font-weight:bold'>Buy</a>
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quam perspiciatis in amet
                    incidunt consequatur</h3>
                <p class="pu" align="center">
                    <button id="more">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg> Explore me
                    </button>
                </p>

            </div>
        </div>
    </section>

    <section class="carrello" id="carrello">
        <h2>Il tuo carrello</h2>
        <table id="carrelloTable">

        </table>
        <button onclick="svuotaCarrello()">Svuota Carrello</button>
    </section>

    <footer>
        <section class="contact" id="contact">
            <div class="social">
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>
            <div class="contact-text">
                <a href="#">Privacy Policy</a>
                <a href="#">Term Of Use</a>
                <a href="#">Our company</a>
            </div>
            <p>&copy; ITSBAR</p>
        </section>
    </footer>

    <script>
        function visualizzaProdotti(categoria) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "cdb.php?categoria=" + categoria, true);
            xhr.responseType = "json";
            xhr.send();
            xhr.onload = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var tableId = "display" + categoria.charAt(0).toUpperCase() + categoria.slice(1);
                    var table = document.getElementById(tableId);
                    table.innerHTML = "<tr><th>Nome</th><th>Descrizione</th><th>Prezzo</th><th>Quantità</th><th>Carrello</th></tr>";
                    var prod = xhr.response;

                    // Se la tabella è attualmente visualizzata, nascondila e svuotala
                    if (table.style.display === "block") {
                        table.style.display = "none";
                        table.innerHTML = ''; // Svuota la tabella
                        document.getElementById("pulsanteVisualizza" + categoria.charAt(0).toUpperCase() + categoria.slice(1)).innerHTML = "Visualizza " + categoria.charAt(0).toUpperCase() + categoria.slice(1);
                    } else {
                        // Altrimenti, riempi la tabella con i nuovi dati
                        prod.forEach(element => {
                            var riga = document.createElement("tr");
                            var col1 = document.createElement("td");
                            var col2 = document.createElement("td");
                            var col3 = document.createElement("td");
                            var col4 = document.createElement("td");
                            var col5 = document.createElement("td");
                            var inputQuantita = document.createElement("input");
                            inputQuantita.type = "number";
                            inputQuantita.min = "1";
                            inputQuantita.max = element["quantita"];
                            inputQuantita.value = "1";
                            inputQuantita.id = "inputQuantita";
                            var pulsanteAggiungi = document.createElement("button");
                            pulsanteAggiungi.innerHTML = "Aggiungi al carrello";
                            pulsanteAggiungi.onclick = function () {
                                var nome = element["nome"];
                                var descrizione = element["descrizione"];
                                var prezzo = element["prezzo"];
                                var quantita = inputQuantita.value;
                                var quantitaMassima = inputQuantita.max;
                                aggiungiProdottoAlCarrello({
                                    nome: nome,
                                    descrizione: descrizione,
                                    prezzo: prezzo,
                                    quantita: quantita,
                                    quantitaMassima: quantitaMassima
                                });
                            };
                            col1.innerHTML = element["nome"];
                            col2.innerHTML = element["descrizione"];
                            col3.innerHTML = element["prezzo"];
                            col4.innerHTML = element["quantita"];
                            col5.appendChild(inputQuantita);
                            col5.appendChild(pulsanteAggiungi);
                            riga.appendChild(col1);
                            riga.appendChild(col2);
                            riga.appendChild(col3);
                            riga.appendChild(col4);
                            riga.appendChild(col5);
                            table.appendChild(riga);
                        });
                        // Visualizza la tabella
                        table.style.display = "block";
                        document.getElementById("pulsanteVisualizza" + categoria.charAt(0).toUpperCase() + categoria.slice(1)).innerHTML = "Nascondi " + categoria.charAt(0).toUpperCase() + categoria.slice(1);
                    }
                }
            };
        }

        function aggiungiProdottoAlCarrello(prodotto) {
            var carrello = JSON.parse(sessionStorage.getItem('carrello')) || [];
            var trovato = false;
            carrello.forEach(item => {
                if (item.nome === prodotto.nome) {
                    if (parseInt(item.quantita) + parseInt(prodotto.quantita) > parseInt(prodotto.quantitaMassima)) {
                        alert("Hai raggiunto la quantità massima per questo prodotto!");
                        trovato = true;
                    } else {
                        item.quantita = parseInt(item.quantita) + parseInt(prodotto.quantita);
                        trovato = true;
                    }
                }
            });
            if (!trovato) {
                carrello.push(prodotto);
            }
            sessionStorage.setItem('carrello', JSON.stringify(carrello));
            visualizzaCarrello();
        }

        function visualizzaCarrello() {
            var carrello = JSON.parse(sessionStorage.getItem('carrello')) || [];
            var table = document.getElementById('carrelloTable');
            table.innerHTML = "<tr><th>Nome</th><th>Descrizione</th><th>Prezzo</th><th>Quantità</th><th>Prezzo Totale</th></tr>";
            var totale = 0;
            carrello.forEach(prodotto => {
                var riga = document.createElement("tr");
                var col1 = document.createElement("td");
                var col2 = document.createElement("td");
                var col3 = document.createElement("td");
                var col4 = document.createElement("td");
                var col5 = document.createElement("td");
                var prezzoTotale = parseFloat(prodotto.prezzo) * parseInt(prodotto.quantita);
                col1.innerHTML = prodotto.nome;
                col2.innerHTML = prodotto.descrizione;
                col3.innerHTML = prodotto.prezzo;
                col4.innerHTML = prodotto.quantita;
                col5.innerHTML = prezzoTotale;
                riga.appendChild(col1);
                riga.appendChild(col2);
                riga.appendChild(col3);
                riga.appendChild(col4);
                riga.appendChild(col5);
                table.appendChild(riga);
                totale += prezzoTotale;
            });
            var rigaTotale = document.createElement("tr");
            var colonnaVuota = document.createElement("td");
            var colonnaVuota2 = document.createElement("td");
            var colonnaVuota3 = document.createElement("td");
            var colonnaTotale = document.createElement("td");
            var colonnaTotaleValore = document.createElement("td");
            colonnaTotale.innerHTML = "<strong>Totale</strong>";
            colonnaTotaleValore.innerHTML = totale;
            rigaTotale.appendChild(colonnaVuota);
            rigaTotale.appendChild(colonnaVuota2);
            rigaTotale.appendChild(colonnaVuota3);
            rigaTotale.appendChild(colonnaTotale);
            rigaTotale.appendChild(colonnaTotaleValore);
            table.appendChild(rigaTotale);
        }

        function svuotaCarrello() {
            sessionStorage.removeItem('carrello');
            visualizzaCarrello();
        }

        window.addEventListener('load', function () {
            visualizzaCarrello();
        });
    </script>

    <script src="script.js"></script>

</body>

</html>
