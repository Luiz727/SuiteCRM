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
    'LBL_EDIT_LAYOUT' => 'Editar Layout',
    'LBL_EDIT_FIELDS' => 'Editar Campos Customizados',
    'LBL_SELECT_FILE' => 'Selecionar Arquivo',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Ferramentas',
    'LBL_SUITE_FIELDS_STAGE' => 'Campos SuiteCRM (clique nos itens para adicionar à área de armazenamento)',
    'LBL_VIEW_SUITE_FIELDS' => 'Exibir Campos do SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Falha ao Salvar',
    'LBL_CONFIRM_UNSAVE' => 'Nenhuma alteração será salva. Tem certeza que deseja continuar?',
    'LBL_PUBLISHING' => 'Publicando...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_FAILED_PUBLISHED' => 'Falha ao Publicar',
    'LBL_DROP_HERE' => '[Solte Aqui]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nome',
    'LBL_LABEL' => 'Rótulo',
    'LBL_MASS_UPDATE' => 'Atualização em massa',
    'LBL_DEFAULT_VALUE' => 'Valor Padrão',
    'LBL_REQUIRED' => 'Obrigatório',
    'LBL_DATA_TYPE' => 'Tipo',


    'LBL_HISTORY' => 'Histórico',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Bem-vindo ao Studio!</h2><br>O que gostaria de fazer hoje?<br><b>Por favor, selecione as opções abaixo.</b>',
    'LBL_SW_EDIT_MODULE' => 'Editar um Módulo',
    'LBL_SW_EDIT_DROPDOWNS' => 'Editar Dropdowns',
    'LBL_SW_EDIT_TABS' => 'Configurar Guias',
    'LBL_SW_RENAME_TABS' => 'Renomear Guias',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurar Agrupamento de Guias',
    'LBL_SW_EDIT_PORTAL' => 'Editar Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Reparar Campos Customizados',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrar Campos Customizados',

//Manager Backups History
    'LBL_MB_DELETE' => 'Excluir',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Criar um Dropdown',
    'LBL_DROPDOWN_NAME' => 'Nome do Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma do Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Valor exibido',
    'LBL_DD_DATABASEVALUE' => 'Valor da Base de Dados',
    'LBL_DD_ALL' => 'Todos',

//BUTTONS
    'LBL_BTN_SAVE' => 'Salvar',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_SAVEPUBLISH' => 'Salvar & Implantar',
    'LBL_BTN_HISTORY' => 'Histórico',
    'LBL_BTN_ADDROWS' => 'Adicionar Linhas',
    'LBL_BTN_UNDO' => 'Desfazer',
    'LBL_BTN_REDO' => 'Refazer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Adicionar Campo Customizado',
    'LBL_BTN_TABINDEX' => 'Editar Ordem dos Tabuladores',

//TABS
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_NAME' => 'Administração',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configurar os Filtros do Menu de Módulos',
    'LBL_GROUP_TAB_WELCOME' => 'Os grupos abaixo será exibida na barra de navegação para os Usuários que escolhem para ler módulos agrupados. Arrastar e soltar os módulos para os Grupos pretendidos. Nota: Os grupos vazios não serão exibidas na barra de navegação.',
    'LBL_RENAME_TAB_WELCOME' => 'Clique em qualquer tabulação Exibir Valor na tabela abaixo para renomear o tabulador.',
    'LBL_DELETE_MODULE' => 'Remover&nbsp;módulo<br />do&nbsp;filtro',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecione um idioma disponível, edite os rótulos de Grupo e clique em Salvar & implementar para aplicar os rótulos no idioma selecionado.',
    'LBL_ADD_GROUP' => 'Adicionar filtro',
    'LBL_NEW_GROUP' => 'Novo Grupo',
    'LBL_RENAME_TABS' => 'Renomear Módulos',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Erro: Valor da Chave Inválido: [*]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Salvar' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Desfazer' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Refazer' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Adicionar Linhas' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Selecione o idioma a editar.',
    'LBL_SINGULAR' => 'Rótulo Singular',
    'LBL_PLURAL' => 'Rótulo Plural',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Clique em <b>Salvar</b> para aplicar as alterações.'

);
