<!-- # Mirror Fashion - Devcontainer Setup

Este projeto está configurado para funcionar com VS Code Dev Containers, proporcionando um ambiente de desenvolvimento consistente e isolado.

## Pré-requisitos

1. **Docker** instalado e em execução
2. **VS Code** com a extensão **Dev Containers** instalada
3. **Git** para clonar o repositório

## Como usar o devcontainer

### Opção 1: Abrir diretamente no devcontainer
1. Clone o repositório Mirror-Fashion
2. Abra o VS Code
3. Use `Ctrl+Shift+P` (ou `Cmd+Shift+P` no Mac)
4. Digite "Dev Containers: Open Folder in Container"
5. Selecione a pasta `Mirror-Fashion`

### Opção 2: Reabrir no devcontainer
1. Abra a pasta Mirror-Fashion no VS Code normalmente
2. O VS Code detectará o devcontainer e mostrará uma notificação
3. Clique em "Reopen in Container"

## O que está incluído

### Ambiente PHP
- **PHP 8.2** com Apache
- **MySQL 8.0** para banco de dados
- **Composer** para gerenciamento de dependências PHP

### Extensões VS Code
- **Intelephense** - IntelliSense para PHP
- **Tailwind CSS** - Suporte para Tailwind CSS
- **PHP Debug** - Depuração PHP
- **JSON** - Suporte melhorado para JSON

### Portas expostas
- **8080** - Servidor web Apache (acesse http://localhost:8080)
- **3306** - Servidor MySQL

### Configuração do banco
- **Host:** db
- **Database:** mirror_fashion
- **Usuário:** app_user
- **Senha:** app_password
- **Root password:** root

## Estrutura do projeto

O projeto Mirror-Fashion será montado em `/var/www/html` dentro do container, que é o diretório padrão do Apache.

## Comandos úteis

### Instalar dependências PHP
```bash
composer install
```

### Acessar o MySQL
```bash
mysql -h db -u app_user -p mirror_fashion
```

### Verificar logs do Apache
```bash
tail -f /var/log/apache2/error.log
```

## Troubleshooting

### Container não inicia
1. Verifique se o Docker está rodando
2. Tente reconstruir o container: `Ctrl+Shift+P` → "Dev Containers: Rebuild Container"

### Problemas de permissão
As permissões são automaticamente configuradas para o usuário `www-data`.

### Porta já em uso
Se a porta 8080 já estiver em uso, edite o arquivo `.devcontainer/docker-compose.yml` e altere a porta:
```yaml
ports:
  - "8081:80"  # Use 8081 ao invés de 8080
```

## Desenvolvimento

Após iniciar o devcontainer:
1. Abra http://localhost:8080 no seu navegador
2. Todos os arquivos PHP serão executados automaticamente
3. Qualquer alteração nos arquivos será refletida imediatamente
4. Use o MySQL Workbench ou phpMyAdmin para gerenciar o banco de dados -->
