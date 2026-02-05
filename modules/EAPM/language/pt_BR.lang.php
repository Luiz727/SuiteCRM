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
    'LBL_ASSIGNED_TO_NAME' => 'Usuário SuiteCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Usuário do App',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de Conta Externa',
    'LBL_MODULE_NAME' => 'Conta Externa',
    'LBL_MODULE_TITLE' => 'Contas Externas',
    'LBL_HOMEPAGE_TITLE' => 'Minhas Contas Externas',
    'LNK_NEW_RECORD' => 'Criar Conta Externa',
    'LNK_LIST' => 'Ver Contas Externas',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar em Fonte Externa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Nova Conta Externa',
    'LBL_PASSWORD' => 'Senha da App',
    'LBL_USER_NAME' => 'Nome do Usuário da App',
    'LBL_URL' => 'URL:',
    'LBL_APPLICATION' => 'Aplicação',
    'LBL_API_DATA' => 'Dados da API',
    'LBL_API_CONSKEY' => 'Chave do Consumidor',
    'LBL_API_CONSSECRET' => 'Segredo do consumidor',
    'LBL_API_OAUTHTOKEN' => 'Token OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Este método de autorização não é suportado pela aplicação",
    'LBL_AUTH_ERROR' => 'Tentativa de autenticação com a conta externa falhou.',
    'LBL_VALIDATED' => 'Acesso Validado',
    'LBL_ACTIVE' => 'Activo',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Conectar',
    'LBL_NOTE' => 'Por Favor, Note',
    'LBL_CONNECTED' => 'Conectado',

    'LBL_ERR_NO_AUTHINFO' => 'Não existe informação de autenticação para esta conta.',
    'LBL_ERR_NO_TOKEN' => 'Não existe tokens válidos de autenticação para esta conta.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Você não está autenticado atualmente na sua conta {0}. Clique em OK para fazer nova autenticação na sua conta e para ativar o registro da conta externa.',

    'LBL_CLICK_TO_EDIT' => 'Clique para Editar',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Repetir autenticação',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Uma conta para esta aplicação já existe. Foi reintegrada a conta existente.',
    'LBL_OMIT_URL' => '(Omitir http:// ou https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Clique em <b>Conectar</b> para ser direcionado a uma página para fornecer as informações de sua conta e para autorizar o acesso à conta pelo SuiteCRM. Após a conexão, você será direcionado de volta ao SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Clique em <b>Conectar</b> para conectar esta conta ao SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Por favor ative as janelas pop-up do seu navegador ou adicione uma exceção para o website "{0}" à lista de exceções para se conectar.',

    'LBL_API_OAUTHSECRET' => 'Senha da API OAuth',
);
