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
    'LBL_MODULE_NAME' => 'Tarefas',
    'LBL_MODULE_TITLE' => 'Tarefas: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Tarefas',
    'LBL_LIST_FORM_TITLE' => 'Lista de Tarefas',
    'LBL_NEW_FORM_TITLE' => 'Nova Tarefa',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LIST_CONTACT' => 'Contato',
    'LBL_LIST_PRIORITY' => 'Prioridade',
    'LBL_LIST_RELATED_TO' => 'Referente a',
    'LBL_LIST_DUE_DATE' => 'Data Limite',
    'LBL_LIST_DUE_TIME' => 'Hora Limite',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_STATUS' => 'Status:',
    'LBL_DUE_DATE' => 'Data Limite:',
    'LBL_DUE_TIME' => 'Hora Limite:',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_DUE_DATE_AND_TIME' => 'Data e Hora Limites:',
    'LBL_START_DATE_AND_TIME' => 'Data e Hora de Iní­cio:',
    'LBL_START_DATE' => 'Data Início:',
    'LBL_LIST_START_DATE' => 'Data Início:',
    'LBL_START_TIME' => 'Hora Inicial:',
    'DATE_FORMAT' => '(aaaa-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'Esta Tarefa tem Vencimento em',
    'LBL_DAYS_OVERDUE' => 'Esta Tarefa está Atrasada por ',
    'LBL_TASK_COMPLETED' => 'Esta Tarefa está Concluída',
    'LBL_NONE' => 'Nenhum',
    'LBL_CONTACT' => 'Contato:',
    'LBL_EMAIL_ADDRESS' => 'Endereço de E-mail',
    'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_NAME' => 'Nome:',
    'LBL_CONTACT_NAME' => 'Nome do Contato:',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_DATE_DUE_FLAG' => 'Sem Data Limite',
    'LBL_DATE_START_FLAG' => 'Sem Data de Início',
    'LBL_LIST_MY_TASKS' => 'As Minhas Tarefas em Aberto',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_IMPORT_TASKS' => 'Importar Tarefas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário Atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_CONTACT_ID' => 'ID Contato:',
    'LBL_PARENT_ID' => 'ID Origem:',
    'LBL_CONTACT_PHONE' => 'Telefone de Contato:',
    'LBL_PARENT_TYPE' => 'Tipo de Origem:',
    'LBL_TASK_INFORMATION' => 'Informação da Tarefa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
    //For export labels
    'LBL_DATE_DUE' => 'Data Limite',
    'LBL_RELATED_TO' => 'Referente a:',
);
