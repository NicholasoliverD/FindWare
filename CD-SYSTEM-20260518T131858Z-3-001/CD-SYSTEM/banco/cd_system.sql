-- ==========================================
-- BANCO DE DADOS CD_SYSTEM
-- ==========================================

DROP DATABASE IF EXISTS cd_system;
CREATE DATABASE cd_system
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE cd_system;

-- ==========================================
-- TABELA DE USUÁRIOS
-- ==========================================

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- TABELA DE PRODUTOS
-- ==========================================

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    codigo_barras VARCHAR(100) UNIQUE,
    corredor VARCHAR(10) NOT NULL,
    prateleira VARCHAR(10) NOT NULL,
    nivel VARCHAR(10) NOT NULL,
    estoque INT NOT NULL DEFAULT 0,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- TABELA DE MOVIMENTAÇÕES
-- ==========================================

CREATE TABLE movimentacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,

    produto_id INT NOT NULL,

    tipo ENUM('ENTRADA','SAIDA') NOT NULL,

    quantidade INT NOT NULL,

    localizacao VARCHAR(100) NOT NULL,

    data_movimentacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_mov_produto
    FOREIGN KEY (produto_id)
    REFERENCES produtos(id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

-- ==========================================
-- DADOS INICIAIS
-- ==========================================

INSERT INTO usuarios (nome,email,senha)
VALUES
(
'Administrador',
'admin@cd.com',
'123456'
);

INSERT INTO produtos
(nome,codigo,codigo_barras,corredor,prateleira,nivel,estoque)
VALUES
(
'Vidro Temperado',
'P001',
'789000000001',
'A',
'04',
'01',
10
),
(
'Porta de Vidro',
'P002',
'789000000002',
'C',
'05',
'02',
100
),
(
'Teclado USB',
'P003',
'789000000003',
'B',
'02',
'01',
50
);

INSERT INTO movimentacoes
(produto_id,tipo,quantidade,localizacao)
VALUES
(
3,
'ENTRADA',
50,
'B-02-01'
),
(
2,
'ENTRADA',
100,
'C-05-02'
),
(
1,
'ENTRADA',
10,
'A-04-01'
);
