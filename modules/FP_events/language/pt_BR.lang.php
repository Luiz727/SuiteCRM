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
    'LBL_LIST_FORM_TITLE' => 'Lista de Evento',
    'LBL_MODULE_NAME' => 'Evento',
    'LBL_MODULE_TITLE' => 'Evento',
    'LBL_HOMEPAGE_TITLE' => 'Meu Evento',
    'LNK_NEW_RECORD' => 'Criar Evento',
    'LNK_LIST' => 'Exibir Eventos',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Evento',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo Evento',
    'LBL_LOCATION' => 'Local',
    'LBL_START_DATE' => 'Iniciar Data',
    'LBL_END_DATE' => 'Data/hora de término',
    'LBL_BUDGET' => 'Orçamento',
    'LBL_DATE' => 'Data Início:',
    'LBL_DATE_END' => 'Data de Término',
    'LBL_DURATION' => 'Duração',
    'LBL_INVITE_TEMPLATES' => 'Modelo de Email Convite',
    'LBL_INVITE_PDF' => 'Enviar Convites',
    'LBL_EDITVIEW_PANEL1' => 'Detalhes de Evento',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegações',
    'LBL_ACCEPT_REDIRECT' => 'Aceitar Redirecionamento de URL',
    'LBL_DECLINE_REDIRECT' => 'Rejeitar Redirecionamento de Url',
    'LBL_SELECT_DELEGATES' => 'Selecionar Delegações',
    'LBL_SELECT_DELEGATES_TITLE' => 'Selecionar Delegagões:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Lista de Alvos',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Alvos',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contatos',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potenciais',
    'LBL_MANAGE_DELEGATES' => 'Gerenciar delegações',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gerenciar delegações:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Gerenciar aceites',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gerenciar aceites:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Aceito',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Recusado',
    'LBL_MANAGE_POPUP_ERROR' => 'Nenhuma delegação foi selecionada.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Convidado',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Não convidado',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Participou',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Não participou',
    'LBL_SUCCESS_MSG' => 'Todos os convites foram enviados com sucesso.',
    'LBL_ERROR_MSG_1' => 'Todos os vínculos de contatos foram convidados.',
    'LBL_ERROR_MSG_2' => 'Enviando o email de convite falhou! Por favor checar a configuração de seu email.',
    'LBL_ERROR_MSG_3' => 'Mais de 10 e-mails não conseguiram enviar. Por favor, verifique se todos os contatos que você está convidando possuem um endereço de email válido. (Consulte o arquivo de log de erro de SuiteCRM)',
    'LBL_ERROR_MSG_4' => ' e-mails não conseguiram enviar. Por favor, verifique se todos os contatos que você está convidando possuem um endereço de email válido. (Consulte o arquivo de log de erro de SuiteCRM)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Modelo de Email Inválido',
    'LBL_EMAIL_INVITE' => 'E-mail convite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contatos',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locais',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Potenciais',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Alvos',

    'LBL_HOURS_ABBREV' => 'Hrs',
    'LBL_MINSS_ABBREV' => 'Mnts',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegações',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nome',
    'LBL_ACCOUNT_NAME' => 'Empresa',
    'LBL_SIGNATURE' => 'Assinatura',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Convidado',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Estado',

    'LBL_ACTIVITY_STATUS' => 'Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Locais de eventos a partir do título de eventos',
    // Email links
    'LBL_ACCEPT_LINK' => 'Aceitar',
    'LBL_DECLINE_LINK' => 'Recusar',
    
);
