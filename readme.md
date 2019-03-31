<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Sobre este projeto

Este projeto trata-se de um CRUD de livros, protegido por autenticaçao de usuário, que faz parte da avaliação do módulo "Desenvolvimento de Sistemas Web com PHP Frameworks" ministrado pelo professor Thyago Maia para a turma de Pós Graduação da UNIPE. 

## Requisitos

- MySQL - v8.0.15
- Composer - v1.8.4
- Laravel - v5.8
- Artisan - v5.8
- XAMPP - v.7.3.3

### Observações

O projeto utiliza por padrão o usuário <code>root/root</code> e a base da dos <code>sistema</code>. Caso deseje mudar esse comportamento, efetuar as modificações no Data Source no arquivo <code>.env</code>.

## Configuração

- Executar o comando <code>php artisan migrate</code>. Este comando irá criar a tabelas necessárias para o funcionamento do projeto
- Executar o comand <code>php artisan serve</code>
- Acessar: <code>localhost:8000</code>

## Routes
- <b>/index</b> - Tela pública
- <b>/login</b> - Tela de login para usuários cadastrados
- <b>/register</b> - Tela para cadastro de usuários
- <b>/home ou /books</b> (protegida) - Tela contendo a listagem dos livros já cadastrados
- <b>/books/create</b> (protegida) - Tela para cadastro de livros
- <b>/books/{id}/edit</b> (protegida) - Tela para edição de livros

## Recursos Utilizados

Laravel, em conjunto com Artisan, é um framework bastante poderoso e completo. Neste projeto, foi empregado alguns recursos desta ferramenta.

- <b>Migrations</b> para o versionamento das tabelas do banco de dados;
- <b>Eloquent ORM</b> para o mapeamento objeto-relacional da entidade Book. Este recurso facilitou bastante as operações que envolviam banco de dados;
- Utilização do <b>Resource Controller</b> que disponibiliza um conjunto padrão de métodos, que foram utilizados no roteamento das requisições;
- <b>Auth Middleware</b> para proteção das telas restritas
- <b>Blade Templates</b> para construção de interfaces que possuem lógica de apresentação de conteúdo na tela, com p reaproveitamento de layouts. 
