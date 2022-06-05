<div 
align="center"
style="display: flex; 
flex-direction: row;
gap: 10px">
<img src="banner-1.png" width="400px">
<img src="banner-2.png" width="400px">
</div>

<br>
<div align="center" style="display: flex; flex-direction: row">
   <img src="https://img.shields.io/github/languages/count/andersondev96/library-project?style=for-the-badge">
    <img src="https://img.shields.io/github/repo-size/andersondev96/library-project?style=for-the-badge">
    <img src="https://img.shields.io/github/last-commit/andersondev96/library-project?color=blue&style=for-the-badge">
</div>
<br>

<h1> Sistema de gerenciamento para biblioteca 📚</h1>
<b> Índice </b>
<div>
<ul>
<li><a href="#-sobre-o-projeto">Sobre o projeto</a></li>
<li><a href="#-funcionalidades">Funcionalidades</a></li>
<li><a href="#-features">Features</a></li>
<li><a href="#-tecnologias">Tecnologias</a></li>
<li><a href="#-como-executar-a-aplicação">Como executar a aplicação</a></li>
<li><a href="#-como-contribuir">Como contribuir</a></li>
<li><a href="#-autor">Autor</a></li>
<li><a href="#-licença">Licença</a></li>
</ul>
<div>
<div>
<h2>📄 Sobre o projeto</h2>
<p> A aplicação desenvolvida consiste em um sistema de gerenciamento para bibliotecas, possibilitando o usuário realizar as principais atividades necessárias em uma biblioteca, como cadastrar livros e clientes e realizar os empréstimos.</p>
</div>
<div>
<h2>🔧 Funcionalidades</h2>
<ul>
<b>Usuários</b>
<li>✅ Cadastrar usuário</li>
<li>✅ Visualizar usuários</li>
<li>✅ Editar usuários</li>
<li>✅ Remover usuários</li>
<li>✅ Gerenciar permissões dos usuários</li>
</ul>
<ul>
<b>Clientes</b>
<li>✅ Cadastrar clientes</li>
<li>✅ Visualizar clientes</li>
<li>✅ Editar clientes</li>
<li>✅ Remover clientes</li>
</ul>
<ul>
<b>Livros</b>
<li>✅ Cadastrar livros</li>
<li>✅ Visualizar livros</li>
<li>✅ Editar livros</li>
<li>✅ Remover livros</li>
</ul>
<ul>
<b>Empréstimos</b>
<li>✅ Realizar empréstimo de livros para os clientes, respeitando as condições para empréstimo</li>
<li>✅ Listar os empréstimos, pesquisando pelo nome do cliente</li>
<li>✅ Editar um empréstimo, antes da devolução</li>
<li>✅ Renovar empréstimos</li>
<li>✅ Excluir empréstimo, antes da devolução</li>
<li>✅ Dar baixa nos livros devolvidos</li>
<li>✅ Calcular multas caso um livro não seja devolvido no prazo</li>
<li>✅ Quitar as dívidas do cliente com a biblioteca</li>
</ul><br>
</div>
<div>
<h2>🔨 Features</h2>
<ul>
<li>Melhorar o dashboard do sistema</li>
<li>Melhorar a interface do sistema</li>
<li>Melhorar pop-up de confirmação ao excluir</li>
<li>Colocar modo dark na aplicação</li>
<li>Permitir a ordenação das colunas na tabela</li>
<li>Envio de e-mail ao realizar o empréstimo e realizar a sua devolução</li>
<li>Permitir adicionar fotos dos livros e dos clientes</li>
<li>Exibir fotos dos livros, clientes e usuários na tabela</li>
<li>Permitir pagamento parcial da multa</li>
<li>Validar os campos quando for editar informações</li>
<li>Exibir nome dos livros e dos clientes no select de empréstimos, ao invés do ID.</li>
<li>Utilizar o formato de data <code>'DD/MM/YYYY'</code> no dayPicker.</li>
<li>Calcular automaticamente a data de devolução do livro</li>
<li>Criar uma área ou modal específico para renovação do livro</li>
</ul>
<br>
</div>
<div>
<h2>🧑‍💻 Tecnologias</h2>
<a href="https://www.php.net/manual/en/">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="64" />
</a>
<a href="https://laravel.com/docs/8.x">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" height="64" />
</a>
<a href="https://tailwindcss.com/docs/installation">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original-wordmark.svg" height="64"/>
</a>
<a href="https://dev.mysql.com/doc/">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" height="64"/>
</a>
<br></br>
</div>
<div>
<h2>🚀 Como executar a aplicação</h2>
<b>Pré-requisitos</b>
<p>Antes de começar, você deve ter instalado em sua máquina, as seguintes ferramentas: <a href="https://git-scm.com/">Git</a>, <a href="https://www.php.net/downloads.php">PHP</a> (de preferência a versão 7.4), <a href="https://getcomposer.org/download/">Composer</a>, <a href="https://www.mysql.com/downloads/">MySQL</a> e também um editor, para trabalhar com o código, como o <a href="https://code.visualstudio.com/">VSCode</a>.
<br><br>
<b>Download do projeto</b>
<br>
1. Clone este repositório executando: <br>
<code>git clone https://github.com/andersondev96/library-project</code>
<br>
2. Acesse a pasta
<br>
3.Abra o VSCode, rodando: <code>code .</code><br>
4. Instale as dependências do projeto, com o comando: <code>composer install</code><br><br>
<b>Configuração do banco de dados</b><br>
1. No arquivo <code>.env</code>, configure as credenciais do banco de dados, utilize o <code>.env.example</code>, caso seja necessário.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=<username>
DB_PASSWORD=<password>
```
2. Agora você deve rodar este <a href="script.sql">script mysql</a>, par o seu banco de dados aparecer, povoado.
3. Após rodar o script, execute a aplicação com o comando **php artisan serve**.
4. Rode a aplicação na porta **http://localhost:8000**.






