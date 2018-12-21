<?php return array (
  'plugins.importexport.medra.displayName' => 'Plugin de Exportación/Registro mEDRA.',
  'plugins.importexport.medra.description' => 'Exporta números, artículos y metadatos en Onix para formato DOI (O4DOI) y registra los DOI con la agencia de registro mEDRA.',
  'plugins.importexport.medra.intro' => 'Si quiere registrar DOIs con mEDRA, por favor siga los pasos en la
		<a href="http://www.medra.org/en/guide.htm" target="_blank">página de mEDRA </a>
		para recibir un nombre de usuario y una clave.Si no tiene su nombre de usuario y su clave propios, seguirá siendo capaz de exportar  en el formato XML de mEDRA (Onix para DOI)
		pero no podrá registrar sus  DOIs en mEDRA desde OJS. 
		Por favor note que la clave no se almacenara en la base de datos de forma encriptada debido a los requerimientos del servicio de registro de mEDRA.',
  'plugins.importexport.medra.settings.description' => 'Por favor <a href="{$settingsUrl}">configure</a> el plugin de exportación mEDRA  antes de usarlo por primera vez.',
  'plugins.importexport.medra.settings.form.description' => 'Por favor configura el plugin de exportación mEDRA',
  'plugins.importexport.medra.settings.form.username' => 'Nombre de Usuario',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Por favor introduzca un nombre de usuario mEDRA. El nombre de usario no debería contenter puntos.',
  'plugins.importexport.medra.settings.form.registrantName' => 'El nombre de la institución registrada en mEDRA',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Por favor introduzca la institución que es registrada en mEDRA.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Persona para ser contactada por mEDRA en caso de requisitos técnicos:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Institución:',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Por favor instrduzca la institución que es responsable técnica de la exportación DOI (e.g. la institución que hostea su servidor web).',
  'plugins.importexport.medra.settings.form.fromName' => 'Persona de Contacto:',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Por favor instroduzca una persona de contacto de caracter técnico.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'Email:',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Por favor intruduzca un mail de contacto técnico válido.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Por favor introduzca el país para ser informado como "país de publicación" en mEDRA .',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Por favor escoja si prefiere exportar los números como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'trabajos\' o \'manifestaciones\'</a>.',
  'plugins.importexport.medra.settings.form.work' => 'trabajo',
  'plugins.importexport.medra.settings.form.manifestation' => 'manifestación',
  'plugins.importexport.medra.reset' => 'Resetear',
  'plugins.importexport.medra.resetDescription' => 'Click en este botón si quiere tratar este objeto como si nunca antes lo hubiese registrado (ej: cuando mEDRA envía un mensaje de error por email en su primer registro). No haga click aquí cuando reciba un mensaje de error después de una carga que falló.',
  'plugins.importexport.medra.workOrProduct' => 'NB: los DOIs asignados a los artículos van a ser exportados a  mEDRA como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'trabajos\'</a>. DOIs asignados a las versiones galeradas van a ser exportados como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'manifestaciones\'</a>.',
  'plugins.importexport.medra.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>