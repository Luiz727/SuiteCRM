# =============================================
# Dockerfile para Sistema Nixcon
# Deploy via Coolify - https://dfe.nixcon.com.br
# Com migrations e seed automáticos
# =============================================

FROM node:22-alpine AS base

# Instalar dependências do sistema
RUN apk add --no-cache libc6-compat

WORKDIR /app

# =============================================
# Fase de dependências
# =============================================
FROM base AS deps

COPY package*.json ./
RUN npm ci --include=dev

# =============================================
# Fase de build
# =============================================
FROM base AS builder

COPY --from=deps /app/node_modules ./node_modules
COPY . .

# Build da aplicação (frontend + backend)
RUN npm run build

# =============================================
# Fase de produção
# =============================================
FROM base AS runner

ENV NODE_ENV=production
ENV PORT=3000

# Criar usuário não-root
RUN addgroup --system --gid 1001 nodejs
RUN adduser --system --uid 1001 appuser

WORKDIR /app

# Copiar arquivos de build
COPY --from=builder /app/dist ./dist
COPY --from=builder /app/node_modules ./node_modules
COPY --from=builder /app/package.json ./package.json

# Copiar arquivos necessários para migrations
COPY --from=builder /app/drizzle.config.ts ./drizzle.config.ts
COPY --from=builder /app/shared ./shared
COPY --from=builder /app/server/db.ts ./server/db.ts
COPY --from=builder /app/server/seed-codigos.ts ./server/seed-codigos.ts

# Copiar script de inicialização
COPY --from=builder /app/docker-entrypoint.sh ./docker-entrypoint.sh
RUN chmod +x ./docker-entrypoint.sh

# Criar diretório de uploads para logos e garantir permissões
RUN mkdir -p /app/uploads && chown -R appuser:nodejs /app/uploads

# Definir permissões
RUN chown -R appuser:nodejs /app

USER appuser

# Volume para persistir uploads (logos) entre deploys
VOLUME ["/app/uploads"]

EXPOSE 3000

# Health check
HEALTHCHECK --interval=30s --timeout=10s --start-period=120s --retries=5 \
  CMD wget --no-verbose --tries=1 --spider http://localhost:3000/api/health || exit 1

# Usar entrypoint para rodar migrations antes de iniciar
ENTRYPOINT ["./docker-entrypoint.sh"]
