<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$errors = array(
		'CHARSET' => 'UTF-8',
		'MenuManager' => 'Gerente de menu',
		'ErrorLoginAlreadyExists' => 'o login %s já existe.',
		'ErrorGroupAlreadyExists' => 'o grupo %s já existe.',
		'ErrorDuplicateTrigger' => 'um Arquivo trigger de Nome \'<b>%s</b>\' está utilizado. Elimine o duplicado da pasta \'<b>%s</b>\'.',
		'ErrorFailToCreateFile' => 'Erro ao criar o arquivo \'<b<%s</b>\'',
		'ErrorFailToDeleteFile' => 'Error à eliminar o Arquivo \'<b>%s</b>\'.',
		'ErrorFailToRenameDir' => 'Error à renombar a pasta \'<b>%s</b>\' a \'<b>%s</b>\'.',
		'ErrorFailToCreateDir' => 'Erro ao criar a pasta \'<b>%s</b>\'',
		'ErrorFailToDeleteDir' => 'Error à eliminar a pasta \'<b>%s</b>\'.',
		'ErrorFailedToDeleteJoinedFiles' => 'impossível eliminar a entidade já que tem Arquivos anexos. Elimine antes os Arquivos anexos',
		'ErrorThisContactIsAlreadyDefinedAsThisType' => 'Este contato já está definido como contato para este tipo.',
		'ErrorCashAccountAcceptsOnlyCashMoney' => 'Esta conta bancaria é de tipo Caixa e só aceita o método de pagamento de tipo <b>especie</b>.',
		'ErrorFromToAccountsMustDiffers' => 'a conta origem e destino devem ser diferentes.',
		'ErrorBadThirdPartyName' => 'Nome de Fornecedor incorreto',
		'ErrorBadCustomerCodeSyntax' => 'a sintaxis do código cliente é incorreta',
		'ErrorCustomerCodeRequired' => 'Código cliente obrigatório',
		'ErrorCustomerCodeAlreadyUsed' => 'Código de cliente já utilizado',
		'ErrorPrefixRequired' => 'Prefixo obrigatório',
		'ErrorUrlNotValid' => 'O Endereço do Site está incorreta',
		'ErrorBadSupplierCodeSyntax' => 'a sintaxis do código fornecedor é incorreta',
		'ErrorSupplierCodeRequired' => 'Código fornecedor obrigatório',
		'ErrorSupplierCodeAlreadyUsed' => 'Código de fornecedor já utilizado',
		'ErrorBadParameters' => 'parâmetros incorretos',
		'ErrorFailedToWriteInDir' => 'impossível escribir na pasta %s',
		'ErrorFoundBadEmailInFile' => 'Encontrada sintaxis incorreta em email em %s linhas em Arquivo (Exemplo linha %s com email',
		'ErrorUserCannotBeDelete' => 'o usuário não pode ser eliminado. Quizá esé associado a elementos de Dolibarr.',
		'ErrorFieldsRequired' => 'não se indicaron Alguns campos obrigatórios',
		'ErrorFailedToCreateDir' => 'Error na creação de uma carpeta. Compruebe que 0 usuario del servidor Web tiene derechos de escritura en las carpetas de documentos de Dolibarr. Si 0  parámetro <b>safe_mode</b> está ativo en este PHP, Compruebe que los archivos php dolibarr pertencen ao usuario del servidor Web.',
		'ErrorNoMailDefinedForThisUser' => 'E-Mail não definido para este usuário',
		'ErrorFeatureNeedJavascript' => 'Esta Funcionalidade precisa de javascript ativo para funcionar. Modifique em configuração->entorno.',
		'ErrorTopMenuMustHaveAParentWithId0' => 'um menu do tipo \'Superior\' não pode ter um menu pai. Coloque 0 ao ID pai o busque um menu do tipo \'esquerdo\'',
		'ErrorLeftMenuMustHaveAParentId' => 'um menu do tipo \'esquerdo\' deve de ter um ID de pai',
		'ErrorFileNotFound' => 'Arquivo não encontrado (Rota incorreta, permissões incorretos o acesso prohibido por o parâmetro openbasedir)',
		'ErrorFunctionNotAvailableInPHP' => 'a função  <b>%s</b> é requerida por esta Funcionalidade, mas não se encuetra disponível nesta Versão/Instalação de PHP.',
		'ErrorDirAlreadyExists' => 'já existe uma pasta com ese Nome.',
		'ErrorFieldCanNotContainSpecialCharacters' => 'o campo <b>%s</b> não deve contener caracter0es especiais',
		'WarningAllowUrlFopenMustBeOn' => 'o parâmetro <b>allow_url_fopen</b> deve ser especificado a <b>on</b> ao Arquivo <b>php.ini</b> para discolocar deste módulo completamente ativo. deve modificar este Arquivo manualmente',
		'WarningBuildScriptNotRunned' => 'o script <b>%s</b> ainda não ha ejecutado a construcção de gráficos.',
		'WarningBookmarkAlreadyExists' => 'já existe um marcador com este título o esta URL.',
		'WarningPassIsEmpty' => 'Atenção: a senha da base de dados está vazia. Esto é buraco na segurança. deve agregar uma senha e a sua base de dados e alterar a sua Arquivo conf.php para reflejar esto.',
		'ErrorNoAccountancyModuleLoaded' => 'Módulo de Contabilidade não ativado',
		'ErrorExportDuplicateProfil' => 'o Nome do perfil já existe para este lote de exportação',
		'ErrorLDAPSetupNotComplete' => 'a configuração Dolibarr-LDAP é incompleta.',
		'ErrorLDAPMakeManualTest' => 'foi criado unn Arquivo .ldif na pasta %s. Trate de gastor manualmente este Arquivo a partir da linha de comandos para Obter mais detalles acerca do error.',
		'ErrorCantSaveADoneUserWithZeroPercentage' => 'No se pode cambiar uma acção ao estado no comenzada si tiene un usuario realizante de  a acción.',
		'ErrorRefAlreadyExists' => 'a referencia utilizada para a criação já existe',
		'ErrorPleaseTypeBankTransactionReportName' => 'Introduzca o Nome do registo bancario sobre a qual o escrito está constatado (formato AAAAMM ó AAAMMJJ)',
		'ErrorRecordHasChildren' => 'não se pode eliminar o registo porque tem hijos.',
		'ErrorFailedToSendPassword' => 'Erro ao enviar a senha',
		'ErrorPasswordDiffers' => 'As Senhas não são identicas, volte a introduzi-las',
		'ErrorForbidden' => 'acesso não autorizado.<br>Tentando acessar a uma página, zona o função sem estar em uma Sessão autentificada o que não se autoriza para a sua conta de usuário.',
		'ErrorForbidden2' => 'Os permissões para este usuário podem ser designados por o administrador Dolibarr mediante o menu %s-> %s.',
		'ErrorForbidden3' => 'Dolibarr não parece funcionar em uma Sessão autentificada. Consulte a documentação de Instalação de Dolibarr para saber cómo administrar as autenticaciones (htaccess, mod_auth u outro...).',
		'ErrorNoImagickReadimage' => 'a função imagick_readimage não está presente nesta Instalação de PHP. a resenha não está pois disponível. Os administradores podem desativar esta separador ao menu configuração - visualização.',
		'ErrorRecordAlreadyExists' => 'registo já existente',
		'ErrorCantReadFile' => 'Erro na leitura do arquivo \'&s\'',
		'ErrorCantReadDir' => 'Erro na leitura da pasta \'%s\'',
		'ErrorFailedToFindEntity' => 'Error de leitura da entidade \'%s\'',
		'ErrorBadLoginPassword' => 'Identificadores de usuário o senha incorretos',
		'ErrorLoginDisabled' => 'a sua conta está desativada',
		'ErrorFailedToRunExternalCommand' => 'Error ao tentar o comando externo. verifique que está disponível e ejecutable por a sua servidor PHP. sim o PHP <b>Safe Mode</b> está ativo, verifique que o comando encontra-se em uma pasta definida ao parâmetro <b>safe_mode_exec_dir</b>.',
		'ErrorFailedToChangePassword' => 'Error na modificação da senha',
		'ErrorLoginDoesNotExists' => 'a conta de usuário de <b>%s</b> não foi encontrado.',
		'ErrorLoginHasNoEmail' => 'Este usuário não tem e-mail. impossível continuar.',
		'ErrorBadValueForCode' => 'Valor incorreto para o código. volte a 	tentar com um Novo valor...',
		'ErrorFileIsInfectedWith' => 'Este Arquivo está infectado por %s',
		'WarningInstallDirExists' => 'Atenção: a pasta install (%s) ainda existe. uma vez concluida a Instalação a sua presença não é necessário, e representa um falho serio de segurança. Devería eliminarla o antes possível.',
		'WarningUntilDirRemoved' => 'Esta alerta seguirá ativa mientras a pasta exista (alerta visivel para Os Usuários admin somente).',
);
?>