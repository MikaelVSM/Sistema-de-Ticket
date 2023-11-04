CREATE TABLE departamento (
  id_departamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_departamento VARCHAR(45) NULL,
  PRIMARY KEY(id_departamento)
);

CREATE TABLE resposta (
  id_resposta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ticket_id_ticket INTEGER UNSIGNED NOT NULL,
  mensagem_resposta TEXT NULL,
  data_resposta DATE NULL,
  hora_resposta TIME NULL,
  status_resposta CHAR(1) NULL,
  PRIMARY KEY(id_resposta),
  INDEX resposta_FKIndex1(ticket_id_ticket)
);

CREATE TABLE ticket (
  id_ticket INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  departamento_id_departamento INTEGER UNSIGNED NOT NULL,
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  titulo_ticket VARCHAR(255) NULL,
  desc_ticket TEXT NULL,
  data_ticket DATE NULL,
  hora_ticket TIME NULL,
  status_ticket CHAR(1) NULL,
  PRIMARY KEY(id_ticket),
  INDEX ticket_FKIndex1(usuario_id_usuario),
  INDEX ticket_FKIndex2(departamento_id_departamento)
);

CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(45) NULL,
  senha_usuario VARCHAR(45) NULL,
  tipo_usuario CHAR(1) NULL,
  PRIMARY KEY(id_usuario)
);

CREATE TABLE usuario_departamento (
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  departamento_id_departamento INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(usuario_id_usuario, departamento_id_departamento),
  INDEX usuario_has_departamento_FKIndex1(usuario_id_usuario),
  INDEX usuario_has_departamento_FKIndex2(departamento_id_departamento)
);


