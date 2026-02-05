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
    'LBL_ASSIGNED_TO_NAME' => 'Gerente de Projeto',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Nome de Modelo',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Lista de Modelos de Projetos',
    'LBL_MODULE_NAME' => 'Modelos de Projetos',
    'LBL_MODULE_TITLE' => 'Modelos de Projetos',
    'LBL_HOMEPAGE_TITLE' => 'Meus Modelos de Projetos',
    'LNK_NEW_RECORD' => 'Criar Modelos de Projeto',
    'LNK_LIST' => 'Exibir Modelos de Projeto',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importar Modelos de Projeto',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Modelos de Projeto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo Modelo de Projeto',
    'LBL_STATUS' => 'Estado',
    'LBL_PRIORITY' => 'Prioridade',
    'LBL_PROJECT_NAME' => 'Nome do Projeto',
    'LBL_START_DATE' => 'Data Início:',
    'LBL_CREATE_PROJECT_TITLE' => 'Criar um novo projeto a partir deste modelo?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modelos de Tarefas',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Usuários',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contatos',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Selecionar Recursos',
    'LBL_NEW_PROJECT_CREATED' => 'Novo projeto criado',
    'LBL_NEW_PROJECT' => 'Novo Projeto',
    'LBL_CANCEL_PROJECT' => 'Cancelar',

    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de Relação',
    'LBL_LAG' => 'Atraso',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_MONTHS' => 'Meses',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Exibir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração',
    'LBL_TASK_TITLE' => 'Editar Tarefa',
    'LBL_DURATION_TITLE' => 'Editar Duração',
    'LBL_DESCRIPTION' => 'Notas',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',

    'LBL_LIST_ASSIGNED_USER' => 'Gerente de Projeto',
    'LBL_UNASSIGNED' => 'Não Associado',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Recurso',
    'LBL_DELETE_TASK' => 'Excluir Tarefa',
    'LBL_VIEW_DETAIL' => 'Ver Detalhes',
    'LBL_ADD_NEW_TASK' => 'Adicionar Nova Tarefa',
    'LBL_ASSIGNED_USER_NAME' => 'Gerente de Projetos:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_START' => 'Iniciar',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Precedências',
    'LBL_PERCENT_COMPLETE' => 'Progresso (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Editar Propriedades da Tarefa',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerar dias úteis',
    'LBL_COPY_ALL_TASKS' => 'Copiar todas as tarefas com recursos',
    'LBL_COPY_SEL_TASKS' => 'Copiar tarefas selecionadas com recursos',
    'LBL_TOOLTIP_TITLE' => 'Dica',
    'LBL_TOOLTIP_TEXT' => 'Copia todas as tarefas com usuários atribuídos',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefone do Escritório:',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_ADD_INVITEE' => 'Adicionar Recurso',
    'LBL_FIRST_NAME' => 'Primeiro Nome',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Descuple, nenhum resultado foi achado. Favor criar um convite abaixo.',
    'LBL_CREATE_INVITEE' => 'Criar um Recurso',
    'LBL_CREATE_CONTACT' => 'Criar contato',
    'LBL_CREATE_AND_ADD' => 'Criar e adicionar',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_NO_ACCESS' => 'Você não tem acesso para criar $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lista de Recursos',
    'LBL_NONE' => 'Nenhum',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modelos de projeto: Projeto a partir do título de projeto',


);
