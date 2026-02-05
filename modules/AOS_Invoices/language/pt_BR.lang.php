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
    'LBL_NAME' => 'Título',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir a conta.',
    'LBL_ACCOUNT_NAME' => 'Título',
    'LBL_ACCOUNT' => 'Empresa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ANNUAL_REVENUE' => 'Faturamento Anual:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_EMAIL' => 'Qualquer e-mail:',
    'LBL_ANY_PHONE' => 'Qualquer Telefone:',
    'LBL_RATING' => 'Classificação',
    'LBL_ASSIGNED_USER' => 'Usuário',
    'LBL_BILLING_ADDRESS_CITY' => 'Faturamento - Cidade:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faturamento - País:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faturamento - CEP:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faturamento - Estado:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faturamento - Rua 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faturamento - Rua 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faturamento - Rua 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faturamento - Rua:',
    'LBL_BILLING_ADDRESS' => 'Endereço de Faturamento:',
    'LBL_ACCOUNT_INFORMATION' => 'Visão geral',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DUPLICATE' => 'Possível Conta Duplicada',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Indústria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de e-mail',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Membro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizações Membro',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro e-mail:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_OWNERSHIP' => 'Propriedade:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Conta Principal',
    'LBL_PHONE_ALT' => 'Telefone Alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefone do Escritório:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_SAVE_ACCOUNT' => 'Salvar Conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Entrega - Paí­s:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CEP do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'UF de Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Entrega - Rua 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Entrega - Rua 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Entrega - Rua 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Entrega - Rua:',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de Entrega:',
    'LBL_STATE' => 'Estado ou Região:',
    'LBL_TICKER_SYMBOL' => 'Código Bolsa:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Contas',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'MSG_DUPLICATE' => 'Criar esta conta pode potencialmente criar uma conta duplicada. Você pode selecionar uma conta da lista abaixo ou clicar em Salvar para continuar a criar uma nova conta com os dados previamente inseridos.',
    'MSG_SHOW_DUPLICATES' => 'Criar esta conta pode potencialmente criar uma conta duplicada. Você pode clicar em Salvar para continuar a criar essa nova conta com os dados previamente inseridos ou você pode clicar em Cancelar.',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'LBL_LIST_FORM_TITLE' => 'Lista de Pedidos',
    'LBL_MODULE_NAME' => 'Pedidos',
    'LBL_MODULE_TITLE' => 'Pedidos: Início',
    'LBL_HOMEPAGE_TITLE' => 'Meus Pedidos',
    'LNK_NEW_RECORD' => 'Criar Pedido',
    'LNK_LIST' => 'Exibir Pedidos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Pedidos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_NEW_FORM_TITLE' => 'Novo Pedido',
    'LBL_TERMS_C' => 'Termos',
    'LBL_APPROVAL_ISSUE' => 'Questões para Aprovação',
    'LBL_APPROVAL_STATUS' => 'Estado da aprovação',
    'LBL_BILLING_ACCOUNT' => 'Contas',
    'LBL_BILLING_CONTACT' => 'Contatos',
    'LBL_EXPIRATION' => 'Válido Até',
    'LBL_INVOICE_NUMBER' => 'Número do Pedido',
    'LBL_OPPORTUNITY' => 'Nome da Oportunidade',
    'LBL_TEMPLATE_DDOWN_C' => 'Modelos de Pedido',
    'LBL_STAGE' => 'Fase da Cotação',
    'LBL_TERM' => 'Condições de Pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Desconto',
    'LBL_TAX_AMOUNT' => 'Imposto',
    'LBL_SHIPPING_AMOUNT' => 'Frete',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Título',
    'LBL_EMAIL_ADDRESSES' => 'Endereços de e-mail',
    'LBL_LINE_ITEMS' => 'Itens de linha',
    'LBL_GRAND_TOTAL' => 'Total Geral',
    'LBL_QUOTE_NUMBER' => 'Número da Cotação',
    'LBL_QUOTE_DATE' => 'Data da Cotação',
    'LBL_INVOICE_DATE' => 'Data do Pedido',
    'LBL_DUE_DATE' => 'Data Limite',
    'LBL_STATUS' => 'Estado',
    'LBL_INVOICE_STATUS' => 'Status do Pedido',
    'LBL_PRODUCT_QUANITY' => 'Quantidade',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Número da Peça',
    'LBL_PRODUCT_NOTE' => 'Anotação',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrição',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Desconto',
    'LBL_UNIT_PRICE' => 'Preço de Venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Imposto', //VAT
    'LBL_VAT_AMT' => 'Valor do Imposto', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Adicionar Linha de Produto',
    'LBL_SERVICE_NAME' => 'Serviço',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Preço de Venda',
    'LBL_SERVICE_DISCOUNT' => 'Desconto',
    'LBL_ADD_SERVICE_LINE' => 'Adicionar Linha de Serviço',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remover',
    'LBL_PRINT_AS_PDF' => 'Imprimir PDF',
    'LBL_EMAIL_INVOICE' => 'Pedido por e-mail',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Pedido',
    'LBL_EMAIL_NAME' => 'Pedido para',
    'LBL_NO_TEMPLATE' => 'ERRO\nNenhum modelo encontrado. Por favor, crie um modelo de Pedido no módulo de Modelos PDF',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Imposto',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF por e-mail',
    'LBL_ADD_GROUP' => 'Adicionar Grupo',
    'LBL_DELETE_GROUP' => 'Excluir Grupo',
    'LBL_GROUP_NAME' => 'Nome do Grupo',
    'LBL_GROUP_TOTAL' => 'Total do Grupo',
    'LBL_SHIPPING_TAX' => 'Imposto sobre Frete',
    'LBL_SHIPPING_TAX_AMT' => 'Imposto sobre Frete',
    'LBL_IMPORT_LINE_ITEMS' => 'Importar Linhas de Itens',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Moeda Padrão)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Desconto (Moeda Padrão)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Imposto (Moeda Padrão)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frete (Moeda Padrão)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Moeda Padrão)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Imposto sobre Frete (Moeda Padrão)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total Geral (Moeda Padrão)',
    'LBL_INVOICE_TO' => 'Pedido Para',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de itens de linha',
    'LBL_AOS_PRODUCT_QUOTES' => 'Cotações de produtos',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Cotações : Pedidos',
);
