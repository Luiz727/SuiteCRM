# Copilot Instructions — Regras Objetivas de Execução  
*(Arquivo oficial: `.github/copilot-instructions.md`)*

---

## 1. Diretrizes Gerais
- Todas as respostas exclusivamente em Português (Brasil).
- Não modificar código existente sem autorização explícita.
- Alterar somente arquivos ou trechos indicados na tarefa.
- Proibido refatorar, otimizar ou reestruturar sem solicitação direta.
- Não alterar padrões de arquitetura, nomenclclaturas ou regras do sistema.
- Atuar sempre com foco em clareza, rastreabilidade e segurança.

---

## 2. Responsabilidade de Execução

### 2.1 O que o agente DEVE fazer
O agente **NUNCA pode repassar ao responsável ações que estejam dentro de sua capacidade**, incluindo:
- Escrever, revisar ou corrigir código.
- Criar, alterar ou validar arquivos de configuração.
- Montar comandos, scripts ou migrations.
- Analisar erros, logs ou mensagens de build.
- Gerar documentação técnica.
- Propor soluções detalhadas.

---

### 2.2 Quando for necessária ação manual
Somente quando for **tecnicamente impossível para o agente executar diretamente**.

#### Protocolo de explicação obrigatória
Sempre explicar para **leigo**, contendo:
- Onde acessar.
- O que clicar/executar.
- Qual comando usar.
- Resultado esperado.
- Como validar.
- O que fazer se falhar.

---

## 3. Governança — README

Arquivo obrigatório:
`/README.md`

Define:
Arquitetura, pastas, nomenclatura, funções, layout/UI, permissões, deploy, ambientes, segurança, logs e auditoria.

**Nenhum plano pode contrariar o README.**  
README governa – planos executam.

---

## 4. Planos Principais

- Podem existir **múltiplos Planos Principais ativos**.
- Todo Plano deve existir em `docs/`:
  `docs/plano-principal-*.md`
- Conteúdo obrigatório:
  - Objetivo
  - Escopo
  - Arquivos afetados
  - Checklist no formato **[ ]**

---

## 5. CHECKLIST OBRIGATÓRIO

Formato:
- [ ] Pendente  
- [x] Concluído  

### Finalização
Quando 100% = [x]:

1. Status: **FINALIZADO**
2. Resumo + validações
3. Mover:
   - `docs/` → `docs/arquivos/`

---

## 6. Planos Secundários

`docs/plano-secundario-*.md`  
Checklist próprio, referenciar plano principal, arquivar ao concluir.

---

## 7. Exceções

Apenas via solicitação direta do responsável.  
Criar plano secundário somente se houver impacto estrutural.

---

## 8. ÂNCORA OBRIGATÓRIA DE PLANO

Durante execução ativa:

Você **DEVE iniciar mensagens** com:

```
[PLANO: caminho/do-plano.md]
```

Exemplo:
```
[PLANO: docs/plano-principal-x.md]
Continuar execução.
```

Essa âncora:

- Garante continuidade do plano.
- Proíbe perguntas de reinício.
- Após perguntas simples o agente **retorna automaticamente ao plano**.

---

## 9. Perguntas Simples

Perguntas sem execução:

- Responder direto.
- NÃO usar checklist nem status.

---

## 10. Execução Técnica

Somente o escopo do plano ativo.  
Nada fora, nada de upgrades sem autorização.

---

## 11. Banco de Dados

- Migrations versionadas
- Sem perda de dados
- Rollback obrigatório

---

## 12. Testes

Funcional, Interface, Permissões e Migrations obrigatórios.

---

## 13. Múltiplas Opções

Listar prós e contras + recomendar opção.

---

## 14. Confirmação

Somente quando houver execução:

**Posso prosseguir?**

---

## 15. Formato de Execução

```txt
### Ação Executada
[Descrição]

### Status
Checklist:
- [ ] Etapa
- [x] Etapa

### Validações
- Interface: ✅ ou ❌
- Permissões: ✅ ou ❌
- Migrations: ✅ ou ❌
- Testes: ✅ ou ❌

### Próximos Passos
[Continuidade]

### Confirmação
Posso prosseguir?
```



## Visão Geral
- As empresas cadastradas (Company) são os escritórios de contabilidade que tem suas empresas clientes ou apenas clientes, que podem ser CNPJ ou CPF (DimCliente).
- Aplicação fiscal multi-tenant em Laravel 12 + Inertia/React; front em `resources/js` e backend seguindo padrão REST + Inertia Pages.
- Estrutura orientada a fatos/dimensões descrita em `docs/migration-plan.md`; consulte esse arquivo antes de sugerir novas entidades ou telas.
- Companies/tenants vivem em `companies`, usuários têm `current_company_id` e relação pivot (`database/migrations/2025_11_26_000100_create_companies_tables.php`).

## Dados e ETL
- Fatos principais: `fato_entradas(_itens)`, `fato_saidas(_itens)`, `fato_servicos`, XML tables e `etl_runs` (`database/migrations/2025_11_26_001100_*.php` e `001200_*.php`). Sempre filtre por `company_id` e use chaves únicas existentes.
- Script `etl_sqlany_to_mysql.py` conecta SQL Anywhere → MySQL usando DSN ODBC. Depende das ENV `SQLANY_DSN`, `SQLANY_USER`, `SQLANY_PASS`, `MYSQL_*`, `COMPANY_ID`, `SQLANY_COMPANIES`, `ETL_YEARS_BACK`. Respeite o padrão incremental por data (`get_last_date`).
- Novos loaders devem atualizar cabeçalho + itens mantendo o cache de cabeçalho (veja `salvar_entradas/saidas`). Se criar novos jobs, preferir registrar execução em `etl_runs`.

## Backend Laravel
- `App\Support\CompanyContext` (singleton em `AppServiceProvider`) guarda o tenant corrente; `SetActiveCompany` resolve via sessão, request ou cabeçalho. Use `app(CompanyContext::class)->get()` em controllers/services em vez de tocar sessão diretamente.
- `HandleInertiaRequests` injeta `tenant.current` e lista de empresas em todas as páginas. Reaproveite esse shared prop e evite duplicar queries.
- Convenções de queries: criar scopes (`forTenant`, `forPeriod`, etc.) e usar eager loading para dimensões. Para APIs DataTable, preferir paginar com `orderBy` + `selectRaw` contendo agregações (veja plano em `docs/migration-plan.md`).
- Seeds iniciais (`DatabaseSeeder`) criam usuário admin + empresa padrão; use `php artisan migrate --seed` após alterar schema.

## Frontend Inertia/React
- `resources/js/app.jsx` registra páginas automaticamente via `resolvePageComponent`. Novas telas devem viver em `resources/js/Pages/**` e usar Layout base compartilhado (sidebar + header previstos no plano).
- Componentes reutilizáveis (DateRangePicker, DataTable, TenantSelector) devem ir para `resources/js/Components`. Use props do middleware (`tenant`, `auth.user`) para renderizar seletores e filtros globais.
- Padrão de dados: requisições via `@inertiajs/react` hooks ou `axios` configurado em `resources/js/bootstrap.js`; mantenha filtros no query string para deep-linking.

## Fluxos de Desenvolvimento
- Configuração típica: `composer install`, `npm install`, copie `.env` e rode `php artisan key:generate`, `php artisan migrate --seed`.
- Ambiente interativo: `composer run dev` levanta `artisan serve`, fila, `pail` e `npm run dev` simultaneamente (cores customizadas). Para apenas front use `npm run dev`; build de produção `npm run build`.
- Testes: `php artisan test` (ou `composer test`). Priorize Feature tests para controle multi-tenant e validação de filtros.
- ETL local: ative virtualenv e rode `python etl_sqlany_to_mysql.py`; dependências listadas em `requirements.txt`.

## Referências
- `docs/migration-plan.md` define roadmap e regras funcionais; sincronize as implementações com ele.
- Consultar sempre os respectivos migrations/modelos antes de propor alterações em schema.
- Dúvidas sobre domínios fiscais (CFOP, acumuladores) devem buscar primeiros exemplos em `etl_sqlany_to_mysql.py` e nos campos descritos nos migrations.
