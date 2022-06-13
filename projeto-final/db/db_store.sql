-- Criando um Bando de Dados chamado db_store --
CREATE DATABASE db_store;

-- Selecionando o banco de dados db_store --
USE db_store;

-- Criando uma tabela chamada tb_category --
CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL 
);

-- Criando uma tabela chamada tb_product --
CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    value FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL );

-- Inserindo dados a tabela tb_category --
INSERT INTO tb_category(name, description)
VALUES
('Informática', 'Produtos e acessórios de informática'),
('Escritório', 'Produtos e acessórios para escritórios'),
('Eletronicos', 'Eletrodomésticos e acessórios para sua casa');

-- Cadastrando produtos em tb_product --
INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at) VALUES
('Teclado', 'Teclado Gamer RGB', 'https://m.media-amazon.com/images/I/61rtGZ9xntL._AC_SY450_.jpg', 199.80, 1, 50, '2022-06-11 12:40:00'),
('Web Cam', 'Dragão vermelho', 'https://images.kabum.com.br/produtos/fotos/119951/webcam-redragon-streaming-fobos-hd-720p-gw600_1599072610_g.jpg', 280.00, 1, 20, '2022-06-11 12:38:30');