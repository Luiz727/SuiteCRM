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
    'LBL_MODULE_NAME' => 'Projeto',
    'LBL_MODULE_TITLE' => 'Projetos: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projeto',
    'LBL_LIST_FORM_TITLE' => 'Lista de Projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data de Criação:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_ASSIGNED_USER_NAME' => 'Gerente de Projetos:',
    'LBL_MODIFIED_USER_ID' => 'ID Modificado por:',
    'LBL_CREATED_BY' => 'Criado por:',
    'LBL_NAME' => 'Nome:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DELETED' => 'Excluído:',
    'LBL_DATE' => 'Data:',
    'LBL_DATE_START' => 'Data de Início',
    'LBL_DATE_END' => 'Data de término:',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs)',
    'LBL_LIST_END_DATE' => 'Data de Término',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nenhum',
    'LBL_ALL_PROJECTS' => 'Todos os projetos',
    'LBL_ALL_USERS' => 'Todos os Usuários',
    'LBL_ALL_CONTACTS' => 'Todos os Contatos',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo Projeto',
    'LNK_NEW_PROJECT' => 'Novo Projeto',
    'LNK_PROJECT_LIST' => 'Lista de Projetos',
    'LNK_NEW_PROJECT_TASK' => 'Nova Tarefa de Projeto',
    'LNK_PROJECT_TASK_LIST' => 'Tarefas de Projeto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Rastreador de Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_START' => 'Iniciar',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Precedências',
    'LBL_PERCENT_COMPLETE' => 'Progresso (%)',
    'LBL_MORE' => 'Mais...',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_NEXT_WEEK' => 'Próximo',
    'LBL_PROJECT_INFORMATION' => 'Informação do Projeto',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Exibir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração',
    'LBL_TASK_TITLE' => 'Editar Tarefa',
    'LBL_DURATION_TITLE' => 'Editar Duração',
    'LBL_LAG' => 'Atraso',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_MONTHS' => 'Meses',
    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_ADD_NEW_TASK' => 'Adicionar Nova Tarefa',
    'LBL_DELETE_TASK' => 'Excluir Tarefa',
    'LBL_EDIT_TASK_PROPERTIES' => 'Editar Propriedades da Tarefa',
    'LBL_PARENT_TASK_ID' => 'Id da tarefa pai',
    'LBL_RESOURCE_CHART' => 'Calendário de Recursos',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de Relação',
    'LBL_ASSIGNED_TO' => 'Gerente de Projeto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modelo de Projeto',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Gerente de Projeto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projeto',
    'LBL_TOOLTIP_TASK_NAME' => 'Nome da Tarefa',
    'LBL_TOOLTIP_TITLE' => 'Tarefas de Hoje',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duração',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Recurso é um Usuário ',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Recurso é um Contato',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mês Anterior',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Próximo Mês',
    'LBL_RESOURCE_CHART_WEEK' => 'Semana',
    'LBL_RESOURCE_CHART_DAY' => 'Dia',
    'LBL_RESOURCE_CHART_WARNING' => 'Não há recursos associados ao projeto.',
    'LBL_PROJECT_DELETE_MSG' => 'Você tem certeza que deseja excluir este projeto e suas tarefas associadas?',
    'LBL_LIST_MY_PROJECT' => 'Meus projetos',
    'LBL_LIST_ASSIGNED_USER' => 'Gerente de Projeto',
    'LBL_UNASSIGNED' => 'Não Associado',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Recurso',

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
    'LBL_REMOVE' => 'Remover',
    'LBL_VIEW_DETAIL' => 'Ver Detalhes',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerar dias úteis',

    'LBL_IMPORT_PROJECTS' => 'Importar Projetos',
    
    'LBL_PROJECTS_SEARCH' => 'Pesquisar projetos',
    'LBL_USERS_SEARCH' => 'Pesquisar usuários',
    'LBL_CONTACTS_SEARCH' => 'Selecionar contatos',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Pesquisar',

    'LBL_CHART_TYPE' => 'Tipo',
    'LBL_CHART_WEEKLY' => 'Semanal',
    'LBL_CHART_MONTHLY' => 'Mensal',
    'LBL_CHART_QUARTERLY' => 'Trimestral',

    'LBL_RESOURCE_CHART_MONTH' => 'Mês',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contatos do projeto a partir do título dos contatos',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modelos de projeto: Projeto a partir do título de projeto',
    'LBL_AOS_QUOTES_PROJECT' => 'Cotações: Projeto',

    'LBL_ASCENDING' => 'Crescente',
    'LBL_DESCENDING' => 'Decrescente',
);
