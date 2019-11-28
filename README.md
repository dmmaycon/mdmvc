# MDMVC

## MicroFramework MVC 
------------------------------
Framework simples que foi construido para auxiliar o aprendizado de alunos de programação nas universidades ou pessoas que estão conhecendo e aprendendo o basico do desenvolvimento WEB e arquitertura MVC com PHP.
---------------------

*A ideia é mostrar o basico de uma estrutura que permita o funcionamento do MVC e também escancarar as dificuldades que é fazer um projeto do zero e arquitetado por uma unica pessoa, não recomendo o uso do MDMVC para uso comercial ou que exija uma estrutura complexa de segurança, se essa for sua necessidade utilize um projeto que implementar padrões de projeto e seja maduro tecnicamente. *


### PASSO A PASSO PARA EXECUTAR FRAMEWORK:

1. Clone o repositorio: `git clone https://github.com/mayconmoraes-dm/mdmvc`
2. Entre da pasta: `cd mdmdev` 
3. Utilize o servidor de desenvolvimento do PHP: `php -S localhost:80`
4. Execute o dump.sql (mdmdev/config/dump.sql)
5. Configure o arquivo (mdmdev/config/config.ini) para sua base de dados
7. Acesso o navegador no endereço http:localhost
8. Faça login na aplicação com o usuário: admin e senha: admin


### DESENVOLVER NO FRAMEWORK:
- Todos controllers devem ser criados na pasta (application/controller)
- Todos os controllers podem ser acessados via url/nomeController/nomeMetodo
- Models devem ser criadas na pasta de models a unica obrigação da classe é informar o nome da tabela no atributo protegido $table = 'nomeTabela'
- Models implementam métodos basicos para CRUD em cima do PDO.
- Views devem ficar na pasta (application/view/html)
- As views utilizam o Twig, e está é a unica dependencia do projeto.



Desenvolvido por [Maycon de Moraes](https://br.linkedin.com/in/maycon-de-moraes-a76240116 "Maycon de Moraes").





