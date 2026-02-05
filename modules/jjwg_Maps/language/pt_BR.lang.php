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

$mod_strings['LBL_MAP'] = 'Mapa';
$mod_strings['LBL_MODULE_NAME'] = 'Mapas';
$mod_strings['LBL_MODULE_TITLE'] = 'Mapas: Tela Principal';
$mod_strings['LBL_MODULE_ID'] = 'Mapas';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Lista de mapas';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marcador Customizado';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Área Customizada';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Minha Lista de Mapas';

$mod_strings['LBL_FLEX_RELATE'] = 'Relacionadas (centro):';
$mod_strings['LBL_MODULE_TYPE'] = 'Tipo de módulo para exibição:';
$mod_strings['LBL_DISTANCE'] = 'Distância (raio):';
$mod_strings['LBL_UNIT_TYPE'] = 'Tipo de unidade:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Exibir mapa';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupos:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupo';
$mod_strings['LBL_MAP_TYPE'] = 'Tipo';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Atribuído a:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Obter direcções';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Visualização do Google Maps';

$mod_strings['LNK_NEW_MAP'] = 'Adicionar novo mapa';
$mod_strings['LNK_NEW_RECORD'] = 'Adicionar novo mapa';
$mod_strings['LNK_MAP_LIST'] = 'Lista de mapas';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Teste de geocodificação';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Mapa de raio rápido';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Nenhum';
$mod_strings['LBL_MAP_ADDRESS'] = 'Endereço:';
$mod_strings['LBL_MAP_PROCESS'] = 'Processá-lo!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Último estado do geocódigo';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Módulo Contagens Geocodificadas';
$mod_strings['LBL_CRON_URL'] = 'URL do Cron:';
$mod_strings['LBL_MODULE_HEADING'] = 'Módulo';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Sem resultados';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Requisição Inválida';
$mod_strings['LBL_APPROXIMATE'] = 'Aproximado';
$mod_strings['LBL_EMPTY'] = 'Vazio';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Reiniciar';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'A tabela abaixo mostra o número de objetos geo codificados do módulo, agrupados por resposta de geo codificação. Lembre-se que o limite padrão de uso do Google Maps é de 2500 solicitações por dia. Este módulo irá armazenar em cache as informações de geo codificação de endereços durante o processamento para reduzir o número total de solicitações necessárias.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Para processar as solicitações de geocodificação é recomendável configurar uma Tarefa Cron noturna. Um ponto de entrada personalizado foi criado para essa finalidade e pode ser acessado sem a autenticação. A URL mostrada abaixo destina-se a ser usada com uma Tarefa Administrativa Agendada. Por favor, consulte a documentação para obter mais informações.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exportar URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Use os links abaixo para exportar endereços completos na necessidade de informações de geocodificação. Em seguida, use uma ferramenta de geocodificação on-line ou off-line para geocodificar os endereços em massa. Quando tiver terminado a geocodificação, importe os endereços para o módulo de Cache de Endereços para serem usados com seus mapas. Note que o módulo de Cache de Endereços é opcional. Todas as informações de geocodificação são armazenadas no módulo representativo.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Cache de endereço';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Adicionar à lista de alvos';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Processando...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Definições de configuração';
$mod_strings['LBL_CONFIG_SAVED'] = 'Configurações salvas com sucesso!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Endereço de Faturamento';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Endereço de envio';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Endereço Principal:';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Endereço alternativo';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex Relacionar';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Endereço (simples, usuários)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Customizado (Lógica do Controlador Customizada)';
$mod_strings['LBL_ENABLED'] = 'Activo';
$mod_strings['LBL_DISABLED'] = 'Desativado';
$mod_strings['LBL_DEFAULT'] = 'Padrão:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Padrão:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Módulos de geocódigo válido:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tabelas de geocódigo válido:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Configurações de tipo de endereço: Este define os tipos de endereços usados ​​quando os endereços de geocodificação dos valores aceitáveis. : os módulos de faturamento, transporte'; 'primárias'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tipo de endereço para ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tipo de endereço para as contas:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tipo de endereço para contatos:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tipo de Endereço para Potenciais:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tipo de endereço para as oportunidades:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(da conta relacionada)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tipo de endereço para as ocorrências:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tipo de endereço para projetos:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(de conta/oportunidade relacionada)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tipo de endereço para reuniões:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tipo de endereço para potenciais/alvos:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Objeto relacionado através de Flex relacionar campo';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Configurações do campo Grupo Marcador: Define o 'campo' para ser usado como o parâmetro de grupo ao exibir marcadores no mapa. Exemplos: nome_de_usuário, indústria, estado, etapa_de_venda, prioridade";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Campo de grupo para';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Campo de grupo de contas:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Grupo campo para contatos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Campo de grupo para Potenciais:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Grupo campo de oportunidades:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Campo de grupo para as ocorrências:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Grupo campo para projetos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Campo de grupo para reuniões:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Campo de grupo para potenciais/alvos:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geocodificação/Google configuração:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL de geocodificação da API:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL da API V3 do Google Maps ou Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Frase secreta para o Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'A frase secreta para ser usado com a comparação de Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limite de geocodificação:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' define o limite de consulta ao selecionar registros para geocodificar.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limite do google geocodificação:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' define o pedido quando limitar a geocodificação usando a API do Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limite de endereços de exportação:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' define o limite de consulta ao selecionar registros para exportação.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Permição 'Aproximada' do tipos de localização:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - permite a localização de tipos  'Aproximado' a serem considerados 'OK' pelos resultados da geocodificação.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Configurações do Cache do endereço:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Ativar Cache de endereço (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' permite que o módulo do cache de endereço possa recuperar dados da tabela de cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Permitem salvar endereço em Cache (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' permite que o módulo do cache de endereço possa salvar os dados para a tabela de cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Lógica dos ganchos da configuração:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Habilitar todos os ganchos de lógica: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' permite disparos lógicos para atualização automática, baseados nos objetos relacionados. É recomendável desativar ao atualizar seu SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Configurações de mapeamento/marcador:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limite de marcadores de mapa:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' define o limite de consulta ao selecionar registros a serem exibidos no mapa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Mapa Padrão Centro Latitude:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' define a posição latitude centro padrão para mapas.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Mapa Padrão Longitude Center:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' define a posição longitude centro padrão para mapas.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Mapa Padrão Tipo de unidade:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' define o tipo de unidade de medida padrão para cálculos de distância Valores: 'Mi' ( milhas) ou «km» (km)";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "mapa padrão a distância";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' define a distância padrão usado para os mapas baseados em distância.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Mapa Duplicate Ajuste Marcador:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' define um ajustamento de compensação a ser adicionada a longitude e latitude no caso da posição do marcador em duplicado.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Map Markers Clusterer Tamanho da Grade:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' é usado para definir o tamanho da grade de cálculo mapa clusterers.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Zoom Máximo para Clusterer de Marcadores de Mapa:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' é usado para definir o nível máximo de zoom em que não será aplicada clustering.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Nota importante: Todas as configurações salvas podem ser encontradas na tabela 'config' na categoria 'jjwg'. Note que um arquivo controller.php personalizado não deve ser usado para substituir as configurações.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Áreas';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marcadores';
$mod_strings['LBL_PARENT_ID'] = 'ID Origem:';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Parceiros';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Obtenha uma Chave';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Chave Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Por favor, defina a chave Api da Google no painel administrativo do Google Maps.';
