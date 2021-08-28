DROP DATABASE IF EXISTS projetWeb;

CREATE DATABASE IF NOT EXISTS projetWeb;

USE projetWeb;

DROP TABLE IF EXISTS `Role`;
CREATE TABLE IF NOT EXISTS `Role`(

	idRole INTEGER PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50)
	
)ENGINE = INNODB;

DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE IF NOT EXISTS Utilisateurs(

	idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(100),
	pwUser VARCHAR(100),
	email VARCHAR(100),
	idRole INTEGER,
	date_inscription DATETIME,
	FOREIGN KEY (idRole) REFERENCES `Role`(idRole)

)ENGINE = INNODB;


DROP TABLE IF EXISTS StatusCommandes;
CREATE TABLE IF NOT EXISTS StatusCommandes(

	idStatusCommande INTEGER PRIMARY KEY AUTO_INCREMENT,
	nom VARCHAR(50)

)ENGINE = INNODB;


DROP TABLE IF EXISTS genreMusique;
CREATE TABLE IF NOT EXISTS genreMusique(

	idGenre INTEGER PRIMARY KEY AUTO_INCREMENT,
	nomGenre VARCHAR(50)

)ENGINE = INNODB;


DROP TABLE IF EXISTS Artistes;
CREATE TABLE IF NOT EXISTS Artistes(

	idArtiste INTEGER PRIMARY KEY AUTO_INCREMENT,
	nomArtiste VARCHAR(100),
	imageArtiste TEXT,
	descriptionArtiste TEXT,
	idGenre INT,
	is_deleted TINYINT DEFAULT NULL,
	FOREIGN KEY (idGenre) REFERENCES genreMusique(idGenre)

)ENGINE = INNODB;

DROP TABLE IF EXISTS Musiques;
CREATE TABLE IF NOT EXISTS Musiques(

	idMusique INTEGER PRIMARY KEY AUTO_INCREMENT,
	titre VARCHAR(100),
	prix FLOAT,
	is_deleted TINYINT DEFAULT NULL,
	idArtiste INT,
	FOREIGN KEY (idArtiste) REFERENCES `Artistes`(idArtiste)

)ENGINE = INNODB;

DROP TABLE IF EXISTS Commandes;
CREATE TABLE IF NOT EXISTS Commandes(

	idCommande INTEGER PRIMARY KEY AUTO_INCREMENT,
	idStatusCommande INTEGER, 
	idUtilisateur INTEGER,
	idMusique INTEGER,
	date_commande DATETIME,
	FOREIGN KEY (idStatusCommande) REFERENCES StatusCommandes(idStatusCommande),
	FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur),
	FOREIGN KEY (idMusique) REFERENCES Musiques(idMusique)
	

)ENGINE = INNODB;


DROP TABLE IF EXISTS CommandeMusiques;
CREATE TABLE IF NOT EXISTS CommandeMusiques(

	idCommandeMusique INTEGER PRIMARY KEY AUTO_INCREMENT,
	idMusique INTEGER UNIQUE, 
	idCommande INTEGER UNIQUE,
	prix FLOAT,
	FOREIGN KEY (idMusique) REFERENCES Musiques(idMusique),
	FOREIGN KEY (idCommande) REFERENCES Commandes(idCommande)

)ENGINE = INNODB;


DROP TABLE IF EXISTS UtilisateurMusiques;
CREATE TABLE IF NOT EXISTS UtilisateurMusiques(

	idUtilisateur INTEGER UNIQUE,
	idMusique INTEGER UNIQUE,
	FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur),
	FOREIGN KEY (idMusique) REFERENCES Musiques(idMusique)

)ENGINE = INNODB;



DROP TABLE IF EXISTS ArtistesMusiques;
CREATE TABLE IF NOT EXISTS ArtistesMusiques(

	idArtiste INTEGER,
	idMusique INTEGER,
	FOREIGN KEY (idArtiste) REFERENCES Artistes(idArtiste),
	FOREIGN KEY (idMusique) REFERENCES Musiques(idMusique)

)ENGINE = INNODB;



INSERT INTO `role` (`name`) VALUES ('admin'), ('client');
INSERT INTO utilisateurs (pseudo, pwUser, email, idRole, date_inscription) VALUES ('lea', '$2y$10$hmh/3sW.pEY2nMerQM4cCOiHOiWaWiQkyvOLInKDF2jixuAEocx7a', 'lea@gmail.com', '1', NOW()), 
										  ('noah', '$2y$10$W0T2HDVHgsJizGs40ZXF4ORN0dEXZyFEavtTEbRf.K0.cgN2.TkES', 'noah@gmail.com', '2', NOW()); 
INSERT INTO genreMusique(nomGenre) VALUES ('Ajout') ,('Rock'),('Rap'),('DanceHall'), ('RnB'), ('Métal');
INSERT INTO statuscommandes(nom) VALUES ('vérification'), ('commandé'), ('annulée');
-- INSERT INTO Artistes(nomArtiste, imageArtiste, descriptionArtiste, idGenre) 
--	VALUES('Soprano', 'soprano.png', 'cet homme est un rappeur', '3'), 
--		('Psy4DeLaRime', 'soprano.png', 'un groupe de RAP', '3'),
--		('ACDC', 'soprano.png', 'un groupe de Rock', '2');

 -- INSERT INTO musiques (titre, prix) VALUES ('en feu', '1.56');

 -- INSERT INTO ArtistesMusiques (idArtiste, idMusique) VALUES (1,1);
 -- INSERT INTO ArtistesMusiques (idArtiste, idMusique) VALUES (2,2);
