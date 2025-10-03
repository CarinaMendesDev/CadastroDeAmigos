# 📋 Sistema de Cadastro de Amigos PHP
Sistema simples de cadastro, listagem, edição e exclusão de amigos, desenvolvido em PHP com MySQL, ideal para fins acadêmicos.

## 🚀 Tecnologias utilizadas
- JavaScript
- PHP 
- MySQL 
- XAMPP (Ambiente local)
- HTML + CSS (W3.CSS framework)

## 📚 Bibliotecas utilizadas
- W3.CSS framework

## 📂 Arquivos
- index.php
- loginAction.php
- principal.php
- listar.php
- adicionar.php
- editar.php
- excluir.php
- cabecalho.php
- rodape.php
- verificarAcesso.php
- conexaoBD.php

## 📂 Estrutura do Projeto

```
CarinaMendes_Ag08_DS_II/ 
├── index.php           # Tela de login 
├── loginAction.php     # Validação do login 
├── principal.php       # Tela inicial após login 
├── listar.php          # Lista os amigos cadastrados 
├── adicionar.php       # Formulário para adicionar amigo 
├── editar.php          # Editar dados do amigo 
├── excluir.php         # Excluir amigo 
├── cabecalho.php       # Cabeçalho padrão (layout) 
├── rodape.php          # Rodapé padrão 
├── verificarAcesso.php # Verificação de sessão (login) 
├── conexaoBD.php       # Conexão com o banco de dados 
└── banco.sql           # Script SQL para criar as tabelas
```

## 🧠 Funcionalidades
- Login com controle de sessão
- Validação de acesso via `verificarAcesso.php`
- Cadastro de amigos com:
  - Nome
  - E-mail
  - Telefone
- Edição e exclusão de dados
- Lista completa com botões de ação
- Estilização com W3.CSS e ícones com Font Awesome

## 🛠️ Como Usar:
1. Faça login com um usuário cadastrado no banco (ex: `gabi`).

## 🔒 Segurança
> ⚠️ Atenção: o sistema ainda **não utiliza criptografia de senhas**. 

## 💡 Melhorias futuras (sugestões)
- Criptografar senhas
- Validação de e-mail 

---

### 👩‍💻 Desenvolvido por:
Carina Mendes


## 📄 Licença
Este projeto está licenciado sob a Licença MIT. Veja o arquivo LICENSE para mais informações.
