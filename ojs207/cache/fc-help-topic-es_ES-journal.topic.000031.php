<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000031',
        'locale' => 'es_ES',
        'title' => 'Importar/Exportar datos',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.importExport',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>La función Importar/Exportar datos, disponible en Gestión de la revista, permite al gestor/a de la revista introducir y extraer datos de OJS.</p><p>La importación/exportación de datos se implementa mediante módulos, uno diferente por cada tipo y formato de datos. Para más información, consulte la documentación de cada módulo, ubicada en el directorio de módulos de OJS.</p><p>OJS incluye cinco módulos para importar/exportar que se explican más abajo.</p><p>La función de importar y exportar también está disponible como herramienta de línea de comandos. Para más información, ver tools/importExport.php.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Módulo XML usuarios/as',
      ),
      'value' => '<p>El módulo XML usuarios/as sirve para importar y exportar usuarios/as y sus roles. Vea XML DTD en "plugins/importexport/users/users.dtd" para más información.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Módulo de exportación de artículos de Erudit',
      ),
      'value' => '<p>El módulo de exportación de artículos de Erudit implementa una exportación individual de artículos para una indexación del texto completo mediante XML DTD de Erudit. Vea <a href="http://www.erudit.org">http://www.erudit.org</a> para más información.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Módulo XML artículos y números',
      ),
      'value' => '<p>El módulo XML artículos y números es el método principal para importar y exportar por lotes. Puede usarse para importar y exportar artículos y números de manera individual o colectiva, incluidos los metadatos de forma íntegra. Para más información, vea XML DTD en "plugins/importexport/native/native.dtd".</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Módulo de exportación XML PubMed',
      ),
      'value' => '<p>El módulo de exportación XML PubMed proporciona un módulo de importación/exportación para crear información bibliográfica para los artículos del número actual según el estándar de PubMed de publicación de datos en formato XML para indexarlos en NLM PubMed/MEDLINE. Los detalles sobre el formato XML y los requisitos de datos se encuentran disponibles en: <a href="http://www.ncbi.nlm.nih.gov/entrez/query/static/spec.html">http://www.ncbi.nlm.nih.gov/entrez/query/static/spec.html</a>. Se puede encontrar más información sobre este módulo en "plugins/importexport/pubmed".</p>',
    ),
    5 => 
    array (
      'attributes' => 
      array (
        'title' => 'Módulo de exportación XML Crossref',
      ),
      'value' => '<p>El módulo de exportación XML Crossref proporciona un módulo de importación/exportación para crear información de metadatos para artículos y números para indexarlos en CrossRef. Los detalles sobre el formato XML y los requisitos de datos se encuentran disponibles en: <a href="http://www.crossref.org/schema">http://www.crossref.org/schema</a>. Se puede encontrar más información sobre este módulo en "plugins/importexport/crossref".</p>',
    ),
  ),
); ?>