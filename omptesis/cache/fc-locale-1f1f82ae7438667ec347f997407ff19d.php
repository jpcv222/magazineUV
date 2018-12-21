<?php return array (
  'plugins.importexport.csv.displayName' => 'Tab Delimited Content Import Plugin',
  'plugins.importexport.csv.description' => 'Import submissions into presses from tab delimited data.',
  'plugins.importexport.csv.cliOnly' => '<p>This plugin currently supports command-line operation only. Execute...
			<pre>php tools/importExport.php CSVImportExportPlugin</pre>
			...for more information.</p>',
  'plugins.importexport.csv.cliUsage' => 'Command-line tool for importing CSV data into OMP
			Usage:
			{$scriptName} [--dry-run] fileName.csv username
			The --dry-run option can be used to test without making changes.
			Specify the username you wish to assign the submissions to.',
  'plugins.importexport.csv.fileDoesNotExist' => 'The file "{$filename}" does not exist.  Exiting.',
  'plugins.importexport.csv.unknownUser' => 'Unknown User: "{$username}".  Exiting.',
  'plugins.importexport.csv.unknownLocale' => 'Unknown Locale: "{$locale}".  Skipping.',
  'plugins.importexport.csv.unknownPress' => 'Unknown Press: "{$pressPath}".  Skipping.',
  'plugins.importexport.csv.noGenre' => 'There is no manuscript genre.  Exiting.',
  'plugins.importexport.csv.noAuthorGroup' => 'There is no default author group in the press {$press}.  Skipping this submission.',
  'plugins.importexport.csv.noSeries' => 'The series path {$seriesPath} does not exist.  Unable to add it to this submission.',
  'plugins.importexport.csv.import.submission' => 'Submission: \'{$title}\' successfully imported.',
  'plugins.importexport.csv.import.success.description' => 'The import was successful. Successfully-imported items are listed below.',
); ?>