<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin XML para artículos & números',
  'plugins.importexport.native.description' => 'Importar y exportar artículos y números completos',
  'plugins.importexport.native.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Se necesitan parámetros adicionales para importar datos de la siguiente manera, dependiendo del
nodo raíz del documento XML.


Si el nodo raíz es <article> o <articles>, se necesitan parámetros adicionales.
Se aceptan los siguientes formatos:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.export' => 'Exportar información',
  'plugins.importexport.native.export.issues' => 'Exportar números',
  'plugins.importexport.native.export.sections' => 'Exportar secciones',
  'plugins.importexport.native.export.articles' => 'Exportar artículos',
  'plugins.importexport.native.selectIssue' => 'Seleccionar número',
  'plugins.importexport.native.selectArticle' => 'Seleccionar artículo',
  'plugins.importexport.native.import.articles' => 'Importar artículos',
  'plugins.importexport.native.import.articles.description' => 'El archivo que está importando contiene uno o más artículos. Debe seleccionar un número y sección para importar estos artículos; si no quiere importarlos todos en la misma sección y número, puede o bien separarlos en diferentes archivos XML o moverlos a los números y secciones apropiados después de importarlos.',
  'plugins.importexport.native.import' => 'Importar información',
  'plugins.importexport.native.import.description' => 'Este plugin soporta la importación de información basada en la Definición de Tipo de Documento native.dtd. Los nodos raíz soportados son &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt;, y &lt;issues&gt;.',
  'plugins.importexport.native.import.error' => 'Error de importación',
  'plugins.importexport.native.import.error.description' => 'Ha ocurrido uno o más errores durante la importación. Compruebe que el formato del archivo de importación concuerda correctamente con la especificación. A continuación se muestran los detalles de los errores de importación.',
  'plugins.importexport.native.cliError' => 'ERROR:',
  'plugins.importexport.native.error.unknownUser' => 'El/la usuario/a especificado, "{$userName}", no existe.',
  'plugins.importexport.native.error.unknownJournal' => 'La ruta de la revista especificada, "{$journalPath}", no existe.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'No ha sido posible escribir en el archivo "{$fileName}".',
  'plugins.importexport.native.export.error.sectionNotFound' => 'No se ha encontrado ninguna sección que coincida con la especificada "{$sectionIdentifier}".',
  'plugins.importexport.native.export.error.issueNotFound' => 'No se ha encontrado ningún número que coincida con el ID especificado "{$issueId}".',
  'plugins.importexport.native.export.error.articleNotFound' => 'No se ha encontrado ningún artículo que coincida con el ID especificado "{$articleId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Este plugin no soporta el nodo raíz especificado "{$rootName}". Asegúrese de que el archivo está bien formado e inténtelo de nuevo.',
  'plugins.importexport.native.import.error.titleMissing' => 'No se ha encontrado el título del número.',
  'plugins.importexport.native.import.error.defaultTitle' => 'TÍTULO NO ENCONTRADO',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'Se ha especificado un tipo de identificación desconocido "{$identificationType}" en el atributo "identification" del elemento "issue" del número "{$issueTitle}".',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Se ha especificado un valor booleano inválido "{$value}". Por favor, use "true" o "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'Se ha especificado una fecha inválida "{$value}".',
  'plugins.importexport.native.import.error.unknownEncoding' => 'La información fue embedida usando un tipo de codificación desconocido "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'No se ha podido guardar una copia local de "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'La URL indicada "{$url}" para el número "{$issueTitle}" no era correcta. Las importaciones enviadas via web sólo soportan métodos http, https, ftp, o ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Se ha especificado un tipo de archivo suplementario desconocido "{$suppFileType}".',
  'plugins.importexport.native.import.error.couldNotCopy' => 'No se ha podido copiar una URL especificada "{$url}" a un archivo local".',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'Falta un título de sección para el número "{$issueTitle}". Por favor, asegúrese de que el documento XML es conforme con la DTD apropiada.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'La sección "{$sectionTitle}" del número "{$issueTitle}" no coindice con una sección de la revista, pero la abreviatura especificada ("{$sectionAbbrev}") coincide con una sección diferente.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'Falta un título de artículo para el número "{$issueTitle}" en la sección "{$sectionTitle}". Por favor, asegúrese de que el documento XML es conforme con la DTD apropiada, y que se ha proporcionado un título apropiado para el locale de la revista.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'Se ha proporcionado el título de artículo ("{$articleTitle}") para el número "{$issueTitle}" en un locale ("{$locale}") que no soporta esta revista.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'El resumen del artículo "{$articleTitle}" en el número "{$issueTitle}" se ha proporcionado en un locale ("{$locale}") que no soporta esta revista.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'El artículo "{$articleTitle}" de la sección "{$sectionTitle}" del número "{$issueTitle}" falta en una etiqueta de galerada.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Al artículo "{$articleTitle}" de la sección "{$sectionTitle}" del número "{$issueTitle}" le falta un archivo adicional.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Al artículo "{$articleTitle}" de la sección "{$sectionTitle}" del número "{$issueTitle}" le falta un archivo de galerada.',
  'plugins.importexport.native.import.success' => 'Importación completada',
  'plugins.importexport.native.import.success.description' => 'La importación se ha completado con éxito. A continuación le mostramos los elementos importados.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'Se indicó un patrocinador del artículo "{$articleTitle}" del número "{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'Se proporcionó una declaración de conflicto de intereses del autor "{$authorFullName}" del artículo "{$articleTitle}" del número "{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'Se proporcionó una biografía del autor "{$authorFullName}" del artículo "{$articleTitle}" del número "{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'La galerada del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'El título del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'El autor o creador del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'El tema del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'La información "custom type" del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'Una descripción del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'Un editor del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'Un patrocinador del archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'El archivo complementario "{$suppFileTitle}" del artículo "{$articleTitle}" del número "{$issueTitle}" se proporcionó en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'Se indicó un disciplina para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'Se indicó un tipo de artículo para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'Se indicó un tema de artículo para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'Se indicó una clasificación de artículo para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'Se indicó una "cobertura geográfica" para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'Se indicó un tipo de artículo para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'Se indicó una "cobertura de muestra" para el artículo "{$articleTitle}" del número"{$issueTitle}" en un idioma ("{$locale}") que esta revista no cubre actualmente.',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'Se proporcionó un Título de Número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'Se proporcionó una Descripción del Número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'Se proporcionó una Portada de Número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'Se proporcionó un Título de Sección ("{$sectionTitle}") en el número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'Se proporcionó una Abreviatura de Sección ("{$sectionAbbrev}") en el número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'Se proporcionó un Identificador de Sección ("{$sectionIdentifyType}") en el número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'Se proporcionó una Política de la Sección ("{$sectionPolicy}") en el número ("{$issueTitle}") utilizando un idioma  ("{$locale}") que esta revista aún no cubre.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'El Título de Sección "{$section1Title}" y el Título de Sección "{$section2Title}" en el número "{$issueTitle}" coinciden con las secciones existentes de la revista.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'El Título de Sección "{$section1Title}" en el número "{$issueTitle}" coincide con una sección existente de la revista, pero otro de los títulos de esa sección no coincide con ninguno de los títulos de la sección de la revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'La Abreviatura de Sección "{$section1Abbrev}" y la Abreviatura de Sección "{$section2Abbrev}" del número "{$issueTitle}" coinciden con las de secciones existentes de la revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'La Abreviatura de Sección "{$section1Abbrev}" del número "{$issueTitle}" coincide con la de una sección existente de la revista, si bien otra de las Abreviaturas de esa sección no coincide con ninguna abreviatura de la sección correspondiente de la revista.',
  'plugins.importexport.native.error.uploadFailed' => 'El envío del archivo falló; por favor asegúrese de que los envíos de archivos son posibles en su servidor y que el archivo no es muy grande para su configuración PHP o para la configuración de su servidor web.',
  'plugins.importexport.native.import.error.articleAuthorAffiliationLocaleUnsupported' => 'Se ha proporcionado una afiliación del autor "($ authorFullName)" y artículo "{$articleTitle}" en el número "($ issueTitle)" y localización ("($ locale)") que esta revista no soporta.',
  'plugins.importexport.native.import.error.invalidPubId' => 'Tu archivo importado contiene un set de datos con un {$pubIdType}: \'{$pubId}\' inválido.',
  'plugins.importexport.native.import.error.duplicatePubId' => 'Tu archivo importado contiene un set de datos con un {$pubIdType} \'{$pubId}\' que ya existe para otro objeto en la base de datos. Por favor, asegurate de nunca importar objetos con IDs que ya existen en la base de datos.',
  'plugins.importexport.native.import.error.unknownPubId' => 'Tu archivo importado contiene un set de datos con un tipo-ID \'{$pubIdType}\' que no puede ser manejado por ningun ID-plugin instalado. Por favor instala/activa el correspondiente ID-plugin antes de importar este set de datos.',
  'plugins.importexport.native.import.error.duplicatePublicGalleyId' => 'El ID público dado para la galerada de importación "{$publicId}" ya está en uso por otra galerada para el mismo artículo, "{$articleTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicSuppFileId' => 'El ID público dado para el archivo simplementario de importación "{$suppFileTitle}" ya está en uso por otro archivo suplementario para el mismo artículo, "{$otherSuppFileTitle}"',
  'plugins.importexport.native.import.error.duplicatePublicArticleId' => 'El ID público dado para el artículo de importación "{$articleTitle}" ya está en uso por otro artículo, "{$otherArticleTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicIssueId' => 'El ID público dado para el número de importación \'{$issueTitle}" a está en uso por otro número, "{$otherIssueTitle}".',
); ?>