📝 Sistema de Gerenciamento de Tarefas
Um sistema simples e funcional de gerenciamento de tarefas (Task Manager) desenvolvido como projeto para a disciplina de Programação Web (trabalho_PWeb). O sistema permite autenticação de usuários e gerenciamento completo de tarefas (CRUD).
🚀 Funcionalidades
Autenticação de Usuários:
Login e Logout com controle de sessão (index.php, logout.php).
Gerenciamento de Tarefas (CRUD):
Visualização: Painel principal listando todas as tarefas cadastradas (painel.php).
Criação: Formulário para adicionar novas tarefas (nova_tarefa.php).
Edição: Alteração de detalhes e status das tarefas existentes (editar_tarefa.php).
Exclusão: Remoção de tarefas do sistema.
Banco de Dados:
Conexão estruturada em PHP (database.php).
Script SQL incluso para criação de tabelas (script_banco_de_dados_Trabalho.txt).
🛠️ Tecnologias Utilizadas
Frontend: HTML5, CSS3 (login.css).
Backend: PHP (Nativo).
Banco de Dados: MySQL / MariaDB.
Servidor Recomendado: Apache (XAMPP, WAMP, Laragon ou similar).
📁 Estrutura do Projeto
trabalho_PWeb/
├── script_banco_de_dados_Trabalho.txt  # Script SQL de criação do BD
└── Trabalho/
    ├── database.php                     # Conexão com o banco de dados
    ├── index.php                        # Tela inicial / Login
    ├── login.css                        # Estilização das telas
    ├── painel.php                       # Painel principal (Listagem de tarefas)
    ├── nova_tarefa.php                  # Criação de tarefas
    ├── editar_tarefa.php                # Edição de tarefas
    └── logout.php                       # Encerrar sessão do usuário


⚙️ Como Executar o Projeto Localmente
Pré-requisitos
Ter um servidor web local instalado (ex: XAMPP, WampServer ou Laragon).
PHP 7.4+ e MySQL ativados.
Passo a Passo
Clonar o repositório:
git clone https://github.com/seu-usuario/seu-repositorio.git


Mover os arquivos para a pasta do servidor:
Se estiver usando XAMPP, mova a pasta para htdocs/.
Configurar o Banco de Dados:
Acesse o phpMyAdmin (http://localhost/phpmyadmin).
Crie um novo banco de dados.
Execute as instruções contidas no arquivo script_banco_de_dados_Trabalho.txt para criar as tabelas necessárias.
Configurar as credenciais do banco:
Abra o arquivo Trabalho/database.php e ajuste as configurações se necessário:
$host = "localhost";
$user = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_seu_banco";


Acessar no Navegador:
Acesse http://localhost/trabalho_PWeb/Trabalho/index.php para utilizar o sistema.

