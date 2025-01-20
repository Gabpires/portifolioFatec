
create database formulario_contato;

use formulario_contato;


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