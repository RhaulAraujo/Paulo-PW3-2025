CREATE DATABASE cadastropessoa;

use cadastropessoa;

CREATE TABLE pessoa (
  cpf char(14) NOT NULL PRIMARY KEY,
  nome varchar(100) DEFAULT NULL,
  contato char(11) DEFAULT NULL,
);

CREATE TABLE agenda (
  ag_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ag_dtagenda date NULL,
  ag_horaagenda time NULL,
  ag_motivo varchar(200) NULL,
  ag_pessoacpf char(14) NULL,
  FOREIGN KEY (ag_pessoacpf) REFERENCES pessoa(cpf)
)

