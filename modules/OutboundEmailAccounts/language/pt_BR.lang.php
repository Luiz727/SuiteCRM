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
    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Lista de contas de e-mail de saída',
    'LBL_MODULE_NAME' => 'Contas de e-mail de saída',
    'LBL_MODULE_TITLE' => 'Contas de e-mail de Saída',
    'LBL_HOMEPAGE_TITLE' => 'Minhas contas de e-mail de saída',
    'LNK_NEW_RECORD' => 'Criar contas de e-mail de saída',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nova Conta Pessoal',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nova Conta de Grupo',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'Nova Conta de E-mail de Saída de Substituição do Sistema',

    'LNK_LIST' => 'Contas de e-mail de saída',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Contas de E-mail de Entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar contas de e-mail de saída',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novas contas de e-mail de saída',
    'LBL_USERNAME' => 'Nome do usuário',
    'LBL_PASSWORD' => 'Senha',
    'LBL_SMTP_SERVERNAME' => 'Nome do servidor SMTP',
    'LBL_SMTP_AUTH' => 'Autenticação SMTP',
    'LBL_SMTP_PORT' => 'Porta SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocolo SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Configurações de conta',
    'LBL_OUTBOUND_CONFIGURATION' => 'Configuração de E-mail de Saída',
    'LBL_CONNECTION_CONFIGURATION' => 'Configuração do Servidor',
    'LBL_CHANGE_PASSWORD' => 'Alterar senha',
    'LBL_SEND_TEST_EMAIL' => 'Enviar e-mail de teste',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'O administrador ainda não configurou a conta padrão de saída. Não é possível enviar e-mail de teste.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha',
    'LBL_MAIL_SMTPPORT' => 'Porta',
    'LBL_MAIL_SMTPSERVER' => 'Servidor',
    'LBL_MAIL_SMTPUSER' => 'Nome do usuário',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação do servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'senha Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID do Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Usuário do Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta do servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',

    'LBL_TYPE' => 'Tipo',
    'LBL_MAIL_SENDTYPE' => 'Tipo de envio de e-mail',
    'LBL_MAIL_SMTPSSL' => 'Correio SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Nome "De"',
    'LBL_SMTP_FROM_ADDR' => 'Endereço "De"',
    'LBL_REPLY_TO_NAME' => '"Responder para" Nome',
    'LBL_REPLY_TO_ADDR' => '"Responder para" Endereço',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de segurança',

    'LBL_OWNER' => 'Proprietário',
    'LBL_OWNER_NAME' => 'Proprietário',

    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Conexões OAuth Externas'
);
