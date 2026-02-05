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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Não foi possível determinar o Grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Não é possível determinar o proprietário',
    'ERR_UW_CONFIG_WRITE' => 'Erro ao atualizar o config.php com a nova informação de versão.',
    'ERR_UW_CONFIG' => 'Por favor, torne o seu arquivo config.php gravável e recarregue esta páǵina.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Diretório não é gravável',
    'ERR_UW_FILE_NOT_COPIED' => 'Arquivo não copiado',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema ao remover pacote ',
    'ERR_UW_FILE_NOT_READABLE' => 'Arquivo não pôde ser lido.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Arquivo não pode ser movido ou gravado',
    'ERR_UW_FLAVOR_2' => 'Versão da Atualização: ',
    'ERR_UW_FLAVOR' => 'Versão da Atualização do SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log não pôde ser criado/gravado.  Por favor, corrija as permissões no diretório do SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload definido como um valor maior que 1.  Por favor, modifique este parâmetro no seu php.ini e reinicie o servidor web.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Por favor especifique um arquivo e tente novamente!',
    'ERR_UW_NO_FILES' => 'Ocorreu um erro, nenhum arquivo foi encontrado para a verificação.',
    'ERR_UW_NO_MANIFEST' => 'No arquivo zip está em falta o arquivo manifest.php. Não podemos prosseguir.',
    'ERR_UW_NO_VIEW' => 'Visão especificada inválida.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Carregamento não valido',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Não pode criar o Diretório temp. Verifique as permissões do arquivo.',
    'ERR_UW_ONLY_PATCHES' => 'Apenas pode carregar patches nesta página.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Erros encontrados durante a verificação Preflight',
    'ERR_UW_UPLOAD_ERR' => 'Ocorreu um erro ao carregar o arquivo, por favor, tente novamente!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM - Versão do Sistema: ',
    'ERR_UW_PHP_VERSION' => 'Versão do PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM - Versão do Sistema: ',
    'ERR_UW_WRONG_TYPE' => 'Esta página não é para ser executada',
    'LBL_BUTTON_BACK' => 'Voltar',
    'LBL_BUTTON_CANCEL' => 'Cancelar',
    'LBL_BUTTON_DELETE' => 'Excluir Pacote',
    'LBL_BUTTON_DONE' => 'Concluído',
    'LBL_BUTTON_EXIT' => 'Sair',
    'LBL_BUTTON_NEXT' => 'Próximo >',
    'LBL_BUTTON_RECHECK' => 'Verificar novamente',
    'LBL_BUTTON_RESTART' => 'Reiniciar',

    'LBL_UPLOAD_UPGRADE' => 'Carregar um Pacote de Atualização',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'arquivo de Backup',
    'LBL_UW_BACKUP_FILES_EXIST' => 'arquivos de Backup desta atualização não podem ser encontrados em',
    'LBL_UW_BACKUP' => 'arquivo de Backup',
    'LBL_UW_CANCEL_DESC' => 'A atualização foi cancelada. Todos os arquivos temporários copiados e todos os arquivo da atualização carregados foram excluídos.',
    'LBL_UW_CHECK_ALL' => 'Verificar todos',
    'LBL_UW_CHECKLIST' => 'Passos da atualização',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'As cópias de segurança dos arquivos sobrescritos estão no seguinte diretório: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Mescle manualmente os seguintes arquivos: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Processo de atualização: Fundir Manualmente os arquivos',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor, utilize um método à sua escolha de verificação de diferenças para mesclar esses arquivos. Enquanto não concluir este passo a instalação do SuiteCRM estará num estado indefinido e a atualização estará incompleta.',
    'LBL_UW_COMPLETE' => 'Completo',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Todos os Requisitos de Configurações do Sistema satisfeitos',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Configurações do PHP: Passagem de Tempo da Chamada por Referência',
    'LBL_UW_COMPLIANCE_CURL' => 'Módulo de cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Módulo IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Módulo MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parâmetro MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Configurações PHP: Limite de Memória',
    'LBL_UW_COMPLIANCE_STREAM' => 'Configurações PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versão mínima do banco de dados',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Localização do php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versão mínima do PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Definições do PHP: Modo Seguro',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Definições Detectadas',
    'LBL_UW_COMPLIANCE_XML' => 'Parsing XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suporte a ZIP',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versão do PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'arquivos copiados com sucesso',

    'LBL_UW_DB_CHOICE1' => 'Assistente de atualização Executa SQL',
    'LBL_UW_DB_CHOICE2' => 'Queries SQL Manuais',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilégios da base de dados',
    'LBL_UW_DB_METHOD' => 'Método de atualização da base de dados',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTERAR TABELA [table] ADICIONAR COLUNA [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTERAR TABELA [table] MUDAR COLUNA [column]',
    'LBL_UW_DB_NO_CREATE' => 'CRIAR TABELA [table]',
    'LBL_UW_DB_NO_DELETE' => 'ELIMINAR DE [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTERAR TABELA [table] ELIMINAR COLUNA [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'ELIMINAR TABELA [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Todos os privilégios disponíveis',
    'LBL_UW_DB_NO_INSERT' => 'INSERIR EM [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECIONAR [x] DE [table]',
    'LBL_UW_DB_NO_UPDATE' => 'ATUALIZAR [table]',
    'LBL_UW_DB_PERMS' => 'Privilégio necessário',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Os seguintes pacotes de atualização foram instalados:',
    'LBL_UW_END_LOGOUT_PRE' => 'A atualização está completa.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Clique em "Concluído" para sair do Wizard de atualizações.',
    'LBL_UW_END_LOGOUT' => 'Se você planeja aplicar outro pacote de atualização usando o Assistente de Atualização, saia do sistema e efetue login novamente antes de fazer a atualização.',

    'LBL_UW_FILE_DELETED' => 'foi removido.',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permissões do arquivo',
    'LBL_UW_FILE_NO_ERRORS' => 'Todos os arquivos podem ser escritos',
    'LBL_UW_FILE_OWNER' => 'Proprietário',
    'LBL_UW_FILE_PERMS' => 'Permissões',
    'LBL_UW_FILE_UPLOADED' => 'foi carregado',
    'LBL_UW_FILE' => 'Nome do arquivo',
    'LBL_UW_FILES_QUEUED' => 'As seguintes atualizações estão prontas para serem instaladas:',
    'LBL_UW_FILES_REMOVED' => 'Os seguintes arquivos serão removidos do sistema:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Clique em Avançar para carregar pacotes de atualização.',
    'LBL_UW_FROZEN' => 'As etapas requeridas devem ser terminadas antes de continuar.',
    'LBL_UW_HIDE_DETAILS' => 'Esconder Detalhes',
    'LBL_UW_IN_PROGRESS' => 'Em processamento',
    'LBL_UW_INCLUDING' => 'Incluindo',
    'LBL_UW_INCOMPLETE' => 'Incompleto',
    'LBL_UW_MANUAL_MERGE' => 'Mesclar arquivos',
    'LBL_UW_MODULE_READY' => 'O módulo está pronto para ser instalado. Clique em Aplicar para proceder à instalação.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nenhuma atualização gravada detectada.',
    'LBL_UW_NONE' => 'Nenhum',
    'LBL_UW_OVERWRITE_DESC' => 'Todos os arquivos alterados serão substituídos, incluindo quaisquer personalizações de código e mudanças de modelo que você fez. Tem certeza que deseja prosseguir?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Criar um item da tarefa para fundir manualmente?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Deseja receber um e-mail de aviso sobre a Fusão Manual?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Os arquivos listados abaixo foram modificados. Itens não marcados que exigem uma junção manual. Qualquer mudança detectada no layout será automaticamente desmarcada; marque qualquer uma que possa ser sobrescrita.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Não é necessário juntar os arquivos manualmente.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Sem necessidade.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'arquivos preservados automaticamente',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Todos os testes aprovados. Pressione "Próximo" para submeter estas modificações.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Clique em Próximo para copiar os arquivos atualizados para o sistema.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Nota:</b> O resto do processo de atualização é obrigatório, e clicar em Próximo exigirá que você conclua o processo. Se você não deseja continuar, clique no botão Cancelar.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Substituir todos os arquivos',

    'LBL_UW_REBUILD_TITLE' => 'Resultado da reconstrução',
    'LBL_UW_SCHEMA_CHANGE' => 'Alterar Schema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar Definições detectadas.',
    'LBL_UW_SHOW_DB_PERMS' => 'Mostrar permissões da Base de Dados em falta.',
    'LBL_UW_SHOW_DETAILS' => 'Mostrar Detalhes',
    'LBL_UW_SHOW_DIFFS' => 'Mostrar arquivos que requerem fusão manual',
    'LBL_UW_SHOW_NW_FILES' => 'Mostrar arquivos com Más Permissões',
    'LBL_UW_SHOW_SCHEMA' => 'Mostrar Schema Change Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar Más Queries',
    'LBL_UW_SHOW' => 'Mostrar',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'arquivos Ignorados',
    'LBL_UW_SQL_RUN' => 'Verificar quando o SQL foi executado manualmente',
    'LBL_UW_START_DESC' => 'Bem-vindo ao Assistente de atualização SuiteCRM. Este ambiente é projetado para ajudar os administradores quando forem fazer a atualização do SuiteCRM. Por favor siga as instruções dadas cuidadosamente.',
    'LBL_UW_START_DESC2' => 'Nota: Recomendamos que crie uma cópia integral da instância SuiteCRM que usa em produção e teste o pacote de atualização num servidor local ou paralelo antes de implementar a nova versão. Se antes tiver efetuado alterações no arquivo "composer.json", por favor, e após concluir o processo de atualização, execute o comando:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Clique em Avançar para executar uma verificação de sistema para se certificar de que o sistema está pronto para o atualização. A verificações inclui permissões de arquivos e privilégios de base de dados, bem como configurações do servidor.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'O novo Assistente de atualização irá agora retomar o processo de atualização. Por favor continue a sua atualização.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bem-Vindo ao Novo Assistente de atualização',

    'LBL_UW_TITLE_CANCEL' => 'Cancelar',
    'LBL_UW_TITLE_COMMIT' => 'Aplicar atualização',
    'LBL_UW_TITLE_END' => 'Reportar',
    'LBL_UW_TITLE_PREFLIGHT' => 'Verificação Preflight',
    'LBL_UW_TITLE_START' => 'Iniciar',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Verificação do Sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Carregar Pacote',
    'LBL_UW_TITLE' => 'Assistente de Atualização',
    'LBL_UW_UNINSTALL' => 'Desinstalar',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceitar Licença',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Converter Licença',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Iniciar em progresso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Verificação do Sistema em Andamento',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Verificação de Licença em progresso',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Verificação Preflight em progresso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Cópia de arquivos em andamento',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade em progresso',
    'LBL_UW_COMMIT_DESC' => 'Clique em Avançar para executar scripts de atualização adicionais.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'atualização de Scripts em execução',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Sumário de atualização em progresso',
    'LBL_UPGRADE_IN_PROGRESS' => 'em progresso',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tempo decorrido',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Atualização de Cancelar e Limpar em progresso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'atualização pode demorar algum tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Verificações de carregamento em progresso',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Carregando pacote de atualização...',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Wizard de atualização Remove antigo 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Pós-atualização de Remoção Manual de Schema',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Método Antigo de Remoção de Schema',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar Schema Antigo que pode ser removido',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Queries Ignoradas',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'É necessário PHP versão 5 ou acima',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'A sua versão de PHP não é suportada pelo SuiteCRM. Necessita de instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_CANCEL' => 'Cancelar',
    'LBL_ML_COMMIT' => 'Submeter',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de Instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de Publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não-instalável',
    'LBL_ML_VERSION' => 'Versão',
    'LBL_ML_INSTALL' => 'Instalar',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Sua versão atual do php é: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'A versão do php recomendada é ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' ou superior.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Assistente de Atualização',
    'LBL_UPLOAD_SUCCESS' => 'O pacote de atualização foi carregado com sucesso. Clique em Avançar para executar uma verificação final.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirme Layouts',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
    'LBL_LAYOUT_MERGE_DESC' => 'Existem novos campos disponíveis que foram adicionados como parte desta atualização e podem ser acrescentados automaticamente seus layouts existentes do módulo. Para saber mais sobre os novos campos, por favor, consulte as notas de lançamento para a versão à qual você está atualizando.<br><br>Se você não deseja acrescentar novos campos, por favor, desmarque o módulo, e seus layouts personalizados permanecerá inalterados. Os campos estarão disponíveis no Studio após a atualização.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Clique em Avançar para confirmar as alterações e finalizar a atualização.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em Avançar para concluir a atualização.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirme Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados da confirmação de Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os layouts foram fundidos com êxito:',
    'LBL_SELECT_FILE' => 'selecione um arquivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do SuiteCRM:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'O arquivo enviado não é compatível com esta versão do PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do SuiteCRM: ',
    'LBL_LANGPACKS' => 'Pacotes de idioma' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Carregador de Módulo' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Atualizações de segurança' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Atualização:' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processando' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Não está definida uma versão compatível no arquivo de manifesto',
    'LBL_UPGRD_CSTM_CHK' => 'O processo de atualização irá atualizar alguns arquivos, mas esses arquivos também podem existir na pasta custom. Por favor, verifique as alterações antes de continuar:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'O arquivo carregado excede a diretiva upload_max_filesize no php.ini',
        2 => 'O arquivo carregado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
        3 => 'O arquivo carregado foi apenas parcialmente carregado.',
        4 => 'Nenhum arquivo foi carregado.',
        5 => 'Erro desconhecido.',
        6 => 'Pasta temporária em falta.',
        7 => 'Falha ao escrever o arquivo para o disco.',
        8 => 'Carregamento do arquivo interrompido por extensão.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Aviso: expiração da senha está definida para nenhum!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Por favor, atualize as suas configurações aqui',
);
