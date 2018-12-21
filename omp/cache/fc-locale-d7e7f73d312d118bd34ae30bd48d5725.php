<?php return array (
  'plugins.importexport.users.displayName' => 'Complemeto XML de usuarios',
  'plugins.importexport.users.description' => 'Importación y exportación de usuarios',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [press_path] [optional flags]
	export [xmlFileName] [press_path]
	export [xmlFileName] [press_path] [role_path1] [role_path2] ...

Banderas opcionales:
	continue_on_error: Si se ha indicado, no detengas el proceso de importación de usuarios si se produce un error.

	send_notify: Si se ha indicado, manda correos electrónicos de notificación con los nombres de usuario y contraseña a los usuarios importados

Ejemplos:
	Importar usuarios a miEditorial desde miFichero.xml, sin parar cuando ocurra un error:
	{$scriptName} {$pluginName} import miFichero.xml miEditorial continue_on_error

	Exportar todos los usuarios de miRevista:
	{$scriptName} {$pluginName} export miExportacion.xml miEditorial

	Exportar todos los usuarios registrados como revisores, sólo con sus funciones de revisión:
	{$scriptName} {$pluginName} export miExportacion.xml revisor de miEditorial',
  'plugins.importexport.users.import.importUsers' => 'Importar usuarios',
  'plugins.importexport.users.import.instructions' => 'Seleccione un fichero XML que contenga los datos de los usarios que quiere importar a la editorial. Consulte la ayuda de la editorial para conocer los detalles del formato de este fichero.<br /><br />Tenga en cuenta que si el fichero importado contiene nombres de usuario o direcciones de correo electrónico que ya existan en el sistema, no se importarán los datos de esos usuarios y las nuevas funciones que se creen se asignarán a los usuarios existentes.',
  'plugins.importexport.users.import.dataFile' => 'Fichero de datos de usuario',
  'plugins.importexport.users.import.sendNotify' => 'Enviar un correo electrónico de notificación a cada usuarios importados con su nombre de usuario y contraseña.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar importando el resto de usuarios si se produce un error.',
  'plugins.importexport.users.import.usersWereImported' => 'Los siguientes usuarios se han importado correctamente en el sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Se han producido errores durante la importación',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme que estos son los usuarios que desea importar en el sistema',
  'plugins.importexport.users.unknownPress' => 'Se ha especificado una ruta desconocida "{$pressPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Exportar usuarios',
  'plugins.importexport.users.export.exportByRole' => 'Exportar por función',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar todo',
  'plugins.importexport.users.export.errorsOccurred' => 'Se han producido errores durante la exportación',
  'plugins.importexport.users.export.couldNotWriteFile' => 'No ha sido posible escribir al fichero "{$fileName}".',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'No es posible usar contraseñas codificadas con {$importHash}; OMP está configurado para utilizar {$ompHash}. Si decide continuar, necesitará restablecer las contraseñas de los usuarios importados.',
); ?>