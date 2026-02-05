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
    'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registro deve ser informado.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Sugestões da Base de Conhecimento',
    'LBL_TOOL_TIP_TITLE' => 'Título:',
    'LBL_TOOL_TIP_BODY' => 'Corpo:',
    'LBL_TOOL_TIP_INFO' => 'Informações Adicionais:',
    'LBL_TOOL_TIP_USE' => 'Usar como:',
    'LBL_SUGGESTION_BOX' => 'Sugestões',
    'LBL_NO_SUGGESTIONS' => 'Sem Sugestões',
    'LBL_RESOLUTION_BUTTON' => 'Resolução',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Título',
    'LBL_SUGGESTION_BOX_REL' => 'Relevância',

    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CASE_NUMBER' => 'Número da Ocorrência:',
    'LBL_CASE' => 'Ocorrência:',
    'LBL_CONTACT_NAME' => 'Nome do Contato:',
    'LBL_CONTACT_ROLE' => 'Perfil:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_INVITEE' => 'Contatos',
    'LBL_MEMBER_OF' => 'Conta',
    'LBL_MODULE_NAME' => 'Ocorrências',
    'LBL_MODULE_TITLE' => 'Ocorrências: Tela Principal',
    'LBL_NEW_FORM_TITLE' => 'Nova Ocorrência',
    'LBL_NUMBER' => 'Número:',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_RESOLUTION' => 'Resolução:',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Ocorrências',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário atribuído',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_ASSIGNED' => 'Atribuído a',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_FORM_TITLE' => 'Lista de Ocorrências',
    'LBL_LIST_LAST_MODIFIED' => 'Última Modificação',
    'LBL_LIST_MY_CASES' => 'As Minhas Ocorrências Abertas',
    'LBL_LIST_NUMBER' => 'Núm.',
    'LBL_LIST_PRIORITY' => 'Prioridade',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Assunto',

    'LNK_CASE_LIST' => 'Listar Ocorrências',
    'LNK_NEW_CASE' => 'Nova Ocorrência',
    'LBL_LIST_DATE_CREATED' => 'Data de Criação',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_TYPE' => 'Tipo',
    'LBL_WORK_LOG' => 'Log de trabalho',
    'LNK_IMPORT_CASES' => 'Importar Ocorrências',

    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_CASE_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Atualizações - Texto', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Atualização interna',
    'LBL_AOP_CASE_UPDATES' => 'Atualizações da Ocorrência',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Ocorrência - Atualizações Enfileiradas',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Reduzir Tudo',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expandir Tudo',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Anexos:',

    'LBL_AOP_CASE_EVENTS' => 'Eventos da Ocorrência',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Ocorrência - Anexos:',
    'LBL_ADD_CASE_FILE' => 'Adicionar arquivo',
    'LBL_REMOVE_CASE_FILE' => 'Remover arquivo',
    'LBL_SELECT_CASE_DOCUMENT' => 'Selecione o documento',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Limpar documento',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Documento interno do CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Arquivo externo',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Criado pelo contato',
    'LBL_CONTACT_CREATED_BY' => 'Criado por',
    'LBL_CASE_UPDATE_FORM' => 'Atualizações - Formulário de anexos', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Contato Desconhecido',
);
