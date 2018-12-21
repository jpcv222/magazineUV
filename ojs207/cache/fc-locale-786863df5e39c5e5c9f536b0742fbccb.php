<?php return array (
  'plugins.importexport.duracloud.displayName' => 'Plugin de Importación/Exportación DuraCloud.',
  'plugins.importexport.duracloud.description' => 'Guarda y Recupera los números usando un servicio externo de DuraCloud para almacenaje.',
  'plugins.importexport.duracloud.configuration' => 'Configuración DuraCloud.',
  'plugins.importexport.duracloud.configuration.unconfigured.description' => 'No esta autentificado con una cuenta de DuraCloud. Por favor introduzca sus datos debajo. Estos no serán guardados después de su sesión actual.',
  'plugins.importexport.duracloud.configuration.configured.description' => 'Usted esta autentifacado en DuraCloud en  <a href="{$url}"> $escapedUrl}</a> con el nombre de usuario:"{$username}".  Estos datos no quedarán guardados después de esta sesión. Para borrar sus datos inmediatamente, click en el  <a href="{$logoutUrl}">log out</a> the DuraCloud.',
  'plugins.importexport.duracloud.configuration.urlRequired' => 'Una URL base de DuraCloud es requerida.',
  'plugins.importexport.duracloud.configuration.usernameRequired' => 'Un nombre de usuario de DuraCloud es requerido.',
  'plugins.importexport.duracloud.configuration.passwordRequired' => 'Una clave de DuraCloud es requerida.',
  'plugins.importexport.duracloud.configuration.credentialsInvalid' => 'No se puede conectar a la instancia de DuraCloud específica con los datos especificados. Por favor revíselos y vuelva a intentar.',
  'plugins.importexport.duracloud.configuration.space' => 'Espacio',
  'plugins.importexport.duracloud.cliUsage' => 'Uso: {$scriptName} {$pluginName}
	[base_url] [username] [password]
	[ojs_journal_path] [duracloud_space_id] [command] ...
Comandos:
	importIssues [user_name] [issueId1] [issueId2] ...
	exportIssues [issueId1] [issueId2] ...
Ejemplo:
	php {$scriptName} {$pluginName} \\
		https://pkp.duracloud.org myUsername myPassword \\
		demojournal testspace \\
		exportIssues 1',
  'plugins.importexport.duracloud.export' => 'Exportar Datos.',
  'plugins.importexport.duracloud.export.issues' => 'Exportar Números.',
  'plugins.importexport.duracloud.export.results' => 'Exportar Resultados.',
  'plugins.importexport.duracloud.export.results.description' => 'Aquí estan los resultados de la exportación para cada uno de los números escogidos.',
  'plugins.importexport.duracloud.export.results.success' => '{$issueIdentification}fue exportado con éxito a:<a href="{$targetLocation}">{$targetLocationEscaped}</a>.',
  'plugins.importexport.duracloud.export.results.failure' => '{$issueIdentification} no pudo ser exportado.',
  'plugins.importexport.duracloud.import.results' => 'Resultados de importación',
  'plugins.importexport.duracloud.import.results.description' => 'Aquí están los resultados para la acción de importar cada uno de los números elegidos.',
  'plugins.importexport.duracloud.import.results.success' => '{$issueIdentification} fue importado con éxito desde "{$contentId}".',
  'plugins.importexport.duracloud.import.results.failure' => '{$contentId} no pudo ser importado.',
  'plugins.importexport.duracloud.selectIssue' => 'Número Escogido.',
  'plugins.importexport.duracloud.import.issues' => 'Número Importado',
  'plugins.importexport.duracloud.import.description' => 'Este plugin soporta la importación de datos basada en la definición de tipos de documento (DTD) nativa. Los nodos soportados son: &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt;, y &lt;issues&gt;.',
  'plugins.importexport.duracloud.import.error' => 'Error de importación',
  'plugins.importexport.duracloud.import.error.description' => 'Uno o más errores ocurrieron durante la importación. Por favor revise y asegúrese que el formato del archivo importado, está de acuerdo con la especificación. Los detalles específicos del error de importación se listan debajo.',
  'plugins.importexport.duracloud.cliError' => 'ERROR:',
  'plugins.importexport.duracloud.export.error.couldNotWrite' => 'No se pudo escribir en el archivo "{$fileName}".',
  'plugins.importexport.duracloud.import.success' => 'Importación exitosa',
  'plugins.importexport.duracloud.import.success.description' => 'La importación fue exitosa. Los items importados con éxito se listan a continuación.',
); ?>