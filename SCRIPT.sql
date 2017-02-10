-- SCRIPT SITE LOJA

-- CRIAÇÃO DE TABELAS

-- CATEGORIA
CREATE TABLE CATEGORIA (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
DESCRICAO VARCHAR(50),
IMAGEM BLOB,
ORDEM INT,
ATIVO TINYINT(1),
REG_DATE DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP );

-- PRODUTO
CREATE TABLE PRODUTO (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ID_CATEGORIA INT(6),
NOME VARCHAR(50),
IMAGEM BLOB,
VALOR DOUBLE,
QUANTIDADE INT,
ATIVO TINYINT(1),
REG_DATE DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP );


-- INSERT
