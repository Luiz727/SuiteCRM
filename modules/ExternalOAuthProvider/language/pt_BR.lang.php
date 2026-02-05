<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2022 SalesAgility Ltd.
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

$mod_strings = [

    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Provedores OAuth Externos',
    'LBL_MODULE_NAME' => 'Provedores OAuth Externos',
    'LBL_MODULE_TITLE' => 'Provedores OAuth Externos',
    'LBL_HOMEPAGE_TITLE' => 'Meus Provedores OAuth Externos',
    'LNK_NEW_RECORD' => 'Criar Provedor OAuth Externo',

    'LNK_LIST' => 'Provedores OAuth Externos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Provedores OAuth Externos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo Provedor OAuth Externo',

    'LBL_LIST_DELETE' => 'Excluir',
    'LBL_TYPE' => 'Tipo',
    'LBL_CONNECTOR' => 'Conector',
    'LBL_REDIRECT_URI' => 'URL de Redirecionamento',

    'LBL_CLIENT_ID' => 'Client ID',
    'LBL_CLIENT_SECRET' => 'Client Secret',
    'LBL_SCOPE' => 'Escopo',
    'LBL_URL_AUTHORIZE' => 'URL de Autorização',
    'LBL_AUTHORIZE_URL_OPTIONS' => 'Opções de URL de Autorização',
    'LBL_URL_ACCESS_TOKEN' => 'URL do Token de Acesso',
    'LBL_EXTRA_PROVIDER_PARAMS' => 'Parâmetros Adicionais do Provedor',
    'LBL_GET_TOKEN_REQUEST_GRANT' => 'Obter tipo de concessão da Solicitação de Token',
    'LBL_GET_TOKEN_REQUEST_OPTIONS' => 'Obter opções de Requisição de Token',
    'LBL_REFRESH_TOKEN_REQUEST_GRANT' => 'Atualizar tipo de concessão da Solicitação de Token',
    'LBL_REFRESH_TOKEN_REQUEST_OPTIONS' => 'Atualizar Opções de Requisição de Token',

    'LBL_ACCESS_TOKEN_MAPPING' => 'Mapeamento do Token de Acesso',
    'LBL_EXPIRES_IN_MAPPING' => 'Expira no Mapeamento',
    'LBL_REFRESH_TOKEN_MAPPING' => 'Atualizar Mapeamento do Token',
    'LBL_TOKEN_TYPE_MAPPING' => 'Mapeamento de Tipo de Token',

    'LBL_EXTRA' => 'Configurações adicionais',
    'LBL_MAPPING' => 'Configurações de Mapeamento',
    'LBL_OTHER' => 'Outro',


    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Novo Provedor Pessoal',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Novo Provedor de Grupo',
    'LNK_LIST_INBOUND_EMAILS' => 'Contas de E-mail de Entrada',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Contas de e-mail de saída',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTION' => 'Conexões OAuth Externas',

    'LBL_OWNER' => 'Proprietário',
];
