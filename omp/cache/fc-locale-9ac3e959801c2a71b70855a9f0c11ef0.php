<?php return array (
  'admin.hostedPresses' => 'Hosted Presses',
  'admin.settings.pressRedirect' => 'Press redirect',
  'admin.settings.pressRedirectInstructions' => 'Requests to the main site will be redirected to this press. This may be useful if the site is hosting only a single press, for example.',
  'admin.settings.noPressRedirect' => 'Do not redirect',
  'admin.languages.primaryLocaleInstructions' => 'This will be the default language for the site and any hosted presses.',
  'admin.languages.supportedLocalesInstructions' => 'Select all locales to support on the site. The selected locales will be available for use by all presses hosted on the site, and also appear in a language select menu to appear on each site page (which can be overridden on press-specific pages). If multiple locales are not selected, the language toggle menu will not appear and extended language settings will not be available to presses.',
  'admin.locale.maybeIncomplete' => '* Marked locales may be incomplete.',
  'admin.languages.confirmUninstall' => 'Are you sure you want to uninstall this locale? This may affect any hosted presses currently using the locale.',
  'admin.languages.installNewLocalesInstructions' => 'Select any additional locales to install support for in this system. Locales must be installed before they can be used by hosted presses. See the OMP documentation for information on adding support for new languages.',
  'admin.languages.noLocalesToDownload' => 'No locales are available for download.',
  'admin.languages.downloadFailed' => 'The locale download failed. The error message(s) below describe the failure.',
  'admin.languages.downloadUnavailable' => '<p>Downloading language packs from the Public Knowledge Project web server is not currently available because:</p>
	<ul>
		<li>Your server does not have or allow execution of the GNU "tar" utility</li>
		<li>OMP is unable to modify the locale registry file, typically "registry/locales.xml".</li>
	</ul>
<p>Language packs can be manually downloaded from the <a href="http://pkp.sfu.ca" target="_blank">PKP web site</a>.</p>',
  'admin.languages.confirmDisable' => 'Are you sure you want to disable this locale? This may affect any hosted presses currently using the locale.',
  'admin.systemVersion' => 'OMP Version',
  'admin.systemConfiguration' => 'OMP Configuration',
  'admin.presses.pressSettings' => 'Press Settings',
  'admin.presses.noneCreated' => 'No presses have been created.',
  'admin.contexts.confirmDelete' => 'Are you sure you want to permanently delete this press and all of its contents?',
  'admin.contexts.create' => 'Create Press',
  'admin.presses.createInstructions' => 'You will automatically be enrolled as the manager of this press. After creating a new press, you will be redirected to its settings wizard, to complete the initial press setup.',
  'admin.presses.urlWillBe' => 'The press URL will be {$sampleUrl}',
  'admin.contexts.form.titleRequired' => 'A title is required.',
  'admin.contexts.form.pathRequired' => 'A path is required.',
  'admin.contexts.form.pathAlphaNumeric' => 'The path can contain only alphanumeric characters, underscores, and hyphens, and must begin and end with an alphanumeric character.',
  'admin.contexts.form.pathExists' => 'The selected path is already in use by another press.',
  'admin.presses.enablePressInstructions' => 'Enable this press to appear publicly on the site',
  'admin.presses.pressDescription' => 'Press description',
  'admin.presses.addPress' => 'Add Press',
  'admin.overwriteConfigFileInstructions' => '<h4>NOTE!</div>
<p>The system could not automatically overwrite the configuration file. To apply your configuration changes you must open <tt>config.inc.php</tt> in a suitable text editor and replace its contents with the contents of the text field below.</p>',
); ?>