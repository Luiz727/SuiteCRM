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
    'LBL_SEND_DATE_TIME' => 'Data de Envio',
    'LBL_IN_QUEUE' => 'Em Processamento',
    'LBL_IN_QUEUE_DATE' => 'Data de Fila',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Apenas valores inteiros são aceitos para o número de e-mails enviados por lote',

    'LBL_ATTACHMENT_AUDIT' => 'foi enviado. Não foi duplicado localmente para preservar o uso do disco',
    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_CUSTOM_LOCATION' => 'Definido pelo Usuário',
    'LBL_DEFAULT_LOCATION' => 'Padrão',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Excluir as notas e arquivos relacionados aos e-mails excluídos',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Notificações de alerta de email',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Configurações de adesão',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Enviar email de adesão automaticamente',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Modelo de email para confirmação de adesão',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Ativar Comportamento de Composição de E-mail Legado',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuração de E-mail de Saída',
    'LBL_EMAILS_PER_RUN' => 'Número de e-mails enviados por lote:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campanha',
    'LBL_LIST_FORM_TITLE' => 'Fila',
    'LBL_LIST_FROM_NAME' => 'Nome do Remetente',
    'LBL_LIST_IN_QUEUE' => 'Em Processamento',
    'LBL_LIST_MESSAGE_NAME' => 'Mensagem de Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'E-mail do Destinatário',
    'LBL_LIST_RECIPIENT_NAME' => 'Nome do Destinatário',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentativas de Envio',
    'LBL_LIST_SEND_DATE_TIME' => 'Enviar Em',
    'LBL_LIST_USER_NAME' => 'Nome do Usuário',
    'LBL_LOCATION_ONLY' => 'Local',
    'LBL_LOCATION_TRACK' => 'Localização dos arquivos de Tracking da campanha (como p.e. o campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Guarde cópias de mensagens de campanha:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Pretende armazenar cópias completas de CADA mensagem de e-mail enviada durante todas as campanhas? Recomendamos-lhe Não. Escolhendo Não irá armazenar apenas os modelos que são enviados e as variáveis necessárias para recriar a mensagem individual.',
    'LBL_MAIL_SENDTYPE' => 'Agente de Transferência de Correio:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID do Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Usuário Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de e-mail',
    'LBL_MARKETING_ID' => 'ID de Marketing',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Definições de E-mail',
    'LBL_MODULE_TITLE' => 'Gestão da Fila de E-mails de Saída',
    'LBL_NOTIFICATION_ON_DESC' => 'Enviar notificações via e-mail quando determinados registros forem atribuídos.',
    'LBL_NOTIFY_FROMADDRESS' => 'Endereço De:',
    'LBL_NOTIFY_FROMNAME' => 'Nome De:',
    'LBL_NOTIFY_ON' => 'Notificações ligadas?',
    'LBL_NOTIFY_TITLE' => 'Opções de Notificações via E-mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opções de E-mail de Saída',
    'LBL_RELATED_ID' => 'Id Relacionado',
    'LBL_RELATED_TYPE' => 'Tipo Relacionado',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Filas',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor definido para o parâmetro site_url no arquivo Config.php',
    'TXT_REMOVE_ME_ALT' => 'Para se remover desta lista de e-mails vá a',
    'TXT_REMOVE_ME_CLICK' => 'clique aqui',
    'TXT_REMOVE_ME' => 'Para se remover desta lista de e-mails',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Enviar notificação a partir do endereço de e-mail do usuário que atribui',

    'LBL_SECURITY_TITLE' => 'Configurações de segurança de e-mail',
    'LBL_SECURITY_DESC' => 'Verificar o seguinte que NÃO deve ser permitido via E-mail de Entrada ou exibido no módulo de E-mails',
    'LBL_SECURITY_APPLET' => 'Etiqueta de Applet',
    'LBL_SECURITY_BASE' => 'Etiqueta de base',
    'LBL_SECURITY_EMBED' => 'Etiqueta de embutir',
    'LBL_SECURITY_FORM' => 'Etiqueta de formulário',
    'LBL_SECURITY_FRAME' => 'Etiqueta de moldura',
    'LBL_SECURITY_FRAMESET' => 'Etiqueta de conjunto de molduras',
    'LBL_SECURITY_IFRAME' => 'Etiqueta de iFrame',
    'LBL_SECURITY_IMPORT' => 'Etiqueta de importação',
    'LBL_SECURITY_LAYER' => 'Etiqueta de camada',
    'LBL_SECURITY_LINK' => 'Etiqueta de link',
    'LBL_SECURITY_OBJECT' => 'Etiqueta de objecto',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selecione as configurações de segurança mínima do Outlook (erros ao lado da exibição correta).',
    'LBL_SECURITY_STYLE' => 'Etiqueta de estilo',
    'LBL_SECURITY_TOGGLE_ALL' => 'Alternar todas as opções',
    'LBL_SECURITY_XMP' => 'Etiqueta Xmp',
    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_PREPEND_TEST' => '[Teste]:',
    'LBL_SEND_ATTEMPTS' => 'Tentativas de Envio',
    'LBL_OUTGOING_SECTION_HELP' => 'Configurar o servidor de envio de email para notificações, inclusive de workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Os usuários podem enviar usando a identidade desta conta:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção estiver selecionada, todos os usuários poderão enviar emails utilizando a mesma conta que o sistema usa para enviar notificações e alertas.<br>Se a opção não estiver selecionada, os utilizadores podem ainda utilizar o servidor de saída de correio se fornecerem as suas informações de conta.',
    'LBL_FROM_ADDRESS_HELP' => 'Quando ativado, o nome do Usuário será incluído no campo do e-mail. Este recurso pode não funcionar com servidores SMTP que não permitem o envio de uma conta de e-mail diferente da conta do servidor.',
    'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver contas de envio de e-mails',
    'LBL_ALLOW_SEND_AS_USER' => 'Os usuários podem enviar como eles mesmos:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Quando ativado, <b>todos</b> os usuários podem enviar email utilizando o servidor de saída de correio, utilizando o seu endereço principal de email no endereço de remetente &quot;De&quot;.<br>Este recurso pode não funcionar em servidores SMTP que não permitam o envio a partir de uma conta de email diferente da conta do servidor.',
);
