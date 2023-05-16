DROP DATABASE IF EXISTS Produits;
CREATE DATABASE Produits;
USE Produits;

CREATE TABLE Categorie(
    idCategorie INT PRIMARY KEY,
    nom VARCHAR(15)
);
CREATE TABLE Poubelle(
    idPoubelle INT PRIMARY KEY,
    nom VARCHAR(20),
    prix FLOAT,
    quantite INT,
    idCat INT,
    FOREIGN KEY fk_Categorie(idCat) REFERENCES Categorie(idCategorie)
);

CREATE TABLE Couleur(
    idCouleur INT PRIMARY KEY,
    nom VARCHAR(10),
    source VARCHAR(200)
);
CREATE TABLE Posseder(
    idPoub INT,
    idCoul INT,
    CONSTRAINT pk_Posseder PRIMARY KEY (idPoub,idCoul),
    FOREIGN KEY fk_Poubelle(idPoub) REFERENCES Poubelle(idPoubelle),
    FOREIGN KEY fk_Couleur(idCoul) REFERENCES Couleur(idCouleur)
);
