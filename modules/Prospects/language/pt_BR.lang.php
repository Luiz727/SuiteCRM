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
    'LBL_MODULE_NAME' => 'Alvos',
    'LBL_MODULE_ID' => 'Alvos',
    'LBL_INVITEE' => 'Relatórios Directos',
    'LBL_MODULE_TITLE' => 'Alvos: Tela Principal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Alvos',
    'LBL_LIST_FORM_TITLE' => 'Lista de Alvos',
    'LBL_NEW_FORM_TITLE' => 'Novo Alvo',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_FIRST_NAME' => 'Primeiro Nome',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_EXISTING_ACCOUNT' => 'Usada uma Conta existente',
    'LBL_CREATED_ACCOUNT' => 'Criada uma nova Conta',
    'LBL_CREATED_CALL' => 'Criada uma nova ligação',
    'LBL_CREATED_MEETING' => 'Criada uma nova reunião',
    'LBL_NAME' => 'Nome:',
    'LBL_PROSPECT_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mais Informações',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_OFFICE_PHONE' => 'Telefone do Escritório:',
    'LBL_ANY_PHONE' => 'Qualquer Telefone:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_LAST_NAME' => 'Sobrenome:',
    'LBL_MOBILE_PHONE' => 'Celular:',
    'LBL_HOME_PHONE' => 'Telefone Residencial:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua do Endereço Principal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade do Endereço Principal:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País do Endereço Principal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado do Endereço Principal:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal do Endereço Principal:',
    'LBL_ALT_ADDRESS_STREET' => 'Rua do Endereço Alternativo:',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade do Endereço Alternativo:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País do Endereço Alternativo:',
    'LBL_ALT_ADDRESS_STATE' => 'Estado do Endereço Alternativo:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal do Endereço Alternativo:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_BIRTHDATE' => 'Data de Nascimento:',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
    'LBL_ANY_EMAIL' => 'Outro E-mail qualquer:',
    'LBL_ASSISTANT' => 'Assistente:',
    'LBL_ASSISTANT_PHONE' => 'Telefone do Assistente:',
    'LBL_DO_NOT_CALL' => 'Não Telefonar:',
    'LBL_EMAIL_OPT_OUT' => 'Não Deseja receber E-mails:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço Principal:',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço Alternativo:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_CITY' => 'Cidade:',
    'LBL_STATE' => 'Estado ou Região:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_COUNTRY' => 'País:',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_OPP_NAME' => 'Nome da Oportunidade:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar novo contato automaticamente ao importar um vCard dos seus arquivos',
    'LBL_DUPLICATE' => 'Alvos Possivelmente Duplicados',
    'MSG_SHOW_DUPLICATES' => 'Ao criar este contato pode estar a duplicar um registro. Poderá clicar em Criar Contato para continuar ou escolher Cancelar.',
    'MSG_DUPLICATE' => 'O registro de alvo que você está prestes a criar pode ser uma duplicata de um registro de alvo já existente. Registros de alvos contendo nomes ou endereços de e-mail semelhantes estão listados abaixo.<br>Clique em salvar para continuar a criar este novo alvo, ou clique em Cancelar para retornar ao módulo sem criar o alvo.',
    'LNK_IMPORT_VCARD' => 'Criar a partir de um vCard',
    'LNK_NEW_ACCOUNT' => 'Criar Nova Conta',
    'LNK_NEW_OPPORTUNITY' => 'Criar Nova Oportunidade',
    'LNK_NEW_CASE' => 'Criar Ocorrência',
    'LNK_NEW_NOTE' => 'Nova Anotação ou Anexo',
    'LNK_NEW_CALL' => 'Registrar Ligação',
    'LNK_NEW_EMAIL' => 'Arquivar E-mail',
    'LNK_NEW_MEETING' => 'Agendar Nova Reunião',
    'LNK_NEW_TASK' => 'Criar Nova Tarefa',
    'LNK_NEW_APPOINTMENT' => 'Criar Novo Compromisso',
    'LNK_IMPORT_PROSPECTS' => 'Importar Alvos',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'NTC_SNOOZE_CONFIRMATION' => 'Você tem certeza que deseja adiar?',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza de que pretende remover este contato desta ocorrência?',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir o contato.',
    'LBL_SALUTATION' => 'Saudação',
    'LBL_CREATED_OPPORTUNITY' => 'Criada uma nova oportunidade',
    'LNK_SELECT_ACCOUNT' => "Seleccionar uma Conta",
    'LNK_NEW_PROSPECT' => 'Criar Alvo',
    'LNK_PROSPECT_LIST' => 'Ver Alvos',
    'LNK_NEW_CAMPAIGN' => 'Criar Nova Campanha',
    'LNK_CAMPAIGN_LIST' => 'Campanhas',
    'LNK_NEW_PROSPECT_LIST' => 'Criar Nova Lista de Alvos',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de Alvos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Alvos Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Alvos Marcados',
    'LBL_INVALID_EMAIL' => 'E-mail Inválido:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Alvos',
    'LBL_PROSPECT_LIST' => 'Lista de Alvos',
    'LBL_CONVERT_BUTTON_TITLE' => 'Converter Alvo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Converter Alvo',
    'LNK_NEW_CONTACT' => 'Novo contato',
    'LBL_CREATED_CONTACT' => "Criado um novo contato",
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'registro de Campanha',
    'LBL_TRACKER_KEY' => 'Chave do Rastreador',
    'LBL_LEAD_ID' => 'Id do Potencial',
    'LBL_CONVERTED_LEAD' => 'Potencial Convertido',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
