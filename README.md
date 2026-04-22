# # 📝 Gerenciador de Tarefas (CRUD PHP)

Este é um sistema simples de **CRUD** (Create, Read, Update, Delete) desenvolvido em PHP para gerenciar tarefas diárias. O projeto permite cadastrar novas tarefas, visualizar a lista de pendências, editar informações existentes e excluir registros do banco de dados.

## 🚀 Funcionalidades

- **Cadastro**: Adição de tarefas com título, descrição, data de vencimento e status (Pendente, Em Andamento, Concluída).
- **Consulta**: Listagem em tempo real de todas as tarefas armazenadas por data de vencimento.
- **Edição**: Alteração dinâmica de dados de tarefas já cadastradas.
- **Exclusão**: Remoção de tarefas com confirmação de segurança via JavaScript.
- **Interface**: Layout responsivo e estilizado via CSS.

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 
- **Banco de Dados:** MySQL
- **Front-end:** HTML, CSS, JavaScript
- **Servidor Recomendado:** XAMPP

## 📋 Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:
- Um servidor local (ex: [XAMPP](https://www.apachefriends.org/))
- Um editor de código (ex: [VS Code](https://code.visualstudio.com/))

## 🔧 Configuração do Banco de Dados

1. Acesse o seu **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crie um novo banco de dados chamado `newtask`.
3. Execute o seguinte comando SQL para criar a tabela necessária:

```sql
CREATE TABLE task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(60) NOT NULL,
    description VARCHAR(100),
    date_task DATE,
    situation VARCHAR(20)
);
