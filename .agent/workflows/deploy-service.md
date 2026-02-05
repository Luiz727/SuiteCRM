---
description: Deploy seletivo de containers no Coolify via SSH
---

# Deploy Personalizado

Este workflow permite fazer deploy/restart de containers específicos sem precisar refazer todos os containers no Coolify.

## Pré-requisitos
- Contexto Docker `vps` configurado: `docker context use vps`

## Comandos Disponíveis

### 1. Listar Containers Ativos
```bash
docker -c vps ps --filter name=ezzy --format "{{.Names}}: {{.Status}}"
```

### 2. Restart de Container Específico (Sem Rebuild)
Útil para containers que travaram ou precisam recarregar config:
```bash
# Substitua CONTAINER_NAME pelo nome do container
docker -c vps restart CONTAINER_NAME
```

Exemplos:
```bash
# Queue worker
docker -c vps restart ezzy.queue-icw080sgc0k0wg0c8soo4goc-XXXXXXXXXX

# Scheduler
docker -c vps restart ezzy.scheduler-icw080sgc0k0wg0c8soo4goc-XXXXXXXXXX

# Backup DB
docker -c vps restart ezzy.backup_db-icw080sgc0k0wg0c8soo4goc-XXXXXXXXXX
```

### 3. Ver Logs de Container
```bash
docker -c vps logs --tail 50 -f CONTAINER_NAME
```

### 4. Executar Comando em Container
```bash
docker -c vps exec CONTAINER_NAME php artisan cache:clear
docker -c vps exec CONTAINER_NAME php artisan config:cache
```

### 5. Limpar Containers Antigos/Duplicados
```bash
# Listar containers parados
docker -c vps ps -a --filter status=exited --format "{{.Names}}"

# Remover containers específicos
docker -c vps rm -f CONTAINER_NAME
```

## Containers Principais

| Serviço | Função |
|---------|--------|
| `ezzy.app` | Aplicação PHP-FPM |
| `ezzy.webserver` | Nginx |
| `ezzy.queue` | Queue Worker |
| `ezzy.scheduler` | Laravel Scheduler |
| `ezzy.redis` | Cache/Session |
| `ezzy.backup_db` | SQL Anywhere Backup Server |
| `ezzy.receita_pr_robot` | Robô Receita PR |

## Notas Importantes

- O **restart** não faz rebuild da imagem, apenas reinicia o container
- Para aplicar mudanças de código, é necessário o deploy completo pelo Coolify
- O contexto `vps` usa SSH para se conectar ao servidor remoto
