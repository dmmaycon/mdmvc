# MDMVC

## MicroFramework MVC 
------------------------------
Framework simples que foi construido para auxiliar o aprendizado de alunos de programação nas universidades ou pessoas que estão conhecendo e aprendendo o basico do desenvolvimento WEB e arquitertura MVC com PHP.
---------------------

*A ideia é mostrar o basico de uma estrutura que permita o funcionamento do MVC e também escancarar as dificuldades que é fazer um projeto do zero e arquitetado por uma unica pessoa, não recomendo o uso do MDMVC para uso comercial ou que exija uma estrutura complexa de segurança, se essa for sua necessidade utilize um projeto que implemente padrões de projeto e seja maduro tecnicamente. *

*Fique a vontade para clonar, contribuir e evoluir o projeto. Tenho usado este exemplo nas minhas aulas de desenvolvimento de aplicações na universidade. Alunos que estão iniciando os estudos de desenvolvimento web, já conseguem usar o framework para criar algo prático. Como o framework é simples e enxuto fica facíl descobrir comos as coisas acontecem de baixos do panos*

### PASSO A PASSO PARA EXECUTAR O FRAMEWORK:

1. Clone o repositorio: `git clone https://github.com/dmmaycon/mdmvc`
2. Entre da pasta: `cd mdmdev` 
3. Rode o comando: `composer install` 
4. Utilize o servidor de desenvolvimento do PHP: `php -S localhost:80`
5. Abra o navegador no endereço `http://localhost:80`

----
## BANCO DE DADOS

*O framework utiliza o PDO, para criar a conexão com o banco e uma abstração na camada de modelo que facilita muito o processo de desenvolvimento. No arquivo de 
configuração (`Core/Config/config.ini`) podemos configurar se o frame irá operar com o SQLITE, ou com algum banco relacional com MARIADB, MYSQL, Etc... * 

## Utilizando o SQLite
6. O frame já vem por padrão para utlizar o SQLite, basta executar o sistema e realizar login com admin, admin.

## Utilizando outro banco
6. Abra o arquivo (`Core/Config/config.ini`) e informe os campos de configuração de sua conexão.
7. Abra o arquivo `Core/Config/dump.sql` e execute no seu banco de dados
8. Faça login na aplicação com o usuário: admin e senha: admin


### DESENVOLVER NO FRAMEWORK:
- Todos controllers devem ser criados na pasta (application/controller)
- Todos os controllers podem ser acessados via url/nomeController/nomeMetodo
- Models devem ser criadas na pasta de models a unica obrigação da classe é informar o nome da tabela no atributo protegido $table = 'nomeTabela'
- Models implementam métodos basicos para CRUD em cima do PDO.
- Views devem ficar na pasta (Application/View/Html)
- As views utilizam o Twig, e está é a unica dependencia do projeto.



Desenvolvido por [Maycon de Moraes](https://br.linkedin.com/in/maycon-de-moraes-a76240116 "Maycon de Moraes").





