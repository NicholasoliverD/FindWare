# FindWare

## Descrição

O **FindWare** é um sistema web desenvolvido para apoiar o gerenciamento de estoque em Centros de Distribuição (CD). A aplicação permite o cadastro, armazenamento, localização e movimentação de produtos, centralizando as operações de controle de estoque em uma única plataforma.

O sistema foi projetado para simplificar atividades operacionais como recebimento de mercadorias, movimentação interna, consulta de localização e controle de entradas e saídas, reduzindo o tempo gasto na busca por produtos e aumentando a confiabilidade das informações armazenadas.

---

# Funcionalidades

O sistema contempla as seguintes funcionalidades:

* Autenticação de usuários;
* Cadastro de produtos;
* Consulta de produtos cadastrados;
* Controle de entrada de mercadorias;
* Controle de saída de produtos;
* Atualização da localização dos itens no estoque;
* Localização de produtos por código ou código de barras;
* Registro do histórico de movimentações;
* Visualização do mapa de armazenamento;
* Controle da quantidade disponível em estoque.

---

# Tecnologias Utilizadas

## Backend

* PHP

## Frontend

* HTML5
* CSS3
* JavaScript

## Banco de Dados

* MySQL

## Ambiente

* Docker
* Apache

---

# Estrutura do Projeto

```text
FindWare/

├── assets/
│   ├── css/
│   ├── js/
│   └── imagens/
│
├── banco/
│   └── cd_system.sql
│
├── login.php
├── dashboard.php
├── cadastro.php
├── cadastrar_produto.php
├── scanner.php
├── scanner_entrada.php
├── scanner_saida.php
├── scanner_localizar.php
├── localizar.php
├── movimentacoes.php
├── mapa.php
├── recebimento.php
├── salvar_produto.php
├── salvar_saida.php
├── salvar_recebimento.php
├── conectar.php
├── Dockerfile
└── README.md
```

---

# Requisitos

Antes de executar o sistema, é necessário possuir:

* PHP 8.0 ou superior;
* MySQL 8.0 ou superior;
* Servidor Apache (XAMPP, WAMP ou Laragon) ou Docker;
* Navegador Web atualizado.

---

# Instalação

## 1. Clonar o repositório

```bash
git clone https://github.com/NicholasoliverD/FindWare.git
```

Ou faça o download do projeto em formato ZIP e extraia os arquivos.

---

## 2. Configurar o servidor

Caso utilize o XAMPP:

1. Copie a pasta do projeto para:

```
xampp/htdocs/
```

Caso utilize o WAMP:

```
www/
```

Caso utilize o Laragon:

```
laragon/www/
```

---

## 3. Criar o banco de dados

Abra o MySQL (phpMyAdmin ou outro cliente).

Crie um banco de dados, por exemplo:

```sql
CREATE DATABASE cd_system;
```

Em seguida, importe o arquivo:

```
banco/cd_system.sql
```

---

## 4. Configurar a conexão

Abra o arquivo:

```
conectar.php
```

Configure os parâmetros de conexão conforme o ambiente utilizado.

Exemplo:

```php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cd_system";
```

---

## 5. Iniciar o servidor

### Utilizando XAMPP

1. Inicie os serviços:

   * Apache
   * MySQL

2. Acesse:

```
http://localhost/FindWare
```

---

### Utilizando o servidor embutido do PHP

Dentro da pasta do projeto execute:

```bash
php -S localhost:8000
```

Depois acesse:

```
http://localhost:8000
```

---

### Utilizando Docker

Na raiz do projeto execute:

```bash
docker build -t findware .
```

Em seguida:

```bash
docker run -p 8080:80 findware
```

Depois acesse:

```
http://localhost:8080
```

---

# Fluxo de Utilização

1. Realize o login no sistema.
2. Cadastre os produtos que serão armazenados.
3. Informe a localização física de cada item.
4. Registre entradas e saídas conforme as movimentações do estoque.
5. Consulte produtos utilizando pesquisa ou leitura de código de barras.
6. Acompanhe o histórico de movimentações para auditoria e rastreabilidade.

---

# Organização do Banco de Dados

O banco de dados é responsável por armazenar informações referentes a:

* Usuários do sistema;
* Produtos cadastrados;
* Localização dos produtos;
* Quantidade disponível em estoque;
* Histórico de movimentações;
* Entradas e saídas de mercadorias.

---

# Autores

Este projeto foi desenvolvido de forma colaborativa pelos integrantes da equipe responsável pelo projeto **FindWare**.

Nicholas de Oliveira
Eduardo Renato Rosa
Fernando
Enzo
João
Otavio

---

# Licença

Este projeto foi desenvolvido para fins acadêmicos e educacionais.

Todos os direitos pertencem aos respectivos autores.
