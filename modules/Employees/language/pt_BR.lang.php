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
    'LBL_MODULE_NAME' => 'Colaboradores',
    'LBL_MODULE_TITLE' => 'Colaboradores: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Funcionário',
    'LBL_LIST_FORM_TITLE' => 'Colaboradores',
    'LBL_NEW_FORM_TITLE' => 'Criar Funcionário',
    'LBL_LOGIN' => 'Login',
    'LBL_RESET_PREFERENCES' => 'Voltar à configuração inicial do sistema',
    'LBL_TIME_FORMAT' => 'Formato da hora:',
    'LBL_DATE_FORMAT' => 'Formato da Data:',
    'LBL_TIMEZONE' => 'Hora local:',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nome do Funcionário',
    'LBL_LIST_DEPARTMENT' => 'Departamento',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reporta a',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'Nome do usuário',
    'LBL_ERROR' => 'Erro:',
    'LBL_PASSWORD' => 'senha:',
    'LBL_USER_NAME' => 'Nome do usuário:',
    'LBL_USER_TYPE' => 'Tipo de usuário',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_LAST_NAME' => 'Sobrenome:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_ADMIN' => 'Administrador:',
    'LBL_EMPLOYEE_INFORMATION' => 'Dados do Funcionário',
    'LBL_OFFICE_PHONE' => 'Telefone do Escritório:',
    'LBL_REPORTS_TO' => 'Reporta a Id:',
    'LBL_REPORTS_TO_NAME' => 'Reporta a:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_NOTES' => 'Anotações:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_PHONE' => 'Qualquer Telefone:',
    'LBL_ANY_EMAIL' => 'E-mail alternativo:',
    'LBL_ADDRESS' => 'Endereço:',
    'LBL_CITY' => 'Cidade:',
    'LBL_STATE' => 'Estado ou Região:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_COUNTRY' => 'País:',
    'LBL_NAME' => 'Nome:',
    'LBL_MOBILE_PHONE' => 'Celular:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de e-mail',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Cliente de e-mail do SuiteCRM:</b> Envie e-mails utilizando o cliente de e-mail dentro do SuiteCRM. <br><b>Cliente de e-mail Externo:</b> Envie e-mails utilizando um cliente de e-mail fora do SuiteCRM, como o Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefone Residencial:',
    'LBL_WORK_PHONE' => 'Telefone de trabalho:',
    'LBL_EMPLOYEE_STATUS' => 'Estado do funcionário:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço (principal):',
    'LBL_SAVED_SEARCH' => 'Opções de Layout',
    'LBL_MESSENGER_ID' => 'Nome do IM:',
    'LBL_MESSENGER_TYPE' => 'Tipo de IM:',
    'ERR_LAST_ADMIN_1' => 'O funcionário de nome "',
    'ERR_LAST_ADMIN_2' => '" é o último funcionário com acesso de administrador. Pelo menos um empregado deve ser um administrador.',
    'LNK_NEW_EMPLOYEE' => 'Criar Funcionário',
    'LNK_EMPLOYEE_LIST' => 'Ver Colaboradores',
    'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registro deve ser informado.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Estado do funcionário',

    'LBL_SUITE_LOGIN' => 'É Usuário',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar na Atribuição',
    'LBL_IS_ADMIN' => 'É Administrador',
    'LBL_GROUP' => 'Usuário do Grupo',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Este funcionário também é um usuário. Excluir o registro de empregado também excluirá o registro de usuário, e o usuário já não será capaz de acessar o aplicativo. Você quer continuar com a exclusão deste registro?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Tem a certeza que deseja eliminar este funcionário?',
    'LBL_ONLY_ACTIVE' => 'Colaboradores Ativos',
    'LBL_SELECT' => 'selecionar' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID Autenticação',
    'LBL_EXT_AUTHENTICATE' => 'Autenticação Externa',
    'LBL_GROUP_USER' => 'usuário de Grupo',
    'LBL_LIST_ACCEPT_STATUS' => 'Status de Aceitação',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_MODIFIED_BY_ID' => 'Modificado pelo ID',
    'LBL_CREATED_BY_NAME' => 'Criado por', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'usuário do Portal API',
    'LBL_PSW_MODIFIED' => 'Última alteração de senha',
    'LBL_SHOW_ON_EMPLOYEES' => 'Exibir o registro do Colaborador',
    'LBL_USER_HASH' => 'senha:',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'senha Gerada pelo Sistema',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Estado',
    'LBL_ADDRESS_CITY' => 'Cidade:',
    'LBL_ADDRESS_COUNTRY' => 'País:',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ADDRESS_POSTALCODE' => 'Código Postal:',
    'LBL_ADDRESS_STATE' => 'Estado:',
    'LBL_ADDRESS_STREET' => 'Rua:',

    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_DATE_ENTERED' => 'Data de Introdução',
    'LBL_DELETED' => 'Excluído',

    'LBL_BUTTON_SELECT' => 'Selecionar',
    'LBL_BUTTON_CLEAR' => 'Limpar',

    'LBL_CONTACTS_SYNC' => 'Sincronizar contatos',
    'LBL_OAUTH_TOKENS' => 'Tokens OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Usuários do projeto a partir do título do projeto',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contatos do projeto a partir do título dos contatos',
    'LBL_ROLES' => 'Perfis',
    'LBL_SECURITYGROUPS' => 'Grupos de segurança',
    'LBL_PROSPECT_LIST' => 'Lista de Alvos',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Interface da autenticação em dois fatores:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
