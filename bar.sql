-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 12, 2024 alle 22:50
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bar`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `ID` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Descrizione` text DEFAULT NULL,
  `Prezzo` double NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`ID`, `Nome`, `Descrizione`, `Prezzo`, `Quantita`, `Categoria`) VALUES
(1, 'Cornetto al cioccolato', 'Delizioso cornetto ripieno di crema al cioccolato', 1.5, 20, 'Cornetti'),
(2, 'Cornetto alla crema', 'Cornetto con morbida crema pasticcera', 1.5, 15, 'Cornetti'),
(3, 'Cornetto alla marmellata', 'Cornetto con gustosa marmellata di fragole', 1.5, 10, 'Cornetti'),
(4, 'Cornetto alla nutella', 'Cornetto con golosa crema alla nocciola', 2, 10, 'Cornetti'),
(5, 'Cornetto alla frutta', 'Cornetto con crema alla frutta fresca', 2, 8, 'Cornetti'),
(6, 'Caffè espresso', 'Un classico caffè espresso italiano', 1, 50, 'Caffè'),
(7, 'Caffè macchiato', 'Caffè espresso con una piccola aggiunta di latte caldo', 1.2, 40, 'Caffè'),
(8, 'Caffè americano', 'Caffè espresso diluito con acqua calda', 1.5, 30, 'Caffè'),
(9, 'Caffè lungo', 'Caffè espresso allungato con acqua calda', 1.3, 35, 'Caffè'),
(10, 'Caffè decaffeinato', 'Caffè senza caffeina', 1.2, 25, 'Caffè'),
(11, 'Caffè freddo', 'Caffè servito con ghiaccio', 2, 20, 'Caffè'),
(12, 'Pizza Margherita', 'Pizza classica con pomodoro, mozzarella e basilico', 5, 15, 'Pizze'),
(13, 'Pizza Diavola', 'Pizza con pomodoro, mozzarella, salame piccante e peperoncino', 6, 12, 'Pizze'),
(14, 'Pizza Prosciutto e Funghi', 'Pizza con pomodoro, mozzarella, prosciutto cotto e funghi', 6, 10, 'Pizze'),
(15, 'Pizza Vegetariana', 'Pizza con pomodoro, mozzarella e verdure grigliate', 6.5, 10, 'Pizze'),
(16, 'Pizza Quattro Stagioni', 'Pizza con pomodoro, mozzarella, funghi, carciofi e olive', 7, 8, 'Pizze'),
(17, 'Panino al salame', 'Panino con fette di salame e formaggio', 3, 10, 'Panini'),
(18, 'Panino vegetariano', 'Panino con verdure grigliate e formaggio', 3.5, 8, 'Panini'),
(19, 'Panino al tonno', 'Panino con tonno, maionese e insalata', 4, 7, 'Panini'),
(20, 'Panino con prosciutto crudo', 'Panino con prosciutto crudo e formaggio', 4.5, 8, 'Panini'),
(21, 'Panino con bresaola', 'Panino con bresaola, rucola e parmigiano', 5, 7, 'Panini'),
(22, 'Coca-Cola', 'Bevanda gassata al gusto di cola', 2, 30, 'Bevande'),
(23, 'Acqua naturale', 'Bottiglia d\'acqua naturale da 500ml', 1, 40, 'Bevande'),
(24, 'Aranciata', 'Bevanda gassata al gusto di arancia', 2, 35, 'Bevande'),
(25, 'The freddo', 'Bevanda analcolica al gusto di tè servita fredda', 2.5, 20, 'Bevande'),
(26, 'Succo di frutta', 'Bevanda analcolica al gusto di frutta', 2, 25, 'Bevande'),
(27, 'Gelato al cioccolato', 'Gelato artigianale al gusto di cioccolato', 3, 15, 'Dolci'),
(28, 'Tiramisù', 'Dolce al cucchiaio al caffè', 4, 10, 'Dolci');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
