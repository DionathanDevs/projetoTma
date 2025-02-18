# Torre Anenométrica - Sistema de Gerenciamento

## Descrição
Este sistema foi desenvolvido para gerenciar informações de torres anenométricas, permitindo o cadastro, atualização e listagem dos dados no banco de dados.

## Tecnologias Utilizadas
- PHP
- MySQL
- HTML/CSS 
- JavaScript

## Configuração do Banco de Dados
Crie a tabela `tma` no MySQL com a seguinte estrutura:
```sql
CREATE TABLE tma (
    id_tma INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    datalog_deviceid VARCHAR(255),
    datalog_number VARCHAR(255),
    datalog_model VARCHAR(255),
    datalog_software VARCHAR(255),
    datalog_login VARCHAR(255),
    datalog_password VARCHAR(255),
    datalog_ip VARCHAR(255),
    datalog_mask VARCHAR(255),
    datalog_gateway VARCHAR(255),
    rack_panel VARCHAR(255),
    rack_sw VARCHAR(255),
    rack_sw_port VARCHAR(255)
);
```

## Configuração do Projeto
1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. Configure o banco de dados em `config/conexao.php`.
3. Certifique-se de que seu servidor Apache + MySQL (XAMPP, WAMP ou similar) está rodando.
4. Acesse o projeto pelo navegador.
