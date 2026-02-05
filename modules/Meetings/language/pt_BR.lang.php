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
    'LBL_ACCEPT_THIS' => 'Aceitar?',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_ADD_INVITEE' => 'Adicionar convidados',
    'LBL_CONTACT_NAME' => 'Contato:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_CREATED_BY' => 'Criado por',
    'LBL_DATE_END' => 'Data de Fim',
    'LBL_DATE_TIME' => 'Data e Hora de Início:',
    'LBL_DATE' => 'Data de Início:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniões',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DIRECTION' => 'Direção:',
    'LBL_DURATION_HOURS' => 'Duração (horas):',
    'LBL_DURATION_MINUTES' => 'Duração (minutos):',
    'LBL_DURATION' => 'Duração:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Primeiro Nome',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
    'LBL_HOURS_ABBREV' => 'Hrs',
    'LBL_HOURS_MINS' => '(horas/minutos)',
    'LBL_INVITEE' => 'Convidados',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário Atribuído',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_CONTACT' => 'Contato',
    'LBL_LIST_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_LIST_DATE' => 'Data de Início',
    'LBL_LIST_DIRECTION' => 'Direção',
    'LBL_LIST_DUE_DATE' => 'Data Limite',
    'LBL_LIST_FORM_TITLE' => 'Listar Reuniões',
    'LBL_LIST_MY_MEETINGS' => 'As Minhas Reuniões',
    'LBL_LIST_RELATED_TO' => 'Referente a',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_LOCATION' => 'Local:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_MODULE_NAME' => 'Reuniões',
    'LBL_MODULE_TITLE' => 'Reuniões: Tela Principal',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_FORM_TITLE' => 'Criar Novo Compromisso',
    'LBL_OUTLOOK_ID' => 'ID do Outlook',
    'LBL_SEQUENCE' => 'Atualização da reunião',
    'LBL_PHONE' => 'Telefone do Escritório:',
    'LBL_REMINDER_TIME' => 'Hora do Aviso',
    'LBL_EMAIL_REMINDER_SENT' => 'Alerta de E-mail Enviado',
    'LBL_REMINDER' => 'Aviso:',
    'LBL_REMINDER_POPUP' => 'Pop Up',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar e-mail para todos',
    'LBL_EMAIL_REMINDER' => 'Alerta de E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Alerta de E-mail',
    'LBL_REMOVE' => 'Remover',
    'LBL_SCHEDULING_FORM_TITLE' => 'Agenda',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Reuniões',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
    'LBL_SEND_BUTTON_TITLE' => 'Salvar e Enviar Convites',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Tipo de Reunião',
    'LBL_PASSWORD' => 'Senha de Reunião',
    'LBL_URL' => 'Começar/Juntar a Reunião',
    'LBL_HOST_URL' => 'Hospedar URL',
    'LBL_DISPLAYED_URL' => 'Mostrar URL',
    'LBL_CREATOR' => 'Criador da Reunião',
    'LBL_EXTERNALID' => 'ID Externo da App',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_TIME' => 'Hora de Início:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
    'LBL_PARENT_TYPE' => 'Tipo de Origem:',
    'LBL_PARENT_ID' => 'ID Origem:',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
    'LNK_NEW_MEETING' => 'Nova Reunião',
    'LNK_IMPORT_MEETINGS' => 'Importar Reuniões',

    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_MEETING_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Participar da Reunião',
    'LBL_ACCEPT_STATUS' => 'Status de Aceitação',
    'LBL_ACCEPT_LINK' => 'Aceitar link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Não é possível participar desta reunião porque não é um Convidado.',
    'LBL_EXTNOT_RECORD_LINK' => 'Ver Reunião',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Não é possível iniciar esta reunião porque não é um Administrador ou o proprietário desta reunião.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Criar um convite',
    'LBL_CREATE_CONTACT' => 'Criar contato',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Criar Potencial',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Criar e adicionar',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Descuple, nenhum resultado foi achado. favor criar um convite abaixo.',
    'LBL_NO_ACCESS' => 'Você não tem acesso para criar $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repetir Type',
    'LBL_REPEAT_INTERVAL' => 'Repetir Intervalo',
    'LBL_REPEAT_DOW' => 'Repetir Dow',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Repetir Contagem',
    'LBL_REPEAT_PARENT_ID' => 'Repetir Parent ID',
    'LBL_RECURRING_SOURCE' => 'Fonte recorrente',

    'LBL_SYNCED_RECURRING_MSG' => 'Esta reunião foi originada em outro sistema e sincronizada com o SuiteCRM. Para fazer alterações, vá para ao registro original da reunião no outro sistema. As alterações feitas no outro sistema podem ser sincronizadas com esse registro.',
    'LBL_RELATED_TO' => 'Referente a:',

    // for reminders
    'LBL_REMINDERS' => 'Avisos padrão:',
    'LBL_REMINDERS_ACTIONS' => 'Ações:',
    'LBL_REMINDERS_POPUP' => 'Pop-up',
    'LBL_REMINDERS_EMAIL' => 'E-mail convite',
    'LBL_REMINDERS_WHEN' => 'Quando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remover lembrete',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adicionar Todos Convidados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adicionar lembrete',

    // for google sync
    'LBL_GSYNC_ID' => 'ID de evento do Google',
    'LBL_GSYNC_LASTSYNC' => 'Último Google Sync Timestamp',
);
