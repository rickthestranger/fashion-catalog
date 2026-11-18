# Fashion Catalog

Sistema web de catálogo e gerenciamento de produtos, desenvolvido como projeto de aprendizado e aplicação prática de desenvolvimento web.

## Objetivo

Desenvolver uma aplicação web para apresentação e gerenciamento
de produtos, oferecendo um catálogo público e uma área
administrativa para controle dos cadastros.

## Tecnologias

- PHP
- Laravel
- PostgreSQL
- HTML
- CSS
- Tailwind CSS
- JavaScript

## Recursos do Laravel
- Blade (template engine)
- Eloquent ORM

## Funcionalidades planejadas

### Catálogo público
- [x] Página inicial
- [x] Listagem de produtos
- [x] Pesquisa e filtros
- [x] Visualização de detalhes dos produtos

### Área administrativa
- [x] Autenticação de usuários
- [ ] Cadastro de produtos
- [ ] Edição de produtos
- [ ] Exclusão de produtos
- [ ] Gerenciamento de categorias
- [ ] Upload de imagens

## Infraestrutura

- [x] Banco de dados PostgreSQL
- [ ] Configuração do ambiente com Laravel Sail
- [ ] Containerização da aplicação com Docker
- [ ] Documentação de instalação e execução

## Desenvolvimento

O projeto está em desenvolvimento. As funcionalidades serão implementadas gradualmente, com atenção à organização do código, validação de dados, segurança e relacionamento com o banco de dados.

## Sobre o projeto

Este projeto foi desenvolvido como parte do meu processo
de aprendizado em desenvolvimento web, com o objetivo
de aplicar na prática conceitos de PHP, Laravel e PostgreSQL.

A aplicação está sendo construída gradualmente, desde
a modelagem do banco de dados até a implementação das
funcionalidades e da interface.

## Instalação

### Pré-requisitos

- PHP 8.3 ou superior
- Composer
- Node.js e npm
- PostgreSQL
- Git

### 1. Clonar o repositório

```bash
git clone https://github.com/rickthestranger/fashion-catalog.git
cd fashion-catalog
```

### 2. Instalar as dependências

```bash
composer install
npm install
```

### 3. Configurar o ambiente

Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 4. Configurar o banco de dados

Crie um banco PostgreSQL chamado `fashion_catalog`.

Configure as credenciais de acesso no arquivo `.env`.

### 5. Criar as tabelas e carregar os dados

```bash
php artisan migrate --seed
```

Esse comando cria as tabelas e cadastra as categorias e os produtos iniciais.

### 6. Compilar os arquivos do frontend

```bash
npm run build
```

### 7. Iniciar a aplicação

```bash
php artisan serve
```

Acesse: http://127.0.0.1:8000

