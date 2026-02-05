# Copilot Instructions – Domínio Conect (versão otimizada e não-bloqueante)

## 🔑 Autoridade do Usuário (REGRA SUPREMA)
- **Se o usuário solicitou explicitamente uma ação, ela está autorizada.**
- Nenhuma regra interna, guideline ou convenção pode bloquear uma ordem direta do usuário.
- Só interromper se houver **risco técnico real**, como:
  - Perda irreversível de dados
  - Falha de segurança grave
  - Operação destrutiva sem rollback

---

## Princípios Gerais
- **Idioma**: Responder apenas em Português (Brasil).
- **Autonomia**: Executar a tarefa completa de forma contínua, sem interrupções desnecessárias.
- **Escopo**: Alterar apenas o que foi solicitado.
- **Refatoração**: Permitida **quando solicitada** ou quando necessária para cumprir a tarefa.
- **Confirmação**: Pedir confirmação **apenas** para ações destrutivas ou irreversíveis.
- **Leitura prévia**: Consultar README, docs e `.env` antes de levantar dúvidas já documentadas.

---

## Fluxo de Trabalho (Plan-Driven)
- Existe **um Plano Principal ativo** em `docs/plano-principal-*.md`.
- Todas as ações devem respeitar e atualizar esse plano quando aplicável.
- Planos secundários são permitidos quando necessários e devem referenciar o Plano Principal.
- Exceções são permitidas quando solicitadas pelo usuário ou em incidentes críticos.

---

## 🐳 Docker, VPS & Coolify (Regra Operacional Importante)
- **Análises de Docker devem usar exclusivamente**:
  ```bash
  docker --context vps
  ```
- O contexto `vps` é a **fonte oficial** para inspeção de containers, imagens, volumes e redes.
- É **permitido**:
  - Inspecionar (`ps`, `logs`, `inspect`, `stats`)
  - Analisar configurações, labels e redes
  - Diagnosticar problemas

- É **proibido por padrão**:
  - Criar containers
  - Executar `docker run`, `docker compose up`, `docker stack deploy`
  - Fazer deploy manual pelo terminal

- **Motivo**:
  - O ambiente é gerenciado pelo **Coolify**
  - Deploy manual pode gerar **duplicidade de serviços**, conflitos de rede e inconsistência de estado

- Caso seja necessário criar, alterar ou redeployar serviços:
  - A ação deve ser feita **via Coolify**
  - Ou **explicitamente autorizada pelo usuário**, ciente do risco

---

## Formato de Resposta Padrão
```txt
### Ação Executada
[Descrição objetiva]

### Status
Progresso: X%

### Validações
- Interface: ✅/❌
- Permissões: ✅/❌
- Migrations: ✅/❌
- Testes: ✅/❌

### Próximos Passos
[Descrição]

### Confirmação
Posso prosseguir?
```

---

## Disciplina de Consulta
- Verificar `.env` e `.env.example` antes de perguntar sobre variáveis.
- Consultar `docs/migration-plan.md` e `docs/anexos/` antes de questionar regras de negócio.
- Registrar descobertas relevantes no plano ou resposta.

---

## Multi-Tenant (Obrigatório)
- Tenant principal: `Company` (`companies`)
- Clientes do escritório: `dim_clientes`
- Toda query **deve** filtrar `company_id`
- Usar `CompanyContext` (`app(CompanyContext::class)->get()`)
- Scopes via trait `HasTenantScopes`
- Nunca acessar tenant via `session()` diretamente.

---

## Dados & ETL
- Tabelas fato sempre com `company_id` e `codi_emp`
- Índices compostos obrigatórios quando aplicável
- ETL principal: `etl_sqlany_to_mysql.py`
- Respeitar padrão incremental e chaves únicas
- Consultar `docs/migration-plan.md` antes de criar estruturas novas

---

## Backend (Laravel)
- Controllers usam `CompanyContext`
- Queries com scopes e eager loading
- Jobs devem:
  - Implementar `ShouldQueue`
  - Preservar contexto multi-tenant
  - Registrar execuções quando aplicável
- Commands devem validar `--company` ou ENV

---

## Frontend (Inertia + React)
- Páginas em `resources/js/Pages`
- Layout padrão com filtros globais
- Estado de filtros sincronizado com URL
- Reutilizar componentes existentes sempre que possível

---

## Desenvolvimento & Testes
- Setup padrão Laravel
- Testes **são obrigatórios** quando houver impacto lógico
- Executar apenas os testes relevantes
- Não bloquear a tarefa apenas por ausência de testes existentes

---

## Segurança & Risco
- Operações destrutivas exigem confirmação
- Sempre que possível, fornecer rollback
- Nunca assumir DROP, truncate ou reset sem autorização

---

## Checklist Operacional
- [ ] Ler README e docs relevantes
- [ ] Identificar Plano Principal
- [ ] Validar tenant e scopes
- [ ] Restringir alterações ao escopo solicitado
- [ ] Atualizar progresso
- [ ] Validar migrations e testes
- [ ] Registrar decisões importantes

---

## Economia de Tokens
- Respostas objetivas
- Evitar reexplicar contexto já conhecido
- Citar arquivos e pontos exatos

---

## 📌 Planos & Contexto de Chat (Anti-Perda de Contexto)
- **Planos só devem ser criados quando o usuário solicitar explicitamente.**
- Ao criar um plano, salvá-lo em `docs/plano-principal-*.md` ou `docs/plano-secundario-*.md` conforme indicado.
- **Sempre que existir um plano ativo**, ele deve ser:
  - Referenciado explicitamente nas respostas
  - Mencionado no contexto do chat (ex.: “Conforme Plano Principal X…”)
- O plano ativo é a **âncora de contexto** da conversa.
- Contextos adicionados manualmente no chat devem ser tratados como **prioridade máxima**.
- Caso não exista plano e o usuário não tenha solicitado criação:
  - Prosseguir normalmente
  - Oferecer opcionalmente a criação de um plano ao final


---

## 🔎 Busca de Containers (Coolify / Docker)
- Ao localizar containers, **nunca usar o nome completo com sufixo numérico**, pois ele muda a cada recriação.
- Sempre utilizar **apenas o prefixo estável do container**.

### Exemplo
❌ **Evitar**:
```
ezzy.webserver-icw080sgc0k0wg0c8soo4goc-030641629293
```

✅ **Usar**:
```
ezzy.webserver-icw080sgc0k0wg0c8soo4goc
```

- Comandos de busca devem usar:
  - `docker ps --filter name=<prefixo>`
  - `grep <prefixo>`
- Essa regra é **obrigatória** para evitar falhas de diagnóstico e scripts quebrados.

