

CREATE DATABASE pinguinspiratas;

USE pinguinspiratas;



CREATE TABLE noticias (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    tituloimg VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL,
    altimg TEXT NOT NULL,
    fonteimg VARCHAR(255) NOT NULL,
    texto TEXT NOT NULL,
    fontetext VARCHAR(255) NOT NULL,
    arialabellink VARCHAR(255) NOT NULL,
    linknoticia VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('“Like A Dragon”, nova série live-action de Yakuza produzida pela Amazon Prime Video', 
 'Ilustração do jogo Yakuza', 
 'imagem/noticias/notc6.webp', 
 'Ilustração do jogo Yakuza', 
 'Fonte: Página do site Se Liga Nerd', 
 'Preparem seus corações! A Amazon Prime Video anunciou oficialmente a produção de uma minissérie live-action de seis episódios baseada na aclamada franquia de jogos da SEGA. Que mergulhará nas histórias dramáticas e intensas dos personagens icônicos do universo Yakuza, incluindo o lendário Kazuma Kiryu.', 
 'Fonte: Página do site Se Liga Nerd', 
 'Ler mais sobre a notícia “Like A Dragon”, nova série live-action de Yakuza produzida pela Amazon Prime Video', 
 'https://seliganerd.com/amazon-prime-video-anuncia-serie-live-action-de-yakuza-intitulada-like-a-dragon/');

INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('Cascão entra na água em campanha pelo Rio Grande do Sul', 
 'Ilustração do Cascão Turma da Mônica', 
 'imagem/noticias/notc4.webp', 
 'Ilustração do Cascão Turma da Mônica', 
 'Fonte: Página do site Ei Nerd!', 
 'A Turma da Mônica colocou, nesta semana, o personagem Cascão, que possui aversão à higiene, no meio da enchente, em uma campanha dedicada às vítimas da tragédia no Rio Grande do Sul.', 
 'Fonte: Página do site Ei Nerd!', 
 'Ler mais sobre a notícia Cascão entra na água em campanha pelo Rio Grande do Sul', 
 'https://www.einerd.com.br/cascao-rio-grande-do-sul/');

INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('Call of Duty Black Ops 6 ganha data de lançamento e gameplay com novidade', 
 'Imagem do jogo Black Ops 6', 
 'imagem/noticias/notc3.webp', 
 'Imagem do jogo Black Ops 6', 
 'Fonte: Página do site Ei Nerd!', 
 'Neste domingo a Activision anunciou a data de lançamento do novo Call of Duty Black Ops 6 no dia 25 de Outubro, o jogo contará com uma gameplay insana contanto com 16 novos mapas no lançamento sendo 12 principais 6v6 e 4 de ataque para jogos 2v2 e 6v6.', 
 'Fonte: Página do site Ei Nerd!', 
 'Ler mais sobre a notícia Call of Duty Black Ops 6 ganha data de lançamento e gameplay com novidade', 
 'https://www.einerd.com.br/call-of-duty-black-ops-6-lanca-teaser-do-jogo-e-jogabilidade-inovadora/');

INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('10 curiosidades sobre o Wolverine, o herói mais icônico da Marvel!', 
 'Foto e Ilustração de Wolverine', 
 'imagem/noticias/notc2.webp', 
 'Foto e Ilustração de Wolverine', 
 'Fonte: Página do site Notícias Nerd', 
 'Nos vastos corredores dos quadrinhos da Marvel, poucos personagens são tão reverenciados e temidos quanto Wolverine. Com seu temperamento feroz, garras de adamantium e um passado misterioso, esse anti-herói se tornou uma figura icônica no mundo dos super-heróis. Mas o que realmente sabemos sobre Wolverine?', 
 'Fonte: Página do site Notícias Nerd', 
 'Ler mais sobre a notícia 10 curiosidades sobre o Wolverine, o herói mais icônico da Marvel!', 
 'https://noticiasnerd.com.br/10-curiosidades-sobre-o-wolverine/');

INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('Animes e mangás têm personagens que são LGBT+', 
 'Personagens de Anime Dio Brando e Alluka', 
 'imagem/noticias/notc5.webp', 
 'Personagens de Anime Dio Brando e Alluka', 
 'Fonte: Reprodução/David Production/MadHouse', 
 'Ainda que o Japão em si tenha leis pouco receptivas para pessoas LGBT+, desde que o mundo é mundo encontramos uma gama de personagens dessa sigla em animes e mangás, representando uma grande diversidade de orientações sexuais.', 
 'Fonte: Página do site UOL', 
 'Ler mais sobre a notícia Animes e mangás têm personagens que são LGBT+', 
 'https://www.uol.com.br/splash/noticias/2024/06/03/lista-personagens-lgbt-animes-mangas.htm');

INSERT INTO noticias (titulo, tituloimg, img, altimg, fonteimg, texto, fontetext, arialabellink, linknoticia)
VALUES 
('6 jogos RPGs curtos para terminar a campanha em até 20 horas', 
 'Personagens do jogo Mario', 
 'imagem/noticias/notc1.webp', 
 'Personagens do jogo Mario', 
 'Fonte: Nintendo/Divulgação', 
 'No mundo dos games, RPGs são conhecidos por exigirem dezenas de horas da parte dos jogadores. Porém, isso nem sempre é verdade, já que em alguns casos você pode finalizar uma campanha em pouco tempo, o que é perfeito para pessoas ocupadas.', 
 'Fonte: Página do site Tecmundo', 
 'Ler mais sobre a notícia 6 jogos RPGs curtos para terminar a campanha em até 20 horas', 
 'https://www.tecmundo.com.br/voxel/281995-6-rpgs-curtos-zerar-20-horas.htm');


CREATE TABLE divulgar_evento (
  id int PRIMARY KEY NOT NULL,
  nomeEvento varchar(150) NOT NULL,
  cidadeEvento varchar(150) DEFAULT 'sem local definido' NULL,
  responsavelEvento varchar(150) NOT NULL,
  emailContato varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE divulgar_evento
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

CREATE TABLE deixar_comentario (
  id int PRIMARY KEY NOT NULL,
  nomeComentario varchar(150) NOT NULL,
  comentario varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE deixar_comentario
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


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
('Eivor Varinsdotti', 'Assassins Creed Valhalla', 2023),
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



Create Table Artistas (
    CodigoArtista INT AUTO_INCREMENT Primary Key,
    NomeArtista Varchar(100) NOT NULL,
    FontePesquisa Varchar(100) NOT NULL,
    DescricaoArtista Varchar(1000) NOT NULL
);

Insert Into Artistas (NomeArtista, FontePesquisa, DescricaoArtista) VALUES
('Gabriel Picolo', 'https://exame.com/pop/o-melhor-do-artists-valley-8-quadrinistas-para-conhecer-na-ccxp/', 'Gabriel Picolo é um quadrinista e ilustrador brasileiro com um grande reconhecimento mundial, por ter em suas obras uma forte narrativa e cores atmosféricas, sendo as suas principais a série “Icarus and the Sun” e por uma série de quadrinhos dos jovens titãs, entre elas “Teen Titans: Beast Boy” e “Teen Titans: Beast Boy Loves Raven”.'),
('Luiza de Souza (Ilustralu)', 'https://exame.com/pop/o-melhor-do-artists-valley-8-quadrinistas-para-conhecer-na-ccxp/', 'Nascida em Currais Novos (RN), Luiza de Souza estudou na UFRN publicidade e trabalha como ilustradora e desenhista de história em quadrinhos, publicando seus trabalhos na internet, dos quais abordam temas relacionados ao cotidiano e relacionamento. Ela é autora da Obra Arlindo, que retrata um garoto cheio de sonhos e vontade de encontrar seu lugar no mundo, sendo essa vencedora do CCXP awards de 2022 na categoria Melhor quadrinho.'),
('Marcelo Campos', 'https://www.omelete.com.br/ccxp/23-artists-valley-marcelo-campos', 'Na CCXP ocorre anualmente uma homenagem a um artista com grande destaque no mercado de quadrinhos brasileiros e na edição de 2023 foi homenageado o artista Marcelo Campos, além de sua atuação no mercado nacional, com seu personagem destaque o “Quebra-queixo”, também teve atuação nos Estados Unidos, em 1989, com obras para editoras como a Malibu Publishing, além de títulos renomados como Lanterna Verde, Liga da Justiça e outros títulos da DC comics.'),
('Monge Han', 'https://g1.globo.com/pr/parana/noticia/2019/12/30/ao-transformar-memorias-pessoais-em-quadrinhos-art', 'Monge Han é um artista Amarelo-Brasileiro, descendente de coreanos. Em suas obras, Monge Han retrata temas autobiográficos relacionados a sua identidade racializada, além de questões existências, humor e webcomics ficionais. Entre suas principais obras temos “Vozes Amarelas”, que aborda referências à realidade das pessoas amarelas no Brasil, trazendo reflexões sobre preconceito, identidade, ancestralidade e respeito.'),
('Cecilia Marins', 'https://ceciliamarins.com/sobre', 'Cecilia é uma quadrinista, ilustradora e jornalista, dentre suas principais obras temos a HQ “Parques das Luzes”, que retrata histórias de mulheres que estão em situação de prostituição em um dos parques mais antigos de São Paulo, além de ser uma das ilustradoras do AmarElo, documentário do Emicida para a Netflix, sendo indicado a um Emmy internacional.'),
('Helô D Angelo', 'https://www.helodangelo.com.br/sobre', 'Ilustradora e quadrinista, possui diversas obras, dentre as mais conhecidas tem a obra “Dora e a Gata”, “Pequeno Manual de Defesa Pessoal”, “Nos olhos de quem vê” e “Isolamento”, obras essas que lhe garantiram diversas premiações, dentre elas a HQ MIX do qual foi finalista e do CCXP Awards em 2021. O principal foco em seus trabalhos são tiras e charges com temas voltados a política, direitos humanos, cotidiano e saúde mental.');
