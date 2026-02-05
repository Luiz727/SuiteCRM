# Contexto do Projeto - Dominio Conect

- Responder sempre em Português do Brasil

## ⚠️ Regras Críticas de Desenvolvimento

### Banco de Dados
- **NUNCA** apagar ou sobrescrever dados existentes sem backup ou confirmação explícita
- **SEMPRE** preservar compatibilidade do banco de dados (SQL Anywhere e MySQL/PostgreSQL local)
- Migrações devem ser **aditivas** (adicionar colunas/tabelas, nunca remover sem cuidadosa análise)
- Seeds devem verificar se dados já existem antes de inserir
- Use `updateOrCreate` ou `firstOrCreate` em vez de `create` quando apropriado

### Deploy/Produção
- O sistema está em **PRODUÇÃO** no Coolify
- Domínios:
  - Aplicação Web: https://web.ezzy.tec.br
- Contexto: Ambiente Dockerizado com Coolify e Traefik
- Contexto Docker remoto: `vps` (ssh://root@72.61.128.92)

### Boas Práticas
- Sempre fazer backup antes de migrações destrutivas
- Testar localmente (ambiente de desenvolvimento) antes de fazer push
- Commits semânticos (feat:, fix:, chore:, style:, refactor:, etc.)
- Manter o `docker-compose.yaml` atualizado e compatível com o Coolify

## Tecnologias
- **Backend**: Laravel 12 (PHP 8.2) + Inertia.js
- **Frontend**: React + TailwindCSS + Shadcn UI
- **Banco de Dados Principal**: SQL Anywhere 17 (Integração Legada Domínio)
- **Banco de Dados Local/Cache**: MySQL / Redis (Gerenciado via Docker)
- **Infraestrutura**: Docker + Coolify + Traefik + Supervisor (Filas)
- **Integrações Chave**:
  - Focus NFe / Nuvem Fiscal (Emissão/Consulta DF-e)
  - Domínio Sistemas (via ODBC/SQL Anywhere)

## Estrutura de Diretórios Importante
- `.agent/`: Documentação e contextos específicos do assistente
- `app/Services/Dominio/Realtime`: Serviços de leitura direta do SQL Anywhere
- `docker/`: Configurações de container (Nginx, PHP, ReceitaPR, etc.)
