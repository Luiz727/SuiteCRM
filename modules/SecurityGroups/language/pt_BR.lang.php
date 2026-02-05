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
    'LBL_ALL_MODULES' => 'Todos',//rost fix
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
    'LBL_NONINHERITABLE' => 'Não herdável.',
    'LBL_LIST_NONINHERITABLE' => 'Não herdável.',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_FORM_TITLE' => 'Grupos de segurança',
    'LBL_MODULE_NAME' => 'Grupos de Segurança',
    'LBL_MODULE_TITLE' => 'Grupos de Segurança',
    'LNK_NEW_RECORD' => 'Novo Grupo de Segurança',
    'LNK_LIST' => 'Exibição de Lista',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Grupos de Segurança',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de Segurança',
    'LBL_USERS' => 'Usuários',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Perfis',
    'LBL_ROLES' => 'Perfis',

    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_ADDITIVE' => 'Permissões Adicionais',
    'LBL_ADDITIVE_DESC' => "O usuário obtem os maiores direitos de todos os perfis associados a ele ou ao(s) seu(s) Grupo(s) de Segurança",
    'LBL_STRICT_RIGHTS' => 'Permissões Restritas',
    'LBL_STRICT_RIGHTS_DESC' => "Se um usuário for membro de vários grupos, serão usados apenas os respectivos direitos do grupo atribuído ao registro atual.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Precedência de Perfis de Usuário',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Se um perfil está associado diretamente ao usuário, aquele perfil tem precedência sobre qualquer outro grupo de perfis.',
    'LBL_INHERIT_TITLE' => 'Regra de Herança de Grupos de Segurança',
    'LBL_INHERIT_CREATOR' => 'Herdar do Usuário criador',
    'LBL_INHERIT_CREATOR_DESC' => 'O registro herdará todos os grupos associados ao usuário que o criou.',
    'LBL_INHERIT_PARENT' => 'Herdar de registro ancestral',
    'LBL_INHERIT_PARENT_DESC' => 'Por exemplo: se uma Ocorrência for criada por um contato, a ocorrência herdará do grupo associado ao contato.',
    'LBL_USER_POPUP' => 'Tela de seleção de Grupos de Segurança para Novos Usuários',
    'LBL_USER_POPUP_DESC' => 'Quando um novo usuário for criado, será exibida uma tela de seleção de Grupos de Segurança para associar o usuário ao(s) grupo(s).',
    'LBL_INHERIT_ASSIGNED' => 'Herdar do Usuário Responsável',
    'LBL_INHERIT_ASSIGNED_DESC' => 'O registro herdará todos os Grupos de Segurança do usuário responsável. Outros grupos associados ao registro <b>não</b> serão removidos.',
    'LBL_POPUP_SELECT' => 'Habilitar Selecionador de Grupos',
    'LBL_POPUP_SELECT_DESC' => 'Quando um registro é criado por um usuário em mais de um grupo mostrar um painel de selecção do grupo na tela de criação. Caso contrário herdar que um grupo.',
    'LBL_FILTER_USER_LIST' => 'Lista de usuário do filtro',
    'LBL_FILTER_USER_LIST_DESC' => "Os usuários Não-admin podem somente atribuir aos usuários nos mesmos grupo(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupo Padrão para Novos Registros',
    'LBL_ADD_BUTTON_LABEL' => 'Adicionar',
    'LBL_REMOVE_BUTTON_LABEL' => 'Remover',
    'LBL_GROUP' => 'Grupo:',
    'LBL_MODULE' => 'Módulo:',

    'LBL_MASS_ASSIGN' => 'Grupos de Segurança: Associação em Massa',
    'LBL_ASSIGN' => 'Atribuir',
    'LBL_REMOVE' => 'Remover',
    'LBL_ASSIGN_CONFIRM' => 'Você tem certeza que quer adicionar este grupo a(o) ',
    'LBL_REMOVE_CONFIRM' => 'Você tem certeza que quer remover este grupo da(o) ',
    'LBL_CONFIRM_END' => ' registro(s) selecionado(s)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Grupo de Segurança/Usuário',
    'LBL_USER_NAME' => 'Nome do usuário:',
    'LBL_SECURITYGROUP_NAME' => 'Nome do Grupo de Segurança',
    'LBL_HOMEPAGE_TITLE' => 'Mensagens do Grupo',
    'LBL_TITLE' => 'Título',
    'LBL_ROWS' => 'Linhas',
    'LBL_POST' => 'Publicar',
    'LBL_SELECT_GROUP_ERROR' => 'Por favor, selecione um grupo e tente novamente.',

    'LBL_GROUP_SELECT' => 'Selecionar quais grupos devem ter acesso a este registro',
    'LBL_ERROR_DUPLICATE' => 'Devido a uma possível duplicidade detectada pelo SuiteCRM, você terá que adicionar os Grupos de Segurança para seu novo registro criado manualmente.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Falha na atualização porque o filtro de pesquisa foi modificado. Por favor, tente novamente.',

    'LBL_INBOUND_EMAIL' => 'Conta de e-mail de entrada',
    'LBL_INBOUND_EMAIL_DESC' => 'Só permitir o acesso a uma conta de e-mail se o usuário pertence a um grupo que é atribuído à conta de correio.',
    'LBL_PRIMARY_GROUP' => 'Grupo Principal',
    'LBL_CHECKMARK' => 'Checar',

);
