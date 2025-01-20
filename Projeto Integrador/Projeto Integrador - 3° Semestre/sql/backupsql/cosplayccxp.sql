CREATE DATABASE cosplayccxp; 
USE cosplayccxp;


CREATE TABLE Personagens (
    CodigoPersonagem INT AUTO_INCREMENT PRIMARY KEY,
    NomePersonagem VARCHAR(100) NOT NULL,
    Tema VARCHAR(100) NOT NULL,
    Ano INT(11) NOT NULL
);

CREATE TABLE Cosplayers (
    CodigoCosplayer INT AUTO_INCREMENT PRIMARY KEY,
    NomeCosplayer VARCHAR(100) NOT NULL,
    CodigoPersonagem INT DEFAULT NULL,
    FOREIGN KEY (CodigoPersonagem) REFERENCES Personagens(CodigoPersonagem)
);


INSERT INTO Personagens (NomePersonagem, Tema, Ano) VALUES
('Eivor Varinsdotti', 'Assassin\'s Creed Valhalla', 2023),
('Aloy', 'Horizon Zero Dawn', 2022),
('Rengar', 'League of Legends (LOL)', 2021),
('Fl4k', 'Borderlands 3', 2020),
('Diablo Prime Evil', 'Diablo III', 2019),
('Link', 'The Legend of Zelda: Breath of the Wild', 2018);

INSERT INTO Cosplayers (NomeCosplayer, CodigoPersonagem) VALUES
('SHIROU', 1),
('PRY FELIPPE', 2),
('JULIUS KAESAR', 3),
('CESLO MAKER', 4),
('JEYKE', 5),
('JULIO CÉSAR DOS SANTOS', 6);
