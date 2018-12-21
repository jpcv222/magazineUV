<?php return array (
  'plugins.generic.lucene.displayName' => 'Plugin de Búsqueda Lucene',
  'plugins.generic.lucene.description' => 'El plugin Lucene provee soporte multi-lenguaje, resultados relevantes de búsqueda avanzada, indexación rápida, mejor escalabilidad y más.',
  'plugins.generic.lucene.settings' => 'Configuración',
  'plugins.generic.lucene.settings.description' => '<p>El plugin Lucene accede al índice de búsqueda Lucene a través de un servidor Solr. </p>
		<p><strong>Por favor, asegúrese de leer el archivo README del plugin (plugins/generic/lucene/README) antes de intentar cambiar la configuración por defecto</strong></p>
		<p>Si esta usando el escenario embebido detrás de un firewall, como se explica en el README, probablemente debería dejar todas las configuraciones por defecto.</p>',
  'plugins.generic.lucene.settings.instId' => 'ID de instalación única',
  'plugins.generic.lucene.settings.instIdRequired' => 'Por favor introduzca el ID que identifica univocamente esta instalación de OJS en el servidor de búsqueda Solr.',
  'plugins.generic.lucene.settings.instIdInstructions' => 'Si esta usando un servidor central de búsqueda, entonces debería proveer de un ID único de instalación para toda instalación de OJS que comparta el mismo índice de búsqueda. Esta puede ser un texto arbitrario, pero debe ser diferente para cada servidor OJS participante. (EJ: la IP estática del servidor si se tiene una sola instalación de OJS por servidor).',
  'plugins.generic.lucene.settings.luceneSettings' => 'Plugin Lucene: Configuraciones de servidor Solr',
  'plugins.generic.lucene.settings.password' => 'Clave',
  'plugins.generic.lucene.settings.passwordInstructions' => 'Por favor introduzca  una clave para el serivdor Sorlr.',
  'plugins.generic.lucene.settings.passwordRequired' => 'Por favor introduzca una clave válida para autentificarse en el servidor Solr.',
  'plugins.generic.lucene.settings.searchEndpoint' => 'Url de punto de finalización de búsqueda',
  'plugins.generic.lucene.settings.searchEndpointInstructions' => 'El punto de finalización  de búsqueda Solr consiste en la URL del servidor y un manejador de búsqueda. Ver las configuraciones por defecto para obtener un ejemplo. Solo cambie estas configuraciones si esta usando un servidor central de búsqueda.',
  'plugins.generic.lucene.settings.searchEndpointRequired' => 'Por favor introduzca una URL válida, para representar el punto de finalización de búsqueda (servidor de búsqueda Solr y manejador de búsqueda) al que querría conectarse.',
  'plugins.generic.lucene.settings.username' => 'Nombre de Usuario',
  'plugins.generic.lucene.settings.usernameInstructions' => 'El servidor de búsqueda Solr usa una autentificación HTTP Básica. Por favor introduzca el nombre de usuario.',
  'plugins.generic.lucene.settings.usernameRequired' => 'Por favor introduzca un nombre de usuario válido para autentificarse en el servidor de búsqueda Solr.(dos puntos no  permitidos)',
  'plugins.generic.lucene.results.orderBy' => 'Ordenar resultados por',
  'plugins.generic.lucene.results.orderBy.relevance' => 'Relevancia',
  'plugins.generic.lucene.results.orderBy.author' => 'Autor',
  'plugins.generic.lucene.results.orderBy.issue' => 'Número de Revista',
  'plugins.generic.lucene.results.orderBy.date' => 'Fecha de publicación',
  'plugins.generic.lucene.results.orderBy.journal' => 'Título de la Revista',
  'plugins.generic.lucene.results.orderBy.article' => 'Titulo del Artículo',
  'plugins.generic.lucene.results.orderDir.asc' => 'Ascendiente',
  'plugins.generic.lucene.results.orderDir.desc' => 'Descendiente',
  'plugins.generic.lucene.results.syntaxInstructions' => '<h4>Tips de búsqueda:</h4><ul>
<li>Los términos de búsqueda no son sensibles a mayúsculas</li>
<li>Las palabras comunes son ignoradas</li>
<li>Por defecto, son retornados artículos que contengan <em>ALGÚN</em> término en la búsqueda (EJ:, <em>OR</em> es implicado)</li>
<li>Asegurese de que la palabra exista en el artículo, agregándole el símbolo <strong>+</strong>; EJ: <em>+Revista +acceso universitario académico</em></li>
<li>Combine varias palabas con  <em>AND</em> para encontrar los artículos que contengan todos esos términos; EJ: <em>educación e investigación</em></li>
<li>Excluya una palabra, agregando adelante un  <strong>-</strong> o un <em>NOT</em>; EJ: <em>en línea -políticas</em> o <em>en línea NOT políticas</em></li>
<li>Busque una frase exacta agregándole comillas; EJ: <em>"publicación de acceso abierto"</em></li>
<li>Use los paréntesis para crear búsquedas más complejas EJ: <em>Archivo ((revista AND conferencia) NOT tesis)</em></li>
</ul>',
  'plugins.generic.lucene.message.indexOnline' => 'Índices con  {$numDocs} documentos online.',
  'plugins.generic.lucene.faceting.displayName' => 'Facetado de Lucene',
  'plugins.generic.lucene.faceting.description' => 'Plugin de bloque de Facetado para Lucene',
  'plugins.generic.lucene.faceting.title' => 'refinar su búsqueda',
  'plugins.generic.lucene.faceting.discipline' => 'Disciplina',
  'plugins.generic.lucene.faceting.subject' => 'Palabras clave',
  'plugins.generic.lucene.faceting.type' => 'Método/Aproximación',
  'plugins.generic.lucene.faceting.coverage' => 'Cobertura',
  'plugins.generic.lucene.faceting.journalTitle' => 'Revista',
  'plugins.generic.lucene.faceting.authors' => 'Autor',
  'plugins.generic.lucene.faceting.publicationDate' => 'Fecha de publicación',
  'plugins.generic.lucene.message.coreNotFound' => 'El core solicitado \'{$core}\' no fue encontrado en el servidor Solr. Está online?',
  'plugins.generic.lucene.message.indexingIncomplete' => 'Un error ha ocurrido mientras se indexaba: Procesados {$numProcessed} sin batch sobre {$batchCount} ({$numDeleted} documentos eliminados en este batch).',
  'plugins.generic.lucene.message.pullIndexingDisabled' => 'Pull indexind no está habilitado. Por favor habilítelo desde la confguración del plugin de Lucene.',
  'plugins.generic.lucene.message.searchServiceOffline' => 'Desafortunadamente el servicio de búsqueda de OJS está fuera de línea en este momento.',
  'plugins.generic.lucene.message.techAdminInformed' => 'El administrador técnico de esta revista ha sido informado sobre el problema.',
  'plugins.generic.lucene.message.webServiceError' => 'El servicio web de Lucene retornó un error.',
  'plugins.generic.lucene.rebuildIndex.pullResult' => '{$numMarked} artículos marcados para actualizar',
  'plugins.generic.lucene.results.didYouMean' => 'Usted quiso decir',
  'plugins.generic.lucene.results.similarDocuments' => 'documentos similares',
  'plugins.generic.lucene.settings.autosuggest' => 'Sugerencias automáticas (muestra una lista desplegable dinámica con las sugerencias de los términos de búsqueda mientras se ingresa la consulta)',
  'plugins.generic.lucene.settings.autosuggestTypeFaceting' => 'Verificar términos para resultados',
  'plugins.generic.lucene.settings.autosuggestTypeSuggester' => 'Usar diccionario global',
  'plugins.generic.lucene.settings.customRanking' => 'Ranlking personalizado (asignar pesos de rankeo individuales por sección del journal)',
  'plugins.generic.lucene.settings.faceting' => 'Facetado (muestra un cuadro de navegación con filtros adicionales para refinar su búsqueda)',
  'plugins.generic.lucene.settings.facetingSelectCategory' => 'Usted puede seleccionar categorías de facetado específicas (los metadatos correspondients deben haber sido seleccioandos para indexar en la configuración de la revista, paso 3.4)',
  'plugins.generic.lucene.settings.featureDescription' => 'El conector de Lucene provee varias características de búsqueda opcionales. La mayoría de estas características se habilitan por defecto, pero pueden ser desbilitadas o configuradas manualmente.',
  'plugins.generic.lucene.settings.highlighting' => 'Resaltado (muestra un breve extracto de cada uno de los textos completos de los artículos que contienen palabras claves consultadas)',
  'plugins.generic.lucene.settings.internalError' => 'Selección inválida.',
  'plugins.generic.lucene.settings.pullIndexing' => 'Pull indexing (esta es una característica avanzada, por favor lea el archivo README para más información)',
  'plugins.generic.lucene.settings.searchFeatures' => 'Configuración de característica de búsqueda',
  'plugins.generic.lucene.settings.simdocs' => 'Más-como-esto (muestra un enlace a "documentos similares" para cada resultado de búsqueda)',
  'plugins.generic.lucene.settings.solrServerSettings' => 'Configuración del servidor Solr',
  'plugins.generic.lucene.settings.spellcheck' => 'Sugerencias ortográficas alternaticas (muestra términos de búsqueda alternativos)',
  'plugins.generic.lucene.sectionForm.rankingBoost' => 'Peso de ranking personalizado',
  'plugins.generic.lucene.sectionForm.rankingBoostInvalid' => 'Por favor seleccinoa un peso de ranking personalizado válido.',
  'plugins.generic.lucene.sectionForm.ranking.never' => 'No mostrar nunca.',
  'plugins.generic.lucene.sectionForm.ranking.low' => 'Rankear más abajo.',
  'plugins.generic.lucene.sectionForm.ranking.normal' => 'Normal.',
  'plugins.generic.lucene.sectionForm.ranking.high' => 'Rankear más arriba.',
  'plugins.generic.lucene.settings.autosuggestTypeExplanation' => '<strong>Verifique términos para resultados</strong>: Sólo terminos de sugerencias que procudirán realmetne resultados de búsqueda.
Las sugerencias serán confirmadas via chequeo cruzado contra la revista actual y los términos ya ingresados en otros campos de búsqueda. <br/>
<strong>Utilice un diccionario global</strong>: Esto es más rápido, consume menos recursos en el servidor de búsqueda y por lo tanto escala mejor para grandes instalaciones. Sugerencias pueden contener términos irrelevantes sin embargo, por ej. de otras revistas o términos que no producen resultados de búsquedas.',
  'plugins.generic.lucene.sectionForm.rankingBoostInstructions' => 'El conector de búsqueda Lucene/Solr le permite ajustar el peso relativo de los artículos en la lista de resultados de una consulta de búsqueda. Confiturar el peso del ranking más alto (o más bajo) no coloca los artículos en esta sección arriba (o debajo) de otros artículos. Pero rankearán mejor (o peor) de lo que lo harían sin los ajustes realizados. Condigurar esta opción como "no mostrar nunca" excluirá completamente los artículos en esta sección de los resultados de búsqueda.',
); ?>