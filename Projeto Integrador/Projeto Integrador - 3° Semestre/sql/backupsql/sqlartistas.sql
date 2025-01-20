Create Database artistasccxp;
Use artistasccxp;

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
