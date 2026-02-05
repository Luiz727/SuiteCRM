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
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Nome',
    'LBL_SAVING' => 'Salvando...',
    'LBL_SAVED' => 'Salvo',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_FORM_TITLE' => 'Publicações',
    'LBL_MODULE_NAME' => 'Fluxo de Atividades',
    'LBL_MODULE_TITLE' => 'Fluxo de Atividades',
    'LBL_DASHLET_DISABLED' => 'Aviso: O sistema de publicações está desativado, nenhuma publicação será postada até ele ser ativado',
    'LBL_RECORDS_DELETED' => 'Todas as Publicações anteriores foram removidas. Se o sistema de Publicações estiver ativo, novas entradas serão geradas automaticamente.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Tem certeza que deseja excluir todas as Publicações?',
    'LBL_FLUSH_RECORDS' => 'Excluir Publicações',
    'LBL_ENABLE_FEED' => 'Ativar o Dashlet Meu Fluxo de Atividades',
    'LBL_ENABLE_MODULE_LIST' => 'Ativar Publicações Para',
    'LBL_HOMEPAGE_TITLE' => 'Meu Fluxo de Atividades',
    'LNK_NEW_RECORD' => 'Criar Publicação',
    'LNK_LIST' => 'Publicação',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Publicação',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Nova Publicação',
    'LBL_ALL' => 'Todos',
    'LBL_USER_FEED' => 'Publicação de Usuário',
    'LBL_ENABLE_USER_FEED' => 'Ativar Publicação de Usuário',
    'LBL_TO' => 'Visível à Equipe',
    'LBL_IS' => 'está',
    'LBL_DONE' => 'Concluído',
    'LBL_TITLE' => 'Título',
    'LBL_ROWS' => 'Linhas',
    'LBL_CATEGORIES' => 'Módulos',
    'LBL_TIME_LAST_WEEK' => 'Semana Passada',
    'LBL_TIME_WEEKS' => 'semanas',
    'LBL_TIME_DAYS' => 'dias',
    'LBL_TIME_YESTERDAY' => 'Ontem',
    'LBL_TIME_HOURS' => 'Horas',
    'LBL_TIME_HOUR' => 'Hora',
    'LBL_TIME_MINUTES' => 'Minutos',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Segundos',
    'LBL_TIME_SECOND' => 'Segundo',
    'LBL_TIME_AND' => 'e',
    'LBL_TIME_AGO' => 'atrás',
// Activity stream
    'CREATED_CONTACT' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new contact"
    'CREATED_OPPORTUNITY' => 'criou uma <b>NOVA</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new opportunity"
    'CREATED_CASE' => 'criou uma <b>NOVA</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new case"
    'CREATED_LEAD' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in sentence "Administrator created a new lead"
    'FOR' => 'para', // Activity stream for cases
    'FOR_AMOUNT' => 'para a quantidade de', // Activity stream for cases
    'CLOSED_CASE' => '<b>ENCERROU</b> uma {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTEU</b> um {0}',
    'WON_OPPORTUNITY' => '<b>GANHOU</b> uma {0}',
    'WITH' => 'com',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Imagem',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Selecionar',
    'LBL_POST' => 'Publicar',
    'LBL_AUTHENTICATE' => 'Autenticar',
    'LBL_AUTHENTICATION_PENDING' => 'Nem todas as contas externas selecionadas foram autenticadas. Carregar em &#39;Cancelar&#39; para voltar à janela de Opções para autenticar as contas externas ou carregar em &#39;Ok&#39; para continuar sem autenticação.',
    'LBL_ADVANCED_SEARCH' => 'Filtro Avançado' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Mostrar mais opções',
    'LBL_HIDE_OPTIONS' => 'Ocultar Opções',
    'LBL_VIEW' => 'Visualizar',
    'LBL_POST_TITLE' => 'Publicar Atualização do Estado para ',
    'LBL_URL_LINK_TITLE' => 'URL para uso',
);
