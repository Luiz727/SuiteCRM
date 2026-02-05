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
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_TITLE' => 'Oportunidades: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Oportunidade',
    'LBL_LIST_FORM_TITLE' => 'Lista de Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_OPPORTUNITY' => 'Oportunidade:',
    'LBL_NAME' => 'Nome da Oportunidade',
    'LBL_INVITEE' => 'Contatos',
    'LBL_CURRENCIES' => 'Moedas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Oportunidade',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_AMOUNT' => 'Valor da Oportunidade',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor',
    'LBL_LIST_DATE_CLOSED' => 'Data Prevista',
    'LBL_LIST_SALES_STAGE' => 'Fase da Venda',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_CURRENCY_NAME' => 'Nome da Moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo da Moeda',
    'LBL_DAYS_OPEN_FOR' => 'Esta Oportunidade foi Aberta para',

    'UPDATE' => 'Oportunidade - Atualizar Moeda',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AMOUNT' => 'Valor da Oportunidade',
    'LBL_AMOUNT_USDOLLAR' => 'Valor:',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_DATE_CLOSED' => 'Data de Fechamento Esperada:',
    'LBL_TYPE' => 'Tipo',
    'LBL_CAMPAIGN' => 'Campanha',
    'LBL_NEXT_STEP' => 'Próximo Passo',
    'LBL_LEAD_SOURCE' => 'Fonte do Potencial:',
    'LBL_SALES_STAGE' => 'Fase da Venda',
    'LBL_PROBABILITY' => 'Probabilidade (%)',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DUPLICATE' => 'Possível Oportunidade Duplicada',
    'MSG_DUPLICATE' => 'Ao criar esta oportunidade pode duplicar uma oportunidade. Você pode selecionar uma oportunidade da lista abaixo ou clicar em Nova Oportunidade para continuar a criar com os dados entrados previamente.',
    'LBL_NEW_FORM_TITLE' => 'Nova Oportunidade',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir a oportunidade.',
    'LBL_TOP_OPPORTUNITIES' => 'As Minhas Melhores Oportunidades',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que deseja remover essa oportunidade deste projeto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário Atribuído',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'As Minhas Oportunidades Fechadas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Fechadas Ganhas',
    'LBL_ASSIGNED_TO_ID' => 'Usuário atribuído:',
    'LBL_MODIFIED_NAME' => 'Modificado pelo Nome do Usuário',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanha',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectos',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
    'LBL_EDITLAYOUT' => 'Editar Layout'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_QUOTES' => 'Cotações',

    'LBL_SIZE_ANALYSIS' => 'Análise de Tamanho',
    'LBL_POSITION' => 'Posição',
    'LBL_OUT_OF' => 'Fora de',
);
