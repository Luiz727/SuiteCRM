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
    'LBL_MODULE_NAME' => 'Início',
    'LBL_NEW_FORM_TITLE' => 'Novo Contato',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_LAST_NAME' => 'Sobrenome:',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL_ADDRESS' => 'Endereço de Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Meu Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline Por Fase da Venda',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline Por Fase da Venda',
    'LNK_NEW_CONTACT' => 'Criar Contato',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidade',
    'LNK_NEW_LEAD' => 'Novo Potencial',
    'LNK_NEW_CASE' => 'Criar Ocorrência',
    'LNK_NEW_NOTE' => 'Nova Anotação ou Anexo',
    'LNK_NEW_CALL' => 'Registrar Ligação',
    'LNK_NEW_EMAIL' => 'Arquivar e-mail',
    'LNK_NEW_MEETING' => 'Agendar Reunião',
    'LNK_NEW_TASK' => 'Criar Tarefa',
    'LNK_NEW_BUG' => 'Reportar Bug',
    'LNK_NEW_SEND_EMAIL' => 'Escrever e-mail',
    'LBL_NO_ACCESS' => 'Você não tem acesso a esta área. Por favor, contate o seu administrador de sistemas para obter acesso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nenhum Resultado --',
    'LBL_NO_RESULTS' => '<h2>Nenhum resultado encontrado. Por favor, pesquise novamente.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Dicas para Pesquisa:</h3> <ul><li>Verifique se você selecionou as categorias adequadas acima.</li> <li>Ampliar seus critérios de busca.</li> <li>Se ainda assim não encontrar qualquer resultado, tente a opção de pesquisa avançada.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Adicionar Dashlets do SuiteCRM',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Feed de Notícias',
    'LBL_CLOSE_DASHLETS' => 'Fechar',
    'LBL_OPTIONS' => 'Opções',
    // dashlet search fields
    'LBL_TODAY' => 'Hoje',
    'LBL_YESTERDAY' => 'Ontem',
    'LBL_TOMORROW' => 'Amanhã',
    'LBL_NEXT_WEEK' => 'Próxima Semana',
    'LBL_LAST_7_DAYS' => 'Últimos 7 dias',
    'LBL_NEXT_7_DAYS' => 'Próximos 7 dias',
    'LBL_LAST_MONTH' => 'Mês Passado',
    'LBL_NEXT_MONTH' => 'Próximo Mês',
    'LBL_LAST_YEAR' => 'Ano Passado',
    'LBL_NEXT_YEAR' => 'Próximo Ano',
    'LBL_LAST_30_DAYS' => 'Últimos 30 dias',
    'LBL_NEXT_30_DAYS' => 'Próximos 30 dias',
    'LBL_THIS_MONTH' => 'Este Mês',
    'LBL_THIS_YEAR' => 'Este Ano',

    'LBL_MODULES' => 'Módulos',
    'LBL_CHARTS' => 'Gráficos',
    'LBL_TOOLS' => 'Ferramentas',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Resultados da Pesquisa',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Exibições do Módulo',
        'Portal' => 'Portal',
        'Charts' => 'Gráficos',
        'Tools' => 'Ferramentas',
        'Miscellaneous' => 'Diversas'
    ),
    'LBL_ADDING_DASHLET' => 'Adicionando Dashlet do SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Dashlet do SuiteCRM Adicionado',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Tem certeza que deseja remover este Dashlet do SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Removendo Dashlet do SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Dashlet do SuiteCRM removido',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Geral',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Apenas os Meus Itens',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Exibir as Linhas',

    'LBL_DASHLET_DELETE' => 'Excluir Dashlet do SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Atualizar Dashlet do SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Editar Dashlet do SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Meu CRM',
    'LBL_CLOSE_SITEMAP' => 'Fechar',

    'LBL_SEARCH' => 'Pesquisar',
    'LBL_CLEAR' => 'Limpar',

    'LBL_BASIC_CHARTS' => 'Gráficos Básicos',

    'LBL_DASHLET_SEARCH' => 'Encontrar Dashlet do SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versão',
    'LBL_BUILD' => 'Compilaçāo',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM Inc - fornecedores do framework CE',

    'LBL_DASHLET_TITLE' => 'Meus Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Título',
    'LBL_DASHLET_INCORRECT_URL' => 'Localização incorreta do site foi especificada',
    'LBL_DASHLET_OPT_URL' => 'Local do Website',
    'LBL_DASHLET_OPT_HEIGHT' => 'Altura do Dashlet (em pixeis)',
    'LBL_DASHLET_SUITE_NEWS' => 'Notícias do SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Descubra o SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtro Rápido' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtro Avançado' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ícone de Início',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Volte rapidamente para o painel de suavpágina inicial em um clique.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos os seus módulos importantes estão aqui.',
    'LBL_TOUR_MORE' => 'Mais Módulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Os seus módulos restantes estão aqui.',
    'LBL_TOUR_SEARCH' => 'Pesquisa de Texto',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Pesquisar ficou muito melhor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificações',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificações do aplicativo SuiteCRM vão aqui.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Acesse perfil, configurações e sair.',
    'LBL_TOUR_QUICKCREATE' => 'Criar Rápido',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Crie registros rapidamente sem sair do lugar.',
    'LBL_TOUR_FOOTER' => 'Rodapé Ocultável',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Expanda e recolha o rodapé com facilidade.',
    'LBL_TOUR_CUSTOM' => 'Aplicativos Customizados',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Integrações customizadas vão aqui.',
    'LBL_TOUR_BRAND' => 'Sua Marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Seu logotipo vai aqui. Você pode mover o mouse sobre, para mais informação.',
    'LBL_TOUR_WELCOME' => 'Bem-vindo ao SuiteCRM',
    'LBL_TOUR_WATCH' => 'Veja o que há de novo no SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok"> Nova barra de navegação simplificado</li> <li class="icon-ok"> novo rodapé recolhível</li> <li class="icon-ok"> Pesquisa melhorada</li> <li class="icon-ok"> Menu de ações atualizado </li></ul> <p>e muito mais!</p>',
    'LBL_TOUR_VISIT' => 'Para obter mais informações, visite nosso aplicativo',
    'LBL_TOUR_DONE' => 'Terminou!',
    'LBL_TOUR_REFERENCE_1' => 'Você sempre poderá referenciar nosso',
    'LBL_TOUR_REFERENCE_2' => 'através do link "Suporte" na guia perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentação',
    'LBL_TOUR_CALENDAR_URL_1' => 'Você compartilha seu calendário SuiteCRM com aplicações de terceiros 3rd, tais como o Microsoft Outlook ou Exchange? Se sim, você possui uma nova URL. Este nova URL, mais segura, inclui uma chave pessoal que irá impedir a publicação não autorizada de seu calendário.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recupere sua nova URL de calendário compartilhado.',
    'LBL_CONTRIBUTORS' => 'Colaboradores',
    'LBL_ABOUT_SUITE' => 'Sobre SuiteCRM',
    'LBL_PARTNERS' => 'Parceiros',
    'LBL_FEATURING' => 'Módulos AOS, AOW, AOR, AOP, AOE e Reagendamento por SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas as Recorrências',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Excluir Todas as Recorrências',
    'LBL_CONFIRM_REMOVE' => 'Tem certeza que deseja remover este registro?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM de código aberto para o mundo',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite por Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google maps por Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM logotipo fornecido pela Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribuição para a versão 7.3 SuiteCRM por ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Campos calculados do Workflow disponibilizados por Diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Sobre a tradução do SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Tradução colaborativa da Comunidade SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Tradução criada usando Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM é publicado sob uma licença de código aberto - AGPL 3',
    'LBL_ABOUT_SUITE_4' => 'Todos os códigos do SuiteCRM são gerenciado e desenvolvido pelo projeto serão liberados como código aberto - AGPL3',
    'LBL_ABOUT_SUITE_5' => 'Suporte para SuiteCRM está disponível em opções gratuitos e pagas',

    'LBL_SUITE_PARTNERS' => 'Temos parceiros leais de SuiteCRM que são apaixonados sobre código aberto. Para visualizar nossa lista completa, consulte o nosso site.',

    'LBL_SAVE_BUTTON' => 'Salvar',
    'LBL_DELETE_BUTTON' => 'Excluir',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Salvar e Enviar Convites',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fechar',

    'LBL_CREATE_NEW_RECORD' => 'Criar Atividade',
    'LBL_CREATE_CALL' => 'Registrar Ligação',
    'LBL_CREATE_MEETING' => 'Agendar Reunião',

    'LBL_GENERAL_TAB' => 'Detalhes',
    'LBL_PARTICIPANTS_TAB' => 'Convidados',
    'LBL_REPEAT_TAB' => 'Recorrência',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'A cada',
    'LBL_REPEAT_END' => 'Fim',
    'LBL_REPEAT_END_AFTER' => 'Depois de',
    'LBL_REPEAT_OCCURRENCES' => 'recorrências',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'Em',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Número de recorrências',
    'LBL_REPEAT_LIMIT_ERROR' => 'Sua requisição irá gerar mais que o Limite de reuniões',

    //Events
    'LNK_EVENT' => 'Evento',
    'LNK_EVENT_VIEW' => 'Exibir Evento',
    'LBL_DATE' => 'Data: ',
    'LBL_DURATION' => 'Duração: ',
    'LBL_NAME' => 'Título: ',
    'LBL_HOUR_ABBREV' => 'hora',
    'LBL_HOURS_ABBREV' => 'horas',
    'LBL_MINSS_ABBREV' => 'minutos',
    'LBL_LOCATION' => 'Local:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Descrição: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Ocorreu um erro ao executar a pesquisa. A sintaxe da consulta pode não ser válida.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Não foi possível encontrar a SearchEngine solicitada. Tente executar a pesquisa novamente.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Falha ao conectar o servidor Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Ocorreu um erro interno dentro da pesquisa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Um erro desconhecido ocorreu ao executar a pesquisa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Se o problema persistir, contate um administrador. Mais informações disponíveis nos logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'O índice de pesquisa para um ou mais módulos não pôde ser encontrado. Certifique-se de que o crontab está configurado e em execução, abra a configuração da Pesquisa Elástica e clique "Agendar indexação completa" e considere criar um trabalho de Agendador "Indexador da Pesquisa Elástica" se não existir.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nenhum resultado correspondente a seu critério. Tente ampliar sua pesquisa.',

    'LNK_TASK_VIEW' => 'Exibir Tarefa',
);
