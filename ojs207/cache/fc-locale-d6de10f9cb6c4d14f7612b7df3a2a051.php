<?php return array (
  'plugins.pubIds.urn.urns' => 'URNs',
  'plugins.pubIds.urn.displayName' => 'Plugin URN',
  'plugins.pubIds.urn.description' => 'Este plugin habilita la asignación de Nombres de Recursos Uniformes para los objetos (números, artículos, versiones galeradas y archivos complementarios)',
  'plugins.pubIds.urn.manager.settings.description' => 'Por favor siga los siguientes pasos de configuración para gestionar y usar URN en OJS.',
  'plugins.pubIds.urn.manager.settings.urnSettings' => 'Configuración URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix' => 'Prefijo URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix.description' => 'El prefijo URN es la parte que nunca cambia de un URN (e.g. "urn:nbn:de:0000-").',
  'plugins.pubIds.urn.manager.settings.urnSuffix' => 'Sufijo URN',
  'plugins.pubIds.urn.manager.settings.urnSuffix.default' => 'Patrones por defecto.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.default.description' => '%j.v%vi%i para números<br />%j.v%vi%i.%a para artículos<br />%j.v%vi%i.%a.g%g para versiones galeradas <br />%j.v%vi%i.%a.s%s para archivos complementarios.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern' => 'Use el patrón introducido a continuación para generar sufijos URN. Use %j para las iniciales de la revista, %v para el número de volumen, %i para el número, %Y para el año, %a para el ID del artículo en OJS, %g para el ID de versión galerada en OJS, %s para el ID de archivo complementario en OJS and %p para el número de página.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.issues' => 'para números',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.articles' => 'para artículos',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.galleys' => 'para versiones galeradas.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.suppFiles' => 'para archivos complementarios.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.patternExample' => 'Por ejemplo, vol%viss%ipp%p puede crear el sufijo URN "vol3iss2pp230".',
  'plugins.pubIds.urn.manager.settings.urnSuffix.description' => 'Un sufijo URN puede tomar cualquier formato, pero debe ser único para cada item publicado',
  'plugins.pubIds.urn.manager.settings.urnSuffix.customIdentifier' => 'Introduzca un sufijo URN individual para cada item publicado. Encontrará un campo adicional para la URN en cada página de metadatos de cada item.',
  'plugins.pubIds.urn.manager.settings.clearURNs' => 'Borrar todos los URN.',
  'plugins.pubIds.urn.manager.settings.clearURNs.description' => 'Si cambia su configuración de URN , aquellos URN que ya fueron asignados no se verán afectados. Una vez que cambie su configuración de URN, use este botón para borrar todos los URN ya existentes para que las nuevas configuraciones tengan efecto en los objetos existentes.',
  'plugins.pubIds.urn.manager.settings.clearURNs.confirm' => '¿Está seguro de  eliminar todos los URN existente?',
  'plugins.pubIds.urn.manager.settings.checkNo' => 'Número de certificación',
  'plugins.pubIds.urn.manager.settings.checkNo.label' => 'El número de certificación se va a calcular automáticamente y se va a adherir al final, como el último dígito del URN.',
  'plugins.pubIds.urn.manager.settings.namespace' => 'Namespace',
  'plugins.pubIds.urn.manager.settings.namespace.choose' => 'Escojer',
  'plugins.pubIds.urn.manager.settings.namespace.description' => 'El namespace de identificador persistente usualmente requerido para el registro (EJ: en alemán Nationalbibliothek).',
  'plugins.pubIds.urn.manager.settings.urnResolver' => 'URL de resolución',
  'plugins.pubIds.urn.manager.settings.urnResolver.description' => '(EJ: http://nbn-resolving.de/)',
  'plugins.pubIds.urn.manager.settings.journalContent' => 'Contenido de la Revista',
  'plugins.pubIds.urn.manager.settings.URNsForJournalContent' => 'Escoja los objetos a los que se les asignara los  URN.',
  'plugins.pubIds.urn.manager.settings.enableIssueURN' => 'Los URNs serán asignados a números.',
  'plugins.pubIds.urn.manager.settings.enableArticleURN' => 'Los URNs serán asignados a artículos.',
  'plugins.pubIds.urn.manager.settings.enableGalleyURN' => 'Los URNs serán asignados a las versiones galeradas (EJ: archivos HTML o PDF ).',
  'plugins.pubIds.urn.manager.settings.enableSuppFileURN' => 'Los URNs serán asignados a los archivos complementarios.',
  'plugins.pubIds.urn.metadata' => 'Metadatos URN',
  'plugins.pubIds.urn.urnSuffix' => 'Sufijo URN',
  'plugins.pubIds.urn.urnSuffix.description' => 'Sufijo URN personalizado para este artículo',
  'plugins.pubIds.urn.calculateCheckNo' => 'Calcular número de certificación',
  'plugins.pubIds.urn.rt.metadata.urn' => 'Nombre Uniforme de Recurso',
  'plugins.pubIds.urn.manager.settings.form.journalContentRequired' => 'Por favor escoja los objetos a los que se les asignará un URN.',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixRequired' => 'Por favor introduzca un prefijo URN.',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixPattern' => 'El patrón de prefijo URN debe ser en el formato "urn:"&lt;NID&gt;":"&lt;NSS&gt;.',
  'plugins.pubIds.urn.manager.settings.form.urnIssueSuffixPatternRequired' => 'Por favor introduzca el patrón de sufijos URN para los números.',
  'plugins.pubIds.urn.manager.settings.form.urnArticleSuffixPatternRequired' => 'Por favor introduzca el patrón de prefijos sufijos URN para los artículos.',
  'plugins.pubIds.urn.manager.settings.form.urnGalleySuffixPatternRequired' => 'Por favor introduzca el patrón de prefijos sufijos URN para las versiones galeradas.',
  'plugins.pubIds.urn.manager.settings.form.urnSuppFileSuffixPatternRequired' => 'Por favor introduzca el patrón de prefijos sufijos URN para los archivos complementarios.',
  'plugins.pubIds.urn.manager.settings.form.namespaceRequired' => 'Por favor escoja un namespace.',
  'plugins.pubIds.urn.manager.settings.form.urnResolverRequired' => 'Por favor introduzca la URL de resolución',
  'plugins.pubIds.urn.form.customIdentifierNotUnique' => 'El sufijo URN dado ya está en uso para otro item publicado. Por favor introduzca un sufijo URN único para cada item.',
  'plugins.pubIds.urn.form.checkNoRequired' => 'Falta el número de certificación.',
  'plugins.pubIds.urn.editor.urnObjectTypeIssue' => 'número',
  'plugins.pubIds.urn.editor.urnObjectTypeArticle' => 'artículo',
  'plugins.pubIds.urn.editor.urnObjectTypeGalley' => 'galerada',
  'plugins.pubIds.urn.editor.urnObjectTypeSuppFile' => 'archivo suplementario',
  'plugins.pubIds.urn.editor.urnNotYetGenerated' => 'Lo que está viendo es una vista previa del URN que puede estar incompleta. Un URN no ha sido aún generado. Al publicar un número y visualizar la página pública ($pubObjectType) generará automáticamente un URN único para este {$pubObjectType}.',
); ?>