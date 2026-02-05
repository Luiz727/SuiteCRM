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
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir a conta.',
    'LBL_ACCOUNT_NAME' => 'Nome da Empresa:',
    'LBL_ACCOUNT' => 'Empresa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ANNUAL_REVENUE' => 'Faturamento Anual:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_EMAIL' => 'Qualquer e-mail:',
    'LBL_EMAIL_NON_PRIMARY' => 'E-mails secundários',
    'LBL_ANY_PHONE' => 'Qualquer Telefone:',
    'LBL_ASSIGNED_TO_NAME' => 'Usuário:',
    'LBL_RATING' => 'Classificação',
    'LBL_ASSIGNED_TO' => 'Atribuído a:',
    'LBL_ASSIGNED_USER' => 'Atribuído a:',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
    'LBL_BILLING_ADDRESS_CITY' => 'Cidade de Faturamento:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'País de Faturamento:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Código Postal de Faturamento:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado de Faturamento:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rua de Faturamento 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rua de Faturamento 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rua de Faturamento 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rua de Faturamento:',
    'LBL_BILLING_ADDRESS' => 'Endereço de Faturamento:',
    'LBL_ACCOUNT_INFORMATION' => 'Informação da Empresa',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DATE_ENTERED' => 'Data de Criação:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DESCRIPTION_INFORMATION' => 'Informação de Descrição',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DUPLICATE' => 'Conta Possivelmente Duplicada',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Indústria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de E-mail',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Membro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizações Membro',
    'LBL_NAME' => 'Nome:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_OWNERSHIP' => 'Propriedade:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID da Conta de Origem',
    'LBL_PHONE_ALT' => 'Telefone Alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefone do Escritório:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL_ADDRESS' => 'Endereço(s) de E-mail',
    'LBL_EMAIL_ADDRESSES' => 'Endereço(s) de E-mail',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_SAVE_ACCOUNT' => 'Salvar Conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Endereço de Envio:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CEP do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'UF de Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua de Entrega 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua de Entrega 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua de Entrega 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rua do Endereço de Entrega',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de Envio',

    'LBL_STATE' => 'Estado:',
    'LBL_TICKER_SYMBOL' => 'Símbolo de Bolsa',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Website:',

    'LNK_ACCOUNT_LIST' => 'Contas',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',

    'MSG_DUPLICATE' => 'O registro que está prestes a criar pode ser uma duplicidade. Registros de conta contendo nomes semelhantes estão listados abaixo.<br>Clique em criar conta para continuar a criar essa nova conta, ou selecione uma conta existente listada abaixo.',
    'MSG_SHOW_DUPLICATES' => 'O registro que está prestes a criar pode ser uma duplicidade. Registros contendo nomes semelhantes estão listados abaixo.<br>Clique em Salvar para continuar a criar esse novo registro, ou em Cancelar para retornar ao módulo sem criar o registro.',

    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',

    'LBL_EDIT_BUTTON' => 'Editar  ',
    'LBL_REMOVE' => 'Remover',

);
