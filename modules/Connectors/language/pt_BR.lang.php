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

    'LBL_ADMINISTRATION_MAIN' => 'Definições do Conector',
    'LBL_AVAILABLE' => 'Disponível',
    'LBL_BACK' => '< Voltar',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Alguns campos obrigatórios foram deixados em branco. Prosseguir com a gravação das alterações?',
    'LBL_CONNECTOR_FIELDS' => 'Campos do Conector',
    'LBL_DATA' => 'Dados',
    'LBL_DEFAULT' => 'Padrão',
    'LBL_DISABLED' => 'Desativado',
    'LBL_ENABLED' => 'Ativado',
    'LBL_EXTERNAL' => 'Este conector permite aos Usuários criar registros de uma conta externa.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Para utilizar este conector, as propriedades também devem ser definidas na página de configurações de propriedades do conector.',
    'LBL_MERGE' => 'Mesclar',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Ativar Conectores',
    'LBL_MODIFY_DISPLAY_DESC' => 'Selecionar os módulos que são ativados para cada conector.',
    'LBL_MODULE_FIELDS' => 'Campos do Módulo',
    'LBL_MODIFY_MAPPING_TITLE' => 'Mapear Campos do Conector',
    'LBL_MODIFY_MAPPING_DESC' => 'Mapear campos de conector de modo a determinar que dados do conector possam ser visualizados e integrados nos registros do módulo.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Definir Propriedades do Conector',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Configurar as propriedades para cada conector, incluindo URLs e chaves API.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Gerrenciar Conector de Pesquisa',
    'LBL_MODIFY_SEARCH' => 'Pesquisar',
    'LBL_MODIFY_SEARCH_DESC' => 'Selecionar os campos do conector a utilizar na pesquisa por dados para cada módulo.',
    'LBL_MODULE_NAME' => 'Conectores',
    'LBL_NO_PROPERTIES' => 'Não há propriedades configuráveis para este conector.',
    'LBL_SAVE' => 'Gravar',
    'LBL_SUMMARY' => 'Resumo',
    'LBL_STEP1' => 'Pesquisar e Visualizar Dados',
    'LBL_STEP2' => 'Mesclar registros com',
    'LBL_TEST_SOURCE' => 'Testar Conector',
    'LBL_TEST_SOURCE_FAILED' => 'Teste Falhou',
    'LBL_TEST_SOURCE_SUCCESS' => 'Teste Bem Sucedido',
    'LBL_TITLE' => 'Fusão de Dados',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Erro: Não foram encontrados detalhes adicionais para o registro.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Nenhum módulo foi ativado para este conector. Selecione um módulo para este conector na página Ativar Conectores.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Erro: Nenhum conector ativo tem campos de pesquisa definidos.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Erro: Não existem campos de pesquisa definidos para o módulo e o conector. Por favor contate o administrador do sistema.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Erro: Não existem campos de módulo que tenham sido mapeados para exibição nos resultados. Por favor contate o administrador do sistema.',
    'LBL_INFO_INLINE' => 'Informação' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fechar' /*for 508 compliance fix*/,

);
