-- phpMyAdmin SQL Dump
-- version 6.0.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.30.23
-- Creato il: Gen 26, 2024 alle 10:35
-- Versione del server: 8.0.18
-- Versione PHP: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Amici diVini`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Commento`
--

CREATE TABLE `Commento` (
  `IdVino` decimal(10,0) NOT NULL,
  `NomeUtente` char(50) NOT NULL,
  `NomeVino` char(100) NOT NULL,
  `Username` char(50) NOT NULL,
  `testo` char(200) NOT NULL,
  `CodCommento` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `inserimento`
--

CREATE TABLE `inserimento` (
  `IdLista` decimal(10,0) NOT NULL,
  `IdVino` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Likes`
--

CREATE TABLE `Likes` (
  `IdVino` decimal(10,0) NOT NULL,
  `NomeUtente` char(50) NOT NULL,
  `NomeVino` char(100) NOT NULL,
  `Username` char(50) NOT NULL,
  `codLike` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Lista`
--

CREATE TABLE `Lista` (
  `IdLista` decimal(10,0) NOT NULL,
  `NomeUtente` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Notifica`
--

CREATE TABLE `Notifica` (
  `Username` char(50) NOT NULL,
  `Visualizzata` char(1) NOT NULL,
  `Dat_minuto` decimal(2,0) NOT NULL,
  `Dat_Ora` decimal(2,0) NOT NULL,
  `Tipologia` char(50) NOT NULL,
  `Orario` char(50) NOT NULL,
  `NomeUtente` char(50) NOT NULL,
  `Inv_Username` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Post`
--

CREATE TABLE `Post` (
  `NomeUtente` char(50) NOT NULL,
  `IdVino` decimal(10,0) NOT NULL,
  `Dat_minuti` decimal(2,0) NOT NULL,
  `Dat_ora` decimal(2,0) NOT NULL,
  `Valutazione` decimal(2,0) NOT NULL,
  `Recensione` char(255) NOT NULL,
  `NomeVino` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Profilo`
--

CREATE TABLE `Profilo` (
  `NomeUtente` char(50) NOT NULL,
  `Username` char(50) NOT NULL,
  `InfoPersonali` char(200) NOT NULL,
  `Descrizione` char(200) NOT NULL,
  `AccountSeguiti` decimal(10,0) NOT NULL,
  `Amici` decimal(10,0) NOT NULL,
  `ViniInseriti` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `segue`
--

CREATE TABLE `segue` (
  `S_U_Username` char(50) NOT NULL,
  `Username` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `DataDiNascita` date NOT NULL,
  `Password` char(50) NOT NULL,
  `Username` char(50) NOT NULL,
  `Email` char(100) NOT NULL,
  `Cognome` char(50) NOT NULL,
  `Nome` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Vino`
--

CREATE TABLE `Vino` (
  `Produttore` char(100) NOT NULL,
  `derivazione` char(50) NOT NULL,
  `Anno_produzione` char(4) NOT NULL,
  `descrizione` char(200) NOT NULL,
  `gradoAlcolemico` decimal(10,2) NOT NULL,
  `IdVino` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Commento`
--
ALTER TABLE `Commento`
  ADD PRIMARY KEY (`IdVino`,`NomeUtente`,`NomeVino`,`Username`,`CodCommento`),
  ADD UNIQUE KEY `ID_Commento_IND` (`IdVino`,`NomeUtente`,`NomeVino`,`Username`,`CodCommento`),
  ADD KEY `FKfa_IND` (`Username`);

--
-- Indici per le tabelle `inserimento`
--
ALTER TABLE `inserimento`
  ADD PRIMARY KEY (`IdVino`,`IdLista`),
  ADD UNIQUE KEY `ID_inserimento_IND` (`IdVino`,`IdLista`),
  ADD KEY `FKins_Lis_IND` (`IdLista`);

--
-- Indici per le tabelle `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`IdVino`,`NomeUtente`,`NomeVino`,`Username`,`codLike`),
  ADD UNIQUE KEY `ID_Likes_IND` (`IdVino`,`NomeUtente`,`NomeVino`,`Username`,`codLike`),
  ADD KEY `FKmette_IND` (`Username`);

--
-- Indici per le tabelle `Lista`
--
ALTER TABLE `Lista`
  ADD PRIMARY KEY (`IdLista`),
  ADD UNIQUE KEY `FKassociata_ID` (`NomeUtente`),
  ADD UNIQUE KEY `ID_Lista_IND` (`IdLista`),
  ADD UNIQUE KEY `FKassociata_IND` (`NomeUtente`);

--
-- Indici per le tabelle `Notifica`
--
ALTER TABLE `Notifica`
  ADD PRIMARY KEY (`Username`,`Orario`),
  ADD UNIQUE KEY `ID_Notifica_IND` (`Username`,`Orario`),
  ADD KEY `FKrelativa_IND` (`NomeUtente`),
  ADD KEY `FKinvia_IND` (`Inv_Username`);

--
-- Indici per le tabelle `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`IdVino`,`NomeUtente`,`NomeVino`),
  ADD UNIQUE KEY `ID_Post_IND` (`IdVino`,`NomeUtente`,`NomeVino`),
  ADD KEY `FKappartiene_IND` (`NomeUtente`);

--
-- Indici per le tabelle `Profilo`
--
ALTER TABLE `Profilo`
  ADD PRIMARY KEY (`NomeUtente`),
  ADD UNIQUE KEY `FKcorrisponde_ID` (`Username`),
  ADD UNIQUE KEY `ID_Profilo_IND` (`NomeUtente`),
  ADD UNIQUE KEY `FKcorrisponde_IND` (`Username`);

--
-- Indici per le tabelle `segue`
--
ALTER TABLE `segue`
  ADD PRIMARY KEY (`Username`,`S_U_Username`),
  ADD UNIQUE KEY `ID_segue_IND` (`Username`,`S_U_Username`),
  ADD KEY `FKseg_Ute_IND` (`S_U_Username`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `ID_Utente_IND` (`Username`);

--
-- Indici per le tabelle `Vino`
--
ALTER TABLE `Vino`
  ADD PRIMARY KEY (`IdVino`),
  ADD UNIQUE KEY `ID_Vino_IND` (`IdVino`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
