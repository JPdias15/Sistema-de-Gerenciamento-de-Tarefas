 README — Sistema de Gerenciamento de Tarefas

# 📝 Sistema de Gerenciamento de Tarefas

 Um sistema simples e funcional de **gerenciamento de tarefas (Task Manager)**, desenvolvido como projeto para a disciplina de **Programação Web** (`trabalho_PWeb`).

 O sistema permite a **autenticação de usuários** e o **gerenciamento completo de tarefas (CRUD)**.

 ## 🚀 Funcionalidades

 ### 🔐 Autenticação de Usuários

 - **Login:** autenticação do usuário por meio do arquivo `index.php`.
- **Logout:** encerramento da sessão por meio do arquivo `logout.php`.
- **Controle de sessão:** gerenciamento das sessões dos usuários autenticados.

 ### 📋 Gerenciamento de Tarefas (CRUD)

 - **Visualização:** painel principal com a listagem de todas as tarefas cadastradas (`painel.php`).
- **Criação:** formulário para adicionar novas tarefas (`nova_tarefa.php`).
- **Edição:** alteração dos detalhes e do status das tarefas existentes (`editar_tarefa.php`).
- **Exclusão:** remoção de tarefas do sistema.

 ### 🗄️ Banco de Dados

 - Conexão com o banco de dados estruturada em PHP (`database.php`).
- Script SQL incluído para criação das tabelas:
  - `script_banco_de_dados_Trabalho.txt`

 ## 🛠️ Tecnologias Utilizadas

 | Categoria | Tecnologia |
| --- | --- |
| **Frontend** | HTML5, CSS3 |
| **Estilização** | CSS3 (`login.css`) |
| **Backend** | PHP (Nativo) |
| **Banco de Dados** | MySQL / MariaDB |
| **Servidor Web** | Apache |
| **Ambiente recomendado** | XAMPP, WAMP, Laragon ou similar |

## 📁 Estrutura do Projeto

```
trabalho_PWeb/
├── script_banco_de_dados_Trabalho.txt  # Script SQL de criação do banco de dados
└── Trabalho/
    ├── database.php                     # Conexão com o banco de dados
    ├── index.php                        # Tela inicial / Login
    ├── login.css                        # Estilização das telas
    ├── painel.php                       # Painel principal / Listagem de tarefas
    ├── nova_tarefa.php                  # Criação de tarefas
    ├── editar_tarefa.php                # Edição de tarefas
    └── logout.php                       # Encerramento da sessão do usuário
```

 ## ⚙️ Como Executar o Projeto Localmente

 ### 📌 Pré-requisitos

 Antes de executar o projeto, certifique-se de ter:

 - Um servidor web local instalado, como:
  - [XAMPP](<https://www.apachefriends.org/>)
  - WampServer
  - Laragon
- **PHP 7.4 ou superior**.
- **MySQL ou MariaDB**.
- Apache e o banco de dados devidamente ativados.

 ### 1\. 📥 Clonar o Repositório

 Clone o repositório utilizando o Git:

```
git clone https://github.com/seu-usuario/seu-repositorio.git
```

 ### 2\. 📂 Mover os Arquivos para a Pasta do Servidor

 Após clonar o projeto, mova a pasta para o diretório utilizado pelo seu servidor local.

 No caso do **XAMPP**, coloque a pasta dentro de:

```
htdocs/
```

 A estrutura deverá ficar semelhante a:

```
htdocs/
└── trabalho_PWeb/
    ├── script_banco_de_dados_Trabalho.txt
    └── Trabalho/
        ├── database.php
        ├── index.php
        ├── login.css
        ├── painel.php
        ├── nova_tarefa.php
        ├── editar_tarefa.php
        └── logout.php
```

 ### 3\. 🗄️ Configurar o Banco de Dados

 1. Inicie o **Apache** e o **MySQL/MariaDB** no seu servidor local.
2. Acesse o **phpMyAdmin**:

```
http://localhost/phpmyadmin
```

 3. Crie um novo banco de dados.
4. Abra o arquivo:

```
script_banco_de_dados_Trabalho.txt
```

 5. Execute as instruções SQL presentes no arquivo para criar as tabelas necessárias.

 ### 4\. 🔑 Configurar as Credenciais do Banco

 Abra o arquivo:

```
Trabalho/database.php
```

 Verifique e ajuste as configurações do banco de dados conforme o seu ambiente:

```
$host = "localhost";
$user = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_seu_banco";
```

 Substitua os valores pelos dados correspondentes ao banco configurado anteriormente.

 ### 5\. 🌐 Acessar o Sistema

 Após configurar o servidor e o banco de dados, abra o navegador e acesse:

```
http://localhost/trabalho_PWeb/Trabalho/index.php
```

 A partir dessa página, será possível realizar o login e utilizar o sistema de gerenciamento de tarefas.

 ## 📌 Observações

 - Certifique-se de que o **Apache** e o **MySQL/MariaDB** estejam em execução antes de acessar o sistema.
- As credenciais configuradas no arquivo `database.php` devem corresponder às credenciais do banco de dados local.
- O caminho da URL pode variar dependendo do nome da pasta utilizada dentro do diretório do servidor.

---

 ### 👨‍💻 Projeto

 **Disciplina:** Programação Web\
 **Projeto:** Sistema de Gerenciamento de Tarefas (`trabalho_PWeb`)
