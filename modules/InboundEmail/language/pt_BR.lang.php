<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Autenticação ou Senha Incorreta',
    'ERR_INI_ZLIB' => 'Não pode desativar compressão Zlib temporariamente. "Definições de Teste" podem falhar.',
    'ERR_NO_IMAP' => 'Nenhuma biblioteca IMAP encontrada. Por favor resolva isto antes de prosseguir com o E-mail Recebido',
    'ERR_NO_OPTS_SAVED' => 'Nenhuma Opção foi gravada na sua Caixa de Entrada de E-mail. Por favor verifique as definições',
    'ERR_TEST_MAILBOX' => 'Por favor verifique as suas definições e tente novamente.',
    'ERR_INVALID_PORT' => 'Porta inválida',

    'LBL_ASSIGN_TO_USER' => 'Atribuir ao Usuário',
    'LBL_AUTOREPLY' => 'Modelo de Auto-Resposta',
    'LBL_AUTOREPLY_HELP' => 'Selecione uma resposta automática para notificar os remetentes de e-mail que sua resposta foi recebida.',
    'LBL_BASIC' => 'Informações da conta de e-mail.',
    'LBL_CASE_MACRO' => 'Macro Ocorrência',
    'LBL_CASE_MACRO_DESC' => 'Ajustar a macro que será dividida e utilizada para ligar e-mails importados a uma Ocorrência.',
    'LBL_CASE_MACRO_DESC2' => 'Ajuste isto para qualquer valor, mas preserve o "%<b>1</b>".',
    'LBL_CLOSE_POPUP' => 'Fechar Janela',
    'LBL_CREATE_TEMPLATE' => 'Criar',
    'LBL_DELETE_SEEN' => 'Eliminar E-mails Lidos Após Importação',
    'LBL_EDIT_TEMPLATE' => 'Editar',
    'LBL_EMAIL_OPTIONS' => 'Opções de Manuseamento de E-mail',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opções de tratamento de mensagens devolvidas',
    'LBL_FILTER_DOMAIN_DESC' => 'Não envie respostas automáticas para este domínio.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selecione para criar registros de email automaticamente no SuiteCRM para todos os emails recebidos.',
    'LBL_FILTER_DOMAIN' => 'Não há resposta automática para o domínio.',
    'LBL_FIND_SSL_WARN' => 'Testar o SSL pode demorar. Por favor seja paciente.',
    'LBL_FROM_ADDR' => 'Endereço De',
    'LBL_FROM_ADDR_DESC' => 'O endereço de e-mail fornecido aqui pode não aparecer na seção de endereço &quot;De&quot; do e-mail enviado devido a restrições impostas pelo provedor de serviço de correio. Nestas circunstâncias, será usado o endereço de e-mail definido no servidor de correio de saída.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nome De',
    'LBL_GROUP_QUEUE' => 'Atribuir ao Grupo',
    'LBL_HOME' => 'Principal',
    'LBL_LIST_MAILBOX_TYPE' => 'Uso da Conta de Correio',
    'LBL_LIST_NAME' => 'Nome:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Grupo/Pessoal',
    'LBL_LIST_SERVER_URL' => 'Servidor de Correio:',
    'LBL_SERVER_ADDRESS' => 'Endereço do Servidor',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LOGIN' => 'Usuário para Login',
    'LBL_USERNAME' => 'Nome de usuário',
    'LBL_MAILBOX_DEFAULT' => 'CAIXA DE ENTRADA',
    'LBL_MAILBOX_SSL' => 'Usar SSL',
    'LBL_MAILBOX_TYPE' => 'Ações Possíveis',
    'LBL_DISTRIBUTION_METHOD' => 'Método de Distribuição',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Modelo de Resposta Automática para Nova Ocorrência',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecione uma resposta automática para notificar os remetentes de e-mail que uma ocorrência foi criada. O e-mail contém o número da ocorrência na linha de assunto, conforme a definição macro das Ocorrências. Esta resposta só é enviada quando o primeiro e-mail for recebido pelo destinatário.',
    'LBL_MAILBOX' => 'Pasta Monitorada',
    'LBL_TRASH_FOLDER' => 'Pasta do Lixo',
    'LBL_SENT_FOLDER' => 'Pasta Enviada',
    'LBL_SELECT' => 'Selecionar',
    'LBL_MARK_READ_NO' => 'Email marcado para exclusão após importação',
    'LBL_MARK_READ_YES' => 'E-mail deixado no servidor após importação',
    'LBL_MARK_READ' => 'Deixar Mensagens no Servidor',
    'LBL_MAX_AUTO_REPLIES' => 'Número de Respostas Automáticas',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Definir o número máximo de respostas automáticas a enviar para um único endereço de e-mail durante um período de 24 horas.',
    'LBL_PERSONAL_MODULE_NAME' => 'Conta de e-mail pessoal',
    'LBL_CREATE_CASE' => 'Criar Ocorrência a partir de e-mail',
    'LBL_CREATE_CASE_HELP' => 'Selecione para criar registros de ocorrências automaticamente no SuiteCRM, a partir de emails recebidos.',
    'LBL_MODULE_NAME' => 'Contas de E-mail de Entrada',
    'LBL_BOUNCE_MODULE_NAME' => 'Caixa de Correio de tratamento de devoluções',
    'LBL_MODULE_TITLE' => 'Contas de E-mail de Entrada',
    'LBL_NAME' => 'Nome',
    'LBL_NONE' => 'Nenhum',
    'LBL_ONLY_SINCE_NO' => 'Não. Verificar todos os e-mails no servidor de mail.',
    'LBL_ONLY_SINCE_YES' => 'Sim.',
    'LBL_PASSWORD' => 'Senha',
    'LBL_EMAIL_PASSWORD' => 'Senha',
    'LBL_POP3_SUCCESS' => 'A conexão POP3 teve sucesso.',
    'LBL_POPUP_TITLE' => 'Testar Definições',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selecionar Pasta(s) Assinadas(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selecionar Pasta do Lixo',
    'LBL_SELECT_SENT_FOLDERS' => 'Selecionar Pasta de Enviados',
    'LBL_DELETED_FOLDERS_LIST' => 'As seguintes pastas %s não existem ou foram excluídas do servidor',
    'LBL_PORT' => 'Porta do Servidor de Correio',
    'LBL_REPLY_TO_NAME' => 'Nome para Responder a',
    'LBL_REPLY_TO_ADDR' => 'Endereço para Responder a',
    'LBL_SAME_AS_ABOVE' => 'Utilizando De Nome/Endereço',
    'LBL_SERVER_OPTIONS' => 'Opções Avançadas do Mail Server',
    'LBL_SERVER_TYPE' => 'Protocolo de Servidor de Correio',
    'LBL_SERVER_PORT' => 'Porta do Servidor de Correio',
    'LBL_SERVER_URL' => 'Endereço do Mail Server',
    'LBL_SSL_DESC' => 'Se o mail server suporta socket connections, esta opção forçará conexões SSL para importar e-mails.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'A Equipe Selecionada tem acesso à conta de correio. Se uma Pasta de Grupo é Selecionada, a Equipe atribuída à Pasta de Grupo sobrepõe-se à Equipe Selecionada.',
    'LBL_SSL' => 'Utilize SSL',
    'LBL_STATUS' => 'Estado',
    'LBL_EMAIL_BODY_FILTERING' => 'Tipo de Filtro do Corpo de E-mail',
    'LBL_SYSTEM_DEFAULT' => 'Padrão do Sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Testar',
    'LBL_TEST_SETTINGS' => 'Testar Definições',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Testar Configurações de Conexão',
    'LBL_TEST_SUCCESSFUL' => 'Conexão finalizada com sucesso.',
    'LBL_TEST_WAIT_MESSAGE' => 'Um momento por favor...',
    'LBL_WARN_IMAP_TITLE' => 'Aviso IMAP',
    'LBL_WARN_IMAP' => 'Avisos:',
    'LBL_WARN_NO_IMAP' => 'Este sistema não possui as bibliotecas IMAP c-client ativadas/compiladas no módulo do PHP (--with-imap=/path/to/imap_c-client_library).  Por favor contacte o seu administrador de sistema para resolver este problema.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nova Conta Pessoal',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nova Conta de Grupo',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Nova Conta de Ocorrência',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nova Conta para Tratamento de Devolvidos',
    'LNK_LIST_MAILBOXES' => 'Contas de E-mail de Entrada',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Contas de e-mail de saída',
    'LNK_LIST_SCHEDULER' => 'Agendadores',
    'LNK_SEED_QUEUES' => 'Alimentar Filas das Equipes',
    'LBL_GROUPFOLDER_ID' => 'Id de Pasta de Grupo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir aos Usuários enviar e-mails usando o `De` (nome e endereço) como o endereço para resposta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quando esta opção for selecionada, o nome e endereço de e-mail de origem associados a esta conta de correio do grupo vão aparecer como uma opção para o campo `De` quando se escreve e-mails para usuários que têm acesso à conta de correio do grupo.',
    'LBL_STATUS_ACTIVE' => 'Ativo',
    'LBL_STATUS_INACTIVE' => 'Inativo',
    'LBL_IS_PERSONAL' => 'Pessoal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar e-mails automaticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Atenção: está a modificar a configuração automática de importação, o que podem resultar em perda de dados.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Atenção: a importação automática tem que ser Ativada para a criação automática de Ocorrências.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Rascunhos',
    'LBL_LIST_TITLE_MY_INBOX' => 'Caixa de Entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'E-mail enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails Arquivados',
    'LNK_MY_DRAFTS' => 'Rascunhos',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver E-mails',
    'LNK_QUICK_REPLY' => 'Responder',
    'LNK_SENT_EMAIL_LIST' => 'E-mails Enviados',
    'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_SERVICE' => 'Serviço',
    'LBL_STORED_OPTIONS' => 'Opções Armeazenadas',
    'LBL_GROUP_ID' => 'ID do Grupo',

    'LBL_OUTBOUND_CONFIGURATION' => 'Configuração de E-mail de Saída',
    'LBL_CONNECTION_CONFIGURATION' => 'Configuração do Servidor',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Configuração de Resposta Automática',
    'LBL_CASE_CONFIGURATION' => 'Configuração de Ocorrências',
    'LBL_GROUP_CONFIGURATION' => 'Configuração de Grupo',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de segurança',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Conta de E-mail Saída',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'ID de Conta de E-mail de Saída',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Conta de E-mail Saída',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Modelo de E-mail de Resposta Automática',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'ID de Modelo de E-mail de Resposta Automática',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Modelo de E-mail de Resposta Automática',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Modelo de E-mail de Ocorrência',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'ID de Modelo de E-mail de Ocorrência',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Modelo de E-mail de Ocorrência',

    'LBL_PROTOCOL' => 'Protocolo',
    'LBL_CONNECTION_STRING' => 'String de Conexão',
    'LBL_DISTRIB_METHOD' => 'Método de Distribuição',
    'LBL_DISTRIB_OPTIONS' => 'Opções de Distribuição',

    'LBL_DISTRIBUTION_USER' => 'Usuário de Distribuição',
    'LBL_DISTRIBUTION_USER_ID' => 'ID de Usuário de Distribuição',
    'LBL_DISTRIBUTION_USER_NAME' => 'Usuário de Distribuição',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Conexão OAuth Externa',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID de Conexão OAuth Externa',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Conexão OAuth Externa',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Conexões OAuth Externas',

    'LBL_TYPE' => 'Tipo',
    'LBL_AUTH_TYPE' => 'Tipo de Autenticação',
    'LBL_IS_DEFAULT' => 'Padrão',
    'LBL_SIGNATURE' => 'Assinatura',

    'LBL_OWNER_NAME' => 'Proprietário',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Definir como padrão',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Mover mensagens para a lixeira após importar?',
);
