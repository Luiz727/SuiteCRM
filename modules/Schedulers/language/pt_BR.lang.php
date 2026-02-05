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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Processar Tarefas do Workflow',
    'LBL_OOTB_REPORTS' => 'Executar Tarefas Agendadas de Geração de Relatório',
    'LBL_OOTB_IE' => 'Verificar Caixa de Entrada de E-mails',
    'LBL_OOTB_BOUNCE' => 'Executar Processo Noturno de Emails de Campanha Retornados',
    'LBL_OOTB_CAMPAIGN' => 'Executar campanhas de e-mail em massa noturnas',
    'LBL_OOTB_PRUNE' => 'Prune Database no dia 1º do Mês',
    'LBL_OOTB_TRACKER' => 'Remover campos apagados das tabelas de rastreadores',
    'LBL_OOTB_SUITEFEEDS' => 'Limpar Tabelas de Feed do SuiteCRM',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar notificações de lembrete de e-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar trabalhos na fila',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Remoção de documentos do sistema de arquivos',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Sincronizar Google Calendar',
    'LBL_OOTB_ELASTIC_INDEX' => 'Executar Indexação da Pesquisa Elástica',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
    'LBL_LIST_LIST_ORDER' => 'Agendas:',
    'LBL_LIST_NAME' => 'Agendador:',
    'LBL_LIST_RANGE' => 'Intervalo:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista de Tarefas agendadas:',
// human readable:
    'LBL_SUN' => 'Domingo',
    'LBL_MON' => 'Segunda',
    'LBL_TUE' => 'Terça',
    'LBL_WED' => 'Quarta',
    'LBL_THU' => 'Quinta',
    'LBL_FRI' => 'Sexta',
    'LBL_SAT' => 'Sábado',
    'LBL_ALL' => 'Todos os Dias',
    'LBL_EVERY' => 'A cada',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'No(a)',
    'LBL_RANGE' => 'a',
    'LBL_AND' => 'e',
    'LBL_MINUTES' => 'minutos',
    'LBL_HOUR' => 'horas',
    'LBL_HOUR_SING' => 'hora',
    'LBL_OFTEN' => 'Tão frequente quanto possível.',
    'LBL_MIN_MARK' => 'marca de minuto',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'h',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'meses',
    'LBL_DAY_OF_WEEK' => 'dia',
    'LBL_CRONTAB_EXAMPLES' => 'A lista acima usa notações crontab padrão.',
// Labels
    'LBL_ALWAYS' => 'Sempre',
    'LBL_CATCH_UP' => 'Executar Se Falhar',
    'LBL_CATCH_UP_WARNING' => 'Desmarque se esta Tarefa levar mais do que um momento para se executada.',
    'LBL_DATE_TIME_END' => 'Data e Hora de Fim',
    'LBL_DATE_TIME_START' => 'Data e Hora de Início',
    'LBL_INTERVAL' => 'Intervalo',
    'LBL_JOB' => 'Tarefa',
    'LBL_JOB_URL' => 'URL do trabalho',
    'LBL_LAST_RUN' => 'Última Execução com Sucesso',
    'LBL_MODULE_NAME' => 'Agendador do SuiteCRM',
    'LBL_MODULE_TITLE' => 'Agendadores',
    'LBL_NAME' => 'Nome da Tarefa',
    'LBL_NEVER' => 'Nunca',
    'LBL_NEW_FORM_TITLE' => 'Nova Tarefa agendada',
    'LBL_PERENNIAL' => 'perpétua',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Agendador',
    'LBL_SCHEDULER' => 'Agendador:',
    'LBL_STATUS' => 'Estado',
    'LBL_TIME_FROM' => 'Ativo Desde',
    'LBL_TIME_TO' => 'Ativo Até',
    'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
    'LBL_WARN_CURL' => 'Aviso:',
    'LBL_WARN_NO_CURL' => 'Este sistema não possui as bibliotecas cURL habilitadas/compiladas no módulo PHP (--with-curl=/path/to/curl_library).  Por favor contate o seu administrador de sistemas para resolver esta questão.  Sem a funcionalidade cURL, o agendador não pode executar as suas tarefas.',
    'LBL_BASIC_OPTIONS' => 'Configuração Básica',
    'LBL_ADV_OPTIONS' => 'Opções Avançadas',
    'LBL_TOGGLE_ADV' => 'Opções Avançadas',
    'LBL_TOGGLE_BASIC' => 'Opções Básicas',
// Links
    'LNK_LIST_SCHEDULER' => 'Agendadores',
    'LNK_NEW_SCHEDULER' => 'Nova Tarefa agendada',
// Messages
    'ERR_CRON_SYNTAX' => 'Sintaxe Cron inválida',
    'NTC_LIST_ORDER' => 'Configure a ordem pela qual este agendamento aparecerá nas listas de valores possíveis do campo agendador',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar o agendador do Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar o Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Para executar o agendador SuiteCRM, edite o arquivo crontab do servidor web incluindo este comando:',
    'LBL_CRON_LINUX_DESC2' => '... e adicione a seguinte linha no crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Você deve fazer isso somente depois que a instalação for concluída.',
    'LBL_CRON_WINDOWS_DESC' => 'Para executar o agendador do SuiteCRM, crie um arquivo .bat para executar usando as tarefas agendadas do Windows. O arquivo deve incluir os seguintes comandos:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Registro de tarefas',
    'LBL_EXECUTE_TIME' => 'Tempo de Execução',

//jobstrings
    'LBL_REFRESHJOBS' => 'Atualizar tarefas',
    'LBL_POLLMONITOREDINBOXES' => 'Sincronizar contas de Email de entrada',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistema de indexação da pesquisa em texto integral',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar campanhas de e-mail em massa noturnas',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar Processo Noturno de Emails de Campanha Retornados',
    'LBL_PRUNEDATABASE' => 'Prune Database no dia 1º do Mês',
    'LBL_TRIMTRACKER' => 'Remover campos apagados das tabelas de rastreadores',
    'LBL_TRIMSUGARFEEDS' => 'Limpar Tabelas de Feed do SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Executar o envio dos lembretes por email',
    'LBL_CLEANJOBQUEUE' => 'Limpar fila de trabahos',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Remoção de documentos do sistema de arquivos',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP - Verificar caixas monitorizadas',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Executar relatórios agendados',
    'LBL_PROCESSAOW_WORKFLOW' => 'Processar AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indexador da Pesquisa elástica',

    'LBL_SCHEDULER_TIMES' => 'Tempos de agendamento',
    'LBL_SYNCGOOGLECALENDAR' => 'Sincronizar calendários do Google',
);

global $sugar_config;
