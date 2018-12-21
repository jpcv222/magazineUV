<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin XML de usuarios/as',
  'plugins.importexport.users.description' => 'Importación y exportación de usuarios/as',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...',
  'plugins.importexport.users.import.importUsers' => 'Importar usuarios/as',
  'plugins.importexport.users.import.instructions' => 'Seleccione un fichero XML que contenga los datos de usarias/os que quiere importar en la revista. Consulte la ayuda e la revista para saber los detalles del formato de este fichero.<br /><br />Tenga en cuenta que si el fichero importado contiene nombres de usuaria/o o direcciones de correo-e que ya existan en el sistema no se importarán los datos de esas/os usuarias/os y los nuevos roles a crear se asignarán a las/os usuarias/os existentes.',
  'plugins.importexport.users.import.dataFile' => 'Fichero de datos de usuaria/o',
  'plugins.importexport.users.import.sendNotify' => 'Enviar un correo-e de notificación a cada uno/a de los/as usuarios/as importados/as con su nombre de usuario/a y su contraseña.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar importando el resto de usuarias/os si ocurre un error.',
  'plugins.importexport.users.import.usersWereImported' => 'Los/as siguientes usuarios/as fueron importados/as en el sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Han ocurrido errores durante la importación',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme que son las/os usuarias/os que le gustaría importar en el sistema',
  'plugins.importexport.users.unknownPress' => 'Se ha especificado una ruta incorrecta para la revista "{$pressPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Exportar usuarias/os',
  'plugins.importexport.users.export.exportByRole' => 'Exportar por rol',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar todo',
  'plugins.importexport.users.export.errorsOccurred' => 'Ha ocurrido un error durante la exportación',
  'plugins.importexport.users.export.couldNotWriteFile' => 'No ha sido posible escribir al fichero "{$fileName}".',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'No es posible usar contraseñas codificadas con {$importHash}; OMP utiliza {$ompHash}. Si decide continuar, necesitará volver a crear las contraseñas de los usuarios importados.',
); ?>