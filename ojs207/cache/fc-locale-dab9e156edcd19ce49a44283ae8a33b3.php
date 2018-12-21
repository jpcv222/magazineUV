<?php return array (
  'plugins.importexport.datacite.displayName' => 'Plugin de Exportación/Registro DataCite.',
  'plugins.importexport.datacite.description' => 'Exporta o registra números, artículos, versiones galeradas y metadatos de artículos complementarios en el formato DataCite.',
  'plugins.importexport.datacite.intro' => 'Si quiere registrar los DOI con DataCite, por favor contacte con el administrador a través de  <a href="http://datacite.org/contact" target="_blank">la página de
 		DataCite</a>, que va a hacer referencia hacia su usuario de DataCite local. Una vez que haya
		establecido una relación con la organización Miembro, se le proveerá 
		con acceso al servicio DataCite para almacenar identificadores persistentes (DOIs)
		y registrar los metadatos asociados.Si no posee sus nombre de usuario y clave propios, puede exportar  en el formato XML DataCite pero no puede registrar sus DOIs con DataCite desde dentro de OJS.
		Por favor note que la clave será guardada como texto plano y no se encriptará debido a los requerimientos del servicio de registro de DataCite.',
  'plugins.importexport.datacite.settings.description' => 'Por favor <a href="{$settingsUrl}">configure</a> el plugin de exportación DataCite antes de utilizarlo por primera vez.',
  'plugins.importexport.datacite.settings.form.description' => 'Por favor configure el plugin de exportación DataCite:',
  'plugins.importexport.datacite.settings.form.username' => 'Nombre de usuario (símbolo)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Por favor introduzca el nombre de usuario (símbolo) que obtuvo desde DataCite. El nombre de usuario no debería contener puntos.',
  'plugins.importexport.datacite.export.suppFiles' => 'Exportar artícuos complementarios específicos',
  'plugins.importexport.datacite.export.selectSuppFile' => 'Seleccione Artículos complementarios',
  'plugins.importexport.datacite.export.noSuppFiles' => 'Sin archivos complementarios que poseen DOIs asignados por el momento',
  'plugins.importexport.datacite.export.error.suppFileNotFound' => 'Ningún archivo complementario se ha relacionado con el ID específicado: {$param}.',
  'plugins.importexport.datacite.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...',
); ?>