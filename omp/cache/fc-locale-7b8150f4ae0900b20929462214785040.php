<?php return array (
  'admin.hostedPresses' => 'Editoriales alojadas',
  'admin.settings.pressRedirect' => 'Redirección de editoriales',
  'admin.settings.pressRedirectInstructions' => 'Las solicitudes de la página principal se redirigirán a esta editorial. Esto puede ser útil si el sitio solo aloja una editorial, por ejemplo.',
  'admin.settings.noPressRedirect' => 'No redirigir',
  'admin.languages.primaryLocaleInstructions' => 'Este será el idioma por defecto de la página y de cualquier editorial alojada.',
  'admin.languages.supportedLocalesInstructions' => 'Seleccione todas las configuraciones regionales para que sean compatibles con el sitio. Las configuraciones locales seleccionadas estarán disponibles para su uso por todas las editoriales alojadas en el sitio, y también aparecerán en el menú de selección de idioma que figura en cada página del sitio (que puede invalidarse en páginas de editoriales específicas). Si no se seleccionan varias configuraciones locales, el menú de cambio de idioma no aparecerá y la configuración de idioma ampliada no estará disponible para las editoriales.',
  'admin.locale.maybeIncomplete' => '* Los locales marcados están incompletos.',
  'admin.languages.confirmUninstall' => '¿Está seguro/a de que desea desinstalar esta configuración regional? Esto puede afectar a cualquier editorial alojada que esté utilizando actualmente la configuración regional.',
  'admin.languages.installNewLocalesInstructions' => 'Seleccione cualquier configuración regional adicional para instalar soporte en este sistema. Las configuraciones regionales deben instalarse antes de que las editoriales alojadas puedan usarlas. Véase la documentación de OMP para obtener información acerca de cómo añadir soporte para nuevos idiomas.',
  'admin.languages.noLocalesToDownload' => 'No hay locales disponibles para su descarga.',
  'admin.languages.downloadFailed' => 'No se pudo realizar la descarga de la configuración regional. El(los) siguiente(s) mensaje(s) de error describe(n) el error en la descarga.',
  'admin.languages.downloadUnavailable' => '<p>La descarga de paquetes de idiomas del servidor web de Public Knowledge Project actualmente no está disponible porque:</p>
	<ul>
		<li>Su servidor no dispone o no permite la ejecución de la aplicación "tar" de GNU.</li>
		<li>OMP no puede modificar el archivo del registro de la configuración regional, por lo general llamado "registry/locales.xml".</li>
	</ul>
<p>Los paquetes de idioma pueden descargarse manualmente del <a href="http://pkp.sfu.ca" target="_blank">sitio web de PKP</a>.</p>',
  'admin.languages.confirmDisable' => '¿Está seguro/a de que desea desactivar esta configuración regional? Esto puede afectar a cualquier editorial alojada que esté utilizando actualmente la configuración regional.',
  'admin.systemVersion' => 'Versión OMP',
  'admin.systemConfiguration' => 'Configuración OMP',
  'admin.presses.pressSettings' => 'Ajustes editorial',
  'admin.presses.noneCreated' => 'No se han creado editoriales.',
  'admin.contexts.confirmDelete' => '¿Está seguro/a de que desea eliminar de forma permanente esta editorial y todo su contenido?',
  'admin.contexts.create' => 'Crear editorial',
  'admin.presses.createInstructions' => 'Se le asignará automáticamente el rol del gestor/a de esta editorial. Después de crear una nueva editorial, será redirigido/a al asistente de configuración para completar la configuración inicial de la editorial.',
  'admin.presses.urlWillBe' => 'La URL de la editorial será {$sampleUrl}',
  'admin.contexts.form.titleRequired' => 'Es necesario introducir el título.',
  'admin.contexts.form.pathRequired' => 'Inserte una ruta.',
  'admin.contexts.form.pathAlphaNumeric' => 'La ruta sólo puede contener caracteres alfanuméricos, guiones y guiones bajos, y debe empezar y terminar con un carácter alfanumérico.',
  'admin.contexts.form.pathExists' => 'La ruta seleccionada ya está siendo utilizada por otra editorial.',
  'admin.presses.enablePressInstructions' => 'Habilitar que esta editorial aparezca públicamente en el sitio',
  'admin.presses.pressDescription' => 'Detalles de la editorial',
  'admin.presses.addPress' => 'Añadir editorial',
  'admin.overwriteConfigFileInstructions' => '<h4>Aviso</h4>
<p>El sistema no puede sobrescribir automáticamente el archivo de configuración. Para aplicar los cambios de la configuración es necesario abrir <tt>config.inc.php</tt> en un editor de texto adecuado y reemplazar su contenido por los del campo de texto que figuran a continuación.</p>',
); ?>