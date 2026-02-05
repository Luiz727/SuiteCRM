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
    'LBL_MODULE_NAME' => 'Tarefas de Projeto',
    'LBL_MODULE_TITLE' => 'Tarefas de Projeto: Início',

    'LBL_ID' => 'Id',
    'LBL_PROJECT_TASK_ID' => 'Id da Tarefa de Projeto',
    'LBL_PROJECT_ID' => 'Id do Projeto',
    'LBL_DATE_ENTERED' => 'Data de Criação:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_MODIFIED_USER_ID' => 'ID Modificado por',
    'LBL_CREATED_BY' => 'Criado por',
    'LBL_NAME' => 'Nome',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Data Limite',
    'LBL_TIME_DUE' => 'Hora Limite',
    'LBL_PREDECESSORS' => 'Antecessor',
    'LBL_DATE_START' => 'Data de Início',
    'LBL_DATE_FINISH' => 'Data de Conclusão',
    'LBL_TIME_START' => 'Hora de Início',
    'LBL_TIME_FINISH' => 'Hora de Conclusão',
    'LBL_DURATION' => 'Duração:',
    'LBL_DURATION_UNIT' => 'Unidade de Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_PARENT_ID' => 'Projeto',
    'LBL_PARENT_TASK_ID' => 'Id da Tarefa Principal',
    'LBL_PERCENT_COMPLETE' => '% Completa',
    'LBL_PRIORITY' => 'Prioridade',
    'LBL_DESCRIPTION' => 'Anotações:',
    'LBL_ORDER_NUMBER' => 'Ordem',
    'LBL_TASK_NUMBER' => 'Número da Tarefa',
    'LBL_TASK_ID' => 'ID da Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_ESTIMATED_EFFORT' => 'Esforço Estimado (hrs)',
    'LBL_ACTUAL_EFFORT' => 'Esforço Real (hrs)',
    'LBL_UTILIZATION' => 'Utilização (%)',
    'LBL_DELETED' => 'Excluído',
    'LBL_IMPORT_PROJECT_TASKS' => 'Importar Tarefas de Projeto',

    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PARENT_NAME' => 'Projeto',
    'LBL_LIST_PERCENT_COMPLETE' => 'Progresso (%)',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído a',
    'LBL_LIST_DATE_DUE' => 'Data Limite',
    'LBL_LIST_PRIORITY' => 'Prioridade',
    'LBL_LIST_CLOSE' => 'Concluir',
    'LBL_PROJECT_NAME' => 'Nome do Projeto',

    'LNK_NEW_PROJECT' => 'Criar Novo Projeto',
    'LNK_PROJECT_LIST' => 'Lista de Projetos',
    'LNK_NEW_PROJECT_TASK' => 'Criar Nova Tarefa de Projeto',
    'LNK_PROJECT_TASK_LIST' => 'Tarefas de Projetos',

    'LBL_LIST_MY_PROJECT_TASKS' => 'As Minhas Tarefas de Projeto Abertas',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_NEW_FORM_TITLE' => 'Nova Tarefa de Projeto',

    'LBL_HISTORY_TITLE' => 'Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',

    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a',
    'LBL_PARENT_NAME' => 'Nome de Projeto',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Linha do tempo',

    'LBL_SUBTASK' => 'Sub Tarefa',
    'LBL_LAG' => 'Atraso',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de Relacionamento',

    'LBL_ASCENDING' => 'Crescente',
    'LBL_DESCENDING' => 'Decrescente',
);
