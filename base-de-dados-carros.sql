CREATE TABLE marca (
  id_marca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_marca VARCHAR(20) NULL,
  PRIMARY KEY(id_marca)
);

CREATE TABLE modelo (
  id_modelo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  marca_id_marca INTEGER UNSIGNED NOT NULL,
  nome_modelo VARCHAR(20) NULL,
  ano_fab_modelo YEAR NULL,
  ano_mod_modelo YEAR NULL,
  cor_modelo VARCHAR(20) NULL,
  placa_modelo VARCHAR(10) NULL,
  PRIMARY KEY(id_modelo),
  INDEX modelo_FKIndex1(marca_id_marca)
);


