CREATE DATABASE eventos_culturais;
USE eventos_culturais;

CREATE TABLE eventos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  data DATE,
  local VARCHAR(150),
  descricao TEXT,
  imagem VARCHAR(200)
);
