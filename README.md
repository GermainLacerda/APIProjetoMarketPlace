# 📦 API de Produtos - Laravel

Este projeto é uma API RESTful desenvolvida com Laravel, com autenticação e gerenciamento de produtos. Ideal para estudos ou como base para MVPs.

---

## ⚙️ Tecnologias

- Laravel 10+
- PHP 8.1+
- SQLite (ou MySQL/PostgreSQL)
- JWT (Laravel Sanctum opcional)
- CORS habilitado

---

## 🚀 Instalação Local

### 1. Clone o repositório

git clone https://github.com/seu-usuario/api-produtos.git
cd api-produtos


### 2. Instale as dependências

composer install

### 3. Copie e configure o .env

cp .env.example .env

### 4. Configure o banco de dados MySQL no .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_produtos
DB_USERNAME=laravel_user
DB_PASSWORD=sua_senha_forte

### 5. Crie o banco de dados
CREATE DATABASE api_produtos;

---

## 🔑 Geração da chave da aplicação
php artisan key:generate

---

## 🧬 Migrations e Seeders

### 6. Rode as migrations e insira dados de teste

php artisan migrate --seed

---

## 🖥️ Rodando o servidor

php artisan serve

---

## 🔐 Usuário de Teste

Email: germain@example.com
Senha: senha123

---

## 🧪 Exemplos de Requisições

### 🔐 Login (POST /api/login)

POST /api/login
Content-Type: application/json

{
  "email": "germain@example.com",
  "password": "senha123"
}

Resposta:

{
  "token": "seu_token_aqui"
}

Use esse token nos headers:

Authorization: Bearer seu_token_aqui

--- 

## 📦 Listar Produtos (GET /api/produtos)

GET /api/produtos
Authorization: Bearer seu_token

--- 

## 📦 Cadastro de Usuário (POST /api/register)

POST /api/register

📦 Corpo da Requisição (JSON):
{
  "name": "Germain Lacerda",
  "email": "Germain@example.com",
  "password": "senha123",
  "password_confirmation": "senha123"
}


## 🆕 Criar Produto (POST /api/produtos)

POST /api/produtos
Content-Type: application/json
Authorization: Bearer seu_token

{
    "titulo": "Notebook Dell",
    "categoria": "Eletrônicos",
    "price": 4200.00
}

Resposta:

{
    "titulo": "Notebook Dell",
    "categoria": "Eletrônicos",
    "price": 4200,
    "updated_at": "2025-07-29T03:00:42.000000Z",
    "created_at": "2025-07-29T03:00:42.000000Z",
    "id": 51
}

---

## 🔄 Atualizar Produto (PUT /api/produtos/{id})

PUT /api/produtos/1
Content-Type: application/json
Authorization: Bearer seu_token

{
    "titulo": "Notebook Dell",
    "categoria": "Eletrônicos",
    "price": 3800.00
}

---

## 🗑️ Deletar Produto (DELETE /api/produtos/{id})

DELETE /api/produtos/1
Authorization: Bearer seu_token

