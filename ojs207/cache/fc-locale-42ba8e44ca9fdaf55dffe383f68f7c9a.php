<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin XML de usuarios/as',
  'plugins.importexport.users.description' => 'Importación y exportación de usuarios/as',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [journal_path] [optional flags]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [role_path1] [role_path2] ...

Opciones:
	continue_on_error: Si se indica no detendrá el proceso de importación de usuarios/as cuando ocurra un error

	send_notify: Si se indica mandará correos-e de notificación con los nombres de usuario/a y contraseña a los/as usuarios/as importados/as

Ejemplos:
	Importar usuarios a miRevista desde miarticulo.xml, sin parar cuando ocurra un error:
	{$scriptName} {$pluginName} import miarticulo.xml miRevista continue_on_error

	Exportar todos/as los/as usuarios/as de miRevista:
	{$scriptName} {$pluginName} export miExportacion.xml miRevista

	Exportar todas/os las/os usuarias/os registradas/os como revisoras/os, sólo con sus roles de revisión:
	{$scriptName} {$pluginName} export miExportacion.xml miRevista reviewer',
  'plugins.importexport.users.import.importUsers' => 'Importar usuarios/as',
  'plugins.importexport.users.import.instructions' => 'Seleccione un articulo XML que contenga los datos de usarias/os que quiere importar en la revista. Consulte la ayuda e la revista para saber los detalles del formato de este articulo.<br /><br />Tenga en cuenta que si el articulo importado contiene nombres de usuaria/o o direcciones de correo-e que ya existan en el sistema no se importarán los datos de esas/os usuarias/os y los nuevos roles a crear se asignarán a las/os usuarias/os existentes.',
  'plugins.importexport.users.import.failedToImportUser' => 'Error en la importación',
  'plugins.importexport.users.import.failedToImportRole' => 'Ha ocurrido un error asignado el rol al / a la usuario/a',
  'plugins.importexport.users.import.dataFile' => 'articulo de datos de usuario',
  'plugins.importexport.users.import.sendNotify' => 'Enviar un correo-e de notificación a cada uno/a de los/as usuarios/as importados/as con su nombre de usuario/a y su contraseña.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar importando el resto de usuarias/os si ocurre un error.',
  'plugins.importexport.users.import.noFileError' => '¡No se ha subido ningún articulo!',
  'plugins.importexport.users.import.usersWereImported' => 'Los/as siguientes usuarios/as fueron importados/as en el sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Han ocurrido errores durante la importación',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme que son las/os usuarias/os que le gustaría importar en el sistema',
  'plugins.importexport.users.unknownJournal' => 'Se ha especificado una ruta incorrecta para la revista "{$journalPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Exportar usuarias/os',
  'plugins.importexport.users.export.exportByRole' => 'Exportar por rol',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar todo',
  'plugins.importexport.users.export.errorsOccurred' => 'Ha ocurrido un error durante la exportación',
  'plugins.importexport.users.export.couldNotWriteFile' => 'No ha sido posible escribir al articulo "{$fileName}".',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'No es posible usar contraseñas codificadas con {$importHash}; OJS utiliza{$ojsHash}. Si decide continuar, necesitará volver a crear las contraseñas de los usuarios importados.',
); ?>