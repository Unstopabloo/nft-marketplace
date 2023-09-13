
CREATE TABLE Categorias (
    Id INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

CREATE TABLE Usuarios (
    Id INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Contraseña VARCHAR(255) NOT NULL, 
    Direccion VARCHAR(255), 
    Ciudad VARCHAR(255),
    CodigoPostal VARCHAR(10),
    Pais VARCHAR(255)
);


INSERT INTO Categorias (Id, Nombre)
VALUES
    (1, 'Paisaje'),
    (2, 'Moda'),
    (3, 'Celebridades'),
    (4, 'Personajes');

CREATE TABLE Artistas (
    Id INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Imagen VARCHAR(255) 
);


CREATE TABLE NFTs (
    Id INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Precio DECIMAL(10, 2), 
    CategoriasId INT, 
    ArtistasId INT, 
    SKU VARCHAR(50),
    Destacado BOOLEAN
);


ALTER TABLE NFTs
ADD FOREIGN KEY (CategoriasId) REFERENCES Categorias(Id);

ALTER TABLE NFTs
ADD FOREIGN KEY (ArtistasId) REFERENCES Artistas(Id);
