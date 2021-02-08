DROP DATABASE IF EXISTS projetWeb;

CREATE DATABASE IF NOT EXISTS projetWeb;

USE projetWeb;

DROP TABLE IF EXISTS Roles;
CREATE TABLE IF NOT EXISTS Roles(

	idRole INTEGER PRIMARY KEY AUTO_INCREMENT,
	nom VARCHAR(50)
	
)ENGINE = INNODB;

DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE IF NOT EXISTS Utilisateurs(

	idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT,
	idRole INTEGER UNIQUE,
	login VARCHAR(100),
	motDePasse VARCHAR(100),
	email VARCHAR(100),
	FOREIGN KEY (idRole) REFERENCES Roles(idRole)

)ENGINE = INNODB;


DROP TABLE IF EXISTS StatusCommandes;
CREATE TABLE IF NOT EXISTS StatusCommandes(

	idStatusCommande INTEGER PRIMARY KEY AUTO_INCREMENT,
	nom VARCHAR(50)

)ENGINE = INNODB;


DROP TABLE IF EXISTS Commandes;
CREATE TABLE IF NOT EXISTS Commandes(

	idCommande INTEGER PRIMARY KEY AUTO_INCREMENT,
	idStatusCommande INTEGER UNIQUE, 
	idUtilisateur INTEGER UNIQUE,
	FOREIGN KEY (idStatusCommande) REFERENCES StatusCommandes(idStatusCommande),
	FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur)
	

)ENGINE = INNODB;


DROP TABLE IF EXISTS Musiques;
CREATE TABLE IF NOT EXISTS Musiques(

	idMusique INTEGER PRIMARY KEY AUTO_INCREMENT,
	titre VARCHAR(100),
	prix FLOAT

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
	FOREIGN KEY (idGenre) REFERENCES genreMusique(idGenre)

)ENGINE = INNODB;


DROP TABLE IF EXISTS ArtisteMusiques;
CREATE TABLE IF NOT EXISTS ArtistesMusiques(

	idArtiste INTEGER,
	idMusique INTEGER,
	FOREIGN KEY (idArtiste) REFERENCES Artistes(idArtiste),
	FOREIGN KEY (idMusique) REFERENCES Musiques(idMusique)

)ENGINE = INNODB;


INSERT INTO genreMusique(nomGenre) VALUES ('Rock'),('Rap'),('DanceHall'), ('RnB');

INSERT INTO Artistes(nomArtiste, imageArtiste, descriptionArtiste, idGenre) VALUES('Soprano', 'soprano.png', 'cet homme est un rappeur', '2');