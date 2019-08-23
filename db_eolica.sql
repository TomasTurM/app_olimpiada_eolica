CREATE DATABASE IF NOT EXISTS db_eolica;

USE db_eolica;

CREATE TABLE IF NOT EXISTS datos_eolica (
	dato_id = TIMESTAMP NOT NULL,
	i DOUBLE(3,2),
	w_d CHAR(30),
	w_s DOUBLE(3,2),
	v DOUBLE(3,2)
);