<?php

// Configurazione del database
$servername = "localhost"; // Indirizzo del server
$username = "root"; // Nome utente del database
$password = ""; // Password del database
$dbname = "bar"; // Nome del database

// Connessione al database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Categoria di prodotti da recuperare dalla richiesta AJAX
$categoria = $_GET['categoria'];

// Query per selezionare i prodotti dalla categoria specificata
$query = "SELECT * FROM Prodotti WHERE Categoria = '$categoria'";
$result = mysqli_query($conn, $query);

// Array per salvare i prodotti
$prodotti = array();

// Mostra i risultati
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $prodotto = array(
            'nome' => $row['Nome'],
            'descrizione' => $row['Descrizione'],
            'prezzo' => $row['Prezzo'],
            'quantita' => $row['Quantita']
        );
        $prodotti[] = $prodotto;
    }
} else {
    echo "Nessun risultato trovato";
}

// Chiudi la connessione al database
mysqli_close($conn);

// Stampa l'array JSON dei prodotti
echo json_encode($prodotti);
?>
